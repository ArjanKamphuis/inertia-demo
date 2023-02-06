<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
const props = defineProps({ users: Array });
const title = computed(() => 'Users');
</script>

<template>
    <Head :title="title" />
    <h1 class="text-3xl" v-text="title"></h1>
    <ul v-if="users">
        <li v-for="user in users" :key="user.id" v-text="user.name"></li>
    </ul>
</template>
