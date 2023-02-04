<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
        surname: '',
        first_name:'',
        middle_name: '',
        phone_number: '',

        state: '',
        geo_political_zone: '',
        lga: '',
        spouse: '',
        date_of_birth: '',
        place_of_birth:'',
        marital_status: '',
        hobbies: '',
        religion: '',
        senatorial_district:'',
        nationality:'',
        permanent_home_address:'',
        residential_address:'',
        name_of_children:'',
        number_of_children:'',
        dob_of_children:'',
        transferred_from:'',
        transfer_date:'',
        title:'',
        staff_id:'',
        gender: '',

        next_of_kin_name1: '',
        next_of_kin_phone1:'',
        next_of_kin_email1:'',
        next_of_kin_add1:'',
        next_of_kin_relationship1:'',

        next_of_kin_name2:'',
        next_of_kin_phone2:'',
        next_of_kin_email2:'',
        next_of_kin_add2:'',
        next_of_kin_relationship2:'',

        name_of_primary:'',
        date_obtained_pri:'',
        primary_q_type:'',

        name_of_secondary:'',
        date_obtained_sec:'',
        secondary_q_type:'',

        name_of_tertiary:'',
        date_obtained_ter:'',
        qualification_type:'',

        pro_awarding_ins1:'',
        pro_ins_address1:'',
        date_obtained_pro1:'',
        qualification_obtained1:'',

        pro_awarding_ins2:'',
        pro_ins_address2:'',
        date_obtained_pro2:'',
        qualification_obtained2:'',

        pro_awarding_ins3:'',
        pro_ins_address3:'',
        date_obtained_pro3:'',
        qualification_obtained3:'',
});
</script>

<template>
    <section class="bod">
    <div class="min-h-screen md:pt-4 pb-2 px-2 md:px-0">
        <main class="m-20 mt-0 md:p-6 sm:p-6 rounded-lg shadow-2xl mb-4 backdrop-blur-sm bg-white/90 ">
        <h1 class="text-center text-lg  text-green-800 p-2">documentation form</h1>
        <h3 class=" text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">personal information</h3>

        <section class="text-center">
            <form @submit.prevent="form.post(route('bio.store'), { onSuccess: () => form.reset() })">
            <div class="flex flex-row flex-wrap justify-center gap-10 p-6">
            
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="staff_no">staff number</label>
                    <input type="number" v-model="form.staff_id" id="staff_no" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="surname">surname</label>
                    <input type="text" v-model="form.surname" id="surname" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="firstname">first name</label>
                    <input type="text" v-model="form.first_name" id="firstname" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="middlename">middle name</label>
                    <input type="text" v-model="form.middle_name" id="middlename" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="title">title</label>
                    <input type="text" v-model="form.title" id="title" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="gender">gender</label>
                    <input type="text" v-model="form.gender" id="gender" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                 <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="dob">date of birth</label>
                    <input type="date" v-model="form.date_of_birth" id="dob" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>

                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="phone">phone</label>
                    <input type="tel" v-model="form.phone_number"  id="phone" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="marital_status">marital status</label>
                    <input type="text" v-model="form.marital_status" id="marital_status" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="place_of_birth">place of birth</label>
                    <input type="text" v-model="form.place_of_birth" id="place_of_birth" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nationality">nationality</label>
                    <input type="text" v-model="form.nationality" id="nationality" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="geo_political_zone">geo political zone</label>
                    <input type="text" v-model="form.geo_political_zone" id="geo_political_zone" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="state_of_origin">state of origin</label>
                    <input type="text" v-model="form.state" id="state_of_origin" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="senatorial_district">senatorial district</label>
                    <input type="text" v-model="form.senatorial_district" id="senatorial_district" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="LGA">LGA</label>
                    <input type="text" v-model="form.lga" id="LGA" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="residential_address">residential address</label>
                    <input type="text" v-model="form.residential_address" id="residential_address" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="permanent_address">permanent address</label>
                    <input type="text" v-model="form.permanent_home_address" id="permanent_address" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="spouse">spouse</label>
                    <input type="text" v-model="form.spouse" id="spouse" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="hobbies">hobbies</label>
                    <input type="text" v-model="form.hobbies" id="hobbies" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="religion">religion</label>
                    <input type="text" v-model="form.religion" id="religion" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="number_of_children">number of children</label>
                    <input type="number" v-model="form.number_of_children" id="number_of_children" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="name_of_children">name of children</label>
                    <input type="text" v-model="form.name_of_children" id="name_of_children" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="dob_of_children">dob of children</label>
                    <input type="date" v-model="form.dob_of_children" id="dob_of_children" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                 <!-- <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="passport">passport</label>
                    <input type="file" accept="image/*" @input="form.passport= $event.target.files[0]" id="passport" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div> -->
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="transferred_from">transferred from</label>
                    <input type="text" v-model="form.transferred_from" id="transferred_from" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-4 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="transferred_date">transferred date</label>
                    <input type="date"  v-model="form.transfer_date" id="transferred_date" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
            </div>
            <h3 class=" text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">next of kin information</h3>
    <div class="flex flex-row justify-center mt-4 p-0 gap-20">
    <div>
        <h3 class=" text-2xl text-green-800 text-center mb-6">first next of kin</h3>
                <div class="mb-1 pt-1 rounded">
                        <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinname1">name</label>
                        <input type="text" v-model="form.next_of_kin_name1" id="nokinname1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinphone1">phone</label>
                    <input type="tel" v-model="form.next_of_kin_phone1" id="nokinphone1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinemail1">email</label>
                    <input type="text" v-model="form.next_of_kin_email1" id="nokinemail1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinadd1">address</label>
                    <input type="text" v-model="form.next_of_kin_add1" id="nokinadd1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinrel1">relationship</label>
                    <input type="text" v-model="form.next_of_kin_relationship1" id="nokinrel1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <!-- <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinpassport1">passport</label>
                    <input type="text" id="nokinpassport1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div> -->
            </div>
    <div>
        <h3 class=" text-2xl text-green-800 text-center mb-6">second next of kin</h3>
                <div class="mb-1 pt-1 rounded">
                        <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinname2">name</label>
                        <input type="text" v-model="form.next_of_kin_name2" id="nokinname2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinphone2">number</label>
                    <input type="tel" v-model="form.next_of_kin_phone2" id="nokinphone2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinemail2">email</label>
                    <input type="text" v-model="form.next_of_kin_email2" id="nokinemail2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinadd2">address</label>
                    <input type="text" v-model="form.next_of_kin_add2" id="nokinadd2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinrel2">relationship</label>
                    <input type="text" v-model="form.next_of_kin_relationship2" id="nokinrel2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <!-- <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="nokinpassport2">passport</label>
                    <input type="text" id="nokinpassport2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div> -->               
    </div>
    </div>
    <h3 class="mt-8  text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">academic qualification</h3>
<div class="flex flex-row justify-center mt-4 p-2 gap-20">
    <div>
        <h3 class=" text-2xl text-green-800 text-center mb-6">primary</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="name_of_primary">name of primary school</label>
                    <input type="text" v-model="form.name_of_primary" id="name_of_primary" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="date_obtained_pri">date of obtained</label>
                    <input type="date" v-model="form.date_obtained_pri" id="date_obtained_pri" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="primary_q_type">qualification type</label>
                    <input type="text" v-model="form.primary_q_type" id="primary_q_type" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
    </div>
    <div>        
        <h3 class=" text-2xl text-green-800 text-center mb-6">secondary</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="name_of_secondary">name of secondary school</label>
                    <input type="text" v-model="form.name_of_secondary" id="name_of_secondary" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="date_obtained_sec">date of obtained</label>
                    <input type="date" v-model="form.date_obtained_sec" id="date_obtained_sec" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="secondary_q_type">qualification type</label>
                    <input type="text" v-model="form.secondary_q_type" id="secondary_q_type" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>        
    </div>
    <div>
        <h3 class=" text-2xl text-green-800 text-center mb-6">tertiary</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="name_of_institution">name of tertiary institution</label>
                    <input type="text" v-model="form.name_of_tertiary" id="name_of_institution" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="date_obtained_ter">date of obtained</label>
                    <input type="date"  v-model="form.date_obtained_ter" id="date_obtained_ter" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="qualification_type">qualification type</label>
                    <input type="text" v-model="form.qualification_type" id="qualification_type" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>                        
    </div>
</div>
<h3 class="mt-8  text-2xl text-green-800 text-center border-t-4 border-b-4 border-gray-300">next of kin information</h3>
<div class="flex flex-row justify-center mt-4 p-2 gap-20">
<div>
        <h3 class=" text-2xl text-green-800 text-center mb-6">professional qualification 1</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="awarding_institution1">awarding institution</label>
                    <input type="text" v-model="form.pro_awarding_ins1" id="awarding_institution1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="pro_address1">address</label>
                    <input type="text" v-model="form.pro_ins_address1" id="pro_address1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="qualification_obtained1">qualification obtained</label>
                    <input type="text" v-model="form.qualification_obtained1" id="qualification_obtained1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="dated_obtained1">dated obtained</label>
                    <input type="date" v-model="form.date_obtained_pro1" id="dated obtained1" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
</div>
<div>
    

                <h3 class=" text-2xl text-green-800 text-center mb-6">professional qualification 2</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="awarding_institution2">awarding institution</label>
                    <input type="text" v-model="form.pro_awarding_ins2" id="awarding_institution2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="pro_address2">address</label>
                    <input type="text" v-model="form.pro_ins_address2" id="pro_address2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="qualification_obtained2">qualification obtained</label>
                    <input type="text" v-model="form.qualification_obtained2" id="qualification_obtained2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="dated_obtained2">dated obtained</label>
                    <input type="date" v-model="form.date_obtained_pro2" id="dated_obtained2" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
            </div>
            <div>
                <h3 class=" text-2xl text-green-800 text-center mb-6">professional qualification 3</h3>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="awarding_institution3">awarding institution</label>
                    <input type="text" v-model="form.pro_awarding_ins3" id="awarding_institution3" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="pro_address3">address</label>
                    <input type="text" v-model="form.pro_ins_address3" id="pro_address3" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="qualification_obtained3">qualification obtained</label>
                    <input type="text" v-model="form.qualification_obtained3" id="qualification_obtained3" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
                <div class="mb-1 pt-1 rounded ">
                    <label class="block text-gray-700 text-sm  mb-2 ml-3" for="dated_obtained3">dated obtained</label>
                    <input type="date" v-model="form.date_obtained_pro3" id="dated obtained3" class="bg-white rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-green-600 px-3 pb-3">
                </div>
            </div>
            </div>    
            <button class="mt-8 focus:outline-none border-b-4 focus:opacity-10 border-gray-300 focus:border-green-600 bBtn text-white  py-2 rounded shadow-lg hover:shadow-xl transition duration-200 text-center w-1/2" type="submit" value="save">save</button>
            </form>
        </section>
        </main>
</div>
</section>
</template>