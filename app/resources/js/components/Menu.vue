<template>
    <div class='menu'>
        <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Home</scroll-to-link>
        <scroll-to-link href='#projects' class='font-bold text-grey-300 py-1'>Projects</scroll-to-link>
        <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Tech Stack</scroll-to-link> -->
        <!-- <scroll-to-link href='#landing' class='font-bold text-grey-300 py-1'>Contact</scroll-to-link> -->
        <scroll-to-link href='#open-source' class='font-bold text-grey-300 py-1'>Open&nbsp;Source</scroll-to-link>
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
                
            }
        }
    }

</script>