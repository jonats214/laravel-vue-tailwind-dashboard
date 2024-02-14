<template>
    <div class="relative min-h-screen" id="app">
        <Header @menu-icon-click="showSideBar"></Header>
        <!-- content start -->
        <main class="w-full min-h-[calc(100vh-7rem)] bg-slate-50 py-2 px-4">
            <slot name="pagecontent"></slot>
        </main>
        <!-- content end -->
        <Footer></Footer>
        <SideBar
            :toggleMenu="toggleMenu"
            @side-bar-bg-click="sideBarBgClick"
        ></SideBar>
    </div>
</template>
<script>
import Header from "./Header.vue";
import SideBar from "./SideBar.vue";
import Footer from "./Footer.vue";

export default {
    name: "BaseLayout",
    components: {
        Header,
        SideBar,
        Footer,
    },
    data: function () {
        return {
            toggleMenu: false,
        };
    },
    methods: {
        sideBarBgClick() {
            this.toggleMenu = false;
        },
        showSideBar() {
            this.toggleMenu = true;
        },
    },
};
</script>
