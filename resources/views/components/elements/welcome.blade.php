<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div x-data="{
        active: 0,
        images: [
            '{{ asset('images/Ratenggaro-1.jpg') }}',
            '{{ asset('images/Ratenggaro-2.jpg') }}',
        ],
        next() {
            this.active = (this.active + 1) % this.images.length;
        }
    }" x-init="setInterval(() => next(), 5000)" class="relative min-h-screen w-full overflow-hidden bg-red-200">

    <!-- Background Images -->
    <template x-for="(img, index) in images" :key="index">
        <div x-show="active === index" x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 " x-transition:enter-end="opacity-100 "
            x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 w-full h-full bg-cover bg-center z-0"
            :style="`background-image: url('${img}')`">
            <!-- Overlay Gelap agar teks mudah dibaca -->
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
    </template>

    <!-- Konten (Harus Relative dan Z-Index lebih tinggi) -->
    <div class="relative z-20 container mx-auto px-4 pt-80 pb-40">
        <div class="flex flex-col text-white">
            <h1 class="text-7xl font-bold mb-4">Expert Sumba <br>Travel Tips</h1>
            <p class="max-w-2xl">
                Discover comprehensive travel insights from local experts to make your Sumba Island journey
                unforgettable and hassle-free.
            </p>
            <a href="#discover"
                class="px-10 py-3 rounded-lg mt-4 w-fit border-2 border-white font-semibold  hover:bg-white hover:text-black">
                Explore Sumba Now
            </a>
        </div>
    </div>

    <!-- Divider (Pastikan ada kelas absolute) -->
    <x-svg.divider class="text-secondary-1 absolute bottom-0 left-0 right-0 z-20" />

</div>