<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Login extends CI_Controller
{
    // Hàm load form login
    public function form()
    {
        // Data cần truyền qua view
        $data = array(
            'title' => 'Đây là trang login',
            'message' => 'Nhập Thông Tin Đăng Nhập'
        );
  
        // Load view và truyền data qua view
        $this->load->view('login_view', $data);
    }
}
// Bạn ra trình duyệt gõ URL  http://localhost/ubuntu/codeIgniteronce/login/load_form