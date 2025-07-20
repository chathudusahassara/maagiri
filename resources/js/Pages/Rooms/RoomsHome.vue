<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhBowlFood } from "@phosphor-icons/vue";
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
    name:'Executive Suite',
    details: 'Six of its kind, the Executive Suite ensures the utmost luxury and comfort for its guests.',
    image: 'https://maagirihotel.com/storage/d/9VKmqAdT0D8JdM5zk0arPnnJNW9s1MMH9hXvcHtS.jpg',
    link: '/executive_suite'
  },
  {
    name:'Junior Suite',
    details: 'Located on the eastern wing of the building, Junior Suites add a breath of fresh air to your stay at Maagiri Hotel, with nothing but the ocean blues surrounding the suites.',
    image: 'https://maagirihotel.com/storage/d/pD7SbtBLEDr11q94vCOPDvZsIXDoavxIdW3PMcWo.jpg',
    link: '/Junior_Suite'
  },
  {
    name:'Premier Room',
    details: 'Immerse yourself in Male’ City and enjoy what it truly means to be in this city, by taking in the view of busiest districts in the city. Find solace in these warmly lit rooms and its light grey hues, while you take your mid-day break during your busy day in the city.',
    image: 'https://maagirihotel.com/storage/d/ErxJ0mScKrNh28ns4Qt8pgrOkg2Em8GwQfkgbXJ6.jpg',
    link: '/premier_room'
  }
];


const expandedExperience = ref(null);
const showDetails = ref(null);


</script>

<template>
<MainLayout>
  <div class="relative h-[80vh] w-full">
    <img id="bbImage" src="https://maagirihotel.com/storage/d/9VKmqAdT0D8JdM5zk0arPnnJNW9s1MMH9hXvcHtS.jpg" class="object-cover w-full h-full" />
    <div class=" h-96 w-full   absolute bottom-0 z-10"></div>

  </div>

  <div class=" w-full bg-mgblack-100 ">
    <div class=" w-full px-10 md:px-0 md:w-5/12 mx-auto text-center pt-36 pb-52 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-white font-freigtNeo ">Accomodation</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p>Maagiri Hotel offers 51 well-appointed rooms and suites, designed to provide the perfect blend of comfort, style, and functionality. Whether you are visiting for business or leisure, our rooms offer a serene escape in the heart of the city. With options featuring both stunning sea views and vibrant cityscapes guests can enjoy a relaxing ambiance complemented by modern amenities.</p>
        <p class=" mt-4">From spacious Executive and Junior Suites to cozy Superior and Premier Rooms, each space is thoughtfully designed to meet the needs of every traveler. With comfortable bedding, high-speed Wi-Fi, and in-room dining, Maagiri Hotel ensures a seamless stay.

</p>
    </div>
  </div>

  <section>


</section>



<section>
    <div class=" w-full  ">
    <div class=" w-11/12 md:w-5/12 mx-auto text-center pt-36 pb-24 text-mggrey-100">
        <div class=" w-auto flex-col flex items-center mb-16">
        <h2 class=" text-5xl mb-10 text-mgblack-100 font-freigtNeo ">Your Custom Tailored Stay</h2>
        <div class="border-b-4 border-mggold-100 w-16"></div>
        </div>
        <p class=" text-mgblack-200">Discover a haven of style and comfort in our elegantly appointed rooms, designed for relaxation and ease - the perfect retreat after a bustling day. Choose from our Premier rooms with refined comfort, or Junior and Executive Suites with separate living space for ultimate privacy and sophistication.</p>
    </div>
</div>

<div class="w-full lg:w-8/12 mx-auto">
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
        <p class="text-mggrey-100 flex-grow mt-5 mb-6">{{ dining.details }}</p>

        <!-- Button -->
        <div class="mt-auto">
          <a :href="dining.link" class="bg-mggold-100 w-full p-3 text-black block text-center">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>

</section>






  <BookingOverlay :isVisible="showOverlay" :type="overlayType" @close="closeOverlay" />
</MainLayout>
</template>
