<template>
    <MainLayout>
        <div class="min-h-screen bg-white">
    <!-- Hero Section with Background Image -->
    <div class="relative h-[530px] bg-cover bg-center">
        <img src="https://maagirihotel.com/storage/d/kmt15HmSSaDhuL0WySo1hcPx4BuobF0xYxIT1WWm.jpg" alt="Restaurant" class="w-full h-full object-cover">
        <div class="absolute w-11/12 md:w-7/12 bg-white bg-opacity-70 backdrop-blur-sm left-0 right-0 mx-auto -bottom-16">
            <div class="px-8 py-12">
                <p class=" text-gray-600">DINING</p>
                <h1 class="md:text-4xl text-2xl font-freigtNeo pt-6">Your Custom Tailored Stay</h1>
            </div>
            <div id="pageNavBar" class="px-8 border-t-2 border-mggold-100 ">
                <ul class="flex gap-8 py-5 font-semibold text-mggrey-200">
                    <li v-for="restaurant in restaurants" :key="restaurant.name">
                        <a 
                            :href="restaurant.path" 
                            :class="{ 'active': isActive(restaurant) }"
                        >
                            {{ restaurant.name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class=" bg-mgblack-100 text-white pt-16 pb-24">
      <div class="container mx-auto px-4 text-center pt-28">
        <h2 class="text-4xl mb-5 font-freigtNeo">{{ pageContent.name }}</h2>
        <div class="orange-brand"></div>

        
        <div class="max-w-4xl mx-auto mb-12 text-mggrey-100">
            <div id="pageContentBody" v-html="pageContent.body"></div>
        </div>

        <div class=" flex justify-center mb-12">
            <ul class="flex gap-8 text-mggold-100">
                <li><a class="hover:underline" :href="pageContent.file">MENU</a></li>
                <li><a class="hover:underline" href="#openingHours">OPENING HOURS</a></li>
            </ul>
        </div>

        <!-- Booking Section -->
        <BookingBar />

      </div>
      
    </div>

    <section id="gallerySection" class=" -mt-16">
        <!-- Image Gallery -->
        <div class="relative max-w-5xl mx-auto">
          <div class="relative overflow-hidden md:rounded-lg">
            <img 
              :src="'/storage/d/'+images[currentImageIndex]" 
              :alt="`Coffee Curve Image ${currentImageIndex + 1}`"
              class="w-full md:h-[650px] h-[400px] object-cover"
            />
            
            <!-- Navigation Arrows -->
            <button 
              @click="previousImage"
              class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white p-2 rounded-full transition-all"
            >
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>
            
            <button 
              @click="nextImage"
              class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white p-2 rounded-full transition-all"
            >
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>
        </div>


        <div id="openingHours" class=" text-center mt-8">
            <h2 class="text-2xl font-freigtNeo">Opening Hours</h2>
            <div class="flex justify-center mt-3">
                <ul class="md:flex gap-8 text-mggrey-200">
                    <li>Monday - Friday / 10:00 AM - 10:00 PM</li>
                    <li>Saturday - Sunday / 10:00 AM - 10:00 PM</li>
                </ul>
            </div>
        </div>

        <!-- Enquire Button -->
        <div class="mt-12 flex justify-center">
          <button @click="openWhatsapp" class="bg-mggold-100 hover:bg-mggold-100 text-white px-8 py-3 rounded-full transition-colors">
            ENQUIRE
          </button>
        </div>
    </section>
    
  </div>
    </MainLayout>
</template>
<script setup>
import { ref, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import MainLayout from '@/Layouts/MainLayout.vue';
import BookingBar from '@/Pages/BookingBar.vue';

const props = defineProps({
    pageContent: Object,
    pageMedia: Array
})

// Restaurant navigation with dynamic active state
const restaurants = [
    { name: 'Coffee Curve', path: '/dining/coffee_curve' },
    { name: 'Faru', path: '/dining/faru' },
    { name: 'Peak', path: '/dining/peak' }
]


const page = usePage()

// Get current restaurant based on route
const currentRestaurant = computed(() => {
    const currentPath = page.url
    return restaurants.find(restaurant => 
        currentPath.includes(restaurant.path.replace('/dining/', ''))
    ) || restaurants[0]
})

// Check if a restaurant is active
const isActive = (restaurant) => {
    return currentRestaurant.value.name === restaurant.name
}

// Booking form data
const selectedRoom = ref('1')
const selectedGuests = ref('1')
const dateRange = ref('13/07/2025 - 14/07/2025')

// Image gallery
const images = props.pageMedia.map(media => media.file)

const currentImageIndex = ref(0)
const currentImage = computed(() => images[currentImageIndex.value])

const nextImage = () => {
  currentImageIndex.value = (currentImageIndex.value + 1) % images.length
}

const previousImage = () => {
  currentImageIndex.value = currentImageIndex.value === 0 ? images.length - 1 : currentImageIndex.value - 1
}

const openWhatsapp = () => {
  window.open('https://api.whatsapp.com/send/?phone=9607998484', '_blank')
}
</script>

<style scoped>
/* Custom styles for select dropdowns */
select {
  background-image: none;
}

select option {
  background-color: #1f2937;
  color: white;
}

/* Ensure proper spacing and typography */
.container {
  max-width: 1200px;
}

#pageNavBar li .active {
    color: #232221;
    border-bottom: 6px solid #6a4735;
    padding-bottom: 17px;
}

.orange-brand {
    border-bottom: 3px solid #dcb38d;
    width: 70px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
}


</style>