<script setup>
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
const title = computed(() => 'Home');
</script>

<template>
    <Head>
        <title>{{ title }}</title>
        <meta name="description" content="Home information" head-key="description">
    </Head>
    <h1 class="text-3xl" v-text="title"></h1>
</template>
