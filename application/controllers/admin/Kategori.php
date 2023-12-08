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
			'kategori'			=> $kategori
		);
		$this->template->load('template_admin','admin/kategori_index',$data);
	}
	public function simpan(){
		$this->db->from('kategori');
		$this->db->where('nama_kategori',$this->input->post('nama_kategori'));
		$cek = $this->db->get()->result_array();
		if($cek <> NULL) {
			$this->session->set_flashdata('alert','
		<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Kategori Konten sudah digunakan.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/kategori');
		}
        $data = array(
            'nama_kategori'  => $this->input->post('nama_kategori')
        );
		$this->db->insert('kategori', $data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>  Berhasil Menambah Kategori!.</div>
		');
		redirect('admin/kategori');
	}
	public function delete_data($id){
		$where = array(
			'id_kategori'	=> $id
		);
		$this->db->delete('kategori',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>  Berhasil Menghapus Kategori!.</div>
		');
		redirect('admin/kategori');
	}
	public function update(){
		$where = array('id_kategori'   => $this->input->post('id_kategori'));
        $data = array('nama_kategori'  => $this->input->post('nama_kategori'));
			$this->db->update('kategori',$data,$where);
			$this->session->set_flashdata('alert','
		<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Berhasil memperbaharui kategori.
			</div>
		');
		redirect('admin/kategori');
	}
}
