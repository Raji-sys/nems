<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button
        :type="type"
        class=" focus:outline-none border-b-4 border-gray-300 focus:border-green-600 bBtn text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center min-w-full"
    >
        <slot />
    </button>
</template>
