<?php
class MemberModel extends CI_Model {
    
    public function add_member($data) {
        $this->db->insert('members', $data);
    }

    public function get_members_by_school($school_id) {
        $this->db->where('school_id', $school_id);
        $query = $this->db->get('members');
        return $query->result();
    }
}
?>