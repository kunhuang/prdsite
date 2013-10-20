<?php
class Login_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //判断数据库中是否有post过来的用户名和密码对
    public function validate()
    {
        $data = array
        (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        
        $query = $this->db->get_where('users',array('username' => $data['username'], 'password' => $data['password']));
        if ($query->num_rows()>0) return TRUE;
        else return FALSE;
    }

    //根据post来的用户名获得用户id
    public function getid()
    {
        $username = $this->input->post('username');
        $query = $this->db->get_where('users',array('username' => $username));
        if ($query->num_rows()>0) 
        {
            $result = $query->row_array();
            return $result['userid'];
        }
        else
        {
            show_error("User missing!");
        }
    }
}


