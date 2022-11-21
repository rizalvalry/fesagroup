<?php 
class Model_multiplefoto extends CI_model{
    function multiplefoto(){
        return $this->db->query("SELECT m.`id_foto`, m.nama_foto, m.id_halaman, m.deskripsi, h.judul FROM multiple_foto m JOIN halamanstatis h 
        ON m.id_halaman = h.id_halaman");
    }

    function multipleinsert($image = array()){
        return $this->db->insert_batch('multiple_foto',$image);
        
    }

    function kategori_multiplefoto() {
        return $this->db->query("SELECT id_halaman, judul FROM halamanstatis ORDER BY id_halaman ASC");
    }

    function foto_edit($id){
        return $this->db->query("SELECT * FROM multiple_foto where id_foto='$id'");
    }

    function foto_update(){
        $config['upload_path'] = 'asset/multiple_foto/';
        $config['allowed_types'] = 'gif|jpg|png|JPG|JPEG';
        $config['max_size'] = '3000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('b');
        $hasil=$this->upload->data();
        if ($hasil['file_name']==''){
            $datadb = array('deskripsi'=>$this->input->post('c'),
        );
        }else{
            $datadb = array('nama_foto'=>$this->db->escape_str($this->input->post('a')),
                            'deskripsi'=>$this->input->post('c'),
                            'nama_foto'=>$hasil['file_name']);
        }
        // var_dump($datadb);die();
        $this->db->where('id_foto',$this->input->post('id'));
        $this->db->update('multiple_foto',$datadb);
    }

    function foto_delete($id){
        return $this->db->query("DELETE FROM multiple_foto where id_foto='$id'");
    }

}