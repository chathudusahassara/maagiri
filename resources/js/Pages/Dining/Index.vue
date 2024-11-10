<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhBowlFood } from "@phosphor-icons/vue";
import MainLayout from '@/Layouts/MainLayout.vue';
import BookingOverlay from '@/Components/BookingOverlay.vue';

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
    link: '/peak'
  },
  {
    name:'Faru',
    details: 'Offering choices of semi-fine dining with stylish buffets, express meals and a la carte dishes.',
    image: '/images/pages/faru-rest-ed.jpg',
    link: '/faru'
  },
  {
    name:'Coffee Curve',
    details: 'Coffee Curve with its jazzier vibes is the perfect place to grab that quick cup of coffee or have a quick mid-day snack.',
    image: '/images/pages/coffee-curve-ed.jpg',
    link: '/coffee_curve'
  }
];

const experiences = [
    {
        title: 'Indian Buffet – Every Thursday Night',
        subtitle: 'MVR 220++ per person',
        description: 'Indulge in the rich and diverse flavors of India every Thursday night at our Indian Buffet. Enjoy a range of appetizers, curries, tandoori specialties and desserts, each prepared with aromatic spices and fresh ingredients.',
        image: '/images/dining/exp-indian.jpg'
    },
    {
        title: 'Thai Chinese Buffet - Every Friday Night',
        subtitle: 'MVR 220++ per person',
        description: 'Join us every Friday night for a fusion of Thai and Chinese cuisine. Our Thai-Chinese Buffet offers a delightful mix of flavors from these two vibrant culinary traditions. Enjoy a variety of soups, stir-fries, noodles, and more, crafted with fresh ingredients and bold spices.',
        image: '/images/dining/exp-thai.jpg'
    },
    {
        title: 'Sri Lankan Buffet - Every Saturday Night',
        subtitle: 'MVR 220++ per person',
        description: 'Experience the vibrant and spicy flavors of Sri Lanka every Saturday night at our Sri Lankan Buffet. Our menu features an array of traditional dishes that showcase the islands rich culinary heritage. Enjoy a variety of curries, sambols, and rice dishes, each bursting with unique spices and flavors.',
        image: '/images/dining/exp-srilankan.jpg'
    },
    {
        title: 'Evening Tea at Peak',
        subtitle: 'Available Daily : 4pm – 7pm',
        description: 'Indulge in a delightful evening tea experience at Peak, where we offer tea paired with local delicacies. Whether youre winding down after a busy day or catching up with friends, our evening tea service provides the perfect setting. Peak provides a cozy and inviting atmosphere with panoramic views, making it the ideal spot to unwind.',
        image: '/images/dining/exp-evening.jpg'
    },
    {
        title: 'Private Dinner Experience',
        subtitle: '',
        description: 'Experience an unforgettable private dining experience with our exclusive package, designed to create cherished memories for you and your loved ones. Our Private Dining Package includes a range of luxurious amenities and personalized services to make your special occasion truly exceptional.',
        image: '/images/dining/exp-romance.jpg'
    }
];

const expandedExperience = ref(null);
const showDetails = ref(null);

const toggleExperience = (index) => {
    
    showDetails.value = null

    expandedExperience.value = expandedExperience.value === index ? null : index;

    setTimeout(() => {
        showDetails.value = showDetails.value === index ? null : index;
        }, 1000);

};


</script>

<template>
<MainLayout>
  <div class="relative h-[80vh] w-full">
    <img id="bbImage" src="/images/pages/bg-dining.jpg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>
    <div id="shortcutMenu" class="absolute z-20 bottom-5 right-5 bg-mgblack-100 text-mggrey-100 w-full md:w-4/12 text-center p-4 md:p-5 ">
      <h2 class=" text-xl font-freigtNeo py-5">We can help plan your dining experiences</h2>
      <div class="flex justify-around m-2 md:m-5 gap-2 items-center">
        <button @click="openOverlay('dinner')" id="bookDinner" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhForkKnife :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK A DINNER</p>
        </button>
        <button @click="openOverlay('event')" id="bookEvent" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhCake :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK AN EVENT</p>
        </button>
        <button id="ourMenu" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhBowlFood :size="32" class=" text-mggold-100" />
          <a href="https://maagirihotel.com/storage/faru_menu.pdf"><p class="text-xs mt-3">OUR MENU</p></a>
        </button>
      </div>
    </div>
  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Dining</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Experience the pinnacle of fine dining at Four Seasons Hotel London at Park Lane, where luxury and culinary excellence converge in the heart of Mayfair. At our renowned Park Lane restaurant, Pavyllon, French cuisine crafted by our talented chefs offers an exquisite dining experience.</p>
    </div>
  </div>
  <div class=" md:w-11/12 xl:w-9/12 mx-auto -mt-20">
    <div class=" px-8 md:px-0 lg:flex gap-8 justify-evenly">
      <div class=" mb-10 shadow-md bg-mgblack-100 w-full" v-for="dining in dinings" :key="dining.name">
        <img id="bbImage" :src="dining.image" class="object-cover aspect-auto w-full " />
        <div class="px-5 mt-8 text-center flex flex-col">
          <h2 class=" text-2xl font-bold text-center text-mggrey-100">{{ dining.name }}</h2>
          <div class=" border-b-4 border-mggold-100 pb-6 w-24 mx-auto mb-10"></div>
          <p class=" text-mggrey-100">{{ dining.details }}</p>
          <a :href="dining.link" class=" bg-mggold-100 text-black mb-12 mt-12 p-3">Learn More</a>
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
<div class=" w-11/12 mx-auto pb-36">
    <div class=" grid grid-cols-1 md:grid-cols-3 xl:grid-cols-5 gap-2 justify-evenly">
        <div id="experienceSliderItem" v-for="(experience, index) in experiences" :key="experience.title" class="w-full border border-gray-200 shadow-md cursor-pointer text-center mb-5 md:mb-0 " @click="toggleExperience(index)">
            <div class=" flex flex-col justify-between">
              <img :src="experience.image" class="object-cover w-full " style="transition: height 0.5s;" :class="expandedExperience == index ? 'h-32' : ' h-80'" />
              <div class="px-5 mt-3 text-center flex flex-col justify-evenly">
              <h2 class="text-lg font-bold text-center text-mgblack-100 py-4 font-freigtNeo">{{ experience.title }}</h2>
              <!-- <div class="border-b-4 border-mggold-100 pb-6 w-24 mx-auto mb-5"></div> -->
                  <div v-if="showDetails === index && expandedExperience == index " id="detailArea" class=" flex flex-col">
                      <p class="text-mggrey-200 py-5">{{ experience.description }}</p>
                      <div class="  w-full bg-mgblack-100 py-3 rounded-t-md">
                        <a href="https://api.whatsapp.com/send/?phone=9607998484&text&type=phone_number&app_absent=0" class="  mb-3 mt-2 p-3 w-full font-bold text-mggold-100">Talk to us</a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
