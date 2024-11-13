<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Create Interaction</h2>
<form action="/interactions/store" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="DateOfInteraction" class="form-label">Date of Interaction</label>
        <input type="date" class="form-control" id="DateOfInteraction" name="DateOfInteraction" required>
    </div>
    <div class="mb-3">
        <label for="Type" class="form-label">Type</label>
        <select class="form-control" id="Type" name="Type" required>
            <option value="Call">Call</option>
            <option value="Meeting">Meeting</option>
            <option value="Email">Email</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="Notes" class="form-label">Notes</label>
        <textarea class="form-control" id="Notes" name="Notes" required></textarea>
    </div>
    <div class="mb-3">
        <label for="CustomerID" class="form-label">Customer ID</label>
        <input type="number" class="form-control" id="CustomerID" name="CustomerID" required>
    </div>
    <div class="mb-3">
        <label for="SalespersonID" class="form-label">Salesperson ID</label>
        <input type="number" class="form-control" id="SalespersonID" name="SalespersonID" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?= $this->endSection() ?>