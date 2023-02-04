<script setup>
import NavLink from '@/Shared/NavLink.vue';
</script>

<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li><NavLink href="/" name="Home" /></li>
            <li><NavLink href="/users" name="Users" /></li>
            <li><NavLink href="/settings" name="Settings" /></li>
        </ul>
    </nav>
</template>
