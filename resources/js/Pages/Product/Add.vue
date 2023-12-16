<template>
  <div class="container">
    <div class="row mt-4">
      <div class="col-6 mx-auto">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add new Product</h4>
            <form @submit.prevent="addProduct" enctype="multipart/form-data">
              <div class="form-group">
                <label>Name</label>
                <input v-model="form.name" type="text" class="form-control" placeholder="Enter Name">
                <div v-if="errors.name" class="text-danger">{{ errors.name }}</div>
              </div>
              <div class="form-group">
                <label>price</label>
                <input v-model="form.price" type="float" class="form-control" placeholder="Enter Price">
                <div v-if="errors.price" class="text-danger">{{ errors.price }}</div>
              </div>
              <div class="form-group">
                <label>image</label>
                <input type="file"
                        name="image"
                        id="image"
                        @change="onFileSelected"
                        class="form-control"
                        :v-model="form.image">
                <div v-if="errors.image" class="text-danger">{{ errors.image }}</div>
              </div>
              <div class="form-group">
                <label>category</label>
                <div class="form-group">
                  <select v-model="form.category_id" class="form-control" id="">
                    <option disabled>choose a category</option>
                    <option v-for="category in categories" :key="category.id" :value="category.id">{{ category.name }}</option>
                  </select>
                <div v-if="errors.category_id" class="text-danger">{{ errors.category_id }}</div>
                </div>
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
import { Link, useForm } from "@inertiajs/vue3"
import Swal from "sweetalert2";


const props = defineProps({
  categories: {
    type: Array,
    required: true
  },
  errors: {
    type: Object
  }
})

const form = useForm({
  name: null,
  price: null,
  image: null,
  category_id: null
})

const addProduct = () =>{
  console.log(form)
  form.post(route('product.store', form));
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Product added successfully",
    showConfirmButton: false,
    timer: 1500
});
}

const onFileSelected = (event) => {
            form.image = event.target.files[0];
        }

</script>

<style>

</style>