<template>
    <div class="relative min-h-screen" id="app">
        <Header @toggle-side-bar-event="toggleSideBarEvent"></Header>
        <!-- content start -->
        <main class="w-full min-h-[calc(100vh-7rem)] bg-slate-50 py-2 px-4">
            <slot name="pagecontent"></slot>
        </main>
        <!-- content end -->
        <Footer></Footer>
        <SideBar
            :toggleSideBar="toggleSideBar"
            @toggle-side-bar-event="toggleSideBarEvent"
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
            toggleSideBar: false,
        };
    },
    methods: {
        toggleSideBarEvent(bShow) {
            this.toggleSideBar = bShow;
        },
    },
};
</script>
