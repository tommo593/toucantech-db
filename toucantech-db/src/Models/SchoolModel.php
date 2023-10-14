<?php
class SchoolModel extends CI_Model {
    
    public function get_schools() {
        $query = $this->db->get('schools');
        return $query->result();
    }
}
?>