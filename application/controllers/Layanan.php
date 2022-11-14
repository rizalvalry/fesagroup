<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layanan extends CI_Controller {
	public function index(){
		if (isset($_POST['submit'])){
			$keyword = cetak($this->input->post('cari'));
			$data['title'] = 'Pencarian keyword : '.$keyword;
			$data['layanan'] = $this->model_utama->semua_layanan_cari(0,21,$keyword);
		}else{
			$data['title'] = 'Semua Layanan';
			$jumlah= $this->model_utama->hitungberita()->num_rows();
			$config['base_url'] = base_url().'layanan/index';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 21; 	
				if ($this->uri->segment('3')!=''){
					$dari = $this->uri->segment('3');
				}else{
					$dari = 0;
				}

				if (is_numeric($dari)) {
					$data['layanan'] = $this->model_utama->semua_layanan($dari, $config['per_page']);
				}else{
					redirect('layanan');
				}
			$this->pagination->initialize($config);
		}
		$this->template->load(template().'/template',template().'/view_semua_layanan',$data);
	}

	public function detail(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM layanan where judul_seo='$ids' OR id_layanan='$ids'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('utama');
	        }
		$data['title'] = $row->judul;
		$data['record'] = $this->model_utama->berita_detail($ids)->row_array();
		$data['infoterkait'] = $this->model_utama->info_terkait(3,$row->tag);
		$this->model_utama->layanan_dibaca_update($ids);
		$this->load->helper('captcha');
		$vals = array(
            'img_path'	 => './captcha/',
            'img_url'	 => base_url().'captcha/',
            'font_path' => base_url().'asset/Tahoma.ttf',
            'font_size'     => 16,
            'img_width'	 => '100',
            'img_height' => 30,
            'border' => 0, 
            'word_length'   => 5,
            'expiration' => 7200
        );

        $cap = create_captcha($vals);
        $data['image'] = $cap['image'];
        $this->session->set_userdata('mycaptcha', $cap['word']);
		$this->template->load(template().'/template',template().'/view_layanan_detail',$data);
	}

	public function kategori(){
		$ids = $this->uri->segment(3);
		$dat = $this->db->query("SELECT * FROM kategori where kategori_seo='".$this->db->escape_str($ids)."'");
	    $row = $dat->row();
	    $total = $dat->num_rows();
	        if ($total == 0){
	        	redirect('utama');
	        }
	    $jumlah= $this->model_utama->hitunglayanankategori($row->id_kategori)->num_rows();
		$config['base_url'] = base_url().'layanan/kategori/'.$row->kategori_seo;
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 10; 	
			if ($this->uri->segment('4')!=''){
				$dari = $this->uri->segment('4');
			}else{
				$dari = 0;
			}

			if (is_numeric($dari)) {
				$data['kategori'] = $this->model_utama->detail_kategori_layanan($row->id_kategori, $dari, $config['per_page']);
			}else{
				redirect('layanan');
			}
		$this->pagination->initialize($config);
		$data['title'] = $row->nama_kategori;
		$this->template->load(template().'/template',template().'/view_kategori',$data);
	}

	function kirim_komentar(){
		if (isset($_POST['submit'])){
			$cek = $this->model_berita->list_berita_edit($this->input->post('a'));
			$row = $cek->row_array();
			if ($cek->num_rows()<=0){
				redirect('layanan/detail/'.$row['judul_seo'].'#listcomment');
				echo $this->session->set_flashdata('message', '<div class="alert alert-info">Maaf, Komentar anda Gagal Terkirim...!</div>');
			}else{
				if ($this->input->post() && (strtolower($this->input->post('secutity_code')) == strtolower($this->session->userdata('mycaptcha')))) {
					$this->model_berita->kirim_komentar();
					echo $this->session->set_flashdata('message', '<div class="alert alert-info">Komentar anda berhasil terkirim, dan akan segera kami respon...!</div>');
				}
			}
			redirect('layanan/detail/'.$row['judul_seo'].'#listcomment');

		}
	}
}
