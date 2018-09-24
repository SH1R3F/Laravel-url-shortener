<template>
    <!-- Start login -->
    <div class="bodylogin text-left d-flex">
        <section class="login text-left m-auto">
            <div class="container">
                <h2>
                    Login
                    <span class="closeLogin">
                        <i class="fas fa-times"></i>
                    </span>
                </h2>
                <form action="#" method="POST">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control transfer" id="Email1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon1">
                                    <i class="fas fa-at"></i>
                                </span>
                            </div>
                        </div>
                        <label class="transfer">email</label>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control transfer" id="Password1" v-model="login.email">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon2"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>
                        <label class="transfer">Password</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" v-model="login.password">
                        <label class="custom-control-label" for="customCheck1" v-model="login.rememberMe">Remember me</label>
                    </div>
                    <a href="{{route('password.request')}}" class="forget">forget password</a>
                    <button type="button" class="btn" v-on:click="signIn()">login</button>
                    <button type="button" class="btn">
                        new user? sign up
                    </button>
                    <ul class="list-unstyled list-inline d-block">
                        <li class="list-inline-item facebook">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item twitter">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item google">
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
    </div><!-- End login -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
