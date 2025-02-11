<template>
    <AppLayout>
        <h1>About {{ companyName }}</h1>
        <p>Founded in {{ established }}</p>
    </AppLayout>
</template>

<script setup>

import { defineProps } from 'vue';
import AppLayout from "../Layouts/AppLayout.vue";

const props = defineProps({
    companyName: String,
    established: Number,
});
</script>
