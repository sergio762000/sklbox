<?php


namespace App;


interface ModelInterface
{
    public function listItem();

    public function createItem($fields);

    public function deleteItem($id);
}