<script setup>
import { computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import Nav from '@/Shared/Nav.vue';
const title = computed(() => 'Inertia Demo');
</script>

<template>
    <Head :title="title" />
    <section class="p-6 bg-gray-200">
        <header class="flex items-center justify-between">
            <h1 class="font-bold text-lg" v-text="title"></h1>
            <Nav />
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>
    </section>
</template>
