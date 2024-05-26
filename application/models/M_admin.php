<?php
class M_admin extends CI_model
{
    function create_admin($nama, $email, $password)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO user(nama, email, password)
        VALUES ('$nama', '$email','$password')");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true)
            return true;
        else
            return false;
    }
    function read_admin()
    {
        $hasil = $this->db->query("SELECT * FROM user");
        return $hasil;
    }
    function read_admin_by_id($id)
    {
        $hasil = $this->db->query("SELECT * FROM user where id_user ='$id'");
        return $hasil;
    }
    function read_admin_by_email_password($email, $password)
    {
        $hasil = $this->db->query("SELECT * FROM user where email ='$email' and password = '$password'");
        return $hasil;
    }

    function delete_admin($id)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM user WHERE id_user=?", array($id));
        // Reset the AUTO_INCREMENT value of the id_product field
        $this->db->query("ALTER TABLE user AUTO_INCREMENT = 1");
        $this->db->trans_complete();
        if ($this->db->trans_status() == true) {
            return true;
        } else {
            return false; 
        }
    }
    function update_admin($id, $nama, $email, $password)
    {
        $hsl = $this->db->query("UPDATE user SET nama='$nama',email = '$email',password= '$password' WHERE id_user='$id'");
        return $hsl;
    }

    public function count_admin() {
        return $this->db->count_all('user');
    }
}
