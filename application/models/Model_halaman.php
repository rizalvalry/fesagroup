<?php 
class Model_halaman extends CI_model{
    function halamanstatis(){
        return $this->db->query("SELECT * FROM halamanstatis ORDER BY id_halaman DESC");
    }

    function halamanstatis_tambah(){
            $config['upload_path'] = 'asset/foto_banner/';
            $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
            $config['max_size'] = '3000'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('c');
            $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'id_main'=>$this->input->post('d'));
            }else{
            		$datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'id_main'=>$this->input->post('d'),
                                    'gambar'=>$hasil['file_name']);
            }
        $this->db->insert('halamanstatis',$datadb);
    }

    function halamanstatis_edit($id){
        return $this->db->query("SELECT * FROM halamanstatis where id_halaman='$id'");
    }

    function kategori_halaman(){
        return $this->db->query("SELECT * FROM submenu ORDER BY id_sub DESC");
    }

    function halamanstatis_update(){
        $config['upload_path'] = 'asset/foto_banner/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('c');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
                    $datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'));
        }else{
                    $datadb = array('judul'=>$this->db->escape_str($this->input->post('a')),
                                    'isi_halaman'=>$this->input->post('b'),
                                    'tgl_posting'=>date('Y-m-d'),
                                    'gambar'=>$hasil['file_name']);
        }
        $this->db->where('id_halaman',$this->input->post('id'));
        $this->db->update('halamanstatis',$datadb);
    }

    function halamanstatis_delete($id){
        return $this->db->query("DELETE FROM halamanstatis where id_halaman='$id'");
    }
}