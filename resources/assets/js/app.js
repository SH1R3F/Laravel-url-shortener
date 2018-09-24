window.Vue = require('vue');
const app = new Vue({
    el: '#app',
    data: function(){
        return {
            loading: false,
            longUrl: '',
            shortLink: 'Short link will be here',
            errMsg: '',
            login: {
                email: '',
                password: '',
                rememberMe: false,
                errMsg: '',
                disableBtn: false
            }
        };
    },
    methods: {
        shorten: function(){
            this.loading = true;
            // Send ajax request
            axios.post('/shorten', {
                long_url: this.longUrl
            }).then(response => {
                this.shortLink = response.data;
                this.loading = false;
            }).catch(error => {
                this.errMsg = error.response.data.errors.long_url[0];
                this.loading = false;
            });
        },
        signIn: function(){
            this.login.disableBtn = true;
            axios.post('/login', {
                email: this.login.email,
                password: this.login.password,
                remember: (this.login.rememberMe ? true: '')
            }).then(response => {
                if(response.data.status === 'success'){
                    window.location = "/user";
                }
            }).catch(error => {
                this.login.disableBtn = false;
                this.login.errMsg = error.response.data.message;
            });
        },
        emailValid: function(email){
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
    },
    computed: {
        isEnsabled: function(){
            return this.emailValid(this.login.email) && (this.login.password.length > 0);
        }
    }
});
