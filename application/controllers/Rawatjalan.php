<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatjalan extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'rawatjalan/index');
    }
}
