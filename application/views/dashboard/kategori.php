<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Kategori</h1>
      </div>

      
      <?php
      // arahkan form submit ke kontroller 'book/insertKategori' 
      echo form_open('book/insertKategori'); 
      ?>

        <div class="form-group row">
              <label for="no" class="col-sm-2 col-form-label">No Kategori</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="no" placeholder="Masukkan No Kategori Buku Baru">
              </div>
        </div>
          <div class="form-group row">
              <label for="kategoriBaru" class="col-sm-2 col-form-label">Nama Kategori</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="kategoriBaru" placeholder="Masukkan Kategori Buku Baru">
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
    <h1 class="h2">Daftar Kategori</h1>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kategori</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        // menampilkan data buku
        foreach ($kategori as $kat_item): //dari dashboard.php ->kontroler
        ?>
        <tr>
          <td><?php echo $kat_item['no']?></td>
          <td><?php echo $kat_item['kategori']?></td>
          <td><?php echo anchor('book/editkategori/'.$kat_item['idkategori'], 'Edit', 'Edit Buku'); ?> |
          <?php echo anchor('book/deleteKat/'.$kat_item['idkategori'], 'Delete', 'Delete Buku'); ?>
        </td>
        </tr>
        <?php endforeach; ?>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
</main>
