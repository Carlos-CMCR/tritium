<template>
  <DataTable class="display" :data="data" :columns="columns">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Creado</th>
      </tr>
    </thead>
  </DataTable>
</template>

<script setup>
import axios from "axios";
import { ref } from "@vue/reactivity";
import DataTable from "datatables.net-vue3";
import { onMounted } from "@vue/runtime-core";
import Select from "datatables.net-select";
DataTable.use(Select);
let data = ref();
const columns =[
   { "data" : "name"},
   { "data" : "email"},
   { "data" : "created_at"},
]

axios.get('/users')
.then(response => { data.value = response.data })
.catch(e=>console.log(e));


</script>

<style>
@import 'datatables.net-dt';
</style>
