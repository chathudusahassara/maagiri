<template>
    <div class="relative w-full mx-auto px-2 md:px-4 hidden md:block">
  
      <div 
        class="flex justify-center items-end gap-4 overflow-hidden min-h-[640px] carousel-container pb-2 touch-pan-x"
        @touchstart="handleTouchStart"
        @touchmove="handleTouchMove"
        @touchend="handleTouchEnd"
      >
        <div
          v-for="(card, index) in getVisibleItems()"
          :key="`${card.id}-${card.index}`"
          @click="() => toggleCard(card.index)"
          class="transition-all duration-500 transform cursor-pointer rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-xl carousel-card flex-shrink-0"
          :class="[
            card.position === 0 ? 'w-96 h-[620px] z-20 scale-100 shadow-md' :
            'w-72 h-[500px] z-10 scale-95 opacity-80'
          ]"
          :data-position="card.position"
        >
          <transition name="fade" mode="out-in">
            <div v-if="card.position === 0" class="bg-white h-full" :key="'active-' + card.id">
              <img :src="card.image" alt="" class="w-full h-48 object-cover" />
              <div class="p-8 text-center">
                <p class="text-sm text-gray-500 mb-2">{{ card.category }}</p>
                <h3 class="text-2xl font-light tracking-widest mb-1">{{ card.title }}</h3>
                <p class="text-sm text-gray-600 mb-5">{{ card.subtitle }}</p>
                <div class="w-8 h-px bg-black mx-auto mb-6"></div>
                <p class="text-sm text-gray-600 leading-relaxed mb-5">{{ card.description }}</p>
                <div v-if="card.has_menu">
                 <a href="https://maagirihotel.com/menu/private_dining_menu.pdf" class=" w-full mb-8 font-bold text-black block text-center">View Menu - Mvr 600/-</a>
                </div>
                <a href="https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0" class="bg-black text-white px-6 py-2 text-sm tracking-wide hover:bg-gray-800 transition">Book with us</a>
              </div>
            </div>
  
            <div v-else class="bg-white h-full" :key="'inactive-' + card.id">
              <img :src="card.image" alt="" class="w-full h-72 object-cover" />
              <div class="p-6 text-center">
                <p class="text-sm text-gray-500 mb-2">{{ card.category }}</p>
                <h3 class="text-lg tracking-widest mb-1">{{ card.title }}</h3>
                <p class="text-sm text-gray-600 mb-5">{{ card.subtitle }}</p>
                <div class="w-6 h-px bg-gray-300 mx-auto"></div>
              </div>
            </div>
          </transition>
        </div>
      </div>
  
      <div class="hidden md:flex items-center justify-center mt-8 gap-4">
        <button @click="prevSlide" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition">←</button>
        <span class="text-sm text-gray-500">{{ selectedCard + 1 }} / {{ cards.length }}</span>
        <button @click="nextSlide" class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition">→</button>
      </div>

      
    </div>


         <!-- Mobile Version -->
     <div class="md:hidden block">   
       <div 
         class="flex overflow-x-auto gap-4 pb-4 px-4 scrollbar-hide" 
         ref="mobileContainer"
         @scroll="handleMobileScroll"
       >
         <div 
           v-for="(card, index) in cards" 
           :key="`mobile-${card.id}`" 
           class="flex-shrink-0 w-[320px] bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col"
         >
           <img :src="card.image" alt="" class="w-full h-48 object-cover rounded-t-xl" />
           <div class="p-4 text-center flex flex-col flex-1">
             <p class="text-sm text-gray-500 mb-2">{{ card.category }}</p>
             <h3 class="text-lg font-semibold mb-2">{{ card.title }}</h3>
             <p class="text-sm text-gray-600 mb-4">{{ card.subtitle }}</p>
             <p class="text-sm text-gray-600 mb-4 leading-relaxed flex-grow">{{ card.description }}</p>
             
             <div v-if="card.has_menu" class="mb-3">
               <a href="https://maagirihotel.com/menu/private_dining_menu.pdf" class="text-sm font-bold text-black block">Menu</a>
             </div>
             
             <a href="https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0" class="bg-black text-white px-4 py-2 text-sm rounded-md hover:bg-gray-800 transition block mt-auto">
               Book with us
             </a>
                        </div>
           </div>
         </div>
         
         <!-- Mobile Pagination -->
         <div class="flex justify-center items-center gap-2 mt-4 mb-2">
           <div class="flex gap-1">
             <div 
               v-for="(card, index) in cards" 
               :key="`dot-${index}`"
               class="w-2 h-2 rounded-full transition-all duration-300"
               :class="currentMobileCard === index ? 'bg-black' : 'bg-gray-300'"
             ></div>
           </div>
         </div>
         <div class="text-xs text-gray-500 text-center">{{ currentMobileCard + 1 }} / {{ cards.length }}</div>
       </div>
    
  </template>
  
  <script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  experiences: {
    type: Array,
    required: true,
  },
})


  
  const cards = props.experiences.map((experience, index) => ({
    id: index + 1,
    image: experience.image,
    category: experience.category,
    title: experience.title,
    subtitle: experience.subtitle,
    description: experience.description,
    has_menu: experience.has_menu,
  }))   
  
  
  
  const selectedCard = ref(2)
  const totalSlides = cards.length
  
  // Touch gesture variables
  const touchStartX = ref(0)
  const touchEndX = ref(0)
  const isDragging = ref(false)
  
  // Mobile pagination
  const mobileContainer = ref(null)
  const currentMobileCard = ref(0)
  
  const nextSlide = () => {
    selectedCard.value = (selectedCard.value + 1) % totalSlides
  }
  
  const prevSlide = () => {
    selectedCard.value = (selectedCard.value - 1 + totalSlides) % totalSlides
  }
  
  const toggleCard = (index) => {
    selectedCard.value = index
    
    // Add smooth scrolling effect to center the clicked card
    setTimeout(() => {
      const container = document.querySelector('.carousel-container')
      const cards = container?.querySelectorAll('.carousel-card')
      
      if (container && cards) {
        // Find the card that was clicked (position 0 after selection)
        const centerCard = Array.from(cards).find(card => 
          card.getAttribute('data-position') === '0'
        )
        
        if (centerCard) {
          // Add a subtle pulse effect to the clicked card
          centerCard.style.transform = 'scale(1.02)'
          setTimeout(() => {
            centerCard.style.transform = ''
          }, 200)
          
          // Calculate scroll position to center the clicked card
          const containerRect = container.getBoundingClientRect()
          const cardRect = centerCard.getBoundingClientRect()
          const scrollLeft = container.scrollLeft + (cardRect.left - containerRect.left) - 
                           (containerRect.width - cardRect.width) / 2
          
          // Ensure scroll position is within bounds
          const maxScroll = container.scrollWidth - container.clientWidth
          const finalScrollLeft = Math.max(0, Math.min(scrollLeft, maxScroll))
          
          container.scrollTo({
            left: finalScrollLeft,
            behavior: 'smooth'
          })
        }
      }
    }, 150)
  }
  
  // Touch gesture handlers
  const handleTouchStart = (e) => {
    touchStartX.value = e.touches[0].clientX
    touchEndX.value = e.touches[0].clientX // Initialize end position
    isDragging.value = true
  }
  
  const handleTouchMove = (e) => {
    if (!isDragging.value) return
    
    const currentX = e.touches[0].clientX
    const currentY = e.touches[0].clientY
    const deltaX = Math.abs(currentX - touchStartX.value)
    const deltaY = Math.abs(currentY - e.touches[0].clientY)
    
    // Only prevent default if it's clearly a horizontal swipe
    if (deltaX > deltaY && deltaX > 10) {
      e.preventDefault()
    }
  }
  
  const handleTouchEnd = (e) => {
    if (!isDragging.value) return
    
    touchEndX.value = e.changedTouches[0].clientX
    isDragging.value = false
    
    const swipeDistance = touchStartX.value - touchEndX.value
    const minSwipeDistance = 50 // Minimum distance for a swipe
    
    // Only trigger swipe if it's a clear horizontal gesture
    if (Math.abs(swipeDistance) > minSwipeDistance) {
      const deltaX = Math.abs(swipeDistance)
      const deltaY = Math.abs(e.changedTouches[0].clientY - e.touches[0].clientY)
      
      // Only trigger if horizontal movement is significantly greater than vertical
      if (deltaX > deltaY * 2) {
        if (swipeDistance > 0) {
          // Swiped left - next slide
          nextSlide()
        } else {
          // Swiped right - previous slide
          prevSlide()
        }
      }
    }
  }
  
  const getVisibleItems = () => {
    const visible = []
    
    // Always show 5 cards with the selected card in the middle
    for (let i = -2; i <= 2; i++) {
      const index = (selectedCard.value + i + totalSlides) % totalSlides
      visible.push({
        ...cards[index],
        position: i,
        index,
      })
    }
    return visible
  }
  
  const getCurrentCardIndex = () => {
    if (!mobileContainer.value) return 0
    
    const container = mobileContainer.value
    const cardWidth = 320 + 16 // card width + gap
    const scrollLeft = container.scrollLeft
    const containerWidth = container.clientWidth
    
    // Calculate which card is most centered
    const centerPosition = scrollLeft + (containerWidth / 2)
    const cardIndex = Math.round(centerPosition / cardWidth)
    
    return Math.max(0, Math.min(cardIndex, cards.length - 1))
  }
  
  const handleMobileScroll = () => {
    if (mobileContainer.value) {
      currentMobileCard.value = getCurrentCardIndex()
    }
  }
  </script>
  
  <style scoped>
  .fade-enter-active, .fade-leave-active {
    transition: all 0.4s ease;
  }
  .fade-enter-from, .fade-leave-to {
    opacity: 0;
    transform: scale(0.95);
  }
  </style>