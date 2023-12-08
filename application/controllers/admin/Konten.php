<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konten extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('level') == NULL){
			redirect('auth');
		}
	}
	public function index(){
		$this->db->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori','left');
		$this->db->join('user c', 'a.username=c.username','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();


		$data = array(
			'judul_halaman' => 'Kategori Konten',
			'kategori'			=> $kategori,
            'konten'        => $konten
		);
		$this->template->load('template_admin','admin/konten_index',$data);
	}
	public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path'] = 'asset/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 1824 1824; //3Mb; @-unlimited Sconfig[ 'allowed_types']
        $config['file_name'] = $namafoto;
		$config['allowed_types'] ='*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
			<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Kategori Konten sudah digunakan.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>
                    ');
            redirect('admin/konten');
        } elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array( 'upload_data' => $this->upload->data());
        }   
        
		$this->db->from('konten');
		$this->db->where('judul',$this->input->post('judul'));
		$cek = $this->db->get()->result_array();
		if($cek<>NULL){
			$this->session->set_flashdata('alert','
		<div class="alert alert-dark alert-dismissible mb-0" role="alert">
			Judul Konten sudah digunakan.
			<button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
			</div>
		');
		redirect('admin/konten');
		}
        $data = array(
            'judul'  => $this->input->post('judul'),
			'id_kategori'  => $this->input->post('id_kategori'),
			'keterangan'   => $this->input->post('keterangan'),
			'tanggal'  	   => date('Y-m-d'),
			'foto'  	   => $namafoto,
			'username'	   => $this->session->userdata('username'),
			'slug'         => str_replace(' ','-',$this->input->post('judul')),
        );
		$this->db->insert('konten', $data);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
		<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>  Berhasil Menambah Konten!.</div>
		');
		redirect('admin/konten');
	}
	public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path'] = 'asset/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 1824 1824; //3Mb; @-unlimited Sconfig[ 'allowed_types']
        $config['file_name'] = $namafoto;
		$config['overwrite'] = true;
		$config['allowed_types'] ='*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');
        } elseif( $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array( 'upload_data' => $this->upload->data());
        }   
        $data = array(
            'judul'  => $this->input->post('judul'),
			'id_kategori'  => $this->input->post('id_kategori'),
			'keterangan'   => $this->input->post('keterangan'),
			'slug'         => str_replace(' ','-',$this->input->post('judul')),
        );
		$where = array(
			'foto'		=> $this->input->post('nama_foto')
		);
		$this->db->update('konten',$data,$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
		<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>  Berhasil Memperbarui Konten!.</div>
		');
		redirect('admin/konten');
	}
	public function delete_data($id){
		$filename = FCPATH.'/asset/upload/konten/'.$id;
			if (file_exists($filename)){
				unlink("./asset/upload/konten/".$id);
			}
		$where = array(
			'foto'	=> $id
		);
		$this->db->delete('konten',$where);
		$this->session->set_flashdata('alert','
		<div class="alert alert-light-primary color-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
		<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
		</svg>  Berhasil Menghapus Konten!.</div>
		');
		redirect('admin/konten');
	}
	
}
