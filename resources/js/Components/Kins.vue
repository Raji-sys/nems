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

const props=defineProps(['kin']);

const form = useForm({
    name: props.kin.name,
    phone:props.kin.phone,
    email: props.kin.email,
    address: props.kin.address,
    relationship: props.kin.relationship,
    // passport: props.kin.passport,
    transfer_by: props.kin.transfer_by,
    transfer_date:props.kin.transfer_date,
});

const editing = ref(false);
</script>
 
<template>
    <!-- <div class="p-6 flex space-x-2"> -->
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-gray-800">{{ kin.user.name }}</span>
                    <small class="ml-2 text-sm text-gray-600">{{ dayjs(kin.created_at).fromNow() }}</small>
                    <small v-if="kin.created_at !== kin.updated_at" class="text-sm text-gray-600"> &middot;edited</small>
                </div>
                <Dropdown v-if="kin.user.id === $page.props.auth.user.id">
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
                        <DropdownLink as="button" :href="route('kins.destroy', kin.id)" method="delete">
                            Delete
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
            <form v-if="editing" @submit.prevent="form.put(route('kins.update', kin.id), { onSuccess: () => editing = false })">
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
            </form>
        </div>
    </div> -->
    <h1 class="text-green-700 text-2xl text-center p-3">
              {{kin.user.name}}
              Kin</h1>
            <table class="shadow-2xl table-auto mt-0 max-sm:flex flex P-2">
      <tbody class=" text-sm rounded-lg max-sm:p-10 p-14 overflow-x-auto mx-0">
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">name</th>
        <th scope="row" class="border-r-2 p-2 text-md text-green-800">phone</th>
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">email</th>
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">address</th>
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">relationship</th>
        <!-- <th scope="col" class="border-r-2 p-2 text-md text-green-800">passport</th> -->
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">transfer_by</th>
        <th scope="col" class="border-r-2 p-2 text-md text-green-800">transfer_date</th>
     <tr class="p-6 border-t-2 text-center">
       <td class="border-r-2 p-4 text-center">{{kin.name}} </td>
       <td scope="row" class="border-r-2">{{ kin.phone }}</td>
      <td class="border-r-2 p-4 text-center">{{kin.email}}</td>
      <td class="border-r-2 p-4 text-center">{{kin.address}}</td>
      <td class="border-r-2 p-4 text-center">{{kin.relationship}}</td>
      <!-- <td class="border-r-2 p-4 text-center">{{kin.passport }}</td> -->
      <td class="border-r-2 p-4 text-center">{{kin.transfer_by }}</td>
      <td class="border-r-2 p-4 text-center">{{kin.transfer_date }}</td>
      <td class="p-4 font-semibold"> 
        <Link to="/editPI"><p class="text-green-800 border-b-4">edit</p></Link>
        <!-- <Link :href="route('kins.create')"><p class="text-rose-800">new entry</p></Link> -->
      <Link to="removePI"> <p class="text-amber-600 border-t-4">remove</p></Link>
      </td>
    </tr>
  </tbody>
  </table>
</template>