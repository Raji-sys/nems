<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block text-gray-700 text-sm font-bold mb-2 ml-3">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
