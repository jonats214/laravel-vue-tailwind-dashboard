<template>
    <!-- sidebar start -->
    <SideBar></SideBar>
    <!-- sidebar end -->
    <!-- header start -->
    <Header></Header>
    <!-- header end -->
</template>
<script>
import { reactive } from "vue";
import Header from "./Header.vue";
import SideBar from "./SideBar.vue";
export default {
    props: {
        title: String,
    },
    setup() {
        const state = reactive({
            empusername: "",
            emppassword: "",
        });
        return { state };
    },
    components: { SideBar, Header },
};
</script>
