<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Login extends CI_Controller
{
    // Hàm load form login
    public function load_form()
    {
        // Load view
        $this->load->view('login_view');
    }
}
// Bạn ra trình duyệt gõ URL  http://localhost/ubuntu/codeIgniteronce/login/load_form