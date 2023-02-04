<script setup>
import Nav from '@/Shared/Nav.vue';
import { Link } from '@inertiajs/vue3';
const props = defineProps({ time: String });
</script>

<template>
    <h1 class="text-4xl font-bold">Users</h1>
    <Nav />
    <div class="mt-[1000px]">
        <p>The current time is {{ props.time }}.</p>
        <Link href="/users" preserve-scroll class="text-blue-500 hover:underline">Refresh</Link>
    </div>
</template>
