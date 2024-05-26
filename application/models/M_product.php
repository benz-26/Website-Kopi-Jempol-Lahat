<?php
class M_product extends CI_model
{

    function create_product($release_date, $nama_product, $deskripsi, $foto_produk)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO product(release_date,nama_product,deskripsi,foto_produk )
        VALUES ('$release_date','$nama_product', '$deskripsi','$foto_produk')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_product()
    {
        $hasil = $this->db->query("SELECT * FROM product");
        return $hasil;
    }
    function read_data_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM product WHERE id_product=?", array($id));
        return $hasil;
    }

    function delete_product($id)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM product WHERE id_product=?", array($id));
        // Reset the AUTO_INCREMENT value of the id_product field
        $this->db->query("ALTER TABLE product AUTO_INCREMENT = 1");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false;
        }
    }
    function update_product($id, $release_date, $nama_product, $deskripsi, $foto_produk)
    {
        $hasil = $this->db->query("UPDATE product SET release_date='$release_date',nama_product='$nama_product', deskripsi= '$deskripsi' , foto_produk ='$foto_produk' WHERE id_product='$id'");
        return $hasil;
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where("product", array("id_product" => $id));
        return $query->row();
    }

    public function count_product()
    {
        return $this->db->count_all('product');
    }
}
