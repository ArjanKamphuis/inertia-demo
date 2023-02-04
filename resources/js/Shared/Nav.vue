<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav>
        <ul>
            <li><Link href="/" class="hover:underline">Home</Link></li>
            <li><Link href="/users" class="hover:underline">Users</Link></li>
            <li><Link href="/settings" class="hover:underline">Settings</Link></li>
        </ul>
    </nav>
</template>
