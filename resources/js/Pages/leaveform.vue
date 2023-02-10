<script setup>
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';

const form = useForm({
    nature_of_leave: '',
    year: '',
    start_date: '',
    end_date: '',
    number_of_days_granted: '',
    approval_status: '',
    comments: '',
});
</script>
 
<template>
    <!-- <Head title="leave" /> -->
    <section class="bod">
        <div class="min-h-screen md:pt-4 pb-2 px-2 md:px-0">
            <main class="m-20 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl mb-4 backdrop-blur-sm bg-white/90 ">
                <h3 class="mt-8  text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">leave-form
                </h3>
                <section class="text-center">
                    <form @submit.prevent="form.post(route('gov.store'), { onSuccess: () => form.reset() })">
                        <div class="flex flex-row flex-wrap justify-center gap-10 p-6">
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="nature_of_leave">nature of leave</label>
                                <input type="text" v-model="form.nature_of_leave" id="nature_of_leave"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="year">year</label>
                                <input type="number" v-model="form.year" id="year"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="start_date">start
                                    date</label>
                                <input type="date" v-model="start_date" id="start_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3" for="end_date">end
                                    date</label>
                                <input type="date" v-model="end_date" id="end_date"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="number_of_days_granted">number of days granted</label>
                                <input type="number" v-model="form.number_of_days_granted" id="number_of_days_granted"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="approval_status">approval_status</label>
                                <input type="text" v-model="form.approval_status" id="approval_status"
                                    class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                                <InputError :message="form.errors.message" class="mt-2" />
                            </div>
                            <div class="mb-1 pt-1 rounded ">
                                <label class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="comments">comments</label>
                                <input type="number" v-model="form.comments_at_date_of_first_app" id="comments"
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