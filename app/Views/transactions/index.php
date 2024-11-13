<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Transactions</h2>
<a href="/transactions/create" class="btn btn-primary mb-3">Create New Transaction</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Transaction Date</th>
            <th>Customer ID</th>
            <th>Product ID</th>
            <th>Amount</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $transaction): ?>
        <tr>
            <td><?= esc($transaction['TransactionDate']) ?></td>
            <td><?= esc($transaction['CustomerID']) ?></td>
            <td><?= esc($transaction['ProductID']) ?></td>
            <td><?= esc($transaction['Amount']) ?></td>
            <td><?= esc($transaction['Quantity']) ?></td>
            <td><?= esc($transaction['TotalPrice']) ?></td>
            <td>
                <a href="/transactions/edit/<?= $transaction['TransactionID'] ?>" class="btn btn-warning">Edit</a>
                <a href="/transactions/delete/<?= $transaction['TransactionID'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>