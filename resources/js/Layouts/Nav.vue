<template>
    <nav>
        <ul>
            <li><inertia-link href="/">Home</inertia-link></li>
            <li><inertia-link href="/about">About</inertia-link></li>
        </ul>
    </nav>
</template>

<script setup>
import { Link as InertiaLink } from '@inertiajs/vue3';
</script>

<style scoped>
nav {
    background-color: #333;
    padding: 10px;
}

ul {
    display: flex;
    list-style: none;
    gap: 20px;
}

li {
    color: white;
}

a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
}

a:hover {
    background-color: #555;
}
</style>
