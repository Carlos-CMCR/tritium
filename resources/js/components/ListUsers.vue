<template>
  <DataTable class="display" :data="data" class="display">
    <thead>
      <tr>
        <th>First</th>
        <th>Second</th>
      </tr>
    </thead>
  </DataTable>
</template>

<script setup>
import { ref } from "@vue/reactivity";
import DataTable from "datatables.net-vue3";
// import Select from "datatables.net-select";
// DataTable.use(Select);
let data = ref([]);
data = axios.get('')
</script>

<style>
</style>
