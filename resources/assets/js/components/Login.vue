<template>
    <div>
       <!-- <div class="sign-overlay"></div>
        <div class="signpanel"></div>

        <div class="panel signin">
            <div class="panel-heading">
                <h1><a :href="`https://cryptotraderslab.com`">Crypto Traders Lab</a></h1>
                <h4 class="panel-title">Welcome! Please signin.</h4>
            </div>
            <div class="panel-body">
            &lt;!&ndash;    <button class="btn btn-primary btn-quirk btn-fb btn-block">Connect with Facebook</button>
                <div class="or">or</div>&ndash;&gt;
                <p class="help is-danger" style="color: red;">{{ getLoginError('message') }}</p>
                <form @submit.prevent="login()" @keydown="clear($event.target.name)">
                    <div class="form-group mb10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="email" name="email" v-model="loginData.email" class="form-control" placeholder="Enter Email">
                        </div>
                        <p class="help is-danger" style="color: red;">{{ getLoginError('email') }}</p>
                    </div>
                    <div class="form-group nomargin">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" v-model="loginData.password" class="form-control" placeholder="Enter Password">
                        </div>
                        <p class="help is-danger" style="color: red;">{{ getLoginError('password') }}</p>
                    </div>
                    <div><a :href="`https://cryptotraderslab.com/password/reset`" class="forgot">Forgot password?</a></div>
                    <div class="form-group">
                        <button class="btn btn-success btn-quirk btn-block"  :class="[ (signingIn)?  'is-loading' : '' ]" >Sign In</button>
                    </div>
                </form>
                <hr class="invisible">
                <div class="form-group">
                    <a :href="`https://cryptotraderslab.com/auth/register`" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">Not a member? Sign up now!</a>
                </div>
            </div>
        </div>--><!-- panel -->

        <!-- Start Slider Area -->
        <div class="login-area">
            <div class="login-slider">
                <div class="login-overly"></div>
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class=" col-md-12 col-sm-12 col-xs-12">
                                    <div class="login-wrapper">
                                        <!-- Start Login Form -->
                                        <div class="login-form">
                                            <h4 class="login-title text-center">LOGIN</h4>
                                            <div class="row">
                                                <p class="help is-danger" style="color: red;">{{ getLoginError('message') }}</p>
                                                <form @submit.prevent="login()" @keydown="clear($event.target.name)">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="email" name="email" v-model="loginData.email" class="form-control" placeholder="Enter Email">
                                                        <p class="help is-danger" style="color: red;">{{ getLoginError('email') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="password" name="password" v-model="loginData.password" class="form-control" placeholder="Enter Password">
                                                        <p class="help is-danger" style="color: red;">{{ getLoginError('password') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <div class="check-group flexbox">
                                                            <label class="check-box">
                                                                <input type="checkbox" class="check-box-input" checked>
                                                                <span class="remember-text">Remember me</span>
                                                            </label>

                                                            <a class="text-muted" href="#">Forgot password?</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <div class="clear"></div>
                                                      <!--  <div class="separetor text-center"><span>Or with Sign</span></div>-->
                                                        <div class="sign-icon">
                                                           <!-- <ul>
                                                                <li><a class="facebook" href="#">Facebook</a></li>
                                                                <li><a class="twitter" href="#">twitter</a></li>
                                                                <li><a class="google" href="#">google+</a></li>
                                                            </ul>-->
                                                            <div class="acc-not">Don't have an account  <a :href="`http://localhost/cryptoexchangeoption/auth/register`">Sign up</a></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Login Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->


    </div>
</template>


<script>
    export default {
        data () {
            return {
                signingIn : false ,
                errors: {},
                loginData : {
                    email : '',
                    password : '',
                },
            }
        },
        methods: {
            login(){
                this.signingIn = true;
                // console.log(this.signingUp);
                // Make a post request for a user to login
                this.$http.post(`${Laravel.appUrl}/login`, this.loginData)
                    .then(function (response) {
                        // console.log(response);
                        $('button').text('logging in ...');
                        this.loginData = "";
                        window.location = `${Laravel.appUrl}/user/dashboard`
                    })
                    .catch((error) => {
                        // console.log(error);
                        this.signingIn = false;
                        this.errors = error.body.errors || error.body;

                    });

            },
            getLoginError(field){

                if (this.errors.hasOwnProperty(field) ){
                    if ( typeof this.errors[field] === "object" ) return this.errors[field][0];

                    if ( typeof this.errors[field] === "string" ) return this.errors[field];
                }

            },
            clear(field) {
                delete this.errors[field];
            },

            any() {
                return Object.keys(this.errors).length > 0;
            },


        }
    }
</script>