<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { computed } from 'vue';

const title = computed(() => 'Create New User');
const form = useForm({
    name: '',
    email: '',
    password: ''
});
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl text-center mb-6" v-text="title"></h1>
    <form @submit.prevent="form.post('/users')" class="max-w-md mx-auto">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input v-model="form.name" class="border border-gray-400 p-2 w-full" name="name" id="name" required>
            <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Email</label>
            <input v-model="form.email" class="border border-gray-400 p-2 w-full" name="email" id="email" type="email">
            <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Password</label>
            <input v-model="form.password" class="border border-gray-400 p-2 w-full" name="password" id="password" type="password" required>
            <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>
        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4"
            :disabled="form.processing"
            :class="form.processing ? 'opacity-50 cursor-wait' : 'hover:bg-blue-500 cursor-default'"
        >Submit</button>
    </form>
</template>
