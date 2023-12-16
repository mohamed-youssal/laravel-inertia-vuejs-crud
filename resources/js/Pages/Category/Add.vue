<template>
  <div class="container">
    <div class="row mt-4">
      <div class="col-6 mx-auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add new category</h4>
            <form @submit.prevent="addCategory">
              <div class="form-group">
                <label>Name</label>
                <input v-model="form.name" type="text" class="form-control" placeholder="Enter Name">
                <div v-if="errors.name" class="text-danger">{{ errors.name }}</div>
              </div>
              <div class="m-2">
                <button class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";
import Swal from "sweetalert2";

const props = defineProps({
  errors:{
    type: Object
  }
})

const form = useForm({
  name: ''
})

const addCategory = () =>{
  form.post('/category');
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Category added successfully",
    showConfirmButton: false,
    timer: 1500
});
}
</script>

<style>

</style>