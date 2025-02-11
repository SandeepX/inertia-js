<template>
    <div>
        <nav>
            <ul>
                <li><inertia-link href="/">Home</inertia-link></li>
                <li><inertia-link href="/about">About</inertia-link></li>
            </ul>
        </nav>
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup>
import { Link as InertiaLink } from '@inertiajs/vue3';
</script>
