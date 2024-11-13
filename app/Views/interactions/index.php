<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Interactions</h2>
<a href="/interactions/create" class="btn btn-primary mb-3">Create New Interaction</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Date of Interaction</th>
            <th>Type</th>
            <th>Notes</th>
            <th>Customer ID</th>
            <th>Salesperson ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($interactions as $interaction): ?>
        <tr>
            <td><?= esc($interaction['DateOfInteraction']) ?></td>
            <td><?= esc($interaction['Type']) ?></td>
            <td><?= esc($interaction['Notes']) ?></td>
            <td><?= esc($interaction['CustomerID']) ?></td>
            <td><?= esc($interaction['SalespersonID']) ?></td>
            <td>
                <a href="/interactions/edit/<?= $interaction['InteractionID'] ?>" class="btn btn-warning">Edit</a>
                <a href="/interactions/delete/<?= $interaction['InteractionID'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>