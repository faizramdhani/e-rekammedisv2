<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'data_pasien/index');
    }
}
