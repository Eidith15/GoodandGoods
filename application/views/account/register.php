    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register</h1>
                            </div>
                            <form action="<?= base_url('Register/register/'); ?>" method="post" class="user">
                                <div class="form-group">
<<<<<<< HEAD
<<<<<<< HEAD

                                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Fullname" value="<?= set_value('fullname'); ?>">

                                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
=======
                                    <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Fullname" value="<?= set_value('fullname'); ?>">
>>>>>>> 3bed28961749223789c78156ed37bcf9ee1aa764
=======
                                    <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Full Name" value="<?= set_value('fullname'); ?>">
>>>>>>> 89455490073d3f3309dec5480a862c2a48bb0e0a
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
>>>>>>> 89455490073d3f3309dec5480a862c2a48bb0e0a
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword" placeholder="Repeat Password">
                                        <?= form_error('confirmpassword', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                        <hr>
                        <div class="panel-footer text-center">
                            <h5>
                                <a href="<?= base_url('home') ?>">GOODSISGOOD</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>