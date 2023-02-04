<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';
 
const form = useForm({
    surname: '',
    first_name:'',
    middle_name: '',
    phone_number: '',
    state: '',
    geo_political_zone: '',
    lga: '',
    spouse: '',
    date_of_birth: '',
    place_of_birth:'',
    marital_status: '',
    hobbies: '',
    religion: '',
    senatorial_district:'',
        nationality:'',
        permanent_home_address:'',
        residential_address:'',
        name_of_children:'',
        number_of_children:'',
        dob_of_children:'',
        transferred_from:'',
        transfer_date:'',
        title:'',
        staff_id:'',
        gender:''
});
</script>
 
<template>
    <Head title="Bio" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 bg-slate-700">
            <form @submit.prevent="form.post(route('bio.store'), { onSuccess: () => form.reset() })">
                <input
                    v-model="form.surname"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.first_name"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.middle_name"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.phone_number"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.geo_political_zone"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.state"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.lga"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.spouse"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    type="date"
                    v-model="form.date_of_birth"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.marital_status"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.place_of_birth"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.hobbies"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.religion"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.nationality"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.senatorial_district"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.permanent_home_address"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.residential_address"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.staff_id"
                    type="number"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.title"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.gender"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.transferred_from"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                type="date"
                    v-model="form.transfer_date"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.name_of_children"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                type="date"
                    v-model="form.dob_of_children"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    type="number"
                    v-model="form.number_of_children"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                
                <PrimaryButton class="mt-4">Save</PrimaryButton>
            </form>
        </div>
    </AuthenticatedLayout>
</template>