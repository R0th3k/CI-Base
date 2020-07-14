<?php namespace App\Controllers;

use App\Models\BrandsModel;
class brands extends BaseController
{
    public function index()
    {

    }

    public function brands()
    {
        $session = session();

        $BrandsModel = new BrandsModel($db);
        $brands = $BrandsModel->findAll();

        $data = array(
            'title' => 'Marcas',
            'session' => $session,
            'brands' => $brands,
        );

        return view('backend/brands/list', $data);

    }

    public function newBrand()
    {
        $session = session();

        $BrandsModel = new BrandsModel($db);
        $brands = $BrandsModel->findAll();

        $data = array(
            'title' => 'Crear Marca',
            'session' => $session,
            'brands' => $brands,
        );

        return view('backend/brands/new', $data);

    }

    public function editBrand($id)
    {
        $session = session();

        $BrandsModel = new BrandsModel($db);
        $brand = $BrandsModel->find($id);

        $data = array(
            'title' => 'Editar Marca: ' . $brand['brand_name'],
            'session' => $session,
            'brand' => $brand,
        );

        return view('backend/brands/edit', $data);

    }

    public function updateBrand($id)
    {
        $brand = new BrandsModel();
        $validation = \Config\Services::validation();



        if ($this->validate([
          'brand_name' => 'required|min_length[3]',
        ])) {
            $brand->update($id, [
              'brand_name' => $this->request->getPost('brand_name'),
              'brand_slug' => slug($this->request->getPost('brand_name')),
            ]);
            return redirect()->to(base_url('admin/brands'))->with('message', 'El Marca se ha actualizado con éxito')->with('type', 'info');
        } else {
            $session = session();
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('admin/brands'))->with('message', $validation->listErrors());
        }

    }

    public function saveBrand()
    {

        $brands = new BrandsModel();

        $validation = \Config\Services::validation();

        echo $this->request->getPost('brand_name');


        $validacion = $this->validate([
            'brand_name' => 'required|min_length[3]',

        ]);

        var_dump($validacion);



        if ($validacion) {
            $brands->save([
                'brand_name' => $this->request->getPost('brand_name'),
                'brand_slug' => slug($this->request->getPost('brand_name')),

            ]);
            return redirect()->to(base_url('admin/brands/new'))->with('message', 'Se ha creado la Marca, puedes verla en la sección de Marcas')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function deleteCategory($id)
    {
        $session = session();
        $BrandsModel = new BrandsModel($db);
        $BrandsModel->delete($id);
        return redirect()->to(base_url('admin/brands'))->with('message', 'La Marca se ha eliminado con éxito')->with('type', 'info');
    }

}
