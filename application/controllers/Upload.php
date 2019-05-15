<?php
class Upload extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper(array("form", "url"));
    } 
    public function index(){
        $data['errors'] = '';
        $this->load->view("upload_view", $data);
    }
    public function doupload(){
        if($this->input->post("ok")){
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '900';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $this->load->library("upload", $config);
            if($this->upload->do_upload("img")){
                echo 'Upload Ok';
                    $check = $this->upload->data();
                    echo "<pre>";
                    print_r($check);
                    echo "</pre>";
                    $this->load->library("image_lib");
                    /*$config['image_library'] = 'gd2';
                    $config['source_image'] = './uploads/'.$check['file_name'];
                    $config['create_thumb'] = TRUE;
                    $config['maintain_ratio'] = TRUE;
                    $config['width']     = 150;
                    $config['height']   = 120;*/
 
                    $config['wm_text'] = 'Copyright 2014 - freetuts.net';
                    $config['wm_type'] = 'text';
                    $config['wm_font_path'] = './system/fonts/texb.ttf';
                    $config['wm_font_size'] = '30';
                    $config['wm_font_color'] = 'ffff00';
                    $config['wm_vrt_alignment'] = 'bottom';
                    $config['wm_hor_alignment'] = 'center';
                    $config['wm_padding'] = '0';
                    $this->image_lib->initialize($config);
                    $this->image_lib->watermark();
            }else{
                $data['errors'] = $this->upload->display_errors();
                $this->load->view("upload_view", $data);
            }
        }
    }    
}