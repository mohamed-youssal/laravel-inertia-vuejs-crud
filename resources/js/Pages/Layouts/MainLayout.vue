<template>
  <nav class="navbar justify-content-center navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <Link class="nav-item nav-link active" href="/"><i class="bi bi-house-door-fill mx-2 h5"></i>Home</Link>
          <Link class="nav-item nav-link" href="/category">Categories</Link>
          <Link class="nav-item nav-link" href="/product">Products</Link>
      </div>
  </nav>
  <slot></slot>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'; 
</script>

<style>

</style>