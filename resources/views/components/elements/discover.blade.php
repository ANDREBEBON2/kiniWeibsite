<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="bg-secondary-1 h-auto flex flex-col relative min-h-dvh items-center justify-center" id="discover">
    <div class="content pb-10 sm:pb-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            {{-- Text --}}
            <div class="flex space-y-5 flex-col justify-center">
                <h1 class="text-2xl md:text-5xl font-bold leading-tight">Discover Sumba Island with <br> Your Travel
                    Bestie</h1>
                <p class="text-lg text-justify md:text-start">At KINI Your Travel Bestie, we are passionate about
                    unveiling the
                    hidden gems of
                    Sumba Island. Our
                    mission is to provide travelers with insider tips and personalized recommendations that transform
                    your visit into an unforgettable adventure. Whether you're seeking pristine beaches, cultural
                    experiences, or unique culinary delights, our dedicated team ensures you have everything you need to
                    explore this beautiful island like a local. Let us be your guide to discovering the wonders of Sumba
                    Island.</p>
            </div>

            {{-- images --}}
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/praijing.jpg') }}" alt="Sumba Island"
                    class="w-full h-auto rounded-lg shadow-lg " />
            </div>
        </div>
    </div>

    <x-svg.divider class="text-secondary-3 absolute bottom-0 right-0 left-0 -scale-x-100" />
</div>