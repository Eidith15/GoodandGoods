<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="form-box">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h3>Login</h3>
                    </div>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="panel-body">
                        <form action="<?= base_url('auth'); ?>" method="post" class="user">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="email">Email</label>
                                        <input type="text" id="email" name="email" class="form-control form-control-user" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-offset-5 col-sm-3 btn-submit">
                                            <button type="submit" class="btn btn-success">Login</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a href="#" class="small">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a href="<?= base_url('auth/registration'); ?>" class="small">Create an Account!</a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                    <h5>
                        <a href="#">GOODSISGOOD</a>
                    </h5>
                </div>
            </div>