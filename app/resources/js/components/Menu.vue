<template>
    <div class='menu'>
        <scroll-to-link href='#landing' class='font-bold py-1 flex-items-center' :class="{ 'text-grey-600': active == 'Landing', 'text-grey-300': active != 'Landing'}">
            <div class='bg-red-400 w-2 h-4 mr-1 -ml-2' v-if="active == 'Landing'"></div>
            <div>Home</div>
        </scroll-to-link>
        <scroll-to-link href='#projects' class='font-bold text-grey-300 py-1' :class="{ 'text-grey-600': active == 'Projects', 'text-grey-300': active != 'Projects'}">
            <div class='bg-red-400 w-2 h-4 mr-1 -ml-2' v-if="active == 'Projects'"></div>
            <div>Projects</div>
        </scroll-to-link>
        <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Tech Stack</scroll-to-link> -->
        <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Contact</scroll-to-link> -->
        <scroll-to-link href='#open-source' class='font-bold text-grey-300 py-1' :class="{ 'text-grey-600': active == 'Open Source', 'text-grey-300': active != 'Open Source'}">
            <div class='bg-red-400 w-2 h-4 mr-1 -ml-2' v-if="active == 'Open Source'"></div>
            <div>Open&nbsp;Source</div>
        </scroll-to-link>
    </div>
</template>
<style lang='scss' scoped>
    .menu {
        @apply flex flex-col;
        
    }
</style>
<script>

    import ScrollToLink from './ScrollToLink'

    export default {
        components: {
            ScrollToLink,
        },

        data() {
            return {
                active: 'Landing',
            }
        },

        created() {
            Event.listen('visible', (data) => {
                this.active = data.section
            })
        }
    }

</script>