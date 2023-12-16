<template>
  <div class="container">
    <div class="row my-3">
      <div class="col-10 mx-auto">
        <Link class="btn btn-primary btn-sm" href="/category/create">Add new Category</Link>
      </div>
      <div class="col-8 mx-auto mt-3">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="category in categories" :key="category.id">
              <td scope="row">{{ category.id }}</td>
              <td>{{ category.name }}</td>
              <td>
                <form @submit.prevent="deleteCategory(category.id)" action="">
                  <button type="submit" class="btn btn-danger btn-sm">
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
    categories: {
      type: Object,
      required: true
    }
  });

  const form = useForm({
  name: ''
})

const deleteCategory = (id) =>{
  //form.delete('category/${category}', id);
  form.delete(route('category.destroy', id));
  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Category has been deleted successfully",
    showConfirmButton: false,
    timer: 1500
  });
}
</script>

<style>

</style>