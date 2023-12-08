<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saran extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
	public function index(){
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();
        $data  = array(
            'judul_halaman' => 'Saran',
            'saran'         => $saran
        );
        $this->template->load('template_admin', 'admin/saran_index', $data);
    }

    public function delete($id){
        $where = array(
            'id'   => $id
        );
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
        $this->db->delete('saran', $where);
        $this->session->set_flashdata('alert','Berhasil Menghapus User.');
        redirect('admin/saran');
    }

}