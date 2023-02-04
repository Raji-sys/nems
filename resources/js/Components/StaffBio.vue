<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps(['g']);
</script>

<template>
     <tr class="p-6 border-t-2 text-center">
        <td class="border-2 p-4 text-center">{{g.unit}}</td>
        <td class="border-2 p-4 text-center">{{g.unit}}</td>
        <td class="border-2 p-4 text-center">12/02/2022</td>
        <td class="border-2 p-4 text-center">probational</td>
        <td class="border-2 p-4 text-center">designation</td>
      <td class="border-2 p-4 text-center">39,999,999</td>
      <td class="border-2 p-4 text-center">myhess</td>
      <td class="border-2 p-4 text-center">08</td>
      <td class="border-2 p-4 text-center">03</td>
      <td class="p-4  font-semibold"> 
        <Link to="/editGA"><p class="text-green-800 border-b-4">edit</p></Link>
        <Link to="/newEnteryGA"><p class="text-rose-800">new entry</p></Link>
        <Link to="removeGA"> <p class="text-amber-600 border-t-4">remove</p></Link>
      </td>
    </tr>

  </template>
