<script setup>
import { ref, onMounted } from 'vue'
import MainLayout from '@/Layouts/MainLayout.vue';
import BookingBar from '@/Pages/BookingBar.vue';

const props = defineProps({
    banner: Array,
    about: Object,
    rooms: Array,
    dining: Array,
    events: Array,
    wellness: Array,
    offers: Array
})

const showOffers = ref(false)

const toggleOffers = () => {
    showOffers.value = !showOffers.value
}

const closeOffers = () => {
    showOffers.value = false
}

const getRoomUrl = (index) => {
    const urls = ['executive_suite', 'Junior_Suite', 'premier_room', 'premier_ocean_view_room']
    return urls[index] || 'executive_suite'
}

const getDiningUrl = (name) => {
    return name === 'Peak' ? '/peak' : '/coffee_curve'
}

const getEventUrl = (index) => {
    return index === 0 ? '/weddings_celebrations' : '/events_meetings'
}

// Animation and scroll effects
const visibleSections = ref(new Set())

const observeSections = () => {
    if (typeof window === 'undefined') return
    
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    visibleSections.value.add(entry.target.id)
                }
            })
        },
        { threshold: 0.1, rootMargin: '0px 0px -100px 0px' }
    )

    // Wait for DOM to be ready
    setTimeout(() => {
        const sections = document.querySelectorAll('.animate-section')
        sections.forEach((section) => {
            if (section.id) {
                observer.observe(section)
            }
        })
    }, 100)
}

onMounted(() => {
    observeSections()
})
</script>


<template>
    <MainLayout>
        <!-- Hero Section -->
        <section id="header" class="relative overflow-hidden">
            <div id="myCarousel" class="carousel slide relative">
                <div class="carousel-inner">
                    <!-- Banner Image -->
                    <div class="carousel-item active relative">
                        <div class="hero-bg w-full h-[85vh] bg-cover bg-center bg-fixed" style="background-image: url('/images/maagiri_banner.jpg')"></div>
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/30 to-transparent"></div>
                        
                        <!-- Content -->
                        <div class="absolute inset-0 flex items-center">
                            <div class="container mx-auto px-6">
                                <div class="max-w-2xl">
                                    <div class="hero-content animate-fade-in-up">
                                        <h3 class="text-5xl md:text-7xl font-freigtNeo mb-6 text-white leading-tight">
                                            {{ banner?.[0]?.name || 'Luxury, Redefined' }}
                                        </h3>
                                        <div class="w-20 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-8 animate-slide-in-left"></div>
                                        <p class="text-xl md:text-2xl text-gray-200 leading-relaxed animate-fade-in-delay">
                                            {{ banner?.[0]?.details || 'The way it\'s supposed to be, and more.' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Offers Overlay -->
                        <div v-if="offers && offers.length > 0" class="absolute top-8 right-8 z-20">
                            <transition name="slide-fade">
                                <div v-if="showOffers" class="bg-white/95 backdrop-blur-sm text-gray-800 p-8 rounded-2xl max-w-md shadow-2xl">
                                    <div class="flex justify-between items-center mb-6">
                                        <h2 class="text-2xl font-freigtNeo font-bold">Special Offers</h2>
                                        <button @click="closeOffers" class="text-gray-500 hover:text-gray-700 transition-colors">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div v-for="offer in offers" :key="offer.id" class="mb-6 last:mb-0">
                                        <h3 class="text-xl font-freigtNeo font-semibold mb-3">{{ offer.title }}</h3>
                                        <div class="w-16 h-1 bg-mggold-100 mb-4"></div>
                                        <p class="hidden sm:block text-gray-600 mb-4">{{ offer.summary }}</p>
                                        <p class="block sm:hidden text-gray-600 mb-4">{{ offer.summary_mobile }}</p>
                                        <div class="flex gap-4">
                                            <a href="/offers" class="text-mggold-100 hover:text-mggold-200 font-semibold transition-colors">DETAILS</a>
                                            <span class="text-gray-400">|</span>
                                            <a href="https://reservations.maagirihotel.com/booking/book-rooms-11448" class="text-gray-600 hover:text-gray-800 font-semibold transition-colors">BOOK NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </transition>
                            <button v-if="!showOffers" @click="toggleOffers" class="bg-mggold-100 hover:bg-mggold-200 text-gray-800 px-6 py-3 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                Offers
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
                </div>
            </div>
        </section>

        <!-- Overview Section -->
        <section id="main-content" class="animate-section">
            <div class="bg-gradient-to-b from-gray-900 to-black text-white py-24">
                <div class="container mx-auto px-6">
                    <div class="max-w-5xl mx-auto text-center">
                        <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('main-content') }">
                            <p class="text-mggold-100 uppercase tracking-widest text-sm mb-6 font-semibold">OVERVIEW</p>
                            <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-white">Maagiri Hotel</h1>
                            <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto mb-12"></div>
                            <div v-html="about?.body" class="text-gray-300 text-xl leading-relaxed max-w-4xl mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Booking Bar -->
        <BookingBar />

        <!-- Rooms Section -->
        <section id="rooms-section" class="animate-section py-24 bg-white">
            <div class="container mx-auto px-6 mb-16">
                <div class="text-center">
                    <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('rooms-section') }">
                        <p class="text-gray-500 uppercase tracking-widest text-sm mb-6 font-semibold">ROOMS</p>
                        <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-gray-900">Your Custom Tailored Stay</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto"></div>
                    </div>
                </div>
            </div>

            <!-- Desktop Accordion Layout -->
            <div class="hidden md:block">
                <div v-for="(room, index) in rooms" :key="room.id" class="mb-8 group">
                    <div class="flex h-[500px] overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-700">
                        <!-- Image Side -->
                        <div class="w-1/2 relative overflow-hidden" :class="{ 'order-2': index % 2 === 1 }">
                            <div class="h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" :style="{ backgroundImage: `url(/storage/d/${room.file})` }"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center text-white transform transition-all duration-500 group-hover:scale-105">
                                    <h2 class="text-4xl font-freigtNeo mb-6">{{ room.name }}</h2>
                                    <div class="w-16 h-1 bg-mggold-100 mx-auto"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content Side -->
                        <div class="w-1/2 bg-gradient-to-br from-gray-50 to-white flex items-center p-16" :class="{ 'order-1': index % 2 === 1 }">
                            <div class="transform transition-all duration-500 group-hover:translate-x-2">
                                <h2 class="text-4xl font-freigtNeo mb-6 text-gray-900">{{ room.name }}</h2>
                                <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-8"></div>
                                <div v-html="room.details" class="text-gray-600 mb-8 text-lg leading-relaxed"></div>
                                <a :href="`/${getRoomUrl(index)}`" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-10 py-4 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    EXPLORE
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Stacked Layout -->
            <div class="md:hidden px-6">
                <div v-for="(room, index) in rooms" :key="room.id" class="mb-16">
                    <div class="overflow-hidden rounded-2xl shadow-xl">
                        <div class="h-80 bg-cover bg-center" :style="{ backgroundImage: `url(/storage/d/${room.file})` }"></div>
                        <div class="bg-white p-8">
                            <h2 class="text-3xl font-freigtNeo mb-4 text-gray-900">{{ room.name }}</h2>
                            <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-6"></div>
                            <div v-html="room.details" class="text-gray-600 mb-8 text-base leading-relaxed"></div>
                            <a href="/rooms/executive" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-8 py-3 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl">
                                EXPLORE
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dining Section -->
        <section id="dining-section" class="animate-section py-24 bg-gray-50">
            <div class="container mx-auto px-6 mb-16">
                <div class="text-center">
                    <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('dining-section') }">
                        <p class="text-gray-500 uppercase tracking-widest text-sm mb-6 font-semibold">DINING</p>
                        <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-gray-900">Savour the Exceptional</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto"></div>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="hidden md:block">
                <div v-for="(diningItem, index) in dining" :key="diningItem.id" class=" group">
                    <div class="flex h-[500px] overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-700">
                        <!-- Image Side -->
                        <div class="w-1/2 relative overflow-hidden" :class="{ 'order-2': index % 2 === 1 }">
                            <div class="h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" :style="{ backgroundImage: `url(/storage/d/${diningItem.file})` }"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        </div>
                        
                        <!-- Content Side -->
                        <div class="w-1/2 bg-mgblack-300 flex items-center p-16" :class="{ 'order-1': index % 2 === 1 }">
                            <div>
                                <h2 class="text-4xl font-freigtNeo mb-6 text-gray-50">{{ diningItem.name }}</h2>
                                <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-8"></div>
                                <div v-html="diningItem.details" class="text-mggrey-400 mb-8 text-base"></div>
                                <a :href="getDiningUrl(diningItem.name)" class="inline-flex items-center  text-mggold-100 px-5 py-2 rounded-md border border-mggold-100 font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 transform hover:scale-105">
                                    EXPLORE
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Layout -->
            <div class="md:hidden px-6">
                <div v-for="diningItem in dining" :key="diningItem.id" class="mb-16">
                    <div class="overflow-hidden rounded-2xl shadow-xl">
                        <div class="h-80 bg-cover bg-center" :style="{ backgroundImage: `url(/storage/d/${diningItem.file})` }"></div>
                        <div class="bg-white p-8">
                            <h2 class="text-3xl font-freigtNeo mb-4 text-gray-900">{{ diningItem.name }}</h2>
                            <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-6"></div>
                            <div v-html="diningItem.details" class="text-gray-600 mb-8 text-base leading-relaxed"></div>
                            <a :href="getDiningUrl(diningItem.name)" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-8 py-3 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl">
                                EXPLORE
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Section -->
        <section id="events-section" class="animate-section py-24 bg-white">
            <div class="container mx-auto px-6 mb-16">
                <div class="text-center">
                    <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('events-section') }">
                        <p class="text-gray-500 uppercase tracking-widest text-sm mb-6 font-semibold">EVENTS</p>
                        <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-gray-900">Elevate Your Gatherings</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto"></div>
                    </div>
                </div>
            </div>

            <!-- Desktop Layout -->
            <div class="hidden md:block">
                <div v-for="(event, index) in events" :key="event.id" class="mb-8 group">
                    <div class="flex h-[500px] overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-700">
                        <!-- Image Side -->
                        <div class="w-1/2 relative overflow-hidden" :class="{ 'order-2': index % 2 === 1 }">
                            <div class="h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" :style="{ backgroundImage: `url(/storage/d/${event.file})` }"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        </div>
                        
                        <!-- Content Side -->
                        <div class="w-1/2 bg-gradient-to-br from-gray-50 to-white flex items-center p-16" :class="{ 'order-1': index % 2 === 1 }">
                            <div class="transform transition-all duration-500 group-hover:translate-x-2">
                                <h2 class="text-4xl font-freigtNeo mb-6 text-gray-900">{{ event.name }}</h2>
                                <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-8"></div>
                                <div v-html="event.details" class="text-gray-600 mb-8 text-lg leading-relaxed"></div>
                                <a :href="getEventUrl(index)" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-10 py-4 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    EXPLORE
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Layout -->
            <div class="md:hidden px-6">
                <div v-for="event in events" :key="event.id" class="mb-16">
                    <div class="overflow-hidden rounded-2xl shadow-xl">
                        <div class="h-80 bg-cover bg-center" :style="{ backgroundImage: `url(/storage/d/${event.file})` }"></div>
                        <div class="bg-white p-8">
                            <h2 class="text-3xl font-freigtNeo mb-4 text-gray-900">{{ event.name }}</h2>
                            <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-6"></div>
                            <div v-html="event.details" class="text-gray-600 mb-8 text-base leading-relaxed"></div>
                            <a :href="getEventUrl(0)" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-8 py-3 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl">
                                EXPLORE
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wellness Section -->
        <section id="wellness-section" class="animate-section py-24 bg-gray-50">
            <div class="container mx-auto px-6 mb-16">
                <div class="text-center">
                    <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('wellness-section') }">
                        <p class="text-gray-500 uppercase tracking-widest text-sm mb-6 font-semibold">WELLNESS</p>
                        <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-gray-900">Rebalance & Renew</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto"></div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-6">
                <div v-for="wellnessItem in wellness" :key="wellnessItem.id" class="mb-8 group">
                    <div class="flex h-[500px] overflow-hidden rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-700">
                        <!-- Image Side -->
                        <div class="w-1/2 relative overflow-hidden">
                            <div class="h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" :style="{ backgroundImage: `url(/storage/d/${wellnessItem.file})` }"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                        </div>
                        
                        <!-- Content Side -->
                        <div class="w-1/2 bg-gradient-to-br from-gray-50 to-white flex items-center p-16">
                            <div class="transform transition-all duration-500 group-hover:translate-x-2">
                                <h2 class="text-4xl font-freigtNeo mb-6 text-gray-900">{{ wellnessItem.name }}</h2>
                                <div class="w-16 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mb-8"></div>
                                <div v-html="wellnessItem.details" class="text-gray-600 mb-8 text-lg leading-relaxed"></div>
                                <a href="/fitness_gym" class="inline-flex items-center bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-10 py-4 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                    EXPLORE
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section id="newsletter-section" class="animate-section hidden md:block bg-gradient-to-br from-gray-100 to-gray-200 py-24">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto text-center">
                    <div class="animate-fade-in-up" :class="{ 'animate-visible': visibleSections.has('newsletter-section') }">
                        <p class="text-gray-500 uppercase tracking-widest text-sm mb-6 font-semibold">CONNECT</p>
                        <h1 class="text-5xl md:text-7xl font-freigtNeo mb-8 text-gray-900">Subscribe to our Newsletter</h1>
                        <div class="w-24 h-1 bg-gradient-to-r from-mggold-100 to-mggold-200 mx-auto mb-12"></div>
                        <p class="text-gray-600 text-xl leading-relaxed mb-16 max-w-3xl mx-auto">
                            Stay informed of the latest happenings at Maagiri Hotel and be the<br>
                            first to receive our latest special offers.
                        </p>
                        
                        <form class="flex max-w-lg mx-auto gap-4 bg-white p-2 rounded-full shadow-xl">
                            <input type="email" placeholder="Your Email Address" required 
                                   class="flex-1 px-6 py-4 text-gray-700 placeholder-gray-400 focus:outline-none rounded-full">
                            <button type="submit" class="bg-gradient-to-r from-mggold-100 to-mggold-200 text-white px-10 py-4 rounded-full font-semibold hover:from-mggold-200 hover:to-mggold-300 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                                SUBSCRIBE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

<style scoped>
/* Custom Font */
.font-freigtNeo {
    font-family: 'Freight Neo Pro', serif;
}

/* Brand Colors */
.bg-mgblack-100 {
    background-color: #1a1a1a;
}

.text-mggrey-100 {
    color: #e5e5e5;
}

.text-mggrey-200 {
    color: #cccccc;
}

.bg-mggold-100 {
    background-color: #dcb38d;
}

.bg-mggold-200 {
    background-color: #c49d73;
}

.hover\:bg-mggold-200:hover {
    background-color: #c49d73;
}

.text-mggold-100 {
    color: #dcb38d;
}

.text-mggold-200 {
    color: #c49d73;
}

/* Hero Background */
.hero-bg {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

/* Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(60px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-60px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInDelay {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in-up {
    animation: fadeInUp 1s ease-out forwards;
    opacity: 0;
}

.animate-slide-in-left {
    animation: slideInLeft 1s ease-out 0.3s forwards;
    opacity: 0;
}

.animate-fade-in-delay {
    animation: fadeInDelay 1s ease-out 0.6s forwards;
    opacity: 0;
}

.animate-visible {
    animation-play-state: running;
}

/* Section Animations */
.animate-section {
    opacity: 1;
    transform: translateY(0);
    transition: all 0.8s ease-out;
}

.animate-section.animate-visible {
    opacity: 1;
    transform: translateY(0);
}

.animate-fade-in-up {
    opacity: 1;
    transform: translateY(0);
}

.animate-fade-in-up.animate-visible {
    opacity: 1;
    transform: translateY(0);
}

/* Transition Effects */
.slide-fade-enter-active {
    transition: all 0.4s ease-out;
}

.slide-fade-leave-active {
    transition: all 0.3s ease-in;
}

.slide-fade-enter-from {
    transform: translateX(100px);
    opacity: 0;
}

.slide-fade-leave-to {
    transform: translateX(100px);
    opacity: 0;
}

/* Enhanced Shadows */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Hover Effects */
.group:hover .group-hover\:scale-105 {
    transform: scale(1.05);
}

.group:hover .group-hover\:translate-x-2 {
    transform: translateX(8px);
}

/* Custom Heights */
.h-96 {
    height: 24rem;
}

.h-64 {
    height: 16rem;
}

.h-80 {
    height: 20rem;
}

.h-\[500px\] {
    height: 500px;
}

/* Image Optimizations */
.bg-cover {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Ensure proper image aspect ratios */
.aspect-video {
    aspect-ratio: 16 / 9;
}

.aspect-square {
    aspect-ratio: 1 / 1;
}

/* Gradient Overlays */
.bg-gradient-to-r {
    background-image: linear-gradient(to right, var(--tw-gradient-stops));
}

.bg-gradient-to-br {
    background-image: linear-gradient(to bottom right, var(--tw-gradient-stops));
}

.bg-gradient-to-b {
    background-image: linear-gradient(to bottom, var(--tw-gradient-stops));
}

/* Responsive Typography */
@media (max-width: 768px) {
    .text-5xl {
        font-size: 3rem;
    }
    
    .text-7xl {
        font-size: 4rem;
    }
    
    .text-4xl {
        font-size: 2.5rem;
    }
    
    .h-\[500px\] {
        height: 400px;
    }
    
    .p-16 {
        padding: 2rem;
    }
}

@media (max-width: 640px) {
    .text-5xl {
        font-size: 2.5rem;
    }
    
    .text-7xl {
        font-size: 3rem;
    }
    
    .text-4xl {
        font-size: 2rem;
    }
    
    .h-\[500px\] {
        height: 350px;
    }
    
    .p-16 {
        padding: 1.5rem;
    }
}

/* Smooth Scrolling */
html {
    scroll-behavior: smooth;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: #dcb38d;
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: #c49d73;
}
</style>
