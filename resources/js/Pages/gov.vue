<template>
        <div class=" min-h-screen md:pt-4 pb-2 px-2 md:px-0">
    <main class="bglr mx-6 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl">
<div class="grid grid-cols-3 gap-4">
         <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">government appointment</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="department/unit">department/unit</label>
                    <input type="text" id="department/unit" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="date_of_first_appointment">date of first appointment</label>
                    <input type="date" id="date_of_first_appointment" value="01-01-1959" min="01-01-1959" max="01-01-2024" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="type_of_appointment">type of appointment</label>
                    <input type="text" id="type_of_appointment" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="designation">designation</label>
                    <input type="text" id="designation" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="salary_per_annum">salary per annum at date of first appointment</label>
                    <input type="text" id="salary_per_annum" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="salary_scale">salary scale</label>
                    <input type="text" id="salary_scale" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="grade_level">grade level</label>
                    <input type="text" id="grade_level" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="step">step</label>
                    <input type="text" id="step" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>

    </div>
    <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">promotion</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="current_post">current post</label>
                    <input type="text" id="current_post" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="promoted_date">promoted date</label>
                    <input type="date" id="promoted_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="grade_level">grade level</label>
                    <input type="text" id="grade_level" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="step">step</label>
                    <input type="text" id="step" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="increment_date">increment date</label>
                    <input type="date" id="increment_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="confirmation_date">confirmation date</label>
                    <input type="date" id="confirmation_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <!-- <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="transferred_date">transferred date</label>
                    <input type="text" id="transferred_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div> -->
    </div>
    <div>
        <h3 class="font-bold text-lg text-gray-800 text-center underline">discipline</h3>
            <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="offense">offense</label>
                    <input type="text" id="offense" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="decision">decision</label>
                    <input type="text" id="decision" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="date">date</label>
                    <input type="date" id="date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="comment">comment</label>
                    <input type="text" id="comment" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>

    </div>
    </div>
    <div class="flex justify-between mt-2">
    <router-link class="focus:outline-none border-b-4 text-center border-gray-300 focus:border-green-600 bBtn text-white font-bold w-1/6 rounded shadow-lg hover:shadow-xl transition duration-200" to="/staffshow">save</router-link>
    <div class="">
 <router-link class="p-5 text-gray-500 font-bold text-3xl w-1/6 rounded" to="/regform">prev&larr;</router-link>
    <router-link class="p-5 text-gray-500 font-bold text-3xl w-1/6 rounded" to="/ler">next&rarr;</router-link>
</div>
</div>
    </main>

</div>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>