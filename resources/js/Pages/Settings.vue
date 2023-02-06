<script setup>
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
const title = computed(() => 'Settings');
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl" v-text="title"></h1>
</template>
