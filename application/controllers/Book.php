<?php
class Book extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
		$this->load->library('pagination');
	}


	// method hapus data buku berdasarkan idbuku
	public function delete($id){
		$this->book_model->delBook($id);
		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/books');
	}

	public function deleteKat($idkategori){
		$this->book_model->delKat($idkategori);
		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/kategori');
	}

	// method untuk tambah data buku
	public function insert(){

		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = $_FILES["imgcover"]["name"];

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form insert buku
		$idbuku = $_POST['idbuku'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$idkategori = $_POST['idkategori'];
		$sinopsis = $_POST['sinopsis'];
		$thnterbit = $_POST['thnterbit'];

		// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertBook($idbuku, $judul, $pengarang, $penerbit, $idkategori, $filename, $sinopsis, $thnterbit);

		// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/books');
	}
		// method untuk tambah Kategori buku
	public function insertKategori(){
		$no = $_POST['no'];
		$kategoriBaru = $_POST['kategoriBaru'];
	
			// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->insertKategori($no, $kategoriBaru);
	
			// arahkan ke method 'books' di kontroller 'dashboard'
		redirect('dashboard/kategori');
		}

	// method untuk edit data buku berdasarkan id
	public function edit($id){
		//menampilkan data buku
		$data['books'] = $this->book_model->showBook($id);
		//mengambil kategori
		$data['kategori'] = $this->book_model->getKategori();

		$data['fullname'] = $_SESSION['fullname'];

		$data['idbuku']     = $data['books']['idbuku'];
		$data['judul']      = $data['books']['judul'];
		$data['pengarang']  = $data['books']['pengarang'];
		$data['penerbit']   = $data['books']['penerbit'];
		$data['idkategori'] = $data['books']['idkategori'];
		$data['imgfile']    = $data['books']['imgfile'];
		$data['sinopsis']   = $data['books']['sinopsis'];
		$data['thnterbit']  = $data['books']['thnterbit'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editbook', $data);
		$this->load->view('dashboard/footer');
	}
	public function editkategori($id){
		//mengambil kategori
		$data['kat'] = $this->book_model->getKategori();
		$data['kat'] = $this->book_model->showKat($id);		
		$data['fullname'] = $_SESSION['fullname'];

		$data['no']    		   = $data['kat']['no'];
		$data['kategori']      = $data['kat']['kategori'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/editKategori', $data);
		$this->load->view('dashboard/footer');
	}
	
	
	// method untuk update data buku berdasarkan id
	public function update(){
		// target direktori fileupload
		$target_dir = "c:/xampp/htdocs/books/assets/images/";
		
		// baca nama file upload
		$filename = $_FILES["imgcover"]["name"];

		// menggabungkan target dir dengan nama file
		$target_file = $target_dir . basename($filename);

		// proses upload
		move_uploaded_file($_FILES["imgcover"]["tmp_name"], $target_file);

		// baca data dari form edit buku
		$idbuku = $_POST['idbuku'];
		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$idkategori = $_POST['idkategori'];
		$sinopsis = $_POST['sinopsis'];
		$thnterbit = $_POST['thnterbit'];
		// panggil method insertBook() di model 'book_model' untuk menjalankan query insert
		$this->book_model->update($idbuku, $judul, $pengarang, $penerbit, $idkategori, $filename, $sinopsis, $thnterbit);
		
		redirect('dashboard/books');
	}
	public function updatekategori(){
		$no 		= $_POST['no'];
		$kategori   = $_POST['kategori'];
		$this->book_model->updatekategori($no, $kategori);
		
		redirect('dashboard/kategori');
	}
	public function viewbuku($id){
		$data['books'] = $this->book_model->showBook($id);
		//mengambil kategori
		$data['kategori'] = $this->book_model->showKat($id);

		$data['fullname'] = $_SESSION['fullname'];

		$data['idbuku']     = $data['books']['idbuku'];
		$data['judul']      = $data['books']['judul'];
		$data['pengarang']  = $data['books']['pengarang'];
		$data['penerbit']   = $data['books']['penerbit'];
		$data['imgfile']    = $data['books']['imgfile'];
		$data['sinopsis']   = $data['books']['sinopsis'];
		$data['thnterbit']  = $data['books']['thnterbit'];
		$data['kategori']   = $data['kategori']['kategori'];

		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/viewbuku', $data);
		$this->load->view('dashboard/footer');

	}
	// method untuk mencari data buku berdasarkan 'key'
	public function findbooks(){
		
		// baca key dari form cari data
		$key = $_POST['key'];

		// ambil session fullname untuk ditampilkan ke header
		$data['fullname'] = $_SESSION['fullname'];

		// panggil method findBook() dari model book_model untuk menjalankan query cari data
		$data['book'] = $this->book_model->findBook($key);

		// tampilkan hasil pencarian di view 'dashboard/books'
		$this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/books', $data);
        $this->load->view('dashboard/footer');
	} 
	public function countByBook($idbuku){
		$data['jum'] = $this->book_model->countByBook($idbuku);
	}


}
?>