 <?php
 defined('BASEPATH') OR exit('NO direct script access allowed');

 class User extends CI_Controller {

 	Public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('User_model');

 	}

 	Public function index()
 	{
 		$data['isi'] = $this->db->get('user');

 		$this->load->view('view' ,$data);
 	}

 	public function add()
 	{
		# code...
 		$this->load->view('tambah');
 	}

 	public function actionadd()
 	{
		# code...
 		$data = array('username' => $this->input->post('username') ,
 			'password' => $this->input->post('password') ,
 			'fullname' => $this->input->post('fullname') ,
 			'level' => $this->input->post('level') ,);

 		$sukses=$this->db->insert('user',$data);
 		if ($sukses) {
			# code...
 			echo "Sukses";
 		}

 		else{
 			echo "Gagal";
 		}
 	}

 	public function hapus($id=''){
 		$where = array('id' => $id);
 		$this->User_model->hapus_data($where,'user');
 		redirect('user','refresh');
 	}
 }



