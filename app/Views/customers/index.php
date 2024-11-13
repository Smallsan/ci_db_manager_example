<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<h2>Customers</h2>
<a href="/customers/create" class="btn btn-primary mb-3">Create New Customer</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Date of Registration</th>
            <th>Assigned Salesperson</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['FirstName']) ?></td>
                <td><?= esc($customer['LastName']) ?></td>
                <td><?= esc($customer['Email']) ?></td>
                <td><?= esc($customer['Phone']) ?></td>
                <td><?= esc($customer['Address']) ?></td>
                <td><?= esc($customer['DateOfRegistration']) ?></td>
                <td><?= esc($customer['AssignedSalesperson']) ?></td>
                <td>
                    <a href="/customers/edit/<?= $customer['CustomerID'] ?>" class="btn btn-warning">Edit</a>
                    <a href="/customers/delete/<?= $customer['CustomerID'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>