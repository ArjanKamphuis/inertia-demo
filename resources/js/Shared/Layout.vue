<script setup>
import { computed } from 'vue';
import { Head, usePage } from '@inertiajs/vue3';
import Nav from '@/Shared/Nav.vue';

const title = computed(() => 'Inertia Demo');
const user = computed(() => usePage().props.auth.user);
</script>

<template>
    <Head :title="title" />
    <section class="p-6 bg-gray-200">
        <header class="flex items-center justify-between">
            <div class="flex items-baseline">
                <h1 class="font-bold text-lg" v-text="title"></h1>
                <p class="text-sm ml-4">Welcome Back, {{ user.username }}!</p>
            </div>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>
