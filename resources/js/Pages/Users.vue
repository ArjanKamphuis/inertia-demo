<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
const props = defineProps({ time: String });
const title = computed(() => 'Users');
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl" v-text="title"></h1>
    <div class="mt-[1000px]">
        <p>The current time is {{ time }}.</p>
        <Link href="/users" preserve-scroll class="text-blue-500 hover:underline">Refresh</Link>
    </div>
</template>
