
<template>


   <Table :posts="posts"/>


</template>


<script setup>

import Table from '@/Components/Table.vue'

defineProps(['posts'])

</script>

<style scoped>

</style>
