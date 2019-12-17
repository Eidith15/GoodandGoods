
<div class="controller">
  <div class="row my-3">
    <div class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
        
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Ubah Password</a>
      </div>
    </div>
    <div class="col-5">
      <div class="tab-content" id="v-pills-tabContent">
       
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        
          <div class="row">

              <div class="col">

                    <div class="card" style="width: 30rem;">
                          <div class="card-header">
                            Ubah Profile
                          </div>
                          <?php foreach( $user as $mhs) : ?>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $mhs['firstname'], $mhs['lastname'] ?></li>
                            
                            <li class="list-group-item"><?= $mhs['email'] ?></li>
                            

                          </ul>

                          
                          
                          <a href="<?= base_url(); ?>profile/ubah_profile/<?= $mhs['id'];?>" class="badge badge-success float-right ">Ubah</a>
                          <?php endforeach; ?>
              
                      </div>

               </div>
            </div>
        
        
        
           </div>

        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

        <div class="row">
        <div class="col">
                <div class="card" style="width: 30rem;">
                        <div class="card-header">
                          Ubah Password
                        </div> 
                  <form>
                      <div class="form-row my-3 mx-2">
                      
                        <div class="form-group col-md-6">
                          <label for="inputPassword4"> Password Lama</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                      </div>

                      <div class="form-row my-3 mx-2">
                      
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Password Baru</label>
                          <input type="password" class="form-control" id="inputPassword4">
                        </div>
                      </div>
                      
                    <div class="row  my-3 mx-2">
                    <button type="submit" name="ubah_password" class="btn btn-primary float-right">Ubah Password</button>
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






































<!-- <div class="row my-3">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" >
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile saya</a>
    
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Metode Pembayaran</a>
      
    </div>
  </div>
  <div class="col-7">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                
              <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <?php foreach( $user as $mhs) : ?>
                <p class="card-text"> <?= $mhs['firstname'] ?> </p>
                <p class="card-text"> <?= $mhs['lastname'] ?> </p>
                <p class="card-text"> <?= $mhs['email'] ?></p>
                                <div class="row mb-3">
                  <div class="col-lg-6">
                  <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                    Edit Profile
                    </button>
                    
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          


          
      </div>
      <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ubah Profile saya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <form action="" method="post">

		<input type="hidden" name="id" id="id">
			<div class="form-group">
			<label for="nama">User Name</label>
			<input type="text" class="form-control" id="nama" name="nama">
			</div>

			

			<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" class="form-control" id="email" name="email"name="email">

				



			</div>
      <input type="hidden" name="id" id="id">
			<div class="form-group">
			<label for="password">Password</label>
			<input type="text" class="form-control" id="nama" name="nama">
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Profile</button>
		</form>
      </div>
    </div>
  </div>
</div> -->