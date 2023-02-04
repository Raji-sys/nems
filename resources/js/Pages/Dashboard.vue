<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <section class="">

    <Head title="Dashboard" />
    
    <AuthenticatedLayout>
    <div class=" min-h-screen md:pt-0 md:px-0">  
  <div class="grid md:grid-cols-3 gap-4 content-center p-12 border-b-2 text-center ">
     
    <Link :href="route('departments')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-lime-100 to to-lime-300 p-8 shadow-lg text-lg rounded-md ">
        departments
      </div>
    </Link>
    <Link :href="route('bio.index')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-blue-100 to to-blue-300 p-8 shadow-lg text-lg rounded-md ">
        staff
      </div>
    </Link>
    <Link :href="route('bio.index')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-red-100 to to-rose-300 p-8 shadow-lg text-lg rounded-md ">
        leave
      </div>
    </Link>
    <Link :href="route('bio.index')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-yellow-100 to to-yellow-300 p-8 shadow-lg text-lg rounded-md ">
        salaries
      </div>
    </Link>
    <Link :href="route('bio.index')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-gray-100 to to-gray-300 p-8 shadow-lg text-lg rounded-md ">
        retirement
      </div>
    </Link>
    <Link :href="route('bio.index')" class="text-xl text-gray-800" >
    <div class=" bg-gradient-to-r from-purple-400  to-neutral-300 p-8 shadow-lg text-lg rounded-md ">
        pension
      </div>
    </Link>


  </div>
  <div class="grid md:grid-cols-2 gap-10 p-10 text-center bod mb-0">
    <!-- <div class="p-28 bg-gradient-to-l from-purple-300  to-blue-700 via-rose-400  shadow-lg rounded-xl text-xl text-gray-700">report</div>
    <div class="p-28 bg-gradient-to-l from-purple-300  to-blue-700 via-rose-400  shadow-lg rounded-xl text-xl text-gray-700">statistics</div> -->
    <div class="p-28 shadow-2xl rounded-xl text-xl text-gray-700 bg-slate-50">report</div>
    <div class="p-28  shadow-2xl rounded-xl text-xl text-gray-700 bg-slate-50">statistics</div>
  </div>
</div>

    </AuthenticatedLayout>
  </section>
</template>
