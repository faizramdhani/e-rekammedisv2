<?php
class Fungsi
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $user_data = $this->ci->session;
        return $user_data;
    }
}
