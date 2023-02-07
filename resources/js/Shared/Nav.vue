<script setup>
import NavLink from '@/Shared/NavLink.vue';
</script>

<template>
    <nav>
        <ul class="flex space-x-6">
            <li><NavLink href="/" name="Home" :active="$page.component === 'Home'" /></li>
            <li><NavLink href="/users" name="Users" :active="$page.component === 'Users/Index'" /></li>
            <li><NavLink href="/settings" name="Settings" :active="$page.component === 'Settings'" /></li>
            <li><NavLink href="/logout" method="post" as="button" name="Log Out" /></li>
        </ul>
    </nav>
</template>
