<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
<section class="bod">

    <GuestLayout>
        <Head title="Log in" />
        <section class=" text-center border-b-2 border-green-600 p-2">
            <h3 class="font-bold text-lg text-green-700">NOHD EMPLOYEE MANAGEMENT SYSTEM</h3>
            <p class="text-gray-800 pt-4 mb-2">sign in to your account</p>
        </section>
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div class="mb-6 pt-6 rounded">
                <InputLabel class="" for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    placeholder="enter your email"
                    class=""
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel class="" for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    placeholder="enter your password"
                    class=""
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <PrimaryButton class="mt-2" :class="{ 'opacity-10': form.processing }" :disabled="form.processing">
                Log in
            </PrimaryButton>
            <p class="flex items-center mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-md text-green-600"
                >Forgot your password?
                </Link>

            </p>
            <p class="flex items-center mt-4">
                don't have an account? register
                <Link
                    :href="route('register')"
                    class="underline text-md text-green-600 ml-1"
                >here
                </Link>
            </p>
        </form>
    </GuestLayout>
</section>
</template>
