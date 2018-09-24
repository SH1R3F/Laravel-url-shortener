<!-- Start login -->
@guest
    <div class="bodylogin text-left">
        <section class="login text-left m-auto">
            <div class="container">
                <h2>
                    Login
                    <span class="closeLogin">
                        <i class="fas fa-times"></i>
                    </span>
                </h2>
                <form action="#" method="POST">
                    <a class="text text-danger" v-if="login.errMsg.length > 0" v-text="login.errMsg"></a>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control transfer" id="Email1" v-model="login.email">
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
                            <input type="password" class="form-control transfer" id="Password1" v-model="login.password">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon2"><i class="fas fa-lock"></i></span>
                            </div>
                        </div>
                        <label class="transfer">Password</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" v-model="login.rememberMe">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                    <a href="{{route('password.request')}}" class="forget">forget password</a>
                    <button type="button" class="btn" @click.prevent="signIn" :disabled="(!isEnsabled || login.disableBtn)">login</button>
                    <button type="button" class="btn">
                        new user? sign up
                    </button>
                    <ul class="list-unstyled list-inline d-block">
                        <li class="list-inline-item facebook">
                            <a href="{{env('FACEBOOK_URL')}}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item twitter">
                            <a href="{{env('TWITTER_URL')}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item google">
                            <a href="{{env('GOOGLEPLUS_URL')}}">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
    </div><!-- End login -->
@endguest
<!-- Start navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <i class="fa fa-link"></i>
            URL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item home active">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-home"></i>
                        home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-dollar-sign"></i>
                        pricing
                    </a>
                </li>
                @guest
                    <li class="nav-item login openLogin">
                        <a class="nav-link">
                            <i class="fas fa-unlock"></i>
                            login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-pen"></i>
                            Join
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="fas fa-users"></i>
                            panel
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav><!-- End navbar -->
