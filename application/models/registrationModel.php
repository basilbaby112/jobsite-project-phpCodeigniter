<?php
class registrationModel extends CI_Model
{
    public function add($data)
    {
        $this->db->insert('candidatelogin',$data);
    }
}
?>
 