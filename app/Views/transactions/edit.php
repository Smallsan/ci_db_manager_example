<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Edit Transaction</h2>
<form action="/transactions/update/<?= $transaction['TransactionID'] ?>" method="post" class="needs-validation"
    novalidate>
    <div class="mb-3">
        <label for="TransactionDate" class="form-label">Transaction Date</label>
        <input type="date" class="form-control" id="TransactionDate" name="TransactionDate"
            value="<?= esc($transaction['TransactionDate']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="CustomerID" class="form-label">Customer ID</label>
        <input type="number" class="form-control" id="CustomerID" name="CustomerID"
            value="<?= esc($transaction['CustomerID']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="ProductID" class="form-label">Product ID</label>
        <input type="number" class="form-control" id="ProductID" name="ProductID"
            value="<?= esc($transaction['ProductID']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Amount" class="form-label">Amount</label>
        <input type="number" step="0.01" class="form-control" id="Amount" name="Amount"
            value="<?= esc($transaction['Amount']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="Quantity" name="Quantity"
            value="<?= esc($transaction['Quantity']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="TotalPrice" class="form-label">Total Price</label>
        <input type="number" step="0.01" class="form-control" id="TotalPrice" name="TotalPrice"
            value="<?= esc($transaction['TotalPrice']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>