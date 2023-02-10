<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import Index from '@/pages/Gov/Index.vue';

const tab = ref(1);
function currentTab(tabNumber) {
  tab.value = tabNumber
  return { tab, currentTab };
}

defineProps(['bio', 'govap']);
</script>
<template>
  <section class="bod">

    <h1 class="text-lg text-center p-6 text-green-700 mb-2 shadow-xl bg-white">STAFF PAGE</h1>
    <span class=" text-sm text-green-800 ">welcome, {{ $page.props.auth.user.name }}</span>
    <div class="min-h-screen overflow-x-auto p-6 mb-4">
      <ul class="flex xs:flex-col flex-wrap justify-center space-x-0 overflow-x-auto p-2 pb-8 ">
        <li>
          <button @click="currentTab(1)"
            class=" w-full p-1 shadow-xl justify-center bg-teal-100 text-green-800 text-md  rounded-lg ">
            Personal Info
          </button>
        </li> &nbsp;
        <li>
          <button @click="currentTab(2)"
            class="w-full p-1 shadow-xl justify-center bg-green-100 text-green-800 text-md rounded-lg">
            Next of Kin
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(3)"
            class="w-full p-1 shadow-xl justify-center bg-rose-100 text-green-800 text-md  rounded-lg">
            Qualifications
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(4)"
            class="w-full p-1 shadow-xl justify-center bg-blue-100 text-green-800 text-md  rounded-lg">
            Government Appointment
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(5)"
            class="w-full p-1 shadow-xl justify-center bg-red-200 text-green-800 text-md  rounded-lg">
            Promotion
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(6)"
            class="w-full p-1 shadow-xl justify-center bg-yellow-100 text-green-800 text-md  rounded-lg">
            Disciplinary
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(7)"
            class="w-full p-1 shadow-xl justify-center bg-indigo-100 text-green-800 text-md  rounded-lg">
            Leave
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(8)"
            class="w-full p-1 shadow-xl justify-center bg-fuchsia-100 text-green-800  text-md rounded-lg">
            Executive Appointment
          </button>
        </li>&nbsp;
        <li>
          <button @click="currentTab(9)"
            class="w-full p-1 shadow-xl justify-center bg-lime-100 text-green-800 text-md rounded-lg">
            Retirement
          </button>
        </li>&nbsp;
      </ul>
      <div class="p-2 mt-2 rounded-lg text-center shadow-2xl bg-white">
        <div v-if="tab === 1" class="max-sm:p-10 p-1">
          <h1 class="text-green-700 text-2xl text-center p-3">PERSONAL INFORMATION</h1>
          <table class="table-auto mt-0 max-sm:flex flex P-2">
            <tbody
              class="shadow-2xl text-sm rounded-lg max-sm:p-10 p-2 overflow-x-auto mx-0 text-green-800 border-green-600 bg-white">
              <th scope="col" class="border-2 p-2 text-md text-green-800">file no</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">surname</th>
              <th scope="row" class="border-2 p-2 text-md text-green-800">first name</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">middle name</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">date of birth</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">marital status</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">residential address</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">permanent address</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">gender</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">phone number</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">state</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">LGA</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">religion</th>
              <th scope="col" class="border-2 p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">{{`${bio.id}`}}</td>
                <td class="border-2 p-4 text-center">{{`${bio.surname}`}}</td>
                <td class="border-2 p-4 text-center">{{bio.first_name}}</td>
                <td class="border-2 p-4 text-center">{{bio.middle_name}}</td>
                <td class="border-2 p-4 text-center">{{bio.date_of_birth}}</td>
                <td class="border-2 p-4 text-center">{{bio.marital_status}}</td>
                <td class="border-2 p-4 text-center">{{bio.residential_address}}</td>
                <td class="border-2 p-4 text-center">{{bio.permanent_home_address}}</td>
                <td class="border-2 p-4 text-center">{{bio.gender}}</td>
                <td class="border-2 p-4 text-center">{{bio.phone_number}}</td>
                <td class="border-2 p-4 text-center">{{bio.state}}</td>
                <td class="border-2 p-4 text-center">{{bio.lga}}</td>
                <td class="border-2 p-4 text-center">{{bio.religion}}</td>
                <td class="p-4 border-2 font-semibold">
                  <Link to="/editPI">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPI">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePI">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="tab === 2" class=" rounded-lg">
          <h1 class="text-green-700 text-2xl text-center p-3">NEXT OF KIN</h1>
          <div class="shadow-2xl flex lg:flex-row flex-col justify-around text-green-800 text-2xl text-justify p-2">
            <div>
              <div class="text-green-800 text-2xl text-justify p-10">
                <a><img src="img/snowden.jpg" alt="" class="object-cover h-48 md:h-auto md:w-96 rounded-lg"></a>
              </div>
              <div class="text-green-800 text-justify p-10">
                <p class="p-2 text-green-800">Name: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_name1}}</span></p>
                <p class="p-2 text-green-800">Phone: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_phone1}}</span></p>
                <p class="p-2 text-green-800">Email: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_email1}}</span></p>
                <p class="p-2 text-green-800">Address: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_add1}}.</span></p>
                <p class="p-2 text-green-800">Relationship: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_relationship1}}</span></p>
              </div>
            </div>
            <div>
              <div class=" p-10">
                <p><img src="img/snowden.jpg" alt="" class="object-cover h-48 md:h-auto md:w-96 rounded-lg"></p>
              </div>
              <div class="text-green-800 text-justify p-10">
                <p class="p-2 text-green-800">Name: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_name2}}</span></p>
                <p class="p-2 text-green-800">Phone: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_phone2}}</span></p>
                <p class="p-2 text-green-800">Email: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_email2}}</span></p>
                <p class="p-2 text-green-800">Address: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_add2}}</span></p>
                <p class="p-2 text-green-800">Relationship: <span
                    class="text-sm font-semibold text-green-600">{{bio.next_of_kin_relationship2}}</span></p>
              </div>
            </div>
          </div>
        </div>
        <div v-if="tab === 3" class="shadow-2xl rounded-lg p-2">
          <h1 class="text-green-700 text-2xl text-center p-3">QUALIFICATIONS</h1>
          <h1 class="text-xl text-green-800 border-b-4 border-t-4">Academic Qualifications</h1>
          <div class="flex flex-col justify-center lg:flex-row">
            <div class="p-8">
              <h1 class="text-lg text-green-800 mb-4 text-justify">Primary</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.name_of_primary}}</p>
                <p class="p-2">{{bio.date_obtained_pri}}</p>
                <p class="p-2">{{bio.primary_q_type}}</p>
              </div>
            </div>
            <div class="p-8">
              <h1 class="text-lg text-green-800 mb-4 text-justify">Secondary</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.name_of_secondary}}</p>
                <p class="p-2">{{bio.date_obtained_sec}}</p>
                <p class="p-2">{{bio.secondary_q_type}}</p>
              </div>
            </div>
            <div class="p-8">
              <h1 class="text-lg text-green-800 text-justify">Tertiary</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.name_of_tertiary}}</p>
                <p class="p-2">{{bio.date_obtained_ter}}</p>
                <p class="p-2">{{bio.qualification_type}}</p>
              </div>
            </div>
          </div>

          <h1 class="text-xl text-green-800 border-b-4 border-t-4">Professional Qualifications</h1>
          <div class="flex flex-col justify-center lg:flex-row">
            <div class="p-8">
              <h1 class="text-lg text-green-800 mb-4 text-justify">Qualification 1</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.pro_awarding_ins1}}</p>
                <p class="p-2">{{bio.pro_ins_address1}}</p>
                <p class="p-2">{{bio.date_obtained_pro1}}</p>
                <p class="p-2">{{bio.qualification_obtained1}}</p>
              </div>
            </div>
            <div class="p-8">
              <h1 class="text-lg text-green-800 mb-4 text-justify">Qualification 2</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.pro_awarding_ins2}}</p>
                <p class="p-2">{{bio.pro_ins_address2}}</p>
                <p class="p-2">{{bio.date_obtained_pro2}}</p>
                <p class="p-2">{{bio.qualification_obtained2}}</p>
              </div>
            </div>
            <div class="p-8">
              <h1 class="text-lg text-green-800 mb-4 text-justify">Qualification 3</h1>
              <div class="text-md text-green-600 text-justify">
                <p class="p-2">{{bio.pro_awarding_ins3}}</p>
                <p class="p-2">{{bio.pro_ins_address3}}</p>
                <p class="p-2">{{bio.date_obtained_pro3}}</p>
                <p class="p-2">{{bio.qualification_obtained3}}</p>
              </div>
            </div>
          </div>
        </div>

        <div v-if="tab === 4" class="max-sm:p-1">
          <h1 class="text-green-700 text-2xl text-center p-3">GOVERNMENT APPOINTMENT</h1>
          <table class="shadow-2xl table-auto mt-0 justify-center max-sm:flex flex p-2">
            <tbody class="text-sm rounded-lg max-sm:p-10 p-14 overflow-x-auto mx-0">
              <Index />
              <a :href="route('gov.index')">gov</a>
              <!-- {{govap.bio.surname }}  -->
              <!-- <th scope="col" class="border-2 p-2 text-md text-green-800">department</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">unit</th>
      <th scope="row" class="border-2 p-2 text-md text-green-800">date of first appointment</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">type of appointment</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">designation</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">salary per annum at first appointment</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">salary scale</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">grade level</th>
      <th scope="col" class="border-2 p-2 text-md text-green-800">step</th>
   <th scope="col" class=" p-2 text-green-800">manage</th> -->

              <!-- <tr class="p-6 border-t-2 text-center">
      <td class="border-2 p-4 text-center">{{}}</td>
      <td class="border-2 p-4 text-center">{{}}</td>
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
  </tr> -->
            </tbody>
          </table>
        </div>
        <div v-if="tab === 5" class="max-sm:p-1">
          <h1 class="text-green-700 text-2xl text-center p-3">PROMOTION</h1>
          <table class="shadow-2xl justify-center table-auto mt-0 max-sm:flex p-2 flex">
            <tbody class=" text-sm rounded-lg max-sm:p-16 p-8 overflow-x-auto mx-0">
              <th scope="col" class="border-2 p-2 text-md text-green-800">current post</th>
              <th scope="row" class="border-2 p-2 text-md text-green-800">promoted date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">grade level</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">step</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">increment date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">confirmation date</th>
              <th scope="col" class=" p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">software engineer</td>
                <td class="border-2 p-4 text-center">12/02/2022</td>
                <td class="border-2 p-4 text-center">myhess</td>
                <td class="border-2 p-4 text-center">10</td>
                <td class="border-2 p-4 text-center">12/03/2022</td>
                <td class="border-2 p-4 text-center">12/04/2022</td>
                <td class="p-4  font-semibold">
                  <Link to="/editPro">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPro">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePro">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="tab === 6">
          <h1 class="text-green-700 text-2xl text-center p-3">DISCIPLINARY</h1>
          <table class="shadow-2xl justify-center table-auto mt-0 max-sm:flex p-2 flex">
            <tbody class="text-sm rounded-lg max-sm:p-16 p-20 overflow-x-auto mx-0">
              <th scope="col" class="border-2 p-2 text-md text-green-800">offense</th>
              <th scope="row" class="border-2 p-2 text-md text-green-800">decision</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">comments</th>
              <th scope="col" class=" p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">software engineer Lorem ipsum, dolor sit amet consectetur
                  adipisicing elit. Alias, cumque.</td>
                <td class="border-2 p-4 text-center">warning</td>
                <td class="border-2 p-4 text-center">12/03/2022</td>
                <td class="border-2 p-4 text-center">Lorem ipsum dolor sit.</td>
                <td class="p-4  font-semibold">
                  <Link to="/editPro">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPro">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePro">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="tab === 7">
          <h1 class="text-green-700 text-2xl text-center p-3">LEAVE</h1>
          <table class="shadow-2xl justify-center table-auto mt-0 max-sm:flex p-2 flex">
            <tbody class="text-sm rounded-lg max-sm:p-16 p-20 overflow-x-auto mx-0">
              <th scope="col" class="border-2 p-2 text-md text-green-800">nature of leave</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">year</th>
              <th scope="row" class="border-2 p-2 text-md text-green-800">start date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">end date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">no of days granted</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">status</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">comments</th>
              <th scope="col" class=" p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">refill and chill</td>
                <td class="border-2 p-4 text-center">2022</td>
                <td class="border-2 p-4 text-center">12/03/2022</td>
                <td class="border-2 p-4 text-center">1/24/2023</td>
                <td class="border-2 p-4 text-center">29</td>
                <td class="border-2 p-4 text-center">approved</td>
                <td class="border-2 p-4 text-center">keep your phone on</td>
                <td class="p-4  font-semibold">
                  <Link to="/editPro">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPro">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePro">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="tab === 8">
          <h1 class="text-green-700 text-2xl text-center p-3">EXECUTIVE APPOINTMENT</h1>
          <table class="shadow-2xl justify-center table-auto mt-0 max-sm:flex p-2 flex">
            <tbody class="text-sm rounded-lg max-sm:p-16 p-20 overflow-x-auto mx-0">
              <th scope="col" class="border-2 p-2 text-md text-green-800">designation</th>
              <th scope="row" class="border-2 p-2 text-md text-green-800">appointment date</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">status current out of office</th>
              <th scope="col" class=" p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">software engineer</td>
                <td class="border-2 p-4 text-center">12/02/2022</td>
                <td class="border-2 p-4 text-center">good</td>
                <td class="p-4  font-semibold">
                  <Link to="/editPro">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPro">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePro">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div v-if="tab === 9">
          <h1 class="text-green-700 text-2xl text-center p-3">RETIREMENT</h1>
          <table class="shadow-2xl justify-center table-auto mt-0 max-sm:flex p-2 flex">
            <tbody class="text-sm rounded-lg max-sm:p-16 p-20 overflow-x-auto mx-0">
              <th scope="row" class="border-2 p-2 text-md text-green-800">date retired</th>
              <th scope="col" class="border-2 p-2 text-md text-green-800">status</th>
              <th scope="col" class=" p-2 text-green-800">manage</th>
              <tr class="p-6 border-t-2 text-center">
                <td class="border-2 p-4 text-center">12/02/2022</td>
                <td class="border-2 p-4 text-center">good</td>
                <td class="p-4  font-semibold">
                  <Link to="/editPro">
                  <p class="text-green-800 border-b-4">edit</p>
                  </Link>
                  <Link to="/newEnteryPro">
                  <p class="text-rose-800">new entry</p>
                  </Link>
                  <Link to="removePro">
                  <p class="text-amber-600 border-t-4">remove</p>
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

</template>