require('./bootstrap');

window.Vue = require('vue');

Vue.component('contact-form', require('./components/ContactForm.vue').default);


window.EventBus = new class {
    constructor() {
        this.vue = new Vue();
    }

    fire(event, data = null) {
        this.vue.$emit(event, data);
    }

    listen(event, callback) {
        this.vue.$on(event, callback);
    }
}


const app = new Vue({
    el: '#app',
});
