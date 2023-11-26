<template>
    <div>
        <h2>Test component {{ test_val }}</h2>
    </div>
</template>

<script setup>
let props = defineProps({
    test_val: String,
});
</script>
