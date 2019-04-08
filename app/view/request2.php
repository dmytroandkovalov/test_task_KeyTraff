<?php if (isset($data['db_rows'])): ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя товара</th>
            <th scope="col">Количество товара</th>
            <th scope="col">Сумма</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['db_rows'] as $row_number => $row ): ?>
        <tr>
            <th scope="row"><?php echo $row_number; ?></th>
            <td><?php echo $row['good_name']; ?></td>
            <td><?php echo $row['good_count']; ?></td>
            <td><?php echo $row['good_price']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php else: ?>

    <div class="alert alert-primary" role="alert">
        <p>No results for second query.</p>
    </div>
<?php endif; ?>
