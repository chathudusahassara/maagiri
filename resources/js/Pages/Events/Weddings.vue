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
    details: 'Located at the terrace of Maagiri Hotel, Muraka Maalam provides a striking and unforgettable setting for events, soaring over 60sqm.',
    image: '/images/pages/peak-rest-ed.jpg',
    link: '/peak'
  },
  {
    name:'Peak - 9th Floor',
    details: 'Floor to ceiling windows that overlook the unobstructed seaview, this venue is ideal for celebrations or weddings.',
    image: '/images/pages/faru-rest-ed.jpg',
    link: '/faru'
  },
  {
    name:'Peak - Terrace',
    details: 'A uniquely atmospheric celebrations space overlooking the seaview which can accommodate up to 150 pax.',
    image: '/images/pages/coffee-curve-ed.jpg',
    link: '/coffee_curve'
  },
  {
    name:'Faru',
    details: 'Nestled in the heart of Male’ , our restaurant offers a perfect blend of modern elegance and warm hospitality.',
    image: '/images/pages/coffee-curve-ed.jpg',
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
    <img id="bbImage" src="/images/pages/weddings-bg.jpeg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>
    <div id="shortcutMenu" class="absolute z-20 bottom-5 right-5 bg-mgblack-100 text-mggrey-100 text-center px-10 py-5 ">
      <h2 class=" text-xl font-freigtNeo py-5">We can help plan your meetings & conferences</h2>
      <div class="flex justify-evenly m-2 md:m-5 gap-10">
        <button @click="openWhatsapp" id="bookDinner" class="border border-gray-200 rounded-md p-5 flex flex-col items-center hover:shadow-2xl w-full">
          <PhForkKnife :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">BOOK A VENUE</p>
        </button>
        <a href="https://maagirihotel.com/menu/weddings_fact_sheet.pdf" id="bookEvent" class="border border-gray-200 rounded-md p-5 flex flex-col items-center hover:shadow-2xl w-full">
          <PhNotebook :size="32" class=" text-mggold-100" />
          <p class="text-xs mt-3">FACT SHEET</p>
        </a>
      </div>
    </div>
  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Weddings & Celebrations</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Overlooking the ocean, Maagiri Hotel offers you ideal spaces for your gatherings and celebrations. A beautifully curated space paired with warm hospitality ensures the perfect setting for long lasting memories.</p>
        <p class=" mt-4">Whether it is an intimate wedding or a proud celebration, Maagiri Hotel provides its customers a joyous occasion, complete with all amenities such an event needs with a warm ambience and efficient service.</p>
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
        <h2 class=" text-5xl mb-10 text-mgblack-100 font-freigtNeo ">Celebration Venue</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p class=" text-mgblack-200">Maagiri Hotel presents a refined selection of celebrations spaces, each thoughtfully designed to suite the unique vision and needs of our clients. Every venue promises sophistication, comfort and impeccable service.</p>
    </div>
</div>

  <div class=" w-full mx-auto px-8 mb-20 ">
    <div class=" w-full lg:flex gap-6 ">
      <div class=" mb-10 shadow-md bg-mgblack-100 w-full" v-for="dining in dinings" :key="dining.name">
        <img id="bbImage" :src="dining.image" class="object-cover aspect-auto w-full " />
        <div class="px-5 mt-8 text-center flex flex-col">
          <h2 class=" text-2xl font-bold text-center text-mggrey-100">{{ dining.name }}</h2>
          <div class=" border-b-4 border-mggold-100 pb-6 w-24 mx-auto mb-10"></div>
          <p class=" text-mggrey-100">{{ dining.details }}</p>
          <a href="https://api.whatsapp.com/send/?phone=9607998484&text&type=phone_number&app_absent=0" class=" bg-mggold-100 text-black mb-6 mt-12 p-3">Talk to us</a>
        </div>
      </div>
    </div>
  </div>
</section>






  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
