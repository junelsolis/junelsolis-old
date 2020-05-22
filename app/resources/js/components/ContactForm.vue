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
        <div style="grid-column: 1/2;">
            <button href="#" class="large-btn" @click='sendData'>
                <div>Submit</div>
                <div>
                    <svg class="icon icon-arrow-right">
                        <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</template>
<style lang='scss' scoped>
.card__fields {
}
</style>
<script>
export default {
    data() {
        return {
            name: null,
            email: null,
            message: null
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
            
            axios.post('/contact-form', {
                name: this.name,
                email: this.email,
                message: this.message,
            }).then(response => {

            })
        }
    }
};
</script>