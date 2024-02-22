<template>
    <div>
        <div>{{ section.title }}</div>
        <ul>
            <li v-for="link in section.links" :key="link.text">
                {{ link.text }}
            </li>
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
