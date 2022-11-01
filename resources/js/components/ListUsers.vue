<template>
  <DataTable class="table table-info " :data="data" :columns="columns" :options="options">
    <thead class="table-dark">
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Creado</th>
      </tr>
    </thead>
  </DataTable>
</template>

<script setup>
import moment from "moment-with-locales-es6";
import axios from "axios";
import { ref } from "@vue/reactivity";
import DataTable from "datatables.net-vue3";
import Select from "datatables.net-select";
DataTable.use(Select);

const options = {
  select: "true",
  language: {
    search: "Buscar:",
    lengthMenu: "Mostrar _MENU_ entradas",
    info: "Mostrando _START_ to _END_ de _TOTAL_ entradas",
    paginate: {
      first: "Primero",
      last: "Ultimo",
      next: "Siguiente",
      previous: "Anterior",
    },
  },
};

let data = ref();
const columns = [
  { data: "name" },
  { data: "email" },
  {
    data: "created_at",
    render: function (data) {
      return moment(data).locale("es").fromNow();
    },
  },
];

axios
  .get("/users")
  .then((response) => {
    console.log(response.data);
    data.value = response.data;
  })
  .catch((e) => console.log(e));
</script>

<style>
@import "bootstrap";
@import "datatables.net-dt";

</style>
