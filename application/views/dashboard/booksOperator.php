    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <form method="post" action="<?php echo site_url('book/findbooks'); // arahkan form submit ke kontroller 'book/findbooks ?>">
    <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
    </form>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Buku</h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($book as $book_item): //dari dashboard.php ->kontroler

            ?>
            <tr>
              <td><?php echo $book_item['judul']?></td>
              <td><?php echo $book_item['pengarang']?></td>
              <td><?php echo $book_item['penerbit']?></td>
              <td><?php echo $book_item['thnterbit']?></td>
              <td><?php echo anchor('bookOperator/viewbuku/'.$book_item['idbuku'], 'View', 'View Buku'); ?>
               </td>
            </tr>
            <?php endforeach; ?>
            <tr>
            </tr>
          </tbody>
        </table>
         <b><?php echo "Jumlah Buku: $jum"?></b>
          <?php echo $this->pagination->create_links();?>
    </div>
      

     
     
    </main>
  