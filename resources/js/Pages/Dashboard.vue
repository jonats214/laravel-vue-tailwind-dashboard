<template>
    <div class="p-6">
        <h2>Dasbhoard Logged in as {{ display_name }}</h2>
    </div>
</template>

<script setup>
let props = defineProps({
    display_name: String,
});
</script>
