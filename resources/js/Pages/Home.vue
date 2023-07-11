
<template>

   <Table :posts="posts"/>

</template>

<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout,
}

</script>

<script setup>

import Table from '@/Components/Table.vue'

defineProps(['posts'])

</script>

<style scoped>

</style>
