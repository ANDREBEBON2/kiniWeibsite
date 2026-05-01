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
    <x-elements.navbar-dekstop class=" w-full" />
    <x-elements.welcome />
    <x-elements.discover />
</div>