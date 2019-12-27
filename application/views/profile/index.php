<section class="htc__product__area ptb--130 bg__white">
     <div class="container">
        <div class="row">
            <div class="col">
            
            <div class="row">
            
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      
      <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Edit Profile</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Edit Password</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      
      <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <div class="card">
  <h5 class="card-header">Profile saya</h5>
  <div class="card-body">
      
      
      <div class="card mb-3 col-lg-8" >
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="<?=base_url('assets/img/profile/') .$user['image'];?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['fullname'];?></h5>
                <p class="card-text"><?= $user['email'];?></p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      
      <div class="card">
  <h5 class="card-header">Edit Profile</h5>
  <div class="card-body">   
      <div class="row">
            <div class="col lg-8">

            <?php echo form_open_multipart('profile/edit');?>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'];?>" readonly>
                </div>
                </div>

                 <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname'];?>">
                <?= form_error('fullname','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                </div>
                 <div class="form-group row">
                     <div class="col-sm-2">Picture</div>
                     <div class="col-sm-10">

                     <div class="row">
                         <div class="col-sm-3">
                             <img src="<?=base_url('assets/img/profile/') . $user['image']  ?>" class="img-thumbnail">
                         </div>
                         <div class="col-sm-9">
                         <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                         </div>
                     </div>

                     </div>
                
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>


                </form>



            </div>

        </div>
            </div>

        </div>


      
      
      
      </div>
      <div class="tab-pane fade active" id="v-pills-settings"  role="tabpanel" aria-labelledby="v-pills-settings-tab">
      
      <div class="card">
  <h5 class="card-header">Ganti Password</h5>
  <div class="card-body">   
      <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('profile/index'); ?>" method="post">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </form>

        </div>
    </div>
      
        </div>
    </div>
      
      
      
      
      
      </div>
    </div>
  </div>
</div>
            
            </div>
        </div>
      </div>
 </section>


 <br>
 <br>