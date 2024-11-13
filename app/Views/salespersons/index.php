<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Salespersons</h2>
<a href="/salespersons/create" class="btn btn-primary mb-3">Create New Salesperson</a>
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
        <?php foreach ($salespersons as $salesperson): ?>
        <tr>
            <td><?= esc($salesperson['FirstName']) ?></td>
            <td><?= esc($salesperson['LastName']) ?></td>
            <td><?= esc($salesperson['Email']) ?></td>
            <td><?= esc($salesperson['Phone']) ?></td>
            <td>
                <a href="/salespersons/edit/<?= $salesperson['SalespersonID'] ?>" class="btn btn-warning">Edit</a>
                <a href="/salespersons/delete/<?= $salesperson['SalespersonID'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>