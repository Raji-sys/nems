<script setup>

import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

defineProps(['g']);
            
const editing = ref(false);
</script>
 
<template>
  <div>
   <h1 class="text-green-700 text-2xl text-center p-3">
      <!-- {{bio.surname }}  -->
      <!-- {{g.bio.staff_id }} 
      {{g.bio.id }}  -->
    </h1>
      <table class="shadow-2xl table-auto mt-0 max-sm:flex flex P-2">
      <tbody class=" text-sm rounded-lg max-sm:p-10 p-14 overflow-x-auto mx-0">
        <th scope="col" class="border-2 p-2 text-md text-green-800">department</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">unit</th>
        <th scope="row" class="border-2 p-2 text-md text-green-800">date of first appointment</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">type of appointment</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">designation</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">salary per annum at first appointment</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">salary scale</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">grade level</th>
        <th scope="col" class="border-2 p-2 text-md text-green-800">step</th>
     <th scope="col" class=" p-2 border-2 text-green-800">manage</th>
    
     <tr class="p-6 border-t-2 text-center">
      <td class="border-2 p-4 text-center">{{g.department}}</td>
      <td class="border-2 p-4 text-center">{{g.unit}}</td>
      <td class="border-2 p-4 text-center">{{g.date_of_first_app}}</td>
      <td class="border-2 p-4 text-center">{{g.type_of_appointment}}</td>
      <td class="border-2 p-4 text-center">{{g.designation_post}}</td>
      <td class="border-2 p-4 text-center">{{g.salary_per_annum_at_date_of_first_app}}</td>
      <td class="border-2 p-4 text-center">{{g.salary_scale}}</td>
      <td class="border-2 p-4 text-center">{{g.grade_level}}</td>
      <td class="border-2 p-4 text-center">{{g.step}}</td>
      <td class="p-4 border-2 font-semibold"> 
        <Link to="/editGA"><p class="text-green-800 border-b-4">edit</p></Link>
        <Link to="/newEnteryGA"><p class="text-rose-800">new entry</p></Link>
        <Link to="removeGA"> <p class="text-amber-600 border-t-4">remove</p></Link>  
      </td>
    </tr>
    </tbody>
  </table>
  </div>

</template>