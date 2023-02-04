<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 pt-2 md:pt-4 pb-6 px-20 md:px-0">
        <div
            class="border-2 border-green-600 w-full sm:max-w-lg bglr mx-auto mt-6 md:p-12 p-10 bg-white shadow-2xl overflow-hidden sm:rounded-lg backdrop-blur-sm bg-white/90"
        >
            <slot />
        </div>
    </div>
</template>
