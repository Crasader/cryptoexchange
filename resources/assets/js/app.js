
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Home', require('./components/Home.vue'));
Vue.component('Contact', require('./components/Contact.vue'));
Vue.component('Faq', require('./components/Faq.vue'));
Vue.component('Register', require('./components/Register.vue'));
Vue.component('Login', require('./components/Login.vue'));
Vue.component('Admin', require('./components/AdminReg.vue'));

let UPDATE_INTERVAL = 60 * 1000;

const app = new Vue({
    el: '#app',
    data: () => ({
        bitcoinCalculator : {
            amount: '',
            btcValue: '',
            coinsBtc: [],
            coiniiBtcEth: [],
        },
        contactDetails: {
            name: '',
            email: '',
            phone: '',
            subject: '',
            message: ''
        },
        errors: {},
        submitted: false
    }),
    computed: {
        result: function () {
            return this.bitcoinCalculator.amount / this.bitcoinCalculator.coinsBtc[0].price_usd;
        }
    },
    created () {
        this.getCoinsBtc();
    },

    methods: {
        postContact() {
            this.$http.post(   `${Laravel.appUrl}/contact` , this.contactDetails)
                .then(function (response) {
                    this.submitted = true;
                    this.contactDetails = ""
                })
                .catch( (err) => {
                    this.errors = err.body.errors;
                })
        },
        getContactError(field){

            if (this.errors.hasOwnProperty(field) ) {



                if (typeof this.errors[field] === "object") {

                    return this.errors[field][0];
                }

                if ( typeof this.errors[field] === "string" ) {

                    return this.errors[field]

                }



            }

        },

        clear(field) {
            delete this.errors[field];
        },

        any() {
            return Object.keys(this.errors).length > 0;
        },
        getCoinsBtc: function() {
            let that = this
            $.ajax({
                url: 'https://api.coinmarketcap.com/v1/ticker/bitcoin/',
                method: 'GET'
            }).then(function (response) {
                if (response.error) {
                    console.err("There was an error " + response.error);
                } else {

                    console.log(response);
                    that.bitcoinCalculator.coinsBtc = response
                }
            }).catch(function (err) {
                console.error(err);
            });

        },
        getCoins3BtcEth: function() {
            let that = this
            $.ajax({
                url: 'https://api.coinmarketcap.com/v1/ticker/?limit=10',
                method: 'GET'
            }).then(function (response) {
                if (response.error) {
                    console.err("There was an error " + response.error);
                } else {

                    console.log(response);
                    that.bitcoinCalculator.coiniiBtcEth = response
                }
            }).catch(function (err) {
                console.error(err);
            });

        },

    },
    mounted() {
        this.getCoins3BtcEth();
    }
})
setInterval(() => {
    this.getCoinsBtc();
}, UPDATE_INTERVAL);
setInterval(() => {
    this.getCoins3BtcEth();
}, UPDATE_INTERVAL);

