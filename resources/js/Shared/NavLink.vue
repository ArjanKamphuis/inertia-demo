<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({ name: { type: String, required: true } });
</script>

<template>
    <Link v-text="name" class="text-blue-500 hover:underline" :class="{ 'font-bold underline': $page.component === name }"></Link>
</template>
