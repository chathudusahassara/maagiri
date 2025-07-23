<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhNotebook } from "@phosphor-icons/vue";
import MainLayout from '@/Layouts/MainLayout.vue';
import BookingOverlay from '@/Components/BookingOverlay.vue';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'

const props = defineProps({
    gallery: Array,
});

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
    name:'Muraka Maalam',
    details: 'Perched on the terrace of Maagiri Hotel, Muraka Maalam offers an impressive and unforgettable event space. Spanning over 60sqm, it accomodates various setups, including theater, classroom, banquet, and boardroom styles.',
    image: '/images/pages/events/events/muraka-maalam.jpg',
    link: '/peak'
  },
  {
    name:'Peak - 9th Floor',
    details: 'With floor-to-ceiling windows offering stunning sea views, this versatile venu is perfect for celebrations or conferences of up to 50 guests. Equipped with built-in video projectors, it can be adapted to various seating configurations, ensuring a tailored experience for any event.',
    image: '/images/pages/events/events/9meetin-room.jpg',
    link: '/faru'
  },
  {
    name:'Meeting Room - 2nd Floor',
    details: 'This intimate event space, perfect for board meetings or small gatherings of up to 22 guests, offers a unique atomsphere and features a built-in 55" TV for seamless presentations and discussions.',
    image: '/images/pages/events/events/2meeting-room.jpg',
    link: '/coffee_curve'
  }
];


const expandedExperience = ref(null);
const showDetails = ref(null);

const openWhatsapp = () => {
  window.open('https://api.whatsapp.com/send/?phone=9607228484', '_blank')
}


</script>

<template>
<MainLayout>
  <div class="relative h-[80vh] w-full">
    <img id="bbImage" src="/images/pages/events-bg.jpg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>
    <div id="shortcutMenu" class="absolute z-20 bottom-5 right-5 bg-mgblack-100 text-mggrey-100 w-full md:w-auto text-left p-4 md:px-8 rounded-md ">
      <h2 class=" text-xl font-freigtNeo py-3 pl-2">We can help plan your dining experiences</h2>
      <div class="flex justify-start m-2 gap-3 items-left">
        <button @click="openWhatsapp" id="bookDinner" class="border border-gray-200 rounded-md p-5 flex flex-col items-center hover:shadow-2xl w-full">
          <PhForkKnife :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK A VENUE</p>
        </button>
        <a href="https://maagirihotel.com/menu/meetings_conferences_fact_sheet.pdf" id="bookEvent" class="border border-gray-200 rounded-md p-5 flex flex-col items-center hover:shadow-2xl w-full">
          <PhNotebook :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">FACT SHEET</p>
        </a>
      </div>
    </div>
  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Events & Meetings</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Be it a corporate event or a business meeting, Maagiri Hotel is proud to host corporate guests for a perfect stay every time. With your executive needs in mind, complete with high-speed internet, Maagiri Hotel provides you with ideal space for your important events and functions.</p>
        <p class=" mt-4">Whether you are in Male’ for a meeting or in between flights or looking to organize a lovely weekend with a mix of business and leisure, Maagiri hospitality is the best that Male’ City can offer.</p>
    </div>
  </div>

  <section>


<div class=" w-11/12 md:w-8/12 mx-auto -mt-20">
<carousel :items-to-show="1">
    <slide v-for="image in gallery" :key="image" class="  bg-green-600">
        <img :src="'/storage/d/'+image.file" class="object-cover w-full h-[40vh] md:h-[80vh] " />
    </slide>

    <template #addons>
      <navigation />
      <pagination />
    </template>
</carousel>
</div>
</section>



<section>
    <div class=" w-full  ">
    <div class=" w-11/12 md:w-5/12 mx-auto text-center pt-36 pb-24 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-mgblack-100 font-freigtNeo ">Event Venues</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p class=" text-mgblack-200">Discover exceptional dining at Maagiri Hotel, where we offer a variety of culinary experiences to satisfy every palate. Enjoy a range of options, from casual evening tea treats to exquisite theme buffets.</p>
    </div>
</div>


<div class="w-full sm:w-11/12 lg:w-8/12 mx-auto ">
  <div class="px-8 md:px-0 lg:flex gap-8 justify-evenly">
    <div
      class="shadow-md bg-mgblack-100 w-full mb-8 md:mb-0 flex flex-col h-[680px]"
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
          <a href="https://api.whatsapp.com/send/?phone=9607228484&text&type=phone_number&app_absent=0" class="bg-mggold-100 w-full p-3 text-black block text-center mt-6">Talk to us</a>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- <div class=" w-full lg:w-8/12 mx-auto ">
    <div class=" px-8 md:px-0 lg:flex gap-8 justify-evenly">
 

      <div class=" mb-10 shadow-md bg-mgblack-100 w-full flex flex-col justify-between" v-for="dining in dinings" :key="dining.name">
        <img id="bbImage" :src="dining.image" class="object-cover aspect-auto w-full " />
        <div class="mt-5">
          <h2 class=" text-2xl font-bold text-center text-mggrey-100">{{ dining.name }}</h2>
          <div class=" border-b-4 border-mggold-100 pb-6 w-24 mx-auto mb-10"></div>
        </div>
        <div class="px-5 mt-8 text-center flex flex-col">
          
          <p class=" text-mggrey-100">{{ dining.details }}</p>
          <a href="https://api.whatsapp.com/send/?phone=9607998484&text&type=phone_number&app_absent=0" class=" bg-mggold-100 text-black mb-6 mt-12 p-3">Talk to us</a>
        </div>
      </div>

    </div>
  </div> -->
</section>






  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
