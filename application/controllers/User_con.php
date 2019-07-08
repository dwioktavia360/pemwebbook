<?php
class User_con extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		// cek keberadaan session 'username'	
		if (!isset($_SESSION['username'])){
			// jika session 'username' blm ada, maka arahkan ke kontroller 'login'
			redirect('login');
		}
	}

    public function adduser(){  
		$username = $_POST['username'];  
        $password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$idrole = $_POST['idrole'];
	
		$this->user_model->adduser($username, $password, $fullname, $idrole);
	
		redirect('dashboard/user');
		}

	public function delete($username){
		$this->user_model->deluser($username);

		redirect('dashboard/user');
		}

	public function edit($username){
			//mengambil kategori
		$data['user'] = $this->user_model->showUser($username);		
		$data['fullname'] = $_SESSION['fullname'];
	
		$data['username']      = $data['user']['username'];
		$data['password']      = $data['user']['password'];
		$data['fullname']      = $data['user']['fullname'];
		$data['idrole']        = $data['user']['idrole'];

		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/edituser', $data);
		$this->load->view('dashboard/footer');
	}
	 	
	public function update(){
			$username 		= $_POST['username'];
			$password   	= $_POST['password'];
			$fullname 		= $_POST['fullname'];
			$idrole 		= $_POST['idrole'];
			$this->user_model->updateUser($username, $password, $fullname, $idrole);
			
			redirect('dashboard/user');
		}
	
}
?>
