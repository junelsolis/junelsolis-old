<template>
    <div class='project'>
        project
    </div>
</template>
<style lang='scss' scoped>
    .project {

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