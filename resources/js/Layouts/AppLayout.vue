<template>
    <div>
        <Nav />
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup>
import Nav from "./Nav.vue";
</script>
