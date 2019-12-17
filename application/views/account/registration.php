<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="form-box">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h3>Register</h3>
                    </div>
                    <div class="panel-body">

                        <form action="<?= base_url('registration'); ?>" method="post" class="user">

                            <div class="form-group">
                                <label class="control-label" for="email">Fullname</label>
                                <div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" value="<?= set_value('name'); ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email</label>
                                <div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <div>
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Confirm Password</label>
                                <div>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
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
                            <a class="small" href="#">Already have an account? Login!</a>
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