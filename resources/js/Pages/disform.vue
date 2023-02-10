<script setup>
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';
 
const form = useForm({
    offense:'',
    decision:'',
    date_of_offense:'',
    comment:'',
});
</script>
 
<template>
<!-- <Head title="Retirement" /> -->
<section class="bod">
<div class="min-h-screen md:pt-4 pb-2 px-2 md:px-0">
        <main class="m-20 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl mb-4 backdrop-blur-sm bg-white/90 ">
            <h3 class="mt-8  text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">leave-form</h3>
            <section class="text-center">
        <form @submit.prevent="form.post(route('gov.store'), { onSuccess: () => form.reset() })">
            <div class="flex flex-row flex-wrap justify-center gap-10 p-6">
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="offense">offense</label>
                    <input type="date" v-model="form.offense" id="offense" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="decision">decision</label>
                    <input type="text" v-model="form.decision" id="decision" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="date_of_offense">date_of_offense</label>
                    <input type="date" v-model="form.date_of_offense" id="date_of_offense" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="comment">comment</label>
                    <input type="text" v-model="form.comment" id="comment" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
            </div>
            <button class="mt-8 focus:outline-none border-b-4 focus:opacity-10 border-gray-300 focus:border-green-600 bBtn text-white  py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-1/2" type="submit" value="save">save</button>
            </form>
            </section>
            </main>
    </div> 
    </section>
</template>