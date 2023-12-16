<template>
    <div class="container">
        <div class="row m-4">
            <div class="col col-12 text-center">
                <Link class="btn btn-secondary" :href="route('category.index')">show categories</Link>
                <Link class="btn btn-secondary mx-2" :href="route('product.index')">show products</Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';


</script>

<style>

</style>