<script setup>
import Bio from '@/Components/Bio.vue';
import  PrimaryButton  from '@/Components/PrimaryButton.vue';
import { useForm, Head, Link } from '@inertiajs/inertia-vue3';
 
defineProps(['bio','govap']);
</script>
 
<template>
  <section class="bod">
<div class="bg-white">

  <h1 class="text-lg text-center p-2 bg-white text-green-800 mb-1 shadow-xl">STAFF LIST</h1>
</div>
    <div class=" text-center m-4 ">
      <input type="text" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3 md:w-1/2 p-4" placeholder="search by file number"
      ><button class="focus:outline-none border-b-4 border-gray-300 focus:border-green-600 bBtn text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center" type="button">Search</button>
      </div>
    <div class=" text-center">
        <Link :href="route('regform')">
      <button class="focus:opacity-10 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 bBtn text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-1/2" type="button">ADD NEW STAFF</button>
    </Link>
      </div>
      <div class="flex justify-center p-1 mt-1 rounded-lg text-center shadow-2xl">
        
        <table class=" mt-0 max-sm:flex flex p-2">
      <tbody class="shadow-2xl text-sm rounded-lg max-sm:p-10 p-2 overflow-x-auto mx-0 text-green-800 border-green-600 bg-white">   
        <th scope="col" class="border-2 p-2">name</th>
        <th scope="col" class="border-2 p-2">file number</th>
        <th scope="col" class="border-2 p-2">ippis number</th>
        <th scope="col" class="border-2 p-2">department</th>
        <th scope="col" class="border-2 p-2">current post</th>
        <th scope="col" class="border-2 p-2">date of 1st appointment</th>
        <th scope="col" class="border-2 p-2">salary scale</th>
        <th scope="col" class="border-2 p-2">grade level/step</th>
        <th scope="col" class="border-2 p-2">phone number</th>
        <th scope="col" class="border-2 p-2">state</th>
        <th scope="col" class="border-2 p-2">LGA</th>
        <th scope="col" class="border-2 p-2">zone</th>
     <th scope="col" class=" border-2 p-2">full details</th>
                <Bio
                    v-for="b in bio"
                    :key="b.id"
                    :b="b"
                />
  </tbody>
</table>

</div>   
</section>

</template>