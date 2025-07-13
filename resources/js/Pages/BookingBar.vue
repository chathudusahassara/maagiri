<template>
<div id="bookBarContent" class="w-full shadow-gray-900 backdrop-blur-md bg-black bg-opacity-10 p-4  mb-8 border-2 border-mgblack-200 hidden md:block rounded-full">
    <div class="container mx-auto px-4">
        <form method="GET" action="https://reservations.maagirihotel.com/booking/book-rooms-11448?">
            <div class="flex items-center justify-center gap-8 lg:gap-16">
                <!-- Rooms Dropdown -->
                <div class="relative">
                    <select 
                        class="bg-transparent text-white text-base pb-2 pr-8 border-0 border-b-2 border-mggold-100 focus:outline-none focus:border-mggold-100 appearance-none min-w-[120px] rounded-sm" 
                        id="bookBarRooms" 
                        name="eZ_room"
                    >
                        <option value="1" class="bg-gray-800 text-white">1 Room</option>
                        <option value="2" class="bg-gray-800 text-white">2 Rooms</option>
                        <option value="3" class="bg-gray-800 text-white">3 Rooms</option>
                        <option value="4" class="bg-gray-800 text-white">4 Rooms</option>
                    </select>
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-4 h-4 text-mggold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <input type="hidden" name="HotelId" value="11448">
                </div>

                <!-- Guests Dropdown -->
                <div class="relative">
                    <select 
                        class="bg-transparent text-white text-base pb-2 pr-8 border-0 border-b-2 border-mggold-100 focus:outline-none focus:border-mggold-100 appearance-none min-w-[120px]" 
                        id="bookBarGuests" 
                        name="eZ_adult"
                    >
                        <option value="1" class="bg-gray-800 text-white">1 Guest</option>
                        <option value="2" class="bg-gray-800 text-white">2 Guests</option>
                        <option value="3" class="bg-gray-800 text-white">3 Guests</option>
                        <option value="4" class="bg-gray-800 text-white">4 Guests</option>
                    </select>
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-4 h-4 text-mggold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Date Range Input -->
                <div class="relative">
                    <input 
                        type="text" 
                        class="bg-transparent text-white text-base pb-2 pr-8 border-0 border-b-2 border-mggold-100 focus:outline-none focus:border-mggold-100 placeholder-gray-400 min-w-[240px]" 
                        name="daterange" 
                        id="bookBarDate"
                        value="13/07/2025 - 14/07/2025"
                        readonly
                    >
                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 pointer-events-none">
                        <svg class="w-5 h-5 text-mggold-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <input type="hidden" name="eZ_chkin" id="eZ_chkin">
                    <input type="hidden" name="eZ_chkout" id="eZ_chkout">
                    <input type="hidden" name="calformat" value="">
                    <input type="hidden" name="promotioncode">
                    <input type="hidden" name="eZ_Nights" value="">
                    <input type="hidden" name="eZ_child" value="0">
                </div>

                <!-- Submit Button -->
                <div>
                    <button 
                        type="submit" 
                        class="border-2 border-mggold-100 text-mggold-100 hover:bg-mggold-100 hover:text-white px-8 py-2 transition-all duration-200 font-medium whitespace-nowrap rounded-sm"
                    >
                        CHECK AVAILABILITY
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>
<style>
/* Remove default select styling */
select {
    background-image: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

select::-ms-expand {
    display: none;
}

/* Custom option styling */
select option {
    background-color: #1f2937;
    color: white;
}

/* Remove input background and styling */
input[type="text"] {
    background-image: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

/* Focus states */
.focus\:border-orange-400:focus {
    border-color: #fb923c;
}

/* Ensure proper spacing and alignment */
.border-b-2 {
    border-bottom-width: 2px;
}

/* Date input cursor */
#bookBarDate {
    cursor: pointer;
}
</style>