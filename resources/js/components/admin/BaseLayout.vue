<template>
    <div class="relative min-h-screen" id="app">
        <Header @toggle-side-bar-event="toggleSideBarEvent"></Header>
        <!-- content start -->
        <main
            ref="mainElm"
            class="w-full sm:w-[calc(100%-16rem)] min-h-[calc(100vh-7rem)] bg-slate-50 py-2 px-4 ms-0 sm:ms-64"
        >
            <slot name="pagecontent"></slot>
        </main>
        <!-- content end -->
        <Footer></Footer>
        <SideBar
            :toggleSideBar="toggleSideBar"
            :bgTransitionName="bgTransitionName"
            :sideBarTransitionName="sideBarTransitionName"
            @toggle-side-bar-event="toggleSideBarEvent"
        ></SideBar>
    </div>
</template>
<script>
import Header from "../admin/Header.vue";
import SideBar from "../admin/SideBar.vue";
import Footer from "../admin/Footer.vue";

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
            bgTransitionName: "none",
            sideBarTransitionName: "none",
        };
    },
    mounted() {
        this.$nextTick(function () {
            this.resizeEventHandler();
            window.addEventListener("resize", this.resizeEventHandler);
        });
    },
    unmounted() {
        window.removeEventListener("resize", this.resizeEventHandler);
    },
    methods: {
        resizeEventHandler() {
            this.bgTransitionName = "none";
            this.sideBarTransitionName = "none";
            this.toggleSideBar = window.innerWidth > 640;
        },
        toggleSideBarEvent(bShow) {
            this.toggleSideBar = bShow;
            this.bgTransitionName = "fade";
            this.sideBarTransitionName = "slide";
        },
    },
};
</script>
