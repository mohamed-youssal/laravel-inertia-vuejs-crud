<template>
  <div class="container">
    <div class="row my-3">
      <div class="col-6 mx-auto">
        <Link class="btn btn-primary btn-sm" :href="route('product.create')">Add new Product</Link>
      </div>
      <div class="col-8 mx-auto my-3">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>price</th>
              <th>image</th>
              <th>category</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="product in products.data" :key="product.id">
              <td scope="row">{{ product.id }}</td>
              <td>{{ product.name }}</td>
              <td>{{ product.price }}</td>
              <td>
                <img :src="'storage/' + product.image" class="img-fluid rounded-circle" width="60" height="60" alt="" srcset="">
              </td>
              <td>{{ product.category.name }}</td>
              <td>
                <form @submit.prevent="deleteProduct(product.id)">
                  <button type="submit" :v-model="form.id" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash3-fill"></i>
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script setup>
  import { Link, useForm } from '@inertiajs/vue3'
import Swal from 'sweetalert2';
  const props = defineProps({
    products:{
      type: Object,
      required: true
    }
  })
  const form = useForm({
    id: null
  });


  const deleteProduct = (id) =>{
    form.delete(route('product.destroy', id));
    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "Category deleted successfully",
      showConfirmButton: false,
      timer: 1500
});
  }
  
</script>

<style>

</style>