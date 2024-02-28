<template>
    <li class="block ml-4 mr-4 leading-10">
        <div
            class="h-10 transition rounded hover:bg-gray-600 pl-2 flex items-center"
            @click="toggleCollapse"
            ref="navitem"
        >
            <a href="#" class="flex-1">{{ link.text }}</a>

            <svg
                v-if="hasSublinks"
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 fill-white inline-block align-middle transition-transform"
                viewBox="0 0 24 24"
                :class="{ 'rotate-90': collapsed }"
            >
                <path
                    d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"
                />
            </svg>
        </div>
        <Transition name="sublinksslide">
            <ul v-if="showSublinks" class="block w-full overflow-y-hidden">
                <SidebarNavItem
                    v-for="sublink in link.sublinks"
                    :key="sublink.text"
                    :link="sublink"
                    :level="level + 1"
                />
            </ul>
        </Transition>
    </li>
</template>
<script>
export default {
    name: "SideBarNavItem",
    props: ["link", "level"],
    data: function () {
        return {
            collapsed: false,
            navItemHeight: 10,
        };
    },
    computed: {
        hasSublinks: function () {
            return this.link.sublinks && this.link.sublinks.length > 0;
        },
        showSublinks: function () {
            return this.collapsed && this.hasSublinks;
        },
        sublinksTotalHeight: function () {
            let sublinkCount = this.hasSublinks ? this.link.sublinks.length : 0;
            return (sublinkCount * this.navItemHeight) / 16 + "rem";
        },
    },
    mounted() {
        this.$nextTick(function () {
            this.navItemHeight = this.$refs.navitem.offsetHeight;
        });
    },
    methods: {
        toggleCollapse() {
            this.collapsed = !this.collapsed;
        },
    },
};
</script>
<style scoped>
.sublinksslide-enter-active,
.sublinksslide-leave-active {
    max-height: v-bind(sublinksTotalHeight);
    transition: all 0.5s ease;
}
.sublinksslide-enter-from,
.sublinksslide-leave-to {
    max-height: 0;
}
</style>
