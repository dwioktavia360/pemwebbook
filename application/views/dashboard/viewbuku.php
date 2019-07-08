<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Buku</h1>
  </div>

  <div class="table-responsive">
  <table class="table table-striped table-sm">
  <thead>
  <tr>
  <?php echo "<img src='".base_url()."assets/images/".$imgfile."'/>";?>
  </tr>
  </thead>
  <thead>
    <table class="table table-striped table-sm">
          <tr>
          <th>Judul Buku</th><th>:</th>
          <td><?php echo $judul?></td>
          </tr>
          <tr>
          <th>Pengarang</th><th>:</th>
          <td><?php echo $pengarang?></td>
          </tr>
          <tr>
          <th>Penerbit</th><th>:</th>
          <td><?php echo $penerbit?></td>
          </tr>
          <tr>
          <th>Tahun Terbit</th><th>:</th>
          <td><?php echo $thnterbit?></td>
          </tr>
          <tr>
          <th>Kategori</th><th>:</th>
          <td><?php echo $kategori?></td>
          </tr>
          <tr>
          <th>Sinopsis</th><th>:</th>
          <td><?php echo $sinopsis?></td>
          </tr>
          </th>
    </table>
    </thead>
    </table>
  </div>
</main>
