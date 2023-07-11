<template>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-success mb-3">Post List</h1>
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
                    <tr v-for="post in posts" :key="post.id">
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
        </div>
    </div>
</template>

<script setup>
defineProps(['posts'])

</script>
