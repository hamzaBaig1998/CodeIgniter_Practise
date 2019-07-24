<?php
    class User_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function get_users($id=FALSE){
            if($id===FALSE){
            $this->db->order_by('id','DESC');
            $query=$this->db->get('users');
            return $query->result_array();
            }
            $query=$this->db->get_where('users',array('id'=>$id));
            return $query->row_array();
        }
        public function create_user(){
            $data=array(
                'id'=>$this->input->post('id'),
                'name'=>$this->input->post('name'),  
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),
                'age'=>$this->input->post('age')
            );
            return $this->db->insert('users',$data);
                    
        }
        public function update_user($id){
            $data=array(
                'name'=>$this->input->post('name'),  
                'email'=>$this->input->post('email'),
                'password'=>$this->input->post('password'),
                'age'=>$this->input->post('age')
            );
            $this->db->where('id',$id);
            $this->db->update('users',$data);
        }
        public function delete_user($id){
            $this->db->where('id',$id);
            $this->db->delete('users');
            return true;
        }
        public function login(){
            $query=$this->db->query("SELECT * FROM users WHERE email='".$this->input->post('email')."' and password='".$this->input->post('password')."'");
            if($query->num_rows()>0){
                return true;
            }
        }
    }
?>