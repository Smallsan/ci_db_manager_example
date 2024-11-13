<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Leads</h2>
<a href="/leads/create" class="btn btn-primary mb-3">Create New Lead</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($leads as $lead): ?>
        <tr>
            <td><?= esc($lead['FirstName']) ?></td>
            <td><?= esc($lead['LastName']) ?></td>
            <td><?= esc($lead['Email']) ?></td>
            <td><?= esc($lead['Phone']) ?></td>
            <td>
                <a href="/leads/edit/<?= $lead['LeadID'] ?>" class="btn btn-warning">Edit</a>
                <a href="/leads/delete/<?= $lead['LeadID'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>