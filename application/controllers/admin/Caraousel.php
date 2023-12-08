<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Caraousel',
            'caraousel'     =>  $caraousel
        );
		$this->template->load('template_admin', 'admin/caraousel_index',$data);
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/caraousel/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);
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
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.');
            ?>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Waduh...",
                    text: "Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB."
                }).then((result) => {
                    window.location ='<?= site_url('admin/caraousel') ?>';
                });
            </script>
            <?php
            return;
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'       => $this->input->post('judul'),
            'foto'        => $namafoto,
        );
        $this->db->insert('caraousel',$data);
        $this->session->set_flashdata('alert','Berhasil menambahkan caraousel.');
        redirect('admin/caraousel');
    }
    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/caraousel/".$id);
            }
        
        $where = array(
            'foto'   => $id
        );
        $this->db->delete('caraousel',$where);
        $this->session->set_flashdata('alert','Berhasil menghapus caraousel.');
        redirect('admin/caraousel');
    }
}
