<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatinap extends CI_Controller
{

    public function index()
    {
        $this->template->load('template', 'rawatinap/index');
    }
}
