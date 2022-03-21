/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

var app = new Vue({
    el: '#app',
    data: {
        postcode: '',
        prefecture_id: '',
        city: '',
        local: '',
    },
    methods: {
        onClick: function() {
            console.log('クリックしました')
            const url = '/Backend/postal_search?' + [
                'postcode=' + this.postcode,

            ].join('&');
            console.log(url)
            axios.get(url).then((response) => {

                this.prefecture_id = response.data.prefecture_id;
                this.city = response.data.city;
                this.local = response.data.local;

            });

        }
    }
});