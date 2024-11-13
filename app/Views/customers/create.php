<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Create Customer</h2>
<form action="/customers/store" method="post" class="needs-validation" novalidate>
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
        <label for="Address" class="form-label">Address</label>
        <textarea class="form-control" id="Address" name="Address" required></textarea>
    </div>
    <div class="mb-3">
        <label for="DateOfRegistration" class="form-label">Date of Registration</label>
        <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration" required>
    </div>
    <div class="mb-3">
        <label for="AssignedSalesperson" class="form-label">Assigned Salesperson</label>
        <input type="number" class="form-control" id="AssignedSalesperson" name="AssignedSalesperson" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?= $this->endSection() ?>