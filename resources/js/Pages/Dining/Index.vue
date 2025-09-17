<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhBowlFood } from "@phosphor-icons/vue";
import MainLayout from '@/Layouts/MainLayout.vue';
import BookingOverlay from '@/Components/BookingOverlay.vue';
import DineCarousel from './DineCarousel.vue';

const showOverlay = ref(false);
const overlayType = ref('');

const openOverlay = (type) => {
  overlayType.value = type;
  showOverlay.value = true;
};

const closeOverlay = () => {
  showOverlay.value = false;
};

const dinings = [
  {
    name:'Peak',
    details: 'A fantastic terrace with panoramic views of the ocean, Peak with a lounge as well lends an air of exclusivity with unpretentious service.',
    image: '/images/pages/peak-rest-ed.jpg',
    link: '/dining/peak'
  },
  {
    name:'Faru',
    details: 'Offering choices of semi-fine dining with stylish buffets, express meals and a la carte dishes.',
    image: '/images/pages/faru-rest-ed.jpg',
    link: '/dining/faru'
  },
  {
    name:'Coffee Curve',
    details: 'Coffee Curve with its jazzier vibes is the perfect place to grab that quick cup of coffee or have a quick mid-day snack.',
    image: '/images/pages/coffee-curve-ed.jpg',
    link: '/dining/coffee_curve'
  }
];

const experiences = [
    {
        title: 'Private Dining',
        category: 'Private Dining',
        // subtitle: 'Available Daily : 4pm – 7pm',
        description: 'Experience an unforgettable private dining experience with our exclusive package, designed to create cherished memories for you and your loved ones. Our Private Dining Package includes a range of luxurious amenities and personalized services to make your special occasion truly exceptional.',
        image: '/images/dining/exp-romance.jpg',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: true,
    },
    {
        title: 'Indian Buffet',
        category: 'Theme Buffet',
        subtitle: 'Thursday Night | Mvr 220++',
        description: 'Indulge in the rich and diverse flavors of India every Thursday night at our Indian Buffet. Enjoy a range of appetizers, curries, tandoori specialties and desserts, each prepared with aromatic spices and fresh ingredients.',
        image: '/images/dining/exp-indian.jpg',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: false,
    },
    {
        title: 'Thai - Chinese Buffet',
        category: 'Theme Buffet',
        subtitle: 'Friday Night | Mvr 220++',
        description: 'Join us every Friday night for a fusion of Thai and Chinese cuisine. Our Thai-Chinese Buffet offers a delightful mix of flavors from these two vibrant culinary traditions. Enjoy a variety of soups, stir-fries, noodles, and more, crafted with fresh ingredients and bold spices.',
        image: '/images/dining/exp-thai.jpg',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: false,
    },
    {
        title: 'Srilankan Buffet',
        category: 'Theme Buffet',
        subtitle: 'Saturday Night | Mvr 220++',
        description: 'Experience the vibrant and spicy flavors of Srilanka every Saturday night at our Srilankan Buffet. Our menu features an array of traditional dishes that showcase the nation’s rich culinary heritage. Enjoy a variety of curries, sambols, and rice dishes, each bursting with unique spices and flavors.',
        image: '/images/dining/exp-srilankan.jpg',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: false,
    },
    {
        title: 'Maldivian Buffet',
        category: 'Theme Buffet',
        subtitle: 'Wednesday Night | Mvr 220++',
        description: 'Maldivian Night is a celebration of culture, flavor and community in the heart of the city. Whether you are a local rediscovering cherished tastes, or a visitor exploring the rich culinary heritage of the Maldives, this unforgettable evening promises warm hospitality and authentic Maldivian dishes.',
        image: '/images/dining/maldivian.png',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: false,
    },
    {
        title: 'Evening Tea at Peak',
        category: 'Tea Time',
        subtitle: null,
        description: 'Indulge in a delightful evening tea experience at Peak, where we offer tea paired with local delicacies. Local shorteats such gulha, bajiya, boakibaa along with desserts like githeyo boakibaa are freshly prepared in-house to ensure the finest taste and quality. Peak provides a cozy and inviting atmosphere with panoramic views, making it the ideal spot to unwind.',
        image: '/images/dining/exp-evening.jpg',
        link: 'https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0',
        has_menu: false,
    },
];

const expandedExperience = ref(null);
const showDetails = ref(null);
const isTransitioning = ref(false);

const toggleExperience = (index) => {
    // Prevent rapid clicking during transitions
    if (isTransitioning.value) return;
    
    if (expandedExperience.value === index) {
        // Closing the card - smooth collapse
        isTransitioning.value = true;
        showDetails.value = null;
        
        setTimeout(() => {
            expandedExperience.value = null;
            isTransitioning.value = false;
        }, 400);
    } else {
        // Opening a new card
        isTransitioning.value = true;
        
        if (expandedExperience.value !== null) {
            // Smooth transition from one card to another
            showDetails.value = null;
            
            setTimeout(() => {
                expandedExperience.value = index;
                
                // Slight delay for the card to settle before showing details
                setTimeout(() => {
                    showDetails.value = index;
                    isTransitioning.value = false;
                }, 300);
            }, 250);
        } else {
            // Opening first card - immediate response
            expandedExperience.value = index;
            
            setTimeout(() => {
                showDetails.value = index;
                isTransitioning.value = false;
            }, 250);
        }
    }
};

const openWhatsapp = () => {
  window.open('https://api.whatsapp.com/send/?phone=9607228484', '_blank')
}


</script>

<template>
<MainLayout>
  <div class="relative h-[48vh] w-full">
    <img id="bbImage" src="/images/pages/bg-dining.jpg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>
    <div id="shortcutMenu" class="absolute z-20 bottom-5 right-5 bg-mgblack-100 text-mggrey-100 w-full md:w-auto text-left p-4 md:px-8 rounded-md ">
      <h2 class=" text-xl font-freigtNeo py-3 pl-2">We can help plan your <br> dining experiences</h2>
      <div class="flex justify-start m-2 gap-3 items-left">
        <button @click="openWhatsapp" id="bookDinner" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhForkKnife :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK A DINNER</p>
        </button>
        <a href="https://maagirihotel.com/menu/combined_dining_menu.pdf" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhBowlFood :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">OUR MENU</p>
        </a>
      </div>
    </div>
  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Dining</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Indulge in an exceptional culinary journey across our three distinctive dining venues. At our elegant lobby coffee shop - Coffee Curve, savor freshly brewed coffees, delicate pastries, and light bites in a refined yet welcoming ambiance. Elevate your evenings at the rooftop restaurant, where fine cuisine is paired with breathtaking city views for an unforgettable dining experience. </p>
        <p class="mt-4">For a more lavish affair, our signature main restaurant presents an opulent buffet of international and local delicacies, crafted to delight every palate. Each venue is thoughtfully designed to blend exquisite flavors with an atmosphere of sophistication.</p>
    </div>
  </div>
  
  <div class="w-full md:w-11/12 mx-auto -mt-20">
    <div class="flex flex-nowrap gap-4 justify-start xl:justify-center items-start overflow-x-auto  pb-4 md:pb-0 scrollbar-hide px-2 md:px-5">

      <div class="shadow-md bg-mgblack-100 mb-8 md:mb-0 flex flex-col xl:h-[610px] h-[600px] w-[320px] md:w-[350px] flex-shrink-0" v-for="dining in dinings" :key="dining.name">
        <img id="bbImage" :src="dining.image" class="object-cover aspect-auto w-full" />

        <div class="flex flex-col justify-between flex-1 px-5 py-8 text-center">

          <div>
            <h2 class=" text-2xl font-bold text-center text-mggrey-100">{{ dining.name }}</h2>
            <div class=" border-b-4 border-mggold-100 pb-6 w-24 mx-auto mb-10"></div>
          </div>

         <p class="text-mggrey-100 flex-grow mt-5 mb-6">{{ dining.details }}</p>

          <div class="mt-auto">
            <a :href="dining.link" class="bg-mggold-100 w-full p-3 text-black block text-center">Learn More</a>
          </div>
        </div>
      </div>


    </div>
  </div>

<section>
<div class=" w-full ">
    <div class=" w-11/12 md:w-5/12 mx-auto text-center pt-36 pb-24 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-mgblack-100 font-freigtNeo ">Dining Experiences</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p class=" text-mgblack-200">Discover exceptional dining at Maagiri Hotel, where we offer a variety of culinary experiences to satisfy every palate. Enjoy a range of options, from casual evening tea treats to exquisite theme buffets.</p>
    </div>
</div>

<DineCarousel :experiences="experiences" />
<!-- 
<div class=" w-full md:mx-6 mx-auto md:pb-36 pb-10">
  <div class="flex flex-nowrap gap-4 justify-start md:justify-start xl:justify-center items-start overflow-x-auto  pb-4 md:pb-0 scrollbar-hide">

    <div
  id="experienceSliderItem"
  v-for="(experience, index) in experiences"
  :key="experience.title"
  class="w-[280px] md:w-[300px] flex-shrink-0 border border-gray-200 shadow-lg text-center mb-5 transition-all duration-500 ease-out relative overflow-hidden group hover:border-mggold-100"
  :class="[
    expandedExperience === index ? 'scale-105 z-10 shadow-2xl' : 'hover:scale-105 hover:shadow-2xl',
    isTransitioning ? 'cursor-wait' : 'cursor-pointer'
  ]"
  @click="toggleExperience(index)"
>
  <div class="flex flex-col justify-between bg-white overflow-hidden rounded-md">
    <div class="overflow-hidden">
      <img
        :src="experience.image"
        class="object-cover w-full transition-all duration-700 ease-out group-hover:scale-110"
        :class="expandedExperience === index ? 'h-24' : 'h-80'"
      />
    </div>
    <div class="px-3 mt-3 text-center flex flex-col justify-evenly">
      <h2 class="text-lg font-bold text-center text-mgblack-100 py-4 font-freigtNeo transition-all duration-300 group-hover:text-mggold-100">
        {{ experience.title }}
      </h2>


      <div
        v-if="showDetails === index && expandedExperience === index"
        id="detailArea"
        class="flex flex-col animate-fadeIn"
      >
        <p class="text-mggrey-200 py-5">{{ experience.description }}</p>

        <div v-if="experience.has_menu">
          <a href="https://maagirihotel.com/menu/private_dining_menu.pdf" class=" w-full py-4 font-bold text-black block text-center">View Menu</a>
        </div>

        <div class="w-full bg-mgblack-100 py-1 rounded-md mb-3">
          <a
            href="https://api.whatsapp.com/send/?phone=9607998484&text&type=phone_number&app_absent=0"
            class="mb-2 mt-1 py-2 px-3 w-full font-bold text-mggold-100 block"
          >
            Book with us
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div> -->
</section>

  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
