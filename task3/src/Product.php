<?php

namespace Src;


use App\ModelInterface;

class Product implements ModelInterface
{

    public function listItem()
    {
        ob_start();
        include __DIR__ . '/../web/template/index.php';

        return ob_end_flush();
    }

    public function createItem($fields)
    {
        end($_SESSION['item']);
        $currentID = key($_SESSION['item']);
        $_SESSION['item'][$currentID]['product_name'] = $_POST['product_name'];
        $_SESSION['item'][$currentID]['product_price'] = $_POST['product_price'];
        $_SESSION['item'][$currentID + 1] = [];
    }

    public function deleteItem($id)
    {
        unset($_SESSION['item'][$id]);
    }

}
