<template>
    <div class="container mt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
               <div class="card shadow px-4 py-4">
                   <div class="d-flex justify-content-between">
                       <h3>Create New</h3>
                       <Link href="/" class="btn btn-info"> Back</Link>
                   </div>
                   <form>
                       <div class="mb-3">
                           <label for="exampleInputEmail1" class="form-label">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                       </div>
                       <div class="mb-3">
                           <label for="exampleInputPassword1" class="form-label">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1">
                       </div>
                       <div class="mb-3 form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                           <label class="form-check-label" for="exampleCheck1">Check me out</label>
                       </div>
                       <button type="submit" class="btn btn-info">Submit</button>
                   </form>
               </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";
</script>
