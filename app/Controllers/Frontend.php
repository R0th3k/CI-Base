<?php namespace App\Controllers;

use App\Models\ProductsModel;

class Frontend extends BaseController
{
    public function index()
    {
        $session = session();

        $productsModel = new ProductsModel($db);
        $productsModel->join('categories', 'categories.id_category = products.category_id')->join('brands', 'brands.id_brand = products.brand_id');
        // $products = $productsModel->findAll();
        $productsModel->orderBy('id_product', 'DESC');
        $products = $productsModel->paginate(4);
        $paginate = $productsModel->pager;

        $data = array(
            'title' => 'Bienvenidos',
            'session' => $session,
            'products' => $products,
            'paginate' => $paginate,
        );
        return view('frontend/home', $data);
    }

    public function products()
    {
        $session = session();

        $productsModel = new ProductsModel($db);
        $productsModel->join('categories', 'categories.id_category = products.category_id')->join('brands', 'brands.id_brand = products.brand_id');

        // $products = $productsModel->findAll();
        $products = $productsModel->paginate(8);

        $paginate = $productsModel->pager;

        if ($products) {
            foreach ($products as $product) {}
        } else {
            $product = false;
        }

        $data = array(
            'title' => 'Todos los productos',
            'session' => $session,
            'product' => $product,
            'products' => $products,
            'paginate' => $paginate,
        );
        return view('frontend/categories', $data);
    }

    public function category($slug)
    {
        $session = session();

        $productsModel = new ProductsModel($db);
        $productsModel->join('categories', 'categories.id_category = products.category_id')->join('brands', 'brands.id_brand = products.brand_id')->where('category_slug', $slug);

        // $products = $productsModel->findAll();
        $products = $productsModel->paginate(8);

        $paginate = $productsModel->pager;

        if ($products) {
            foreach ($products as $product) {}
            $title = $product['category_name'];
        } else {
            $product = false;
            $title = 'No hay productos';
        }

        $data = array(
            'title' => $title,
            'session' => $session,
            'product' => $product,
            'products' => $products,
            'paginate' => $paginate,
            'slug' => $slug,
        );
        return view('frontend/categories', $data);
    }

    public function aviso()
    {
        $session = session();

        $data = array(
            'title' => 'Aviso de privacidad',
        );
        return view('frontend/aviso', $data);
    }

    public function contacto()
    {
        $session = session();

        $data = array(
            'title' => 'Contacto',
        );
        return view('frontend/contacto', $data);
    }

    public function enviar()
    {
        $data = json_decode(file_get_contents('php://input'), true);//extract($data);

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $subject = $data['subject'];
        $message = $data['message'];

        $error = "";

        if (empty($name)) {
            $error .= "Ingresa un nombre </br>";
        } else {

            $name = filter_var($name, FILTER_SANITIZE_STRING);
            $name = trim($name);
            if ($name === '') {
                $error .= "Nombre esta vacío </br>";
            }
        }

        if (empty($email)) {
            $error .= "Ingresa un E-mail </br>";
        } else {

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error .= "Ingresa un E-mail correcto </br>";
            } else {

                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            }
        }

        if (empty($phone)) {
            $error .= "Ingresa un número de teléfono </br>";
        } else {

            $phone = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
            $phone = trim($phone);
            if ($phone === '') {
                $error .= "Teléfono esta vacío </br>";
            }
        }

        if (empty($subject)) {
            $error .= "Ingresa un Asunto </br>";
        } else {

            $subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $subject = trim($subject);
            if ($subject === '') {
                $error .= "El asunto esta vacío </br>";
            }
        }

        if (empty($message)) {
            $error .= "Ingresa un Mensaje </br>";
        } else {

            $message = filter_var($message, FILTER_SANITIZE_STRING);
            $message = trim($message);
            if ($message === '') {
                $error .= "El mensaje esta vacío </br>";
            }
        }

        $body = "<p><strong>Nombre: </strong>" . $name . "</p>" .
            "<p><strong>Correo: </strong>" . $email . "</p>" .
            "<p><strong>Teléfono: </strong>" . $phone . "</p>" .
            "<p><strong>Asunto: </strong>" . $subject . "</p>" .
            "<p><strong>Mensaje: </strong>" . $message . "</p>";

        $receiver = 'grupo_trebol00@hotmail.com, hector@publicidadengoogle.com.mx';
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'X-Mailer: PHP7\n';
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if ($error == "") {
            $success = mail($receiver, $subject, $body, $headers);
            echo 'true';
        } else {
            echo $error;

        }
    }

}
