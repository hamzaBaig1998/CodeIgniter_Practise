<?php
    class Users extends CI_Controller{
        public function view(){
            $data['title']="Users List";
            $data['users']=$this->user_model->get_users();
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('users/view');
            $this->load->view('templates/footer');
        }
        public function delete($id){
            $this->user_model->delete_user($id);
            redirect('view');
        }
        public function edit($id){
            $data['user']=$this->user_model->get_users($id);
            $data['count']=$this->cart_model->update_cart();
            if(empty($data['user'])){
                show_404();
            }
            $data['title']="Edit User";
            $this->load->view('templates/header',$data);
            $this->load->view('users/edit');
            $this->load->view('templates/footer');
        }
        public function update($id){
            $this->user_model->update_user($id);
            redirect('view');
        }
        public function create(){
            $data['title']="Create Users";
            $data['count']=$this->cart_model->update_cart();
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('users/create');
                $this->load->view('templates/footer');
            }else{
                $this->user_model->create_user();
                redirect('view');
            }
        }
        public function login(){
            $data['title']="Login";
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('users/login');
            $this->load->view('templates/footer');
        }
        public function login_user(){
            $data['title']="Login";
            $data['count']=$this->cart_model->update_cart();
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('users/login');
                $this->load->view('templates/footer');
            }else{
                $loginFlag=$this->user_model->login();
                if($loginFlag){
                    redirect('shop/view');
                }
                else{
                    redirect('users/create');
                }
            }
        }
    }
?>