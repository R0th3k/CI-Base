<?php namespace App\Controllers;


class Backend extends BaseController
{
    public function index()
    {
        $session = session();
        $data = array(
            'title' => 'Admin',
            'session' => $session,
        );
        return view('backend/home', $data);
    }



}
