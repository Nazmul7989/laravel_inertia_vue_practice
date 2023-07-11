
<template>

    <br>
    <div>Home Page</div>
    <br>
    <button @click.prevent="count--">-</button>
    <span>{{ count}}</span>
    <button @click.prevent="count++">+</button>

</template>

<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout,
}

</script>

<script setup>

import {ref} from "vue";

const count = ref(0);

</script>

<style scoped>

</style>
