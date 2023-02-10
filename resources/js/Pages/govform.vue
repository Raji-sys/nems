<script setup>
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';

const form = useForm({
    department: '',
    unit: '',
    date_of_first_app: '',
    type_of_appointment: '',
    designation_post: '',
    salary_per_annum_at_date_of_first_app: '',
    salary_scale: '',
    grade_level: '',
    step: '',
    current_post: '',
    promoted_date: '',
    increment_date: '',
    exec_confirmation_date: '',
    exec_appointment_date: '',
    exec_status_current_out_of_office: ''
});
</script>
 
<template>
    <!-- <Head title="Government Apppointment" /> -->
    <section class="bod">
        <div class="min-h-screen md:pt-4 pb-2 px-2 md:px-0">
            <main class="m-20 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl mb-4 backdrop-blur-sm bg-white/90 ">
                <h3 class="mt-8  text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">government
                    appointment</h3>
                <section class="text-center">
                    <form @submit.prevent="form.post(route('gov.store'), { onSuccess: () => form.reset() })">
                        <!-- <select name="bio_id" id="bio_id" v-model="form.bio_id">
<option v-for="b in bio_id" :key="b.id" :value="b.id">{{ b.id }}</option>
</select> -->
                        <div class="flex flex-row flex-wrap justify-center gap-10 p-6">
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="department">department</label>
                                <input type="text" v-model="form.department" id="department"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="unit">unit</label>
                                <input type="text" v-model="form.unit" id="unit"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="date_of_first_appointment">date of first appointment</label>
                                <input type="date" v-model="form.date_of_first_app" id="date_of_first_appointment"
                                    min="01-01-1959" max="01-01-2024"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="type_of_appointment">type of appointment</label>
                                <input type="text" v-model="form.type_of_appointment" id="type_of_appointment"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="designation">designation</label>
                                <input type="text" v-model="form.designation_post" id="designation"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="salary_per_annum">salary per annum at date of first appointment</label>
                                <input type="number" v-model="form.salary_per_annum_at_date_of_first_app"
                                    id="salary_per_annum"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="salary_scale">salary
                                    scale</label>
                                <input type="text" v-model="form.salary_scale" id="salary_scale"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="grade_level">grade
                                    level</label>
                                <input type="text" v-model="form.grade_level" id="grade_level"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="step">step</label>
                                <input type="text" v-model="form.step" id="step"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="current_post">current post</label>
                                <input type="text" v-model="form.current_post" id="current_post"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="promoted_date">promoted date</label>
                                <input type="date" v-model="form.promoted_date" id="promoted_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="increment_date">increment date</label>
                                <input type="date" v-model="form.increment_date" id="increment_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="confirmation_date">confirmation date</label>
                                <input type="date" v-model="form.exec_confirmation_date" id="confirmation_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="exec_appointment_date">exec_appointment_date</label>
                                <input type="date" v-model="form.exec_appointment_date" id="exec_appointment_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="exec_status_current_out_of_office">executive status current out of
                                    office</label>
                                <input type="text" v-model="form.exec_status_current_out_of_office" id="step"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                        </div>
                        <button
                            class="mt-8 focus:outline-none border-b-4 focus:opacity-10 border-gray-300 focus:border-green-600 bBtn text-white  py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-1/2"
                            type="submit" value="save">save</button>
                    </form>
                </section>
            </main>
        </div>
    </section>
</template>