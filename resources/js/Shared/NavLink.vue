<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    name: { type: String, required: true },
    active: Boolean
});
</script>

<template>
    <Link v-text="name" class="text-black hover:underline" :class="{ 'font-bold underline': active }"></Link>
</template>
