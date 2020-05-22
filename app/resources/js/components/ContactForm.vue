<template>
    <div class="card__fields">
        <div style="grid-column: 1/2;">
            <label for="">Full Name</label>
            <input type="text" v-model='name'/>
        </div>
        <div style="grid-column: 2/3;">
            <label for="">Email address</label>
            <input type="email" v-model='email' />
        </div>
        <div style="grid-column: 1/3;">
            <label for="">Message</label>
            <textarea v-model='message' rows='5'></textarea>
        </div>
        <div style="grid-column: 1/2;min-height:3rem;">
            <button href="#" class="large-btn" @click='sendData' v-if='!loading && name == null && email == null && message == null'>
                <div>Submit</div>
                <div>
                    <svg class="icon icon-arrow-right">
                        <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                </div>
            </button>

            <bar-loader color="#41E296" v-if='loading'></bar-loader>

            <p class="mt-3 text-grey-700 text-sm">Thank you. Your message has been received.</p>

        </div>
    </div>
</template>
<style lang='scss' scoped>
.card__fields {
}
</style>
<script>
import {BarLoader} from '@saeris/vue-spinners'

export default {
    components: {
        BarLoader,
    },

    data() {
        return {
            name: null,
            email: null,
            message: null,

            loading: false,
            result: '',
        };
    },

    computed: {
        valid() {
            return this.name == null
                    ? false
                    : this.email == null
                        ? false
                        : this.message == null
                            ? false
                            : true
        }
    },

    methods: {
        sendData() {
            if (!this.valid) return 
            
            this.loading
            axios.post('/contact-form', {
                name: this.name,
                email: this.email,
                message: this.message,
            }).then(response => {
                this.name = null
                this.email = null
                this.message = null
            })
        }
    }
};
</script>