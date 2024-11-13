<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Create Salesperson</h2>
<form action="/salespersons/store" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="FirstName" name="FirstName" required>
    </div>
    <div class="mb-3">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="LastName" name="LastName" required>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" required>
    </div>
    <div class="mb-3">
        <label for="Phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="Phone" name="Phone" required>
    </div>
    <div class="mb-3">
        <label for="HireDate" class="form-label">Hire Date</label>
        <input type="date" class="form-control" id="HireDate" name="HireDate" required>
    </div>
    <div class="mb-3">
        <label for="SalesTarget" class="form-label">Sales Target</label>
        <input type="number" step="0.01" class="form-control" id="SalesTarget" name="SalesTarget" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?= $this->endSection() ?>