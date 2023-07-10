<template>

    <div style="display: flex; justify-content: flex-start; gap: 10px;">
        <NavLink name="Home" component="Home" href="/home" />
        <NavLink name="About" component="About" href="/about" />
    </div>

    <br>
    <div>About page</div>
</template>

<script setup>
import NavLink from "@/components/NavLink.vue";


</script>

<style scoped>

</style>
