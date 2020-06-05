<?php namespace App\Controllers;

class Frontend extends BaseController
{
	public function index()
	{
		$session = session();
        $data = array(
          'title' => 'Bienvenidos',
          'session' => $session,
        );
		return view('frontend/home',$data);
	}

	//--------------------------------------------------------------------

}
