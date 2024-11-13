<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Edit Customer</h2>
<form action="/customers/update/<?= $customer['CustomerID'] ?>" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="FirstName" name="FirstName"
            value="<?= esc($customer['FirstName']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="LastName" name="LastName" value="<?= esc($customer['LastName']) ?>"
            required>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" value="<?= esc($customer['Email']) ?>"
            required>
    </div>
    <div class="mb-3">
        <label for="Phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="Phone" name="Phone" value="<?= esc($customer['Phone']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <textarea class="form-control" id="Address" name="Address" required><?= esc($customer['Address']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="DateOfRegistration" class="form-label">Date of Registration</label>
        <input type="date" class="form-control" id="DateOfRegistration" name="DateOfRegistration"
            value="<?= esc($customer['DateOfRegistration']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="AssignedSalesperson" class="form-label">Assigned Salesperson</label>
        <input type="number" class="form-control" id="AssignedSalesperson" name="AssignedSalesperson"
            value="<?= esc($customer['AssignedSalesperson']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>