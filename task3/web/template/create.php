<?php require_once __DIR__ . '/../layout/header.php';?>

<form name="add_product" action="/products" method="post">
    <label for="product_name">Наименование товара</label>
    <input type="text" name="product_name"> <br>
    <label for="product_price">Стоимость товара</label>
    <input type="number" name="product_price"> <br>
    <input type="submit" value="Добавить"> <br>
</form>

<?php require_once __DIR__ . '/../layout/footer.php';?>