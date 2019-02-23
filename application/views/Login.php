<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 2019-02-10
 * Time: 08:47
 */ ?>
<?php
$this->load->view('includes/head');
?>
    <div class="container-fluid icon-sidebar-nav h-100">

        <div class="row h-100">

            <main class="main-content col">
                <div class="main-content-container container-fluid px-4 my-auto h-100">
                    <div class="row no-gutters h-100">
                        <div class="col-lg-6 col-md-6 auth-form mx-auto my-auto">
                            <div class="card">
                                <div class="card-body">
                                    <img class="auth-form__logo d-table mx-auto mb-3" src="assets/images/logo.png"
                                         alt="Shards Dashboards - Register Template">
                                    <h5 class="auth-form__title text-center mb-4">Access Your Account</h5>
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                   aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                   placeholder="Password">
                                        </div>
                                        <div class="form-group mb-3 d-table mx-auto">
                                            <div class="custom-control custom-checkbox mb-1">
                                                <input type="checkbox" class="custom-control-input bg-primary" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Remember me for
                                                    30 days.</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-pill btn-accent btn-block d-table mx-auto">Access
                                            Account
                                        </button>
                                    </form>
                                </div>
                                <div class="card-footer border-top">
                                    <ul class="auth-form__social-icons d-table mx-auto">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="auth-form__meta d-flex mt-4">
                                <a href="forgot-password.html">Forgot your password?</a>
                                <a class="ml-auto" href="register.html">Create new account?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php
$this->load->view('includes/end');
?>