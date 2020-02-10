<template>
    <div class='project flex flex-wrap-0'>
        <div class='bar'>
            <div class='bg-grey-100 w-6 h-24 flex items-center justify-center relative'>
                <p class='flex uppercase text-grey-500 text-sm text-center font-bold'>Project</p>
                <div class='w-3 h-1 bg-red-400 absolute bottom-0'></div>
            </div>
        </div>
        <div class='w-3/5 pl-4 pr-12'>
            <h1 class='-mt-4'>{{ project.name }}</h1>
            <div class='flex items-center flex-wrap'>
                <p class='tag' v-for='(tag,index) in project.tags' :key='index'>{{ tag }}</p>
            </div>
        
            <h5 class='mt-4 font-normal text-grey-500 normal-case'>{{ project.subtitle }}</h5>

            <div class='mt-12'>
                <p class='text-grey-500 text-base' style='white-space: pre-line;'>{{ project.description }}</p>
            </div>
        </div>
        <div class='flex-grow bg-grey-50 h-full'></div>
    </div>
</template>
<style lang='scss' scoped>
    .project {
        @apply mb-24;
        min-height: 20rem;

        .bar {
            @apply  border-r-2 border-grey-100;

            p {
                writing-mode: vertical-lr;
                text-orientation: mixed;
                transform: rotate(180deg);
                left: 1px;
                position: relative;
            }
        }

        .tag {
            @apply px-3 py-1 text-xs text-white font-bold bg-red-400;
        }

        .tag:not(:first-child) {
            @apply ml-2;
        }
    }
</style>
<script>

    export default {
        props: ['data'],
        data() {
            return {
                project: '',
            }
        },

        created() {
            this.project = this.data;
        }
    }
</script>