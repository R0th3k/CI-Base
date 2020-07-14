<?php namespace App\Controllers;

use App\Models\BrandsModel;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;

class Products extends BaseController
{
    public function index()
    {

    }

    public function products()
    {
        $session = session();


        $productsModel = new ProductsModel($db);
        $productsModel
            ->join('categories', 'categories.id_category = products.category_id')
            ->join('brands', 'brands.id_brand = products.brand_id');
        $products = $productsModel->findAll();
        //$paginate = $productsModel->pager;

        $data = array(
            'title' => 'Productos',
            'session' => $session,
            'products' => $products,
            //'paginate' => $paginate,
        );

        return view('backend/products/list', $data);

    }

    public function newProduct()
    {
        $session = session();

        $brandsModel = new BrandsModel($db);
        $brands = $brandsModel->findAll();

        $categoriesModel = new CategoriesModel($db);
        $categories = $categoriesModel->findAll();

        $data = array(
            'title' => 'Crear Producto',
            'session' => $session,
            'brands' => $brands,
            'categories' => $categories,
        );

        return view('backend/products/new', $data);

    }

    public function editProduct($id)
    {
        $session = session();

        $productsModel = new ProductsModel($db);
        $product = $productsModel->find($id);

        $data = array(
            'title' => 'Editar Producto: ' . $product['product_name'],
            'session' => $session,
            'product' => $product,
        );

        return view('backend/products/edit', $data);

    }

    public function updateProduct($id)
    {
        $product = new ProductsModel();
        $validation = \Config\Services::validation();



        if ($this->validate([
            'product_name' => 'required|min_length[3]',
            'product_model' => 'required|min_length[3]',
            //'product_image' => 'min_length[3]',
            'product_description' => 'required|min_length[3]',
            'product_price' => 'min_length[0]',
            'product_price_discount' => 'min_length[0]',
            'category_id' => 'required',
            'brand_id' => 'required',
        ])) {



            $image = $this->request->getPost('actual_image');

            if ($file = $this->request->getFile('product_image')) {

                if ($file->isValid() && !$file->hasMoved()) {
                    $image = $file->getRandomName();
                    $file->move('assets/images/uploads', $image);
                }
            }



            $product->update($id, [
                'product_name' => $this->request->getPost('product_name'),
                'product_model' => $this->request->getPost('product_model'),
                'product_slug' => slug($this->request->getPost('product_name')),
                'product_description' => $this->request->getPost('product_description'),
                'product_image' => $image,
                'product_price' => $this->request->getPost('product_price'),
                'product_price_discount' => $this->request->getPost('product_price_discount'),
                'category_id' => $this->request->getPost('category_id'),
                'brand_id' => $this->request->getPost('brand_id'),
            ]);
            return redirect()->to(base_url('admin/products'))->with('message', 'El Producto se ha actualizado con éxito')->with('type', 'info');
        } else {
            $session = session();
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('admin/products'))->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function saveProduct()
    {

        $products = new ProductsModel();

        $validation = \Config\Services::validation();

        // echo $this->request->getPost('product_name');
        // echo '<br>';
        // echo $this->request->getPost('product_model');
        // echo '<br>';
        // echo $this->request->getPost('product_description');
        // echo '<br>';
        // echo $this->request->getPost('product_price');
        // echo '<br>';
        // echo $this->request->getPost('product_price_discount');
        // echo '<br>';
        // echo $this->request->getPost('product_image');
        // echo '<br>';
        // echo $this->request->getPost('category_id');
        // echo '<br>';
        // echo $this->request->getPost('brand_id');

        $validacion = $this->validate([
            'product_name' => 'required|min_length[3]',
            'product_model' => 'required|min_length[3]',
            //'product_image' => 'min_length[3]',
            'product_description' => 'required|min_length[3]',
            'product_price' => 'min_length[0]',
            'product_price' => 'min_length[0]',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        //var_dump($validacion);

        if ($validacion) {

          $image = 'product-default.jpg';

            if ($file = $this->request->getFile('product_image')) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $image = $file->getRandomName();
                    $file->move('assets/images/uploads', $image);

                }
            }

            $products->save([
                'product_name' => $this->request->getPost('product_name'),
                'product_model' => $this->request->getPost('product_model'),
                'product_slug' => slug($this->request->getPost('product_name')),
                'product_description' => $this->request->getPost('product_description'),
                'product_image' => $image,
                'product_price' => $this->request->getPost('product_price'),
                'product_price_discount' => $this->request->getPost('product_price_discount'),
                'category_id' => $this->request->getPost('category_id'),
                'brand_id' => $this->request->getPost('brand_id'),
            ]);
            return redirect()->to(base_url('admin/products/new'))->with('message', 'Se ha creado el producto, puedes verlo en la sección de Productos')->with('type', 'success');

        } else {
            return redirect()->back()->with('message', $validation->listErrors())->with('type', 'danger');
        }

    }

    public function deleteProduct($id)
    {
        $session = session();
        $productsModel = new ProductsModel($db);
        $productsModel->delete($id);
        return redirect()->to(base_url('admin/products'))->with('message', 'El Producto se ha eliminado con éxito')->with('type', 'info');
    }

}
