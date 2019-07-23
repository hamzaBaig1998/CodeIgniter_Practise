<?php
    class Cart_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_cart(){
            $query=$this->db->get('cart');
            return $query->result_array();
        }
        public function remove_item($id){
            $this->db->where('id',$id);
            $this->db->delete('cart');
            return true;
        }
        public function remove_one_item($id){
            $query=$this->db->get_where('cart',array('id'=>$id));
            $obj= $query->row_array();
            $obj['quantity']=$obj['quantity']-1;
            $this->db->where('id',$id);
            $this->db->update('cart',$obj);
        }
        public function add_one_item($id){
            $query=$this->db->get_where('cart',array('id'=>$id));
            $obj= $query->row_array();
            $obj['quantity']=$obj['quantity']+1;
            $this->db->where('id',$id);
            $this->db->update('cart',$obj);
        }
    }
?>