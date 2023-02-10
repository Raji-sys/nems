<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template >
    <section class="bod">

        <GuestLayout>
            
    <Head title="start" />
    <section class="dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl lg:gap-2 xl:gap-0 lg:py-6 lg:grid-cols-12">
        <div v-if="canLogin" class="text-center place-self-center mr-auto lg:col-span-7">
            
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="justify-center mr-10 mt-8 focus:outline-none border-b-4 focus:opacity-10 border-gray-300 focus:border-green-600 bBtn text-white  py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-full"
                >Dashboard</Link>

            <div v-else class="text-center">
                <h1 class="mb-4 max-w-2xl text-4xl font-bold text-green-700 leading-none md:text-5xl xl:text-6xl dark:text-white">ENLIGHTEN</h1>
                <p class="mb-6 max-w-2xl font-medium text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 border-b-2 border-green-600 p-2">employee management system</p>
                
                <Link :href="route('login')" 
                class="focus:opacity-10 mr-4 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 bBtn text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center min-w-full">
                Login
            </Link>
            
            <Link v-if="canRegister" 
            :href="route('register')"
            class="focus:opacity-10 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 bBtn text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center min-w-full">
            Register
        </Link> 
    </div>
    
</div>                
</div>
</section>
</GuestLayout>
</section>
</template>
