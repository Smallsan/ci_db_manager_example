<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to your Database Workspace</h1>
        <p class="lead">If you're seeing this, you're currently in the landing page or homepage. Whatever you want to
            call it</p>
        <hr class="my-4">
        <p>Use the navigation bar or the buttons below to navigate through the different tables on the database.</p>
        <a class="btn btn-primary btn-lg" href="/customers" role="button">View Customers</a>
        <a class="btn btn-secondary btn-lg" href="/leads" role="button">View Leads</a>
        <a class="btn btn-success btn-lg" href="/salespersons" role="button">View Salespersons</a>
        <a class="btn btn-info btn-lg" href="/interactions" role="button">View Interactions</a>
        <a class="btn btn-warning btn-lg" href="/transactions" role="button">View Transactions</a>
    </div>
</div>

<?= $this->endSection() ?>