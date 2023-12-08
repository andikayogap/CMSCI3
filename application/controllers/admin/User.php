<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'Admin'){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'User',
            'user'          =>  $user
        );
		$this->template->load('template_admin', 'admin/user_index', $data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
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
        if($cek<>NULL){
            $this->session->set_flashdata('Username Sudah Ada.');
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Waduh...",
                    text: "Username Sudah Ada."
                }).then((result) => {
                    window.location ='<?= site_url('admin/user') ?>';
                });
            </script>
            <?php
            return;
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert',' Berhasil Menambahkan User.');
        redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user'   => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert','Berhasil Menghapus User.');
        redirect('admin/user');
    }
    public function update(){
        $this->User_model->update();
        $this->session->set_flashdata('alert','Berhasil Memperbarui User.');
        redirect('admin/user');
    }
}
