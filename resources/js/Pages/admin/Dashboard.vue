<template>
    <BaseLayout :pageProps="$page.props">
        <template #pagecontent>
            <h1>{{ $page.props.pageTitle }}</h1>
        </template>
    </BaseLayout>
</template>
<script setup>
import BaseLayout from "../../components/admin/BaseLayout.vue";
</script>
