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
            if($obj['quantity']<=0){
                $this->db->where('id',$id);
                $this->db->delete('cart');
            }else{
                $this->db->where('id',$id);
                $this->db->update('cart',$obj);
            }
        }
        public function add_one_item($id){
            $query=$this->db->get_where('cart',array('id'=>$id));
            $obj= $query->row_array();
            $obj['quantity']=$obj['quantity']+1;
            $this->db->where('id',$id);
            $this->db->update('cart',$obj);
        }
        public function add_to_cart($id){
            $query=$this->db->get_where('shop',array('id'=>$id));
            $obj=$query->row_array();
            $searchCart=$this->db->query("SELECT * FROM cart WHERE name='".$obj['item']."'");
            if($searchCart->num_rows()>0){
                //redirect('cart/view');
                $name=$obj['item'];
                $query=$this->db->get_where('cart',array('name'=>$obj['item']));
                $obj= $query->row_array();
                $obj['quantity']=$obj['quantity']+1;
                $this->db->where('name',$name);
                $this->db->update('cart',$obj);
            }
            else{
                $item=array(
                    'name'=>$obj['item'],
                    'price'=>$obj['price'],
                    'quantity'=>1
                );
                return $this->db->insert('cart',$item);
            }
        }
        public function update_cart(){
            $totalItems=0;
            $query=$this->db->query('SELECT * FROM cart');
            $items=$query->result_array();
            foreach($items as $count){
                $totalItems=$totalItems+$count['quantity'];
            }
            return $totalItems;
        }
    }
?>