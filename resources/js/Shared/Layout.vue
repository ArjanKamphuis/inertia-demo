<script setup>
import { computed } from 'vue';
import { Head, usePage } from '@inertiajs/vue3';
import Nav from '@/Shared/Nav.vue';
const user = computed(() => usePage().props.auth.user);
</script>

<template>
    <Head>
        <meta name="description" content="Information about my app" head-key="description">
    </Head>
    <section class="p-6 bg-gray-200">
        <header class="flex items-center justify-between">
            <div class="flex items-baseline">
                <h1 class="font-bold text-lg">Laracasts Inertia Demo</h1>
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
