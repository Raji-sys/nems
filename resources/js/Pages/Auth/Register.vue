<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <section class="bod">

        <GuestLayout>
            <Head title="Register" />
        <section class="text-center border-b-2 p-1 border-green-600">
            <!-- <h3 class="font-bold text-lg  text-green-700 ">ENLIGHTEN</h3> -->
            <p class="text-gray-800 pt-2 mb-2">create your account</p>

        </section>

        <form @submit.prevent="submit">
            <div class="mb-6 pt-2 rounded">
                <InputLabel for="name" value="Name" class=""/>

                <TextInput
                    id="name"
                    type="text"
                    placeholder="enter your fullname"
                    class=""
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-2">
                <InputLabel for="email" value="Email" class="" />

                <TextInput
                    id="email"
                    type="email"
                    placeholder="enter your email address"
                    class=""
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-2">
                <InputLabel for="password" value="Password" class="" />

                <TextInput
                    id="password"
                    type="password"
                    placeholder="enter your password"
                    class=""
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-2">
                <InputLabel for="password_confirmation" value="Confirm Password" class=""/>

                <TextInput
                    id="password_confirmation"
                    type="password"
                    placeholder="confirm your password"
                    class=""
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>
                <PrimaryButton class="mt-2" :class="{ 'opacity-10': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
                <p class="flex items-center mt-2">
                <Link
                    :href="route('login')"
                    class="underline text-md text-green-600">
                    Login instead
                </Link>
            </p>
        </form>
    </GuestLayout>
</section>
</template>
