<?php require_once __DIR__ . '/../layout/header.php';?>

<table>
    <tr>
        <th>Наименование товара</th>
        <th>Стоимость товара</th>
        <th>Операция</th>
    </tr>
    <tr>
        <td><?= $_SESSION['item'][$_POST['product_id']]['product_name'] ?></td>
        <td><?= $_SESSION['item'][$_POST['product_id']]['product_price'] ?></td>
        <td>
            <form action="/products/delete" method="post">
                <input type="hidden" name="product_id" value="<?= $_POST['product_id']?>">
                <input type="hidden" name="delete_product" value="true">
                <input type="submit" value="Удалить">
            </form>

        </td>
    </tr>
</table>

<?php require_once __DIR__ . '/../layout/footer.php';?>