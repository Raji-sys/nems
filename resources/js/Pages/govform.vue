<script setup>
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';
 
const form = useForm({
    department:'',
    unit:'',
    date_of_first_app:'',
    type_of_appointment:'',
    designation_post:'',
    salary_per_annum_at_date_of_first_app:'',
    salary_scale:'',
    grade_level:'',
    step:'',
});
</script>
 
<template>
<Head title="Government Apppointment" />
    <div>
        <form @submit.prevent="form.post(route('gov.store'), { onSuccess: () => form.reset() })">
<!-- 
            <select v-model="form.bio_id" >
  <option value="1">bio 1</option>
  <option value="2">bio 2</option>                      
  <option value="3">bio 3</option>                      
  <option value="100">bio 100</option>                      
</select> -->
<!-- <select name="bio_id" id="bio_id" v-model="form.bio_id">
<option v-for="b in bio_id" :key="b.id" :value="b.id">{{ b.id }}</option>
</select> -->
                    <h3 class="font-bold text-lg text-gray-800 text-center underline">government appointment</h3>
                <!-- <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="bio">bio_id</label>
                    <input type="number" v-model="form.bio_id" id="bio" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div> -->
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="department">department</label>
                    <input type="text" v-model="form.department" id="department" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="unit">unit</label>
                    <input type="text" v-model="form.unit" id="unit" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="date_of_first_appointment">date of first appointment</label>
                    <input type="date" v-model="form.date_of_first_app" id="date_of_first_appointment" min="01-01-1959" max="01-01-2024" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="type_of_appointment">type of appointment</label>
                    <input type="text" v-model="form.type_of_appointment" id="type_of_appointment" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="designation">designation</label>
                    <input type="text" v-model="form.designation_post" id="designation" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="salary_per_annum">salary per annum at date of first appointment</label>
                    <input type="number" v-model="form.salary_per_annum_at_date_of_first_app" id="salary_per_annum" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="salary_scale">salary scale</label>
                    <input type="text" v-model="form.salary_scale" id="salary_scale" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="grade_level">grade level</label>
                    <input type="text" v-model="form.grade_level" id="grade_level" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="step">step</label>
                    <input type="text" v-model="form.step" id="step" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                    <InputError :message="form.errors.message" class="mt-2" />                
                </div>
                <button class="mt-8 focus:outline-none border-b-4 focus:opacity-10 border-gray-300 focus:border-green-600 bBtn text-white  py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-1/2" type="submit" value="save">save</button>
            </form>
    </div> 
</template>