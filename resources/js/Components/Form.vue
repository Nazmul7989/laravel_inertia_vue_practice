<template>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
               <div class="card shadow px-4 py-4">
                   <div class="d-flex justify-content-between">
                       <h3>Create New Post</h3>
                       <Link href="/" class="btn btn-info"> Back</Link>
                   </div>
                   <form @submit.prevent="submit()">
                       <div class="mb-3">
                           <label for="title" class="form-label">Title</label>
                           <input type="text" v-model="form.title" class="form-control" id="title" >
                           <small class="text-danger" v-if="form.errors.title">{{ form.errors.title }}</small>
                       </div>
                       <div class="mb-3">
                           <label for="description" class="form-label">Description</label>
                           <textarea id="description" v-model="form.description" cols="30" rows="5" class="form-control"></textarea>
                           <small class="text-danger" v-if="form.errors.description">{{ form.errors.description }}</small>
                       </div>
                       <button type="submit" :disabled="form.processing" class="btn btn-info">Save</button>
                   </form>
               </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Link, useForm} from "@inertiajs/vue3";
import {useToast} from "vue-toastification";

const toast = useToast();

const form = useForm({
    title: '',
    description: ''
})

const submit = ()=>{
    form.post('/post/store',{
        preserveScroll: true,
        onSuccess: ()=>{
            form.reset();
            toast.success('Post Created Successfully!')
        }
    })
}

</script>
