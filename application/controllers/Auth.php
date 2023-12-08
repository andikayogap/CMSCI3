<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek = $this->db->get_where('user', ['username' => $username])->row_array();
        ?>
        <link href="<?= base_url('assets/softui/')?>/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
        <script src="<?= base_url('assets/softui/')?>sweetalert2/sweetalert2.all.min.js"></script>
        <style>
            body {
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 1.124em;
                font-weight: normal;
            }
        </style>
        <body></body>
        <?php
        if($cek==NULL){
            $this->session->set_flashdata('alert');
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Waduh...",
                    text: " Username Tidak Ada."
                }).then((result) => {
						window.location ='<?= site_url('auth') ?>';
                });
            </script>
            <?php
        } else if($password == $cek['password']){
            $data = [
                'id_user'  => $cek['id_user'],
                'nama'     => $cek['nama'],
                'username' => $cek['username'],
                'level'    => $cek['level'],
            ];
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {        
            $this->session->set_flashdata('alert');
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Waduh...",
                    text: "Password Salah.."
                }).then((result) => {
						window.location ='<?= site_url('auth') ?>';
                });
            </script>
            <?php
        }
	}
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}