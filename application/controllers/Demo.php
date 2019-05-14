<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Demo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $ip = $this->load->helper("url");
        $this->load->library("session");
    }
    // public function index(){
    //     $data=array(
    //         "username" => "Kaito",
    //         "email" => "codephp2013@gmail.com",
    //         "website" => "freetuts.net",
    //         "gender" => "Male",
    //     );
    //     $this->session->set_userdata($data);
    //     redirect(base_url() . "demo/index2");
    // }
    // public function index2(){
    //     $user=$this->session->userdata("username");
    //     $email=$this->session->userdata("email");
    //     $website=$this->session->userdata("website");
    //     echo "Username: $user ";
    //     echo "<hr/>";
    //     echo "Email: $email";
    //     echo "<hr/>";
    //     echo "Level: $website";
    //     $data=$this->session->all_userdata();
    //     echo "<hr/>";
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";  
    // }
    // public function index3(){
    //     $this->session->sess_destroy();
    //     echo "Huy session thanh cong.";
    // }
    public function index(){
        $data=array(
            "username" => "Kaito",
            "email" => "codephp2013@gmail.com",
            "website" => "freetuts.net",
            "gender" => "Male",
        );
        $this->session->set_userdata($data);
        // Cũng giống như các framework khác đều tồn tại một khái niệm gọi là flashdata nó có nhiệm vụ gì, bản chất nó là một dạng dữ liệu và nó không tồn tại lâu dài, nó chỉ xuất hiện ra một lần và sau đó nó sẽ bị hủy
        $this->session->set_flashdata("flash_open", "Khoi tao session thanh cong");
        redirect(base_url()."demo/index2");
    }

    public function index2(){
        echo $this->session->flashdata("flash_open");
        $user=$this->session->userdata("username");
        $level=$this->session->userdata("level");
        $email=$this->session->userdata("email");
        echo "Username: $user, Email: $email, Level: $level";
        $data=$this->session->all_userdata();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}