<template>
    <div class="card__fields">
        <div class="full-name">
            <label for="">Full Name</label>
            <input type="text" v-model="name" />
        </div>
        <div class="email">
            <label for="">Email address</label>
            <input type="email" v-model="email" />
        </div>
        <div class="message">
            <label for="">Message</label>
            <textarea v-model="message" rows="5"></textarea>
        </div>
        <div>
            <button
                href="#"
                class="large-btn"
                @click="sendData"
                v-if="!loading"
            >
                <div>Submit</div>
                <div>
                    <svg class="icon icon-arrow-right">
                        <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                </div>
            </button>

            <bar-loader color="#41E296" v-if="loading"></bar-loader>

            <p class="mt-3 text-grey-700 text-sm" v-if="result">
                Thank you. Your message has been received.
            </p>
        </div>
    </div>
</template>
<style lang='scss' scoped>
.card__fields {
    @apply mt-6;

    display: grid;
    grid-template: 
        "full-name" auto
        "email" auto
        "message" auto / 1fr;
    column-gap: 1rem;
    row-gap: 0.75rem;

    label {
        @apply text-xs text-teal-900;
    }

    input,
    textarea {
        @apply w-full border text-sm border-blue-500 px-2 py-1;
        resize: none;
    }

    

    .full-name {
        grid-area: full-name;
    }

    .email {
        grid-area: email;
    }

    .message {
        grid-area: message;
    }

    @screen lg {
        width: 60%;
        row-gap: 1rem;

        grid-template:
            "full-name email" auto
            "message message" auto / repeat(2, 1fr);
    }
}
</style>
<script>
import { BarLoader } from "@saeris/vue-spinners";

export default {
    components: {
        BarLoader
    },

    data() {
        return {
            name: null,
            email: null,
            message: null,

            loading: false,
            result: null
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
                : true;
        }
    },

    methods: {
        sendData() {
            if (!this.valid) return;

            this.loading = true;

            axios
                .post("/contact-form", {
                    name: this.name,
                    email: this.email,
                    message: this.message
                })
                .then(response => {
                    this.loading = false;
                    this.name = null;
                    this.email = null;
                    this.message = null;

                    this.result = "done";
                });
        }
    }
};
</script>