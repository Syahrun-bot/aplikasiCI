<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
    public function proses()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $berhasil=$this->db->get('tbl_user')->row_array();
        if ($berhasil >0) {
            redirect('Dashboard/');
        } else {
            redirect('Login/');
        }
    }

    public function register()
    {
        $this->load->view('register');
    }
    // public function Daftar()
	// {
	// 	$this->load->model('Modeluser');
	// 	$nama_user=$this->input->post('nama_user',TRUE);
	// 	$username=$this->input->post('username',TRUE);
	// 	$password=$this->input->post('password',TRUE);
	// 	$this->Modeluser->Simpanuser($nama_user,$username,$password);
	// 	redirect('Login/');
	// }
    public function Daftar()
    {
        $this->load->model('Modeluser');
        $nama_user=$this->input->post('nama_user',TRUE);
        $username=$this->input->post('username',TRUE);
        $password=$this->input->post('password',TRUE);
        $this->Modeluser->Simpanuser($nama_user,$username,$password);
        redirect('Login/');
    }
}
