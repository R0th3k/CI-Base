<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Inicia Sesión',
        );

        return view('frontend/login/login', $data);

    }

    public function autenticate()
    {
        $usersModel = new usersModel();

        $email = $this->request->getPost('user_email');
        $passwordFromPost = $this->request->getPost('user_password');

        $user = $usersModel->select('id_user,user_name,user_lastname,user_email,user_password,user_role,user_permission,user_avatar,user_phone')->where('user_email', $email)->first();

        if (!$user) {
            return redirect()->to('/login')->with('message', 'No se encontró el correo ' . $email . ' en nuestros registros.')->with('type', 'danger');
            return;
        }

        if (compare($passwordFromPost, $user['user_password'])) {

            unset($user['user_password']);

            $session = session();
            $session->set($user);
            echo $user['user_role'];
            echo $user['user_permission'];
            return $this->_sessionValidate();

        } else {
            return redirect()->to('/login')->with('message', 'Contraseña incorrecta')->with('type', 'danger');
            return;
        }

    }

    public function recoverPassword()
    {
        $data = array(
            'title' => 'Recuperar Contraseña',
        );

        return view('frontend/login/recover-password', $data);

    }

    public function recoverPasswordToken()
    {
        $email = $this->request->getPost('user_email');
        $users = new UsersModel();
        $user = $users->select('id_user,user_email,user_password_recovery_token,user_password_recovery_token,user_password_recovery_last_date')->where('user_email', $email)->first();

        if (!$user) {
            return redirect()->to('/recover-password')->with('message', 'No se encontró el correo ' . $email . ' en nuestros registros.')->with('type', 'danger');
            return;
        }
        $userId = $user['id_user'];
        $users->update($userId, [
            'user_password_recovery_token' => generateToken(),
            'user_password_recovery_last_date' => nowDate(),
        ]);

        return redirect()->to('/recover-password')->with('message', 'Se han enviado a tu correo las instrucciones para recuperar tu cuenta.')->with('type', 'info');

    }

    public function changePassword($tokenUrl)
    {

        $users = new UsersModel();
        $user = $users->select('id_user,user_password_recovery_token,user_password_recovery_last_date')->where('user_password_recovery_token', $tokenUrl)->first();

        if (!$user) {
            echo 'Enlace No valido';
            $data = array(
                'title' => 'Enlace No valido',
            );
            return view('frontend/login/link-expired', $data);
        }

        $dateDb = strtotime($user['user_password_recovery_last_date']);
        $now = strtotime(nowDate());
        $diff = ($now - $dateDb) / 3600; //Segundos a Horas
        //echo $diff;

        if ($diff > 3 && $user) {
            $data = array(
                'title' => 'El enlace ha caducado',
            );
            return view('frontend/login/link-expired', $data);
        } else {
            $validation = \Config\Services::validation();
            $data = array(
                'title' => 'Crea tu nueva contraseña',
                'id_user' => $user['id_user'],
                'validation' => $validation,
            );
            return view('frontend/login/change-pass', $data);
        }

    }

    public function setNewPassword($id)
    {
        $validation = \Config\Services::validation();

        $users = new UsersModel();
        $user = $users->select('id_user,user_password_recovery_token')->where('id_user', $id)->first();
        var_dump($user);

        echo $this->request->getPost('user_password');

        $validacion = $this->validate([
            'user_password' => 'required|min_length[6]',
        ]);

        if ($validacion) {
            $users->update($id, [
                'user_password' => encrypt($this->request->getPost('user_password')),
                'user_password_recovery_token' => null,
            ]);
            return redirect()->to(base_url('login'))->with('message', 'Se ha cambiado tu contraseña, ahora puedes iniciar sesión.')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }
    }

    public function register()
    {
        $validation = \Config\Services::validation();

        $data = array(
            'title' => 'Crear una cuenta',
            'validation' => $validation,
        );

        return view('frontend/login/register', $data);

    }

    public function createUserInfrontend()
    {

        $users = new UsersModel();

        $validation = \Config\Services::validation();

        echo $this->request->getPost('user_name');
        echo $this->request->getPost('user_lastname');
        echo $this->request->getPost('user_phone');
        echo $this->request->getPost('user_email');
        echo $this->request->getPost('user_password');

        $validacion = $this->validate([
            'user_name' => 'required|min_length[3]',
            'user_lastname' => 'required|min_length[3]',
            'user_phone' => 'required|numeric|min_length[10]',
            'user_email' => 'required|valid_email|is_unique[users.user_email]',
            'user_password' => 'required|min_length[6]',
        ]);

        var_dump($validacion);

        if ($validacion) {
            $users->save([
                'user_name' => $this->request->getPost('user_name'),
                'user_lastname' => $this->request->getPost('user_lastname'),
                'user_phone' => $this->request->getPost('user_phone'),
                'user_email' => $this->request->getPost('user_email'),
                'user_password' => encrypt($this->request->getPost('user_password')),
                'user_avatar' => 'default.jpg',
                'user_role' => 'registered',
                'user_permission' => 'frontend',
            ]);
            return redirect()->to(base_url('login'))->with('message', 'Se ha creado tu cuenta, ahora puedes iniciar sesión.')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function sessionDestroy()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }

    private function _sessionValidate()
    {
        $session = session();

        if ($session->user_permission == 'frontend') {
            return redirect()->to(base_url());
        }
        if ($session->user_permission == 'backend') {
            return redirect()->to(base_url('admin'));
        }

    }

}
