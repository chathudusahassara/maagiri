<script setup>
import { ref } from 'vue';
import { PhForkKnife, PhCake, PhBowlFood } from "@phosphor-icons/vue";

const isDropdownVisible = ref(false);
const dropdownTimeout = ref(null);
const activeDropdown = ref(null);
const menuItems = ref([
      { name: 'Rooms', link:'#', submenu: [{name: 'Executive Suite', link: '/executive_suite'}, {name: 'Junior Suite', link: '/Junior_Suite'},{name: 'Premier Suite', link: '/premier_room'} ] },
      { name: 'Dining', link: '/dining', submenu: [{name: 'Coffee Curve', link: '/coffee_curve'}, {name: 'Faru', link: '/faru'},{name: 'Peak', link: '/peak'} ]},
      { name: 'Events', link:'#', submenu: [{name: 'Weddings & Celebrations', link: '/events/weddings'}, {name: 'Events & Meetings', link: '/events/meetings'} ]},
      { name: 'Wellness', link:'#', submenu: [{name: 'Fitness & Gym', link: '/fitness_gym'} ]},
      { name: 'Gallery', link:'/gallery/main' },
      { name: 'Contact', link:'/contact'},
      { name: 'Offers', link:'/offers' },
      { name: 'Blog', link:'/blog/all'},
      { name: 'Book Now', link:'https://reservations.maagirihotel.com/booking/book-rooms-11448' },
      // Add more menu items as needed
    ]);

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

</script>
<template>
    <div>
    <header>
        <nav>
            <div class=" flex bg-mgblack-100 justify-between pl-3 md:hidden  ">
                <img src="/images/logo_mobile.svg" class=" w-32" data-color="violet" alt="Maagiri Logo">
                <div class=" flex">
                    <div class=" w-14 text-white font-freigtNeo text-sm p-2">
                        <!-- <a href="javascript:;" onclick="overlayMenuOpen()">Book Now</a> -->
                        <a href="https://reservations.maagirihotel.com/booking/book-rooms-11448">Book Now</a>
                    </div>
                    <div>
                            <a href="#" onclick="openNav()">
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
                                <ul v-show="activeDropdown === index && isDropdownVisible && item.submenu != null" class="dropdown-menu whitespace-nowrap">
                                <li v-for="(submenu, subIndex) in item.submenu" :key="subIndex" class=" w-full py-1">
                                    <a :href="submenu.link">{{ submenu.name }}</a>
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


</div>
</template>

