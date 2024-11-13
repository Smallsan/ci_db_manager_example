<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Edit Lead</h2>
<form action="/leads/update/<?= $lead['LeadID'] ?>" method="post" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="FirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?= esc($lead['FirstName']) ?>"
            required>
    </div>
    <div class="mb-3">
        <label for="LastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="LastName" name="LastName" value="<?= esc($lead['LastName']) ?>"
            required>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" value="<?= esc($lead['Email']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="Phone" name="Phone" value="<?= esc($lead['Phone']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="LeadSource" class="form-label">Lead Source</label>
        <input type="text" class="form-control" id="LeadSource" name="LeadSource"
            value="<?= esc($lead['LeadSource']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Status" class="form-label">Status</label>
        <select class="form-control" id="Status" name="Status" required>
            <option value="New" <?= $lead['Status'] == 'New' ? 'selected' : '' ?>>New</option>
            <option value="In Progress" <?= $lead['Status'] == 'In Progress' ? 'selected' : '' ?>>In Progress</option>
            <option value="Converted" <?= $lead['Status'] == 'Converted' ? 'selected' : '' ?>>Converted</option>
            <option value="Closed" <?= $lead['Status'] == 'Closed' ? 'selected' : '' ?>>Closed</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="AssignedSalesperson" class="form-label">Assigned Salesperson</label>
        <input type="number" class="form-control" id="AssignedSalesperson" name="AssignedSalesperson"
            value="<?= esc($lead['AssignedSalesperson']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>