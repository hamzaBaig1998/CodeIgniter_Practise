<?php
    class Pages extends CI_Controller{
        public function view($page='home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            $data['title']=ucfirst($page);
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');
        }
    }
?>