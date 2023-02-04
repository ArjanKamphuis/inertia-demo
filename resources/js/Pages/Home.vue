<script setup>
const props = defineProps({
    name: { type: String, default: 'World'},
    frameworks: Array
});
</script>

<template>
    <div class="w-3/4 mx-auto py-6">
        <h1 class="text-3xl mb-3">Hello, {{ props.name }}!</h1>
        <p>In this series, we will use the following frameworks:</p>
        <ul>
            <li v-for="framework in frameworks" :key="framework" class="flex items-center space-x-3">
                <span>&#9654;</span>
                <span v-text="framework"></span>
            </li>
        </ul>
    </div>
</template>
