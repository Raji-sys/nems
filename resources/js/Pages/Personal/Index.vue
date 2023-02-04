<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Personal from '@/Components/Personals.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head, Link } from '@inertiajs/inertia-vue3';
 
defineProps(['personal'])

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
    hobbies: '',
    religion: '',
    senatorial_district:'',
    nationality: '',
    place_of_birth:'',
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
    <Head title="Personal" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 bg-slate-700">

            <Link :href="route('create')">add</Link>
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <Personal
                    v-for="p in personal"
                    :key="p.id"
                    :p="p"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>