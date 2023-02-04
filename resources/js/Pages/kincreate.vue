<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/inertia-vue3';
 
defineProps(['kins'])

const form = useForm({
    name: '',
    phone:'',
    email: '',
    address: '',
    relationship: '',
    // passport: '',
    transfer_by: '',
    transfer_date:'',
});
</script>
 
<template>
    <Head title="Kins" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 bg-slate-700">
            <form @submit.prevent="form.post(route('kin.store'), { onSuccess: () => form.reset() })">
                <input
                    v-model="form.name"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    type="number"
                    v-model="form.phone"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.email"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.address"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <input
                    v-model="form.relationship"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />
                <!-- <input
                    v-model="form.passport"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" /> -->
                <input
                    v-model="form.transfer_by"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />                
                <input
                    type="date"
                    v-model="form.transfer_date"
                    placeholder="something small?"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <InputError :message="form.errors.message" class="mt-2" />                
                <PrimaryButton class="mt-4">save</PrimaryButton>
            </form>

        </div>
    </AuthenticatedLayout>
</template>