<?php namespace App\Controllers;

use App\Models\UsersModel;
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

    public function users()
    {
        $session = session();

        $usersModel = new UsersModel($db);
        $users = $usersModel->paginate(10);
        $paginate = $usersModel->pager;

        $data = array(
            'title' => 'Usuarios',
            'session' => $session,
            'users' => $users,
            'paginate' => $paginate,
        );

        return view('backend/users/list', $data);

    }

    public function newUser()
    {
        $session = session();

        $usersModel = new UsersModel($db);
        $users = $usersModel->paginate(10);
        $paginate = $usersModel->pager;

        $data = array(
            'title' => 'Crear Usuario',
            'session' => $session,
            'users' => $users,
            'paginate' => $paginate,
        );

        return view('backend/users/new', $data);

    }

    public function editUser($id)
    {
        $session = session();

        $usersModel = new UsersModel($db);
        $user = $usersModel->find($id);

        $data = array(
            'title' => 'Editar Usuario: ' . $user['user_name'],
            'session' => $session,
            'user' => $user,
        );

        return view('backend/users/edit', $data);

    }

    public function updateUser($id)
    {
        $user = new UsersModel();
        $validation = \Config\Services::validation();

        if ($this->request->getPost('user_role') === 'root' || $this->request->getPost('user_role') === 'admin' || $this->request->getPost('user_role') === 'teacher') {
            $permission = 'backend';
        } else {
            $permission = 'frontend';
        }

        if ($this->validate([
            'user_name' => 'min_length[3]|max_length[255]',
            'user_lastname' => 'min_length[3]|max_length[255]',
            'user_phone' => 'min_length[10]|max_length[255]',
        ])) {
            $user->update($id, [
                'user_name' => $this->request->getPost('user_name'),
                'user_lastname' => $this->request->getPost('user_lastname'),
                'user_phone' => $this->request->getPost('user_phone'),
                'user_password' => encrypt($this->request->getPost('user_password')),
                'user_role' => $this->request->getPost('user_role'),
                'user_permission' => $permission,
            ]);
            return redirect()->to(base_url('admin/users'))->with('message', 'El usuario se ha actualizado con éxito')->with('type', 'info');
        } else {
            $session = session();
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('admin/users'))->with('message', $validation->listErrors());
        }

    }

    public function saveUser()
    {

        $users = new UsersModel();

        $validation = \Config\Services::validation();

        echo $this->request->getPost('user_name');
        echo $this->request->getPost('user_lastname');
        echo $this->request->getPost('user_phone');
        echo $this->request->getPost('user_email');
        echo $this->request->getPost('user_password');
        echo $this->request->getPost('user_role');

        $validacion = $this->validate([
            'user_name' => 'required|min_length[3]',
            'user_lastname' => 'required|min_length[3]',
            'user_phone' => 'required|numeric|min_length[10]',
            'user_email' => 'required|valid_email|is_unique[users.user_email]',
            'user_password' => 'required|min_length[6]',
            'user_role' => 'required',
        ]);

        var_dump($validacion);

        if ($this->request->getPost('user_role') === 'root' || $this->request->getPost('user_role') === 'admin' ) {
            $permission = 'backend';
        } else {
            $permission = 'frontend';
        }

        if ($validacion) {
            $users->save([
                'user_name' => $this->request->getPost('user_name'),
                'user_lastname' => $this->request->getPost('user_lastname'),
                'user_phone' => $this->request->getPost('user_phone'),
                'user_email' => $this->request->getPost('user_email'),
                'user_password' => encrypt($this->request->getPost('user_password')),
                'user_avatar' => 'default.png',
                'user_role' => $this->request->getPost('user_role'),
                'user_permission' => $permission,
            ]);
            return redirect()->to(base_url('admin/users/new'))->with('message', 'Se ha creado la cuenta, puedes verla en la sección de Usuarios')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function deleteUser($id)
    {
        $session = session();
        $usersModel = new usersModel($db);
        $usersModel->delete($id);
        return redirect()->to(base_url('admin/users'))->with('message', 'El usuario se ha eliminado con éxito')->with('type', 'info');
    }

}
