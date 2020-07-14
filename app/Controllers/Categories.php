<?php namespace App\Controllers;

use App\Models\CategoriesModel;
class categories extends BaseController
{
    public function index()
    {

    }

    public function categories()
    {
        $session = session();

        $CategoriesModel = new CategoriesModel($db);
        $categories = $CategoriesModel->findAll();

        $data = array(
            'title' => 'Categorias',
            'session' => $session,
            'categories' => $categories,
        );

        return view('backend/categories/list', $data);

    }

    public function newCategory()
    {
        $session = session();

        $CategoriesModel = new CategoriesModel($db);
        $categories = $CategoriesModel->findAll();

        $data = array(
            'title' => 'Crear Categoría',
            'session' => $session,
            'categories' => $categories,
        );

        return view('backend/categories/new', $data);

    }

    public function editCategory($id)
    {
        $session = session();

        $CategoriesModel = new CategoriesModel($db);
        $category = $CategoriesModel->find($id);

        $data = array(
            'title' => 'Editar Categoría: ' . $category['category_name'],
            'session' => $session,
            'category' => $category,
        );

        return view('backend/categories/edit', $data);

    }

    public function updateCategory($id)
    {
        $category = new CategoriesModel();
        $validation = \Config\Services::validation();



        if ($this->validate([
          'category_name' => 'required|min_length[3]',
        ])) {
            $category->update($id, [
              'category_name' => $this->request->getPost('category_name'),
              'category_slug' => slug($this->request->getPost('category_name')),
            ]);
            return redirect()->to(base_url('admin/categories'))->with('message', 'El Categoria se ha actualizado con éxito')->with('type', 'info');
        } else {
            $session = session();
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('admin/categories'))->with('message', $validation->listErrors());
        }

    }

    public function saveCategory()
    {

        $categories = new CategoriesModel();

        $validation = \Config\Services::validation();

        echo $this->request->getPost('category_name');


        $validacion = $this->validate([
            'category_name' => 'required|min_length[3]',

        ]);

        var_dump($validacion);



        if ($validacion) {
            $categories->save([
                'category_name' => $this->request->getPost('category_name'),
                'category_slug' => slug($this->request->getPost('category_name')),

            ]);
            return redirect()->to(base_url('admin/categories/new'))->with('message', 'Se ha creado la categoría, puedes verla en la sección de Categorias')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function deleteCategory($id)
    {
        $session = session();
        $CategoriesModel = new CategoriesModel($db);
        $CategoriesModel->delete($id);
        return redirect()->to(base_url('admin/categories'))->with('message', 'La Categoría se ha eliminado con éxito')->with('type', 'info');
    }

}
