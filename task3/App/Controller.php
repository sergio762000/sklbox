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
        //todo - вывод списка item класса Product
        $listAllProducts = $this->modelProduct->listItem();
        die(__METHOD__);

        //todo - подключение шаблона и передача в него списка item

        return $listAllProducts;
    }

    public function createProduct()
    {
        die(__METHOD__);
        //todo - создание нового продукта в хранилище
        //обработка массива $_POST (данные формы)
        $formData = [];
        foreach ($_POST['dataProduct'] as $name => $value) {
            $formData[$name] = $value;
        }
        $this->modelProduct->createItem($formData);

        header('Location /');
    }

    public function deleteProduct()
    {
        die(__METHOD__);
        //todo - Удаление продукта из хранилища
        // Если нажата кнопка "Удалить"
        if (isset($_POST['delete'])) {
            $id = $_POST['dataProduct']['id'];
            $this->modelProduct->deleteItem($id);
            header('Location /');
        }
        // Иначе выводим информацию о товаре

    }

}
