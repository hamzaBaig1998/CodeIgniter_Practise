<?php
    class Shop extends CI_Controller{
        public function view(){
            $data['title']="Shop";
            $data['shop']=$this->shop_model->getAllItems();
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('shop/view');
            $this->load->view('templates/footer');
        }
        public function addToCart($id){
            $data['title']="Cart";
            $this->cart_model->add_to_Cart($id);
            redirect('shop/view');
        }
        public function insert(){
            $data['title']='Add Item';
            $data['count']=$this->cart_model->update_cart();
            $this->form_validation->set_rules('item','Item','required');
            $this->form_validation->set_rules('price','Price', 'required');
            $this->form_validation->set_rules('description','Description', 'required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('shop/insert');
                $this->load->view('templates/footer');
            }else{
                $this->shop_model->insert_item();
                redirect('shop/view');
            }
        }
    }
?>