<script setup>
import Layout from '@/Shared/Layout.vue';
import { Link } from '@inertiajs/vue3';
const props = defineProps({ time: String });
</script>

<template>
    <Layout>
        <h1 class="text-3xl">Users</h1>
        <div class="mt-[1000px]">
            <p>The current time is {{ time }}.</p>
            <Link href="/users" preserve-scroll class="text-blue-500 hover:underline">Refresh</Link>
        </div>
    </Layout>
</template>
