<script setup>
import Gov from '@/Components/Gov.vue';
import { Head } from '@inertiajs/inertia-vue3';
 
defineProps(['govap']);
</script>
 
<template>
    <Head title="Govt App"/>
                <Gov
                    v-for="g in govap"
                    :key="g.id"
                    :g="g"
                />
            <h1>Hellooo it's so sloww</h1>
</template>