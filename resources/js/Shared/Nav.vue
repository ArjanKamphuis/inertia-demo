<script setup>
import NavLink from '@/Shared/NavLink.vue';
</script>

<template>
    <nav>
        <ul class="flex space-x-4 list-inside list-disc">
            <li><NavLink href="/" name="Home" /></li>
            <li><NavLink href="/users" name="Users" /></li>
            <li><NavLink href="/settings" name="Settings" /></li>
        </ul>
    </nav>
</template>
