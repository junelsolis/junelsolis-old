<template>
    <a :href="href" @click.prevent="scroll">
        <div class='flex items-center'>
            <slot></slot>
            <!-- <slot></slot> -->
        </div>
        <!-- <slot></slot> -->
    </a>
</template>

<script>
    export default {
        props: ['href'],
        methods: {
            scroll() {

                document.querySelector(this.href)
                        .scrollIntoView({ behavior: 'smooth' });
            }
        }
    }
</script>