<?php

use Illuminate\Support\Facades\Http;

use function Laravel\Folio\{name};
use function Livewire\Volt\{with, state, rules, mount};

name('about');
?>

<style>
    .dark img[alt="Genesis Logo"]{ filter: invert(1); }
</style>

<x-layouts.marketing>

    <x-slot name="header">
        <h2 class="text-lg font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Learn More') }}
        </h2>
    </x-slot>

    @volt('about')
        <div class="relative w-full mx-auto max-w-7xl sm:px-10">
            <p class="hidden text-sm font-medium leading-none text-gray-500 translate-y-5 sm:block">How's it going my man?</p>
            <article class="flex flex-col justify-center w-full p-10 mx-auto prose-sm prose bg-white border rounded-md shadow-sm prose-md dark:prose-invert lg:prose-lg max-w-7xl sm:my-10 border-gray-200/60 dark:bg-gray-900/50 dark:border-gray-200/10">
                Hello Dude
            </article>
        </div>
    @endvolt
</x-layouts.app>