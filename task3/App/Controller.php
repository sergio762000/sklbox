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

        ob_start();
        include __DIR__ . '/../web/template/create.php';
        return ob_end_flush();
    }

    public function deleteProduct()
    {
        if (empty($_POST['product_id'])) {
            header('Location: /');
        }

        if (!empty($_POST['product_id']) && empty($_POST['delete_product'])) {
            ob_start();
            include __DIR__ . '/../web/template/delete.php';
            return ob_end_flush();
        }

        $this->modelProduct->deleteItem($_POST['product_id']);
        header('Location: /');
    }

}
