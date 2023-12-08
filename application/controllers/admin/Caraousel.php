<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Kategori Caraousel',
			'caraousel'			=> $caraousel,
		);
		$this->template->load('template_admin','admin/caraousel_index',$data);
	}
	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path'] = 'asset/upload/caraousel/';
        $config['max_size'] = 500 * 1024; //3 1824 1824; //3Mb; @-unlimited Sconfig[ 'allowed_types']
        $config['file_name'] = $namafoto;
		$config['allowed_types'] ='*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
			<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Caraousel sudah digunakan.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>
                    ');
            redirect('admin/caraousel');
        } elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array( 'upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'  => $this->input->post('judul'),
			'foto'  	   => $namafoto,
        );
		$this->db->insert('caraousel', $data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
		<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>  Berhasil Menambahkan Caraousel!.</div>
		');
		redirect('admin/caraousel');
	}
	public function delete_data($id){
		$filename = FCPATH.'/asset/upload/caraousel/'.$id;
			if (file_exists($filename)){
				unlink("./asset/upload/caraousel/".$id);
			}
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('caraousel',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
		<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>  Berhasil Menghapus Caraousel!.</div>
		');
		redirect('admin/caraousel');
	}
	
}
