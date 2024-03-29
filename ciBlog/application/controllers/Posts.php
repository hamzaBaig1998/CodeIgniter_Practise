<?php
    class Posts extends CI_Controller{
        public function index(){
            $data['title']='Latest Posts';
            $data['posts']=$this->post_model->get_posts();
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            $this->load->view('posts/index');
            $this->load->view('templates/footer');
        }
        public function view($slug=NULL){
            $data['post']=$this->post_model->get_posts($slug);
            if(empty($data['post'])){
                show_404();
            }
            $data['title']=$data['post']['title'];
            $data['count']=$this->cart_model->update_cart();
            $this->load->view('templates/header',$data);
            //$this->load->view('templates/header');
            $this->load->view('posts/view');
            $this->load->view('templates/footer');
        }
        public function create(){
            $data['title']='Create Post';
            $data['count']=$this->cart_model->update_cart();
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('body','Body', 'required');

            if($this->form_validation->run()===FALSE){
                $this->load->view('templates/header',$data);
                $this->load->view('posts/create');
                $this->load->view('templates/footer');
            }else{
                //Upload Image
                $config['upload_path']="./assets/images/posts";
                $config['allowed_types']='gif|jpg|png';
                $config['max_size']='2048';
                $config['max_width']='2000';
                $config['max_height']='2000';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('userfile')){
                    $errors=array('error'=>$this->upload ->display_errors());
                    $post_image='noimage.jpg';
                }else{
                    $data=array('upload_data'=>$this->upload->data());
                    $post_image=$_FILES['userfile']['name'];
                    $post_image=str_replace(" ","_",$post_image);
                }
                $this->post_model->create_post($post_image);
                redirect('posts');
            }
        }
        public function delete($id){
            $this->post_model->delete_post($id);
            redirect('posts');
        }
        public function edit($slug){
            $data['post']=$this->post_model->get_posts($slug);
            $data['count']=$this->cart_model->update_cart();
            if(empty($data['post'])){
                show_404();
            }
            $data['title']='Edit Post';
            $this->load->view('templates/header',$data);
            $this->load->view('posts/edit');
            $this->load->view('templates/footer');
        }
        public function update(){
            $this->post_model->update_post();
            redirect('posts');
        }
    }
?>