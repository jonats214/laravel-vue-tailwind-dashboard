<template>
    <Transition :name="bgTransitionName">
        <div
            class="fixed top-0 left-0 w-full h-full bg-black/10 sm:hidden"
            @click="bgClick"
            v-if="toggleSideBar"
        ></div>
    </Transition>
    <Transition :name="sideBarTransitionName">
        <div
            class="bg-gray-700 fixed top-0 left-0 w-64 h-full"
            v-if="toggleSideBar"
        >
            <div class="h-14 px-4 flex items-center border-b border-gray-500">
                <p class="text-4xl text-center text-white w-full">BRAND</p>
            </div>

            <div
                class="overflow-y-auto max-h-[calc(100vh-3.5rem)] pt-4 pb-8 sidebar-scroll-bar"
            >
                <SidebarNavSection
                    v-for="section in pageProps.sidebarSections"
                    :key="section.key"
                    :section="section"
                />
            </div>

            <span
                class="absolute top-2 right-2 cursor-pointer inline-block sm:hidden"
                @click="closeIconClick"
            >
                <svg
                    class="h-10 w-10 fill-white"
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    stroke-linejoin="round"
                    stroke-miterlimit="2"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="m12.002 2.005c5.518 0 9.998 4.48 9.998 9.997 0 5.518-4.48 9.998-9.998 9.998-5.517 0-9.997-4.48-9.997-9.998 0-5.517 4.48-9.997 9.997-9.997zm0 1.5c-4.69 0-8.497 3.807-8.497 8.497s3.807 8.498 8.497 8.498 8.498-3.808 8.498-8.498-3.808-8.497-8.498-8.497zm0 7.425 2.717-2.718c.146-.146.339-.219.531-.219.404 0 .75.325.75.75 0 .193-.073.384-.219.531l-2.717 2.717 2.727 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.53-.219l-2.729-2.728-2.728 2.728c-.146.146-.338.219-.53.219-.401 0-.751-.323-.751-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"
                        fill-rule="nonzero"
                    />
                </svg>
            </span>
        </div>
    </Transition>
</template>
<script>
import SidebarNavSection from "../admin/SidebarNavSection.vue";
export default {
    name: "SideBar",
    emits: ["toggleSideBarEvent"],
    props: [
        "toggleSideBar",
        "bgTransitionName",
        "sideBarTransitionName",
        "pageProps",
    ],
    components: { SidebarNavSection },
    methods: {
        bgClick() {
            this.$emit("toggleSideBarEvent", false);
        },
        closeIconClick() {
            this.$emit("toggleSideBarEvent", false);
        },
    },
};
</script>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s ease;
}
.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.slide-enter-active,
.slide-leave-active {
    transition: transform 0.5s ease;
}
.slide-enter-from,
.slide-leave-to {
    transform: translateX(-256rem);
}

.sidebar-scroll-bar {
    scrollbar-width: thin;
}
</style>
