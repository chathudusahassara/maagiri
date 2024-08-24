<script setup>
import { ref, onMounted, computed } from 'vue';
import { PhX } from "@phosphor-icons/vue";
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import axios from 'axios';
import {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
  } from '@headlessui/vue'



//http://maagiri-web-new.test/api/v1/menu
const open = ref(false)
const isDropdownVisible = ref(false);
const dropdownTimeout = ref(null);
const activeDropdown = ref(null);
const menuItems = ref([]);

const showDropdown = (index) => {
      clearTimeout(dropdownTimeout.value);
      dropdownTimeout.value = setTimeout(() => {
        isDropdownVisible.value = true;
        activeDropdown.value = index;
      }, 200);
}

const hideDropdown = (index) => {
      clearTimeout(dropdownTimeout.value);
      dropdownTimeout.value = setTimeout(() => {
        isDropdownVisible.value = false;
        if (activeDropdown.value === index) {
          activeDropdown.value = null;
        }
      }, 200);
}

async function fetchMenuItems() {
    try {
        const response = await axios.get('/api/v1/menu');
        menuItems.value = response.data.map(item => {
        // Normalize submenus to always be an array
        if (item.has_submenu) {
            if (!Array.isArray(item.submenus)) {
            item.submenus = Object.values(item.submenus);
            }
        }
        return item;
        });
    } catch (error) {
        console.error('Error fetching menu items:', error);
    }
}

onMounted(() => {
  fetchMenuItems();
});


const sidenavOpen = ref(false);
const overlayVisible = ref(false);

// Computed classes for the sidenav
const sidenavClasses = computed(() => ({
  'w-64': sidenavOpen.value, // Set to your desired width when open (e.g., w-64 for 16rem width)
  'w-0': !sidenavOpen.value, // Collapse to 0 width when closed
}));

// Open the side navigation
const openNav = () => {
  sidenavOpen.value = true; // Open the sidenav
  overlayVisible.value = true; // Show overlay
};

// Close the side navigation
const closeNav = () => {
  sidenavOpen.value = false; // Close the sidenav
  overlayVisible.value = false; // Hide overlay
};

</script>
<template>
    <div class=" relative">
    <header>
        <nav>
            <div class=" flex bg-mgblack-100 justify-between md:hidden  ">
                <a href="/" class=" py-4 pl-3">
                <img src="/images/logo_mobile.svg" class=" w-32" data-color="violet" alt="Maagiri Logo">
                </a>
                <div class=" flex">
                    <div class=" w-14 text-white font-freigtNeo text-sm p-2">
                        <!-- <a href="javascript:;" onclick="overlayMenuOpen()">Book Now</a> -->
                        <a href="https://reservations.maagirihotel.com/booking/book-rooms-11448">Book Now</a>
                    </div>
                    <div>
                            <a href="#" @click="openNav">
                                <img src="/images/menu-ico.png" class=" w-16" width="100%">
                            </a>
                    </div>
                </div>
            </div>
            <div class="md:flex bg-mgblack-100 justify-between md:px-10 hidden">
                <div class="relative w-96 ">
                    <div id="logo" class="absolute top-0 left-0 bg-mggrey-200 p-9 z-50">
                        <a href="/">
                            <img src="/images/logo_desktop.svg" class="w-28" alt="Maagiri Logo">
                        </a>
                    </div>
                </div>
                <div id="nav" class="hidden md:flex text-mggrey-100 font-bold gap-12 font-freigtNeo nav">
                    <!-- <a class="py-4 md:py-9" href="#">Rooms</a>
                    <a class="py-4 md:py-9" href="#">Dining</a>
                    <a class="py-4 md:py-9" href="#">Events</a>
                    <a class="py-4 md:py-9" href="#">Wellness</a>
                    <a class="py-4 md:py-9" href="#">Gallery</a>
                    <a class="py-4 md:py-9" href="#">Contact</a>
                    <a class="py-4 md:py-9" href="#">Offers</a>
                    <a class="py-4 md:py-9" href="#">Blog</a>
                    <a class="py-4 md:py-9 text-mggold-100" href="#">Book Now</a> -->
                        <li v-for="(item, index) in menuItems" :key="index" class="dropdown py-9 bg-mgblack-100" @mouseenter="showDropdown(index)" @mouseleave="hideDropdown(index)"
                            :class="{ 'active': activeDropdown === index }">
                            <a :href="item.link" class="dropdown-toggle">{{ item.name }}</a>
                            <transition name="fade">
                                <ul v-show="activeDropdown === index && isDropdownVisible && item.submenus != null" class="dropdown-menu whitespace-nowrap">
                                <li v-for="(submenu, subIndex) in item.submenus" :key="subIndex" class=" w-full py-1">
                                    <a :href="submenu.link_name">{{ submenu.name }}</a>
                                </li>
                                </ul>
                            </transition>
                        </li>
                </div>
            </div>
        </nav>
    </header>


    <slot/>


    <section id="footer">
    <div class=" bg-mgblack-100 text-white py-6 mt-20">
        <div class="w-8/12 mx-auto">
            <div class="flex flex-wrap pt-8 mb-12">
                <div class="w-full md:w-1/4 px-4 mb-6 md:mb-0">
                    <ul class=" text-sm">
                        <li class="font-bold text-white hidden sm:block mb-10">
                            <a href="#" class="border-b border-mggold-100 pb-5">ADDRESS</a>
                        </li>
                        <li class=" text-mggrey-200">Boduthakurufaanu Magu</li>
                        <li class=" text-mggrey-200">Male', 20012</li>
                        <li class=" text-mggrey-200">Republic of Maldives</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/4 px-4 mb-6 md:mb-0">
                    <ul class=" text-sm">
                        <li class="font-bold text-white hidden sm:block mb-10">
                            <a href="#" class="border-b border-mggold-100 pb-5">CONTACT</a>
                        </li>
                        <li class=" text-sm text-mggrey-200">T. +960 331 8484</li>
                        <li class=" text-sm text-mggrey-200">E. reservations@maagirihotel.com</li>
                    </ul>
                </div>
                <div class="w-full md:w-1/6 px-4 mb-6 md:mb-0">
                    <ul>
                        <li class="font-bold text-white hidden sm:block mb-10">
                            <a href="#" class="border-b border-mggold-100 pb-5 text-sm">SOCIAL</a>
                        </li>
                        <div class="flex space-x-2">
                            <li><a href="https://web.facebook.com/Maagiri-Hotel-127052284636238/"><img src="https://maagirihotel.com/images/socials/fb.svg" class="w-6"></a></li>
                            <li><a href="https://www.instagram.com/maagirihotel/"><img src="https://maagirihotel.com/images/socials/insta.svg" class="w-6"></a></li>
                            <li><a href="https://twitter.com/maagirihotel"><img src="https://maagirihotel.com/images/socials/twitter.svg" class="w-6"></a></li>
                        </div>
                    </ul>
                </div>
                <div class="w-full md:w-1/6 px-4 text-right mb-6 md:mb-0">
                    <img src="https://maagirihotel.com/images/tripadvisor.png" class=" w-28 mx-auto md:mx-0">
                </div>
                <div class="w-full md:w-1/6 px-4 text-right">
                    <img src="https://maagirihotel.com/images/travellers_choice.png" class="w-28 mx-auto md:mx-0">
                </div>
            </div>
        </div>
    </div>

    <div class=" bg-mgblack-100 border-t border-mggrey-100 text-white py-4">
        <div class="w-8/12 mx-auto hidden sm:block">
            <div class="flex flex-wrap py-3">
                <div class="w-full md:w-2/3 px-4">
                    <ul class="flex space-x-4">
                        <li><a class=" text-sm text-mggrey-200" href="https://maagirihotel.com/privacy">Privacy Policy</a></li>
                        <li><a class=" text-sm text-mggrey-200" href="https://maagirihotel.com/terms">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="w-full md:w-1/3 px-4 text-right">
                    <img src="https://maagirihotel.com/images/payment-gateway.png" class="w-full">
                </div>
                <div class="w-full px-4 flex">
                    <p class="mt-4 text-center md:text-left text-sm text-mggrey-200">©2024 Maagiri Hotel, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile -->
    <div class="bg-black text-white py-4 block sm:hidden">
        <div class="container mx-auto text-center">
            <ul class="space-y-2">
                <li><a href="https://maagirihotel.com/privacy">Privacy Policysss</a></li>
                <li><a href="https://maagirihotel.com/terms">Terms &amp; Conditions</a></li>
            </ul>
            <p class="mt-4 mb-2">© 2018 Maagiri Hotel, All Rights Reserved</p>
            <p class="mt-0">Designed &amp; Developed by <b>Nous</b></p>
        </div>
    </div>
    <!-- mobile -->
</section>



<TransitionRoot as="template" :show="open">
    <Dialog class="relative z-50" @close="open = false">
      <div class="fixed inset-0" />

      <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden bg-mgblack-100">
          <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
            <TransitionChild as="template" enter="transform transition ease-in-out duration-500 sm:duration-700" enter-from="translate-x-full" enter-to="translate-x-0" leave="transform transition ease-in-out duration-500 sm:duration-700" leave-from="translate-x-0" leave-to="translate-x-full">
              <DialogPanel class="pointer-events-auto w-screen max-w-lg">
                <div class="flex h-full flex-col overflow-y-scroll bg-mgblack-100 py-6 shadow-xl">
                  <div class="px-4 sm:px-6">
                    <div class="flex items-start justify-between">
                      <DialogTitle class="text-base font-semibold leading-6 text-gray-900">Panel title</DialogTitle>
                      <div class="ml-3 flex h-7 items-center">
                        <button type="button" class="relative rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" @click="open = false">
                          <span class="absolute -inset-2.5" />
                          <span class="sr-only">Close panel</span>
                          <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="relative mt-6 flex-1 px-4 sm:px-6">
                    <!-- Your content -->
                  </div>
                </div>
              </DialogPanel>
            </TransitionChild>
          </div>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>


  <!-- Mobile Nav -->

  <nav v-if="sidenavOpen" class="navbar navbar-expand-md maagiri-nav-dark bg-mgblack-100  top-0 right-0 bottom-0 left-0 z-50 fixed ">
                    <div class=" flex justify-end">
                            <button class=" text-2xl p-4" @click="closeNav()">
                                <PhX :size="32" class=" text-white" />
                            </button>
                    </div>

                <div class="container-fluid base-nav">
                      <div class="brand"></div>
                      
                      <ul class=" block  ml-12 mt-10">
                        <Disclosure v-for=" item in menuItems" :key=item as="div" class=" mb-8"  >
                            <DisclosureButton class=" block text-gray-50 font-freigtNeo text-3xl">
                                {{ item.name  }}
                            </DisclosureButton>
                            <DisclosurePanel v-if="item.submenus.length > 0" class="px-4 pb-2 pt-4 text-sm text-gray-500 block">
                                <a v-for="subitem in item.submenus" :key="subitem" class=" block text-xl text-gray-50 mb-4" :href="'/'+subitem.link_name">{{ subitem.name }}</a>
                            </DisclosurePanel>
                        </Disclosure>
                      </ul>
                </div>
    </nav>

</div>
</template>

