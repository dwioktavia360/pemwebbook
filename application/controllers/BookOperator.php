<?php
class BookOperator extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
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

		$this->load->view('dashboard/headerOperator', $data);
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
		$this->load->view('dashboard/headerOperator', $data);
        $this->load->view('dashboard/booksOperator', $data);
        $this->load->view('dashboard/footer');
	} 
	public function countByBook($idbuku){
		$data['jum'] = $this->book_model->countByBook($idbuku);
	}


}
?>