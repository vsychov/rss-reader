import '../css/register.css';
import Vue from 'vue';

let app = new Vue({
    data: {
        emailValid: true,
        email: null,
    },
    methods: {
        validateEmail: function () {
            let app = this;
            let email = this.email;
            let uri = '/register/validate-email/' + encodeURIComponent(email);

            fetch(uri).then((response) => {
                return response.json().then((json) => {
                    this.emailValid = json.email_allowed;
                })
            });
        },
        handleFormSubmitEvent: function (event) {
            if (!this.emailValid) {
                event.preventDefault();
                this.$refs.email.focus();
                return false;
            }
        }
    },
    el: '#registerForm',
    mounted: function () {
        this.email = this.$refs.email.getAttribute("value");
    }
});