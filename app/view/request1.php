<?php if (isset($data['db_rows'])): ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Номер заказа</th>
            <th scope="col">Имя товара</th>
            <th scope="col">Цена</th>
            <th scope="col">Количество</th>
            <th scope="col">Имя оператора, за которым числиться заказ</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($data['db_rows'] as $row_number => $row ): ?>
                <tr>
                    <th scope="row"><?php echo $row_number?></th>
                    <td><?php echo $row['order_number']; ?></td>
                    <td><?php echo $row['good_name']; ?></td>
                    <td><?php echo $row['good_price']; ?></td>
                    <td><?php echo $row['good_count']; ?></td>
                    <td><?php echo $row['operator_name']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert alert-primary" role="alert">
        <p>No results for first your query.</p>
    </div>
<?php endif; ?>
