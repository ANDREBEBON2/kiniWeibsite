<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return view('components.pages.welcome')->layout('components.master.user', ['title' => 'Welcome']);
    }
};
?>

<div class="flex flex-col h-auto">
    <x-partials.welcome-text />
    <x-svg.divider class="text-gray-100 " />
</div>
