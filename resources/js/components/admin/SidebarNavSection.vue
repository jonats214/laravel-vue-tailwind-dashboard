<template>
    <div class="pt-6 first-of-type:pt-0">
        <div class="text-white text-xl leading-10 ml-4">
            {{ section.title }}
        </div>
        <ul class="text-white">
            <SidebarNavItem
                v-for="link in section.links"
                :key="link.text"
                :link="link"
            />
        </ul>
    </div>
</template>
<script>
import SidebarNavItem from "./SidebarNavItem.vue";
export default {
    name: "SidebarNavSection",
    props: ["section"],
    components: { SidebarNavItem },
    methods: {},
};
</script>
