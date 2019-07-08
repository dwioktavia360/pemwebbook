<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah User</h1>
      </div>

      
      <?php
      echo form_open('user_con/adduser'); 
      ?>

        <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
              </div>
        </div>
          <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="password" placeholder="Masukkan Password">
              </div>
          </div>
          <div class="form-group row">
              <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="fullname" placeholder="Masukkan Nama Lengkap">
              </div>
          </div>
          <div class="form-group row">
              <label for="idrole" class="col-sm-2 col-form-label">Role User</label>
              <div class="col-sm-10">
                  <select class="form-control" name="idrole">
    
                  <?php
                      // menampilkan combo box berisi kategori buku
                      foreach ($role as $role_item):
                  ?><!-- mengambil idrole dari role kontroler dan menampilkan jenis role-nya -->
                      <option value="<?php echo $role_item['idrole']?>"><?php echo $role_item['role']?></option>
                  <?php
                      endforeach;
                  ?>
                  </select>
            </div>
            </div>
          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit Data Baru</button>      
              </div>
          </div>      
      </form>
    </main>



<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar User</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Username</th>
          <th>Password</th>
          <th>Fullname</th>
          <th>Role User</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        // menampilkan data buku
        foreach ($user as $user_item): //dari dashboard.php ->kontroler
        ?>
        <tr>
          <td><?php echo $user_item['username']?></td>
          <td><?php echo $user_item['password']?></td>
          <td><?php echo $user_item['fullname']?></td>
          <td><?php echo $user_item['idrole']?></td>
          <td><?php echo anchor('user_con/edit/'.$user_item['username'], 'Edit', 'Edit Buku'); ?> |
          <?php echo anchor('user_con/delete/'.$user_item['username'], 'Delete', 'Delete Buku'); ?>
        </td>
        </tr>
        <?php endforeach; ?>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
</main>


    