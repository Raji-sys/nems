<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Kin from '@/Components/Kins.vue';
import { useForm, Head, Link } from '@inertiajs/inertia-vue3';
 
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
           
            <Link :href="route('kincreate')">add</Link>
            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <Kin
                    v-for="kin in kins"
                    :key="kin.id"
                    :kin="kin"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>