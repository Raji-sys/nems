<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['b']);
</script>

<template>
     <tr class="p-6 border-t-2 text-center" >
       <td class="border-2 p-4 text-center">{{b.surname}} {{ b.first_name }} {{ b.middle_name }}</td>
       <td scope="row" class="border-2">{{b.staff_id}}</td>
      <td class="border-2 p-4 text-center">coming soon</td>
      <td class="border-2 p-4 text-center">coming soon</td>
      <td class="border-2 p-4 text-center">comming soon</td>
      <td class="border-2 p-4 text-center">coming soon</td>
      <td class="border-2 p-4 text-center">coming soon</td>
      <td class="border-2 p-4 text-center">coming soon</td>
      <td class="border-2 p-4 text-center">{{b.phone_number}}</td>
      <td class="border-2 p-4 text-center">{{b.state}}</td>
      <td class="border-2 p-4 text-center">{{b.lga}}</td>
      <td class="border-2 p-4 text-center">{{b.geo_political_zone}}</td>
      <td class="p-4  border-2 font-semibold"> <Link :href="route('show.bio',$page.props.bio )">open</Link></td>
    </tr>

  </template>
