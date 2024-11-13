<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Create Lead</h2>
<form action="/leads/store" method="post" class="needs-validation" novalidate>
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
        <label for="LeadSource" class="form-label">Lead Source</label>
        <input type="text" class="form-control" id="LeadSource" name="LeadSource" required>
    </div>
    <div class="mb-3">
        <label for="Status" class="form-label">Status</label>
        <select class="form-control" id="Status" name="Status" required>
            <option value="New">New</option>
            <option value="In Progress">In Progress</option>
            <option value="Converted">Converted</option>
            <option value="Closed">Closed</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="AssignedSalesperson" class="form-label">Assigned Salesperson</label>
        <input type="number" class="form-control" id="AssignedSalesperson" name="AssignedSalesperson" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?= $this->endSection() ?>