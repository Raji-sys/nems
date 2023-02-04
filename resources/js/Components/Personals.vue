<script setup>

import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

// import dayjs from 'dayjs';
// import relativeTime from 'dayjs/plugin/relativeTime';

import { useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

// dayjs.extend(relativeTime);

const props=defineProps(['personal']);

const form = useForm({
    surname: props.personal.surname,
    first_name:props.personal.first_name,
    middle_name: props.personal.middle_name,
    phone_number: props.personal.phone_number,
    state: props.personal.state,
    geo_political_zone: props.personal.geo_political_zone,
    lga: props.personal.lga,
    spouse: props.personal.spouse,
    date_of_birth: props.personal.date_of_birth,
    place_of_birth: props.personal.place_of_birth,
    marital_status: props.personal.marital_status,
    hobbies: props.personal.hobbies,
    religion: props.personal.religion,
    senatorial_district:props.personal.senatorial_district,
        nationality:props.personal.nationality,
        permanent_home_address:props.personal.permanent_home_address,
        residential_address:props.personal.residential_address,
        name_of_children:props.personal.name_of_children,
        number_of_children:props.personal.number_of_children,
        dob_of_children:props.personal.dob_of_children,
        transferred_from:props.personal.transferred_from,
        transfer_date:props.personal.transfer_date,
        title:props.personal.title,
        staff_id:props.personal.staff_id,
        gender:props.personal.gender
});

const editing = ref(false);
</script>
 
<template>
     <div class="p-6 flex space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
        <div class="flex-1">
            <span class="text-gray-800">{{ personal.user.name }}</span>
            <!-- <div class="flex justify-between items-center">
                <div>
                    <small class="ml-2 text-sm text-gray-600">{{ dayjs(personal.created_at).fromNow() }}</small>
                    <small v-if="personal.created_at !== personal.updated_at" class="text-sm text-gray-600"> &middot;edited</small>
                </div>
                <Dropdown v-if="personal.user.id === $page.props.auth.user.id">
                    <template #trigger>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                    </template>
                    <template #content>
                        <button class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:bg-gray-100 transition duration-150 ease-in-out" @click="editing = true">
                            Edit
                        </button>
                        <DropdownLink as="button" :href="route('personals.destroy', personal.id)" method="delete">
                            Delete
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>  -->
            <!-- <form v-if="editing" @submit.prevent="form.put(route('personals.update', personal.id), { onSuccess: () => editing = false })">
                <textarea v-model="form.message" class="mt-4 w-full text-gray-900 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                <input
                    v-model="form.slug"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <div class="space-x-2">
                    <PrimaryButton class="mt-4">Save</PrimaryButton>
                    <button class="mt-4" @click="editing = false; form.reset(); form.clearErrors()">Cancel</button>
                </div>
                 </form> -->
            <p  class="mt-4 text-lg text-gray-900">{{ p.surname }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.first_name }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.spouse }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.lga }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.phone_number }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.geo_political_zone }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.date_of_birth }}</p>
            <p class="mt-4 text-lg text-gray-900">{{ p.place_of_birth }}</p>
            <p class="mt-4 text-lg text-gray-900">martial: {{ p.marital_status }}</p>
            <p class="mt-4 text-lg text-gray-900">hobbies: {{ p.hobbies }}</p>
            <p class="mt-4 text-lg text-gray-900">religion: {{ p.religion }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.senatorial_district }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.nationality }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.title }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.gender }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.number_of_children }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.name_of_children }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.dob_of_children }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.transferred_from }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.transfer_date }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.staff_id }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.permanent_home_address }}</p>
            <p class="mt-4 text-lg text-gray-900">: {{ p.residential_address }}</p>
        </div>
    </div>
</template>