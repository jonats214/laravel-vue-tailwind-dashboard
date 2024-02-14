<template>
    <div class="">
        <div
            class="fixed top-0 left-0 w-full h-full bg-black/10"
            @click="bgClick"
            v-if="toggleMenu"
        ></div>

        <div
            class="bg-gray-700 fixed top-0 left-0 w-64 h-full"
            v-if="toggleMenu"
        ></div>
    </div>
</template>
<script>
export default {
    name: "SideBar",
    props: ["toggleMenu"],
    methods: {
        bgClick() {
            this.$emit("sideBarBgClick", true);
        },
    },
};
</script>
