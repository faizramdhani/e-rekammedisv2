<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login()
    {
        check_already_login();
        $this->session->set_flashdata('status_code', 0);
        $this->load->view('auth/login');
    }


    // coba proses 2
    public function process()
    {
        // dani 
        $nmuser = $this->input->post('nmuser', true);
        $pswd = $this->input->post('pswd', true);
        $data = array("nmuser" => $nmuser, "pswd" => $pswd);
        $user = $this->User_m->authLogin($data);
        // print_r($user);
        // echo $user[0]['is_active']; 
        if ($user[0]['is_active'] == 1) {
            if ($user[0]['pswd'] == $pswd) {
                # code...
                $data = [
                    'pswd' => $user[0]['pswd'],
                    'level_erm' => $user[0]['level_erm']
                ];
                // print_r($data);
                $this->session->set_userdata($data);
                if ($user[0]['level_erm'] == 1) {
                    # code...
                    $this->session->set_flashdata('in', $data);
                    // echo 'ke kontroler admin';
                    $this->session->set_flashdata('Successfully', 'Selamat datang admin !');
                    $this->session->set_flashdata('status_code', '200');
                    redirect('auth/login');
                }
                if ($user[0]['level_erm'] == 2) {
                    # code...
                    echo 'role valid user still register';
                    redirect('user');
                }
                echo 'role valid user still register';
            } else {
                echo 'role invalid unregister user';
                // $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                // Password Anda Salah </div>');
                // redirect('auth');
            }
        } else {
        }
    }


    public function logout()
    {
        $params = array('id_pmedis', 'level_erm');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
