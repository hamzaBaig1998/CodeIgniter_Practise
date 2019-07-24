<?php
    class Shop_model extends CI_Model{
        public function __construct()
        {
            $this->load->database();
        }
        public function getAllItems($id=FALSE){
            if($id===FALSE){
                $query=$this->db->get('shop');
                return $query->result_array();
            }
            $query=$this->db->get_where('shop',array('id'=>$id));
            return $query->row_array();
        }
        public function insert_item(){
            $obj=array(
                'item'=>$this->input->post('item'),
                'price'=>$this->input->post('price'),
                'description'=>$this->input->post('description')
            );
            $this->db->insert('shop',$obj);
            return true;
        }
    }
?>