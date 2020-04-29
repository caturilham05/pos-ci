<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		$this->load->view('login');
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		//$_SESSION['last_login'] = $array['last_login'];
		if(isset($_POST['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			// if(!empty($query)){
			// 	$_SESSION['last_login'] = $query['last_login'];
			// 	$this->session->set_userdata('logged_in', $query['username']);
			// 	//$this->saveHistory('User ' .$query['username']. 'logged in');
				
			// }else{
			// 	//$this->saveHistory('Cant Login With - User: ' .$_post['username']. 'And Password: ' .$_POST['username']);
			// 	echo "<script>
			// 		alert('Login Gagal!');
			// 		window.location='".site_url('auth/login')."';
			// 		</script>";
			// }
			if($query->num_rows() > 0){
				$row = $query->row();
					$params = array(
						'userid' => $row->user_id,
						'level' => $row->level,
						'last_login' => $row->last_login
					);
					$this->session->set_userdata($params);
					echo "<script>
						alert('Login Berhasil!');
						window.location='".site_url('dashboard')."';
						</script>";
			}else{
				echo "<script>
					alert('Login Gagal!');
					window.location='".site_url('auth/login')."';
					</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		echo "<script>
				alert('Logout Berhasil!');
				window.location='".site_url('auth/login')."';
				</script>";
	}
}
