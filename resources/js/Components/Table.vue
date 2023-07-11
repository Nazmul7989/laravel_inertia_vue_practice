<template>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between mb-2">
                <h1 class="text-xl">Post Lists</h1>
                <button @click.prevent="goToCreatePage" class="btn btn-info">Create Post</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="post in posts.data" :key="post.id">
                        <td>{{ post.id }}</td>
                        <td>{{ post.title }}</td>
                        <td>{{ post.description }}</td>
                        <td style="width: 200px;">
                            <button class="btn btn-info">Edit</button>
                            <button class="btn btn-danger ms-2">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <Pagination
                        :next="posts.next_page_url"
                        :prev="posts.prev_page_url"
                        :totalPages="posts.last_page"
                        :current="posts.current_page"
                        :path="posts.path"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import Pagination from "@/Components/Pagination.vue";
import { router} from "@inertiajs/vue3";

defineProps(['posts'])

const goToCreatePage = ()=>{
    router.visit('/create');
}

</script>
