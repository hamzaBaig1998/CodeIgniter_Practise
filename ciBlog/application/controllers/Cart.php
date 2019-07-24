<?php 

    class Cart extends CI_Controller{
        public function view(){
            $data['title']="Cart Items";
            $data['cart']=$this->cart_model->get_cart();
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('cart/view');
            $this->load->view('templates/footer');
        }
        public function remove($id){
            $this->cart_model->remove_item($id);
            redirect('cart/view');
        }
        public function remove_one($id){
            $this->cart_model->remove_one_item($id);
            redirect('cart/view');
        }
        public function add_one($id){
            $this->cart_model->add_one_item($id);
            redirect('cart/view');
        }
    }
?>