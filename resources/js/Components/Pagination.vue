<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <Link  class="page-link"
                       :href="prev?? '' "
                       aria-label="Previous"
                       :disabled="prev === null ? 'true' : 'false' "
                >
                    <span aria-hidden="true">&laquo;</span>
                </Link>
            </li>
            <li v-for="(page, index) in totalPages" :key="index"
                :class=" page === current ? 'page-item active' : 'page-item'">
                <Link class="page-link "
                      :href="path+'?page='+page">
                    {{ page }}
                </Link>
            </li>
            <li class="page-item">
                <Link class="page-link"
                      :href="next?? '' "
                      aria-label="Next"
                      :disabled="next === null ? 'true' : 'false' "
                >
                    <span aria-hidden="true">&raquo;</span>
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

defineProps(['next','prev','totalPages','current','path'])

</script>
