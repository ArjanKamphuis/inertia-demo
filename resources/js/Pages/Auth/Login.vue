<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { computed } from 'vue';
defineOptions({ layout: null });
const title = computed(() => 'Login');
const form = useForm({
    email: '',
    password: ''
});
</script>

<template>
    <Head :title="title" />
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-md mx-auto border w-full">
            <h1 class="text-3xl text-center mb-6" v-text="title"></h1>
            <form @submit.prevent="form.post('/login')">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Email</label>
                    <input v-model="form.email" class="border p-2 w-full rounded" name="email" id="email" type="email" required>
                    <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Password</label>
                    <input v-model="form.password" class="border p-2 w-full rounded" name="password" id="password" type="password" required>
                    <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
                </div>
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4"
                    :disabled="form.processing"
                    :class="form.processing ? 'opacity-50 cursor-wait' : 'hover:bg-blue-500 cursor-default'"
                >Log In</button>
            </form>
        </section>
    </main>
</template>
