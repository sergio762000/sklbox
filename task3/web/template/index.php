<?php require_once __DIR__ . '/../layout/header.php';?>

Для добавления товара нажмите <a href="/products">"Добавить"</a>. <br>

<table>
    <tr>
        <th>Наименование товара</th>
        <th>Стоимость товара</th>
        <th>Операция</th>
    </tr>
    <?php foreach($_SESSION['item'] as $key => $value): ?>
    <?php if(!empty($value)): ?>
    <tr>
        <td><?= $value['product_name'] ?></td>
        <td><?= $value['product_price'] ?></td>
        <td>
            <form action="/products/delete" method="post">
                <input type="hidden" name="product_id" value="<?= $key?>">
                <input type="submit" value="Delete">
            </form>

        </td>
    </tr>
    <?php endif; ?>
    <?php endforeach; ?>
</table>

<?php require_once __DIR__ . '/../layout/footer.php';?>