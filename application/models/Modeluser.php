<?php

class Modeluser extends CI_Model {
    public function Simpanuser($nama_user,$username,$password)
    {
        $isidata=array(
            'nama_user'     =>$nama_user,
            'username'      =>$username,
            'password'      =>$password,
        );
        $this->db->insert('tbl_user',$isidata);
    }
}