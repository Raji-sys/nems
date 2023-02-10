<script setup>
import { ref } from 'vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen ">
            <nav class="text-gray-700 hover:text-gray-700 bod shadow-2xl p-2  ">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
    <div class="w-full flex flex-wrap items-center justify-between px-6">
    <div class="">
        <NavLink :href="route('dashboard')" method="get" as="button" class="text-xl text-gray-100">dashboard</NavLink>
    </div>
    <div class="hidden sm:flex">
        <span class=" text-sm text-gray-100 ">welcome, {{ $page.props.auth.user.name }}
        <NavLink :href="route('profile.edit')" method="get" as="button" class="text-xl text-gray-100">profile</NavLink></span>
    </div>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <NavLink :href="route('logout')" method="post" as="button" class="px-8 py-2 bg-green-600 hover:text-white hover:bg-red-600 text-white focus:text-white rounded shadow-2xl text-center">sign out</NavLink>
    </div>
  </div>
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        
                        <div class="mt-3 space-y-1">
                            <p class=" text-sm text-green-800 ml-2">welcome, {{ $page.props.auth.user.name }}</p>
                   <p><NavLink :href="route('profile.edit')" method="get" as="button" class="ml-2 text-xl text-green-800">profile</NavLink></p>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button" class="w-1/4 bg-green-600 hover:text-white hover:bg-red-600 text-white rounded shadow-2xl text-center">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>