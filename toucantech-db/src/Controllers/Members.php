<?php
class Members extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('MemberModel');
        $this->load->model('SchoolModel');
    }

    public function index() {
        $data['schools'] = $this->SchoolModel->get_schools();
        $this->load->view('add_member_form', $data);
    }

    public function add() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'school_id' => $this->input->post('school')
        );
        $this->MemberModel->add_member($data);
        redirect('members/index');
    }

    public function list_by_school($school_id) {
        $data['members'] = $this->MemberModel->get_members_by_school($school_id);
        $this->load->view('members_list', $data);
    }
}
?>