<template>
    <div class=" min-h-screen md:pt-4 pb-2 px-2 md:px-0">
<main class="bglr mx-6 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl">
<div class="grid grid-cols-3 gap-4">

    <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">leave</h3>
            <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="nature_of_leave">nature of leave</label>
                    <input type="text" id="nature_of_leave" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="year">year</label>
                    <input type="number" id="year" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="start_date">start date</label>
                    <input type="date" id="start_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="end_date">end date</label>
                    <input type="date" id="end_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="no_of_days">no of days granted</label>
                    <input type="number" id="no_of_days" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="status">status</label>
                    <input type="text" id="status" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="comments">comments</label>
                    <input type="text" id="comments" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>

    </div>
    
    <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">executive appointment</h3>
            <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="designation">designation</label>
                    <input type="text" id="designation" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="appointment_date">appointment date</label>
                    <input type="date" id="appointment_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="status_current_out_of_office">status current out of office</label>
                    <input type="text" id="status_current_out_of_office" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
</div>

    <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">retirement</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="date_retired">date retired</label>
                    <input type="date" id="date_retired" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="status">status</label>
                    <input type="text" id="status" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
</div>
</div>
<div class="flex justify-between mt-2">
    <router-link class="focus:outline-none border-b-4 text-center border-gray-300 focus:border-green-600 bBtn text-white font-bold w-1/6 rounded shadow-lg hover:shadow-xl transition duration-200" to="/staffshow">save</router-link>
    <div class="">
 <router-link class="p-5 text-gray-500 font-bold text-3xl w-1/6 rounded" to="/gov">prev&larr;</router-link>
    <router-link class="p-5 text-gray-500 font-bold text-3xl w-1/6 rounded" to="/ler">next&rarr;</router-link>
</div>
</div>
</main>

</div>
</template>

<script setup>

</script>