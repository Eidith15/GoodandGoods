<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="form-box">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h3>Register</h3>
                    </div>

                    

                    <div class="panel-body">

                        <form action="<?= base_url('Register/register'); ?>" method="post" class="user">

                            <div class="form-group">
                                <label class="control-label" for="fullname">Fullname</label>
                                <div>
                                    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Confirm Password</label>
                                <div>
                                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-offset-5 col-sm-3 btn-submit">
                                        <button type="submit" class="btn btn-success">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="#">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('Register'); ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <h5><a href="#">GOODSISGOOD</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>