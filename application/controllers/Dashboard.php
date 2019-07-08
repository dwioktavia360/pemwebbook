<?php
class Dashboard extends CI_Controller {

		public function __construct(){
			parent::__construct();

			// cek keberadaan session 'username'

			if (!isset($_SESSION['username'])){
				// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
				redirect('login');
			}
			/*-->untuk keamanan supaya user tidak bisa bypass*/
		}

		// halaman index dari dashboard -> menampilkan grafik statistik jumlah data buku berdasarkan kategori

        public function index(){

        	// panggil method countByCat() di model book_model untuk menghitung jumlah data buku per kategori untuk ditampilkan di view
        	$data['countBukuTeks'] = $this->book_model->countByCat(1);
        	$data['countMajalah'] = $this->book_model->countByCat('2');
        	$data['countSkripsi'] = $this->book_model->countByCat('3');
        	$data['countThesis'] = $this->book_model->countByCat('4');
        	$data['countDisertasi'] = $this->book_model->countByCat('5');
        	$data['countNovel'] = $this->book_model->countByCat('6');

        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/index'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/index');
            $this->load->view('dashboard/footer', $data);
        }

        // method untuk menambah data buku
		public function add(){
			// panggil method getKategori() di model_book untuk membaca data list kategori dari tabel kategori untuk ditampilkan ke view
			$data['kategori'] = $this->book_model->getKategori();

			// menghitung jumlah data buku per kategori untuk ditampilkan di view
			$data['countBukuTeks'] = 0;
        	$data['countMajalah'] = 0;
        	$data['countSkripsi'] = 0;
        	$data['countThesis'] = 0;
        	$data['countDisertasi'] = 0;
        	$data['countNovel'] = 0;

        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/add'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/add', $data);
            $this->load->view('dashboard/footer', $data);
        }

        // method untuk menampilkan seluruh data buku
        public function books(){
        	// panggil method showBook() dari book_model untuk membaca seluruh data buku
			$data['book'] = $this->book_model->showBook();
			$data['kategori'] = $this->book_model->showKat();
			$data['jum'] = $this->book_model->countByBook();
			$data['jum'] = $this->book_model->tampildata()->num_rows();

      		$data['countBukuTeks'] = 0;
        	$data['countMajalah'] = 0;
        	$data['countSkripsi'] = 0;
        	$data['countThesis'] = 0;
        	$data['countDisertasi'] = 0;
			$data['countNovel'] = 0;
			$data['jum'] = $this->book_model->jumData();

        	// baca data session 'fullname' untuk ditampilkan di view
			$data['fullname'] = $_SESSION['fullname'];
			$this->load->library('pagination'); // Load librari paginationnya
			
			$query = $this->db->query("SELECT * FROM books");
			
			$config['base_url'] = base_url('index.php/dashboard/books');
			$config['total_rows'] = $this->book_model->jumData();
			$config['per_page'] = 5;
			/* $config['uri_segment'] = 3;
			$config['num_links'] = 3; */
			
			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
				$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
				$config['full_tag_close']  = '</ul>';
				
				$config['first_link']      = 'First'; 
				$config['first_tag_open']  = '<li>';
				$config['first_tag_close'] = '</li>';
				
				$config['last_link']       = 'Last'; 
				$config['last_tag_open']   = '<li>';
				$config['last_tag_close']  = '</li>';
				
				$config['next_link']       = ' <i class="glyphicon glyphicon-menu-right"></i> '; 
				$config['next_tag_open']   = '<li>';
				$config['next_tag_close']  = '</li>';
				
				$config['prev_link']       = ' <i class="glyphicon glyphicon-menu-left"></i> '; 
				$config['prev_tag_open']   = '<li>';
				$config['prev_tag_close']  = '</li>';
				
				$config['cur_tag_open']    = '<li class="active"><a href="#">';
				$config['cur_tag_close']   = '</a></li>';
				
				$config['num_tag_open']    = '<li>';
				$config['num_tag_close']   = '</li>';
				// End style pagination
			
/* 			$this->pagination->initialize($config); // Set konfigurasi paginationnya
 */			
			$page = $this->uri->segment(3);
/* 			$query .= "LIMIT".$page.",".$config['per_page'];
 */			
			/* $data['limit'] = $config['per_page'];
			$data['total_rows'] = $config['total_rows']; */
			$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
			$data['book'] = $this->book_model->showBook($id=false, $config['per_page'], $page);
/* 			return $data;
 */
        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/books', $data);
            $this->load->view('dashboard/footer', $data);
		}
		public function kategori(){

			// panggil method showBook() dari book_model untuk membaca seluruh data kategori
			$data['kategori'] = $this->book_model->showKat();
			$data['kategori'] = $this->book_model->getKategori();


      		$data['countBukuTeks'] = 0;
        	$data['countMajalah'] = 0;
        	$data['countSkripsi'] = 0;
        	$data['countThesis'] = 0;  
        	$data['countDisertasi'] = 0;
        	$data['countNovel'] = 0;
 
        	// baca data session 'fullname' untuk ditampilkan di view
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/kategori', $data);
            $this->load->view('dashboard/footer', $data);
		}
		public function user(){
			$data['role'] = $this->user_model->getRole();
			$data['user'] = $this->user_model->showUser();
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/user', $data);
            $this->load->view('dashboard/footer', $data);
		}
		public function header(){
			$data['role'] = $this->user_model->getRole();
			$data['user'] = $this->user_model->showUser();
        	$data['fullname'] = $_SESSION['fullname'];

        	// tampilkan view 'dashboard/books'
        	$this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/user', $data);
            $this->load->view('dashboard/footer', $data);
		}
        // method untuk proses logout
        public function logout(){
        	// hapus seluruh data session
        	session_destroy();
        	// redirect ke kontroller 'login'
        	redirect('login');
        }
}