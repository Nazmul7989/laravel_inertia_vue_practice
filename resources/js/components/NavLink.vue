<template>

    <Link
        :class="$page.component === component && 'active' "
        :href="href"
        preserve-scroll
    >
        {{ name }}
    </Link>


</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { defineProps } from 'vue';

defineProps(['name','component','href'])


</script>

<style scoped>
.active{
    color: red;
    font-weight: 600;
    text-decoration: none;
    font-size: 20px;
}

</style>
