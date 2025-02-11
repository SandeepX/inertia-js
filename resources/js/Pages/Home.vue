<template>
    <AppLayout>
        <h1>{{ message }}</h1>
        <p>We have {{ userCount }} registered users!</p>
    </AppLayout>
</template>

<script setup>
import AppLayout from "../Layouts/AppLayout.vue";

const props = defineProps({
    message: String,
    userCount: Number,
});
</script>
