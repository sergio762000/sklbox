<?php


namespace App;

use Src\Product;

class Controller
{
    private $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new Product();
    }
    
    public function index()
    {
        $this->modelProduct->listItem();
    }

    public function createProduct()
    {
        if (!empty($_POST)) {
            $this->modelProduct->createItem($_POST);
            header('Location: /');
        }

        return $this->render('create');
    }

    public function deleteProduct()
    {
        if (empty($_POST['product_id'])) {
            header('Location: /');
        }

        if (!empty($_POST['product_id']) && empty($_POST['delete_product'])) {
            return $this->render('delete');
        }

        $this->modelProduct->deleteItem($_POST['product_id']);
        header('Location: /');
    }

    private function render($page) {
        ob_start();
        $fileTemplate = __DIR__ . '/../web/template/' . $page . ".php";
        include $fileTemplate;
        return ob_end_flush();
    }
}
