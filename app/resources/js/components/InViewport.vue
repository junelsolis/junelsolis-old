<template>
    <div class='bg-transparent text-transparent h-4 w-4' ref='item'>test</div>
</template>
<script>

    import inViewport from 'in-viewport'

    export default {
        props: ['section'],
        data() {
            return {
                watcher: '',
            }
        },
        mounted() {
            this.watcher = inViewport(this.$el, () => {
                                this.visible()
                            })
        },
        methods: {
            visible() {
                Event.fire('visible', {
                    section: this.section
                })

                setTimeout(() => {
                    this.watcher.watch()
                }, 1000);
            }
        }
    }

</script>