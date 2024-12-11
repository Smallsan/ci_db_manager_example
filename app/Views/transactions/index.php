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

<div class="mt-4">
    <canvas id="transactionsChart" width="400" height="200"></canvas>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('transactionsChart').getContext('2d');
        var chartData = <?= $chartData ?>; // Pass PHP data to JavaScript

        var labels = chartData.map(function(item) {
            return item.label; // TransactionDate
        });

        var data = chartData.map(function(item) {
            return item.value; // TotalPrice
        });

        var transactionsChart = new Chart(ctx, {
            type: 'bar', // Change to the type of chart you want
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Price',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection() ?>