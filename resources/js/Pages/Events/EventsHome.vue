<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhNotebook } from "@phosphor-icons/vue";
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
    name:'Weddings & Celebrations',
    details: 'A fantastic terrace with panoramic views of the ocean, Peak with a lounge as well lends an air of exclusivity with unpretentious service.',
    image: '/images/pages/peak-rest-ed.jpg',
    link: '/events/weddings'
  },
  {
    name:'Events & Meetings',
    details: 'Offering choices of semi-fine dining with stylish buffets, express meals and a la carte dishes.',
    image: '/images/pages/faru-rest-ed.jpg',
    link: '/events/meetings'
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

const openWhatsapp = () => {
  window.open('https://api.whatsapp.com/send/?phone=9607228484', '_blank')
}


</script>

<template>
<MainLayout>
  <div class="relative h-[48vh] w-full">
    <img id="bbImage" src="/images/pages/events-bg.jpg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>
    <div id="shortcutMenu" class="absolute z-20 bottom-5 right-5 bg-mgblack-100 text-mggrey-100 w-full md:w-auto text-left p-4 md:px-8 rounded-md ">
      <h2 class=" text-xl font-freigtNeo py-3 pl-2">We can help plan your events</h2>
      <div class="flex justify-start m-2 gap-3 items-left">
        <button @click="openWhatsapp" id="bookEvent" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhCake :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK AN EVENT</p>
        </button>
       <a href="https://maagirihotel.com/menu/weddings_celebrations_combined.pdf" class="border border-gray-200 border-opacity-40 rounded-md p-5 flex flex-col items-center hover:shadow-2xl">
          <PhNotebook :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">FACT SHEET</p>
        </a>
      </div>
    </div>
  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Events</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Maagiri Hotel offers a range of versatile event spaces designed to make every occasion unforgettable. Whether you are planning corporate meetings, intimate gatherings, or grand celebrations, our venues provide the perfect setting with stunning views and modern amenities. From boardroom meetings in a cozy and professional atmosphere to conferences and social events with breathtaking sea views, we ensure every detail is tailored to meet your needs. Each space is equipped with high-speed Wi-Fi, state-of-the-art audio-visual technology, and premium facilities, ensuring seamless events from start to finish.</p>
        <p class=" mt-5">With our dedicated team, exceptional catering services, and a commitment to excellence, Maagiri Hotel is your ideal venue for hosting memorable events in the heart of the city.</p>
    </div>
  </div>


  <div class="w-full sm:w-11/12 lg:w-6/12 mx-auto -mt-20">
  <div class="px-8 md:px-0 lg:flex gap-8 justify-evenly">
    <div
      class="shadow-md bg-mgblack-100 w-full mb-8 md:mb-0 flex flex-col h-[620px]"
      v-for="dining in dinings"
      :key="dining.name"
    >
      <!-- Image -->
      <img
        id="bbImage"
        :src="dining.image"
        class="object-cover aspect-auto w-full"
      />

      <!-- Content -->
      <div class="flex flex-col justify-between flex-1 px-5 py-8 text-center">
        <!-- Title -->
        <div>
          <h2 class="text-2xl font-bold text-mggrey-100">{{ dining.name }}</h2>
          <div class="border-b-4 border-mggold-100 w-24 mx-auto my-4"></div>
        </div>

        <!-- Description -->
        <p class="text-mggrey-100 flex-grow mt-5">{{ dining.details }}</p>

        <!-- Button -->
        <div class="mt-6">
          <a :href="dining.link" class="bg-mggold-100 w-full p-3 text-black block text-center mt-6">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>




  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
