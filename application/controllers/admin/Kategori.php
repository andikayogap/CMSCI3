<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }   
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori'      =>  $kategori
        );
		$this->template->load('template_admin', 'admin/kategori_index',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
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
            $this->session->set_flashdata(' Kategori Konten Sudah Digunakan.');
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Waduh...",
                    text: "Kategori Konten Sudah Digunakan."
                }).then((result) => {
                    window.location ='<?= site_url('admin/kategori') ?>';
                });
            </script>
            <?php
            return;
        }
        $data = array(
            'nama_kategori'   => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert','Berhasil Menambahkan Kategori.');
        redirect('admin/kategori');
    }
    public function delete_data($id){
        $where = array(
            'id_kategori'   => $id
        );
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert','Berhasil Menghapus Kategori.');
        redirect('admin/kategori');
    }
    public function update(){
        $where = array('id_kategori'  => $this->input->post('id_kategori'));
        $data = array('nama_kategori' => $this->input->post('nama_kategori'));
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert','Berhasil Memperbarui Kategori.');
        redirect('admin/kategori');
    }
}
