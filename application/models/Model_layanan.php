<?php 
class Model_layanan extends CI_model{
    function kategori_layanan(){
        return $this->db->query("SELECT * FROM kategori_layanan ORDER BY id_kategori DESC");
    }

    function kategori_layanan_tambah(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')));
        $this->db->insert('kategori_layanan',$datadb);
    }

    function kategori_layanan_edit($id){
        return $this->db->query("SELECT * FROM kategori_layanan where id_kategori='$id'");
    }

    function kategori_layanan_update(){
        $datadb = array('nama_kategori'=>$this->db->escape_str($this->input->post('a')),
                        'kategori_seo'=>seo_title($this->input->post('a')),
                        'aktif'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_kategori',$this->input->post('id'));
        $this->db->update('kategori_layanan',$datadb);
    }

    function kategori_layanan_delete($id){
        return $this->db->query("DELETE FROM kategori_layanan where id_kategori='$id'");
    }


    function sensorkata(){
        return $this->db->query("SELECT * FROM katajelek ORDER BY id_jelek DESC");
    }

    function sensorkata_tambah(){
        $datadb = array('kata'=>$this->db->escape_str($this->input->post('a')),
                        'ganti'=>$this->db->escape_str($this->input->post('b')));
        $this->db->insert('katajelek',$datadb);
    }

    function sensorkata_edit($id){
        return $this->db->query("SELECT * FROM katajelek where id_jelek='$id'");
    }

    function sensorkata_update(){
        $datadb = array('kata'=>$this->db->escape_str($this->input->post('a')),
                        'ganti'=>$this->db->escape_str($this->input->post('b')));
        $this->db->where('id_jelek',$this->input->post('id'));
        $this->db->update('katajelek',$datadb);
    }

    function sensorkata_delete($id){
        return $this->db->query("DELETE FROM katajelek where id_jelek='$id'");
    }



    function tag_layanan(){
        return $this->db->query("SELECT * FROM tag ORDER BY id_tag DESC");
    }

    function tag_layanan_tambah(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'tag_seo'=>seo_title($this->input->post('a')),
                        'count'=>'0');
        $this->db->insert('tag',$datadb);
    }

    function tag_layanan_edit($id){
        return $this->db->query("SELECT * FROM tag where id_tag='$id'");
    }

    function tag_layanan_update(){
        $datadb = array('nama_tag'=>$this->db->escape_str($this->input->post('a')),
                        'tag_seo'=>seo_title($this->input->post('a')));
        $this->db->where('id_tag',$this->input->post('id'));
        $this->db->update('tag',$datadb);
    }

    function tag_layanan_delete($id){
        return $this->db->query("DELETE FROM tag where id_tag='$id'");
    }

    function komentar_layanan($id_berita){
        return $this->db->query("SELECT * FROM komentar where id_berita = '$id_berita' AND aktif='Y'");
    }

    function kirim_komentar(){
        $datadb = array('id_layanan'=>cetak($this->input->post('a')),
                                'nama_komentar'=>cetak($this->input->post('b')),
                                'url'=>cetak($this->input->post('c')),
                                'isi_komentar'=>cetak($this->input->post('d')),
                                'tgl'=>date('Y-m-d'),
                                'jam_komentar'=>date('H:i:s'),
                                'aktif'=>'N');
        $this->db->insert('komentar',$datadb);
    }

    function list_layanan_rss(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM layanan a LEFT JOIN kategori b ON a.id_kategori=b.id_kategori ORDER BY a.id_layanan DESC LIMIT 10");
    }

    function list_layanan(){
        return $this->db->query("SELECT a.*, b.nama_kategori FROM layanan a LEFT JOIN kategori_layanan b ON a.id_kategori=b.id_kategori ORDER BY a.id_layanan DESC");
    }

    function list_layanan_tambah(){
        $config['upload_path'] = 'asset/foto_layanan/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($this->input->post('j')!=''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
            if ($hasil['file_name']==''){
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_layanan'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }else{
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_layanan'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name'],
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }
        $this->db->insert('layanan',$datadb);
    }

    function list_layanan_edit($id){
        return $this->db->query("SELECT * FROM layanan where id_layanan='$id'");
    }

    function list_layanan_update(){
        $config['upload_path'] = 'asset/foto_layanan/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($this->input->post('j')!=''){
                $tag_seo = $this->input->post('j');
                $tag=implode(',',$tag_seo);
            }else{
                $tag = '';
            }
            if ($hasil['file_name']==''){
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_layanan'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }else{
                $datadb = array('id_kategori'=>$this->db->escape_str($this->input->post('b')),
                                'username'=>$this->db->escape_str($this->input->post('u')),
                                'judul'=>$this->db->escape_str($this->input->post('a')),
                                'judul_seo'=>seo_title($this->input->post('a')),
                                'headline'=>$this->db->escape_str($this->input->post('c')),
                                'isi_layanan'=>$this->input->post('d'),
                                'hari'=>hari_ini(date('w')),
                                'tanggal'=>date('Y-m-d'),
                                'jam'=>date('H:i:s'),
                                'gambar'=>$hasil['file_name'],
                                'dibaca'=>'0',
                                'tag'=>$tag);
            }
        $this->db->where('id_layanan',$this->input->post('id'));
        $this->db->update('layanan',$datadb);
    }

    function list_layanan_delete($id){
        return $this->db->query("DELETE FROM layanan where id_layanan='$id'");
    }


    function komentar(){
        return $this->db->query("SELECT * FROM komentar ORDER BY id_komentar DESC");
    }

    function komentar_edit($id){
        return $this->db->query("SELECT * FROM komentar where id_komentar='$id'");
    }

    function komentar_update(){
        $datadb = array('nama_komentar'=>$this->db->escape_str($this->input->post('a')),
                        'url'=>$this->db->escape_str($this->input->post('b')),
                        'isi_komentar'=>$this->input->post('c'),
                        'aktif'=>$this->input->post('d'));
        $this->db->where('id_komentar',$this->input->post('id'));
        $this->db->update('komentar',$datadb);
    }

    function komentar_delete($id){
        return $this->db->query("DELETE FROM komentar where id_komentar='$id'");
    }
}