<!--
<template>
    <div>

        &lt;!&ndash; Start Slider Area &ndash;&gt;
        <div class="login-area">
            <div class="login-slider slide-1" data-stellar-background-ratio="0.6">
                <div class="login-overly"></div>
                <div class="table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="login-wrapper">
                                        &lt;!&ndash; Start Login Form &ndash;&gt;
                                        <div class="login-form signup-form">
                                            <h4 class="login-title text-center">REGISTER</h4>
                                            <div class="row">
                                                <div class="alert alert-success" v-if="submitted">
                                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                                    Registration is Successful
                                                </div>
                                                <form @submit.prevent="signup()" @keydown="clear($event.target.name)">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="full_name" v-model="signupData.full_name" class="form-control" placeholder="Enter Your Full Name">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('full_name') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="username" v-model="signupData.username" class="form-control" placeholder="Enter Your Username">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('username') }}</p>
                                                     </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="email" name="email" v-model="signupData.email" class="form-control" placeholder="Enter Your Email">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('email') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="password" name="password" v-model="signupData.password" class="form-control" placeholder="Enter Your Password">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('password') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="password" name="password_confirmation" v-model="signupData.password_confirmation" class="form-control" placeholder="Enter Your Password Again">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('password_confirmation') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="bitcoin" v-model="signupData.bitcoin" class="form-control" placeholder="Enter Your Bitcoin Wallet">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('bitcoin') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <input type="text" name="phone" v-model="signupData.phone" class="form-control" placeholder="Enter Your Phone Number">
                                                        <p class="help is-danger" style="color: red;">{{ getSignupError('phone') }}</p>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <div class="check-group flexbox">
                                                            <label class="check-box">
                                                                <input type="checkbox" class="check-box-input" checked>
                                                                <span class="remember-text">I agree terms & conditions</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <button type="submit" id="submit" class="slide-btn login-btn">Signup</button>
                                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                        <div class="clear"></div>
                                                      &lt;!&ndash;  <div class="separetor text-center"><span>Or with signup</span></div>&ndash;&gt;
                                                        <div class="sign-icon">
                                                            &lt;!&ndash;<ul>
                                                                <li><a class="facebook" href="#">Facebook</a></li>
                                                                <li><a class="twitter" href="#">twitter</a></li>
                                                                <li><a class="google" href="#">google+</a></li>
                                                            </ul>&ndash;&gt;
                                                            <div class="acc-not">have an account?  <a :href="`http://localhost/cryptoexchangeoption/auth/login`">Login</a></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        &lt;!&ndash; End Login Form &ndash;&gt;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        &lt;!&ndash; End Slider Area &ndash;&gt;

    </div>
</template>

<script>
    export default {
        data () {
            return {
                signingUp : false ,
                submitted: false,
                errors: {},
                signupData : {
                    full_name: '',
                    username: '',
                    email : '',
                    password : '',
                    password_confirmation : '',
                    bitcoin : '',
                    phone: ''

                },
            }
        },
        methods: {
            signup(){

                this.signingUp = true ;
                // console.log(this.signingUp);
                // Make a post request for a user to login
                this.$http.post(  `${Laravel.appUrl}/auth/register` , this.signupData)
                    .then(function (response) {
                        // console.log(response);
                        $('button').text('signing up ...');
                        this.submitted = true;
                        this.signupData = "";
                        //window.location = Laravel.appUrl;
                    })
                    .catch( (error) =>  {
                        // console.log(error);
                        this.signingUp = false ;
                        this.submitted = false;
                        this.errors = error.body.errors || error.body ;

                    });
            },
            getSignupError(field){

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


        }
    }
</script>-->
