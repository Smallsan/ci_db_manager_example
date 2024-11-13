<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Edit Interaction</h2>
<form action="/interactions/update/<?= $interaction['InteractionID'] ?>" method="post" class="needs-validation"
    novalidate>
    <div class="mb-3">
        <label for="DateOfInteraction" class="form-label">Date of Interaction</label>
        <input type="date" class="form-control" id="DateOfInteraction" name="DateOfInteraction"
            value="<?= esc($interaction['DateOfInteraction']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="Type" class="form-label">Type</label>
        <select class="form-control" id="Type" name="Type" required>
            <option value="Call" <?= $interaction['Type'] == 'Call' ? 'selected' : '' ?>>Call</option>
            <option value="Meeting" <?= $interaction['Type'] == 'Meeting' ? 'selected' : '' ?>>Meeting</option>
            <option value="Email" <?= $interaction['Type'] == 'Email' ? 'selected' : '' ?>>Email</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="Notes" class="form-label">Notes</label>
        <textarea class="form-control" id="Notes" name="Notes" required><?= esc($interaction['Notes']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="CustomerID" class="form-label">Customer ID</label>
        <input type="number" class="form-control" id="CustomerID" name="CustomerID"
            value="<?= esc($interaction['CustomerID']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="SalespersonID" class="form-label">Salesperson ID</label>
        <input type="number" class="form-control" id="SalespersonID" name="SalespersonID"
            value="<?= esc($interaction['SalespersonID']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?= $this->endSection() ?>