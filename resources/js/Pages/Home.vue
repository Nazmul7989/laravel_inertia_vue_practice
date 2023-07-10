
<template>

    <div style="display: flex; justify-content: flex-start; gap: 10px;">
        <NavLink name="Home" component="Home" href="/home" />
        <NavLink name="About" component="About" href="/about" />
    </div>

    <br>
    <div>Home Page</div>
    <br>
    <button @click.prevent="count--">-</button>
    <span>{{ count}}</span>
    <button @click.prevent="count++">+</button>


</template>

<script setup>

import {ref} from "vue";
import NavLink from "@/components/NavLink.vue";

const count = ref(0);

</script>

<style scoped>

</style>
