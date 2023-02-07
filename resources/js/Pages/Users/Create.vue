<script setup>
import { Head, router } from '@inertiajs/vue3';
import { computed, reactive } from 'vue';

const title = computed(() => 'Create New User');
const form = reactive({
    name: '',
    email: '',
    password: ''
});

const submit = () => {
    router.post('/users', form);
};
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl text-center mb-6" v-text="title"></h1>
    <form @submit.prevent="submit" class="max-w-md mx-auto">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input v-model="form.name" class="border border-gray-400 p-2 w-full" name="name" id="name" required>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Email</label>
            <input v-model="form.email" class="border border-gray-400 p-2 w-full" name="email" id="email" type="email" required>
        </div>
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Password</label>
            <input v-model="form.password" class="border border-gray-400 p-2 w-full" name="password" id="password" type="password" required>
        </div>
        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
    </form>
</template>
