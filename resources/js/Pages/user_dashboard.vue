<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

</script>
<template>
<section class="bod">
<GuestLayout>
    <div class="p-8">
<p class="mb-6"><span class=" text-5xl text-green-600">Welcome,</span> <span class="text-lg font-semibold">{{ $page.props.auth.user.name }}</span></p>
<p class="mb-6 font-semibold text-md text-orange-600">click the start button below to begin your <span class="text-orange-700 font-bold">documentation</span></p>
<Link :href="route('regform')" class=" px-12 py-4 bg-cyan-600 hover:text-white hover:bg-green-600 text-white text-center rounded shadow-2xl">start</Link>
    </div>   
</GuestLayout>
</section>
</template>