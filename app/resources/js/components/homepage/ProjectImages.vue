<template>
    <div class='project-images rellax' data-rellax-speed='2' v-if='project.image_urls.length > 0'>
        <div class='hexagon'>
            <img src='/images/hexagon-partial.svg'>
        </div>

        <div class='images'>
            <div v-for='(image,index) in project.image_urls' :key='index' class='img-container'>
                <img :src='image' class='h-full w-full'>
                <div class='filter'></div>
            </div>
        </div>

    </div>

</template>
<style lang='scss' scoped>
    .project-images {
        @apply relative w-full;

        .hexagon {
            @apply flex justify-end;
            img {
                // @apply absolute right-0 ml-auto;
                height: 30rem;
                width: auto;
            }
        }

        .images {
            @apply absolute;
            right: 7rem;
            top: -1rem;

            filter: drop-shadow(-1px 6px 3px rgba(50, 50, 0, 0.3));

            .img-container {
                // @apply w-48 h-48;
                // @apply border-2 border-grey-300;
                height: 12rem;
                width: 12rem;

                clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
                
                img {
                    object-fit: cover;
                }
            }

            .img-container:hover {
                // transition-duration: 0.3s;
                .filter {
                    height: 0;
                    transition-duration: 0.3s;
                }
            }

            .img-container:nth-child(2) {
                @apply relative;
                left: -6.5rem;
                top: -2rem;
            }

            .img-container:last-child {
                @apply relative;
                left: 6.25rem;
                top: -14rem;
            }

            .filter {
                @apply absolute left-0 right-0 top-0 bottom-0;
                background-color: rgba(#333333, 0.7);
                height: 12rem;
                backdrop-filter: grayscale(1);
                transition-duration: 0.2s;
            }

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
            this.project = this.data
        },
    }

</script>