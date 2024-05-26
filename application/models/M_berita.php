<?php
class M_berita extends CI_model
{

    function create_berita($judul, $waktu ,$isi,$foto_berita)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO berita(judul, waktu, isi, foto_berita )
        VALUES ('$judul','$waktu','$isi', '$foto_berita' )");
        $this->db->query("ALTER TABLE berita MODIFY isi LONGTEXT");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_berita()
    {
        $hasil = $this->db->query("SELECT * FROM berita");
        return $hasil;
    }
    function read_data_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM berita where id_berita ='$id'");
        return $hasil;
    }

    function delete_berita($id)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM berita WHERE id_berita=?", array($id));
        // Reset the AUTO_INCREMENT value of the id_product field
        $this->db->query("ALTER TABLE berita AUTO_INCREMENT = 1");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false; 
        }
    }
    function update_berita($id,$judul,$waktu,$isi,$foto_berita)
    {
        $hasil = $this->db->query("UPDATE berita SET judul='$judul', waktu = '$waktu', isi='$isi' , foto_berita='$foto_berita' WHERE id_berita='$id'");
        return $hasil;
    }
    
    public function get_by_id($id)
    {
        $query = $this->db->get_where("berita", array("id_berita" => $id));
        return $query->row();
    }

    public function count_berita() {
        return $this->db->count_all('berita');
    }


}