<?php namespace App\Controllers;

class Samples extends BaseController
{
	public function dashboard()
	{
		$session = session();
        $data = array(
          'title' => 'Forms',
          'session' => $session,
        );
		return view('samples/dashboard',$data);
  }

	public function forms()
	{
		$session = session();
        $data = array(
          'title' => 'Forms',
          'session' => $session,
        );
		return view('samples/forms',$data);
	}

  public function ui()
	{
		$session = session();
        $data = array(
          'title' => 'UI Elements',
          'session' => $session,
        );
		return view('samples/ui',$data);
  }



  public function datatables()
	{
		$session = session();
        $data = array(
          'title' => 'Tables',
          'session' => $session,
        );
		return view('samples/datatables',$data);
	}

  public function login()
	{
		$session = session();
        $data = array(
          'title' => 'Login',
          'session' => $session,
        );
		return view('samples/login',$data);
	}

	//--------------------------------------------------------------------

}
