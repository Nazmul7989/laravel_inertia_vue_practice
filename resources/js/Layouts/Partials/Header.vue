<template>
    <div style="display: flex; justify-content: flex-start; gap: 10px;">
        <Link href="/" style="font-size: 20px;">Logo</Link>
        <NavLink name="Home" component="Home" href="/" />
        <NavLink name="About" component="About" href="/about" />
        <NavLink name="Login" component="Login" href="/login" />
        <form action="#">
            <input type="text" placeholder="Search...">
        </form>
    </div>

</template>

<script setup>
import NavLink from "@/Components/NavLink.vue";
import {Link} from "@inertiajs/vue3";

</script>

<style scoped>

</style>
