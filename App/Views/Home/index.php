<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="/public/js/datatable.js"></script>
    <title>Tasks</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light mb-3">
        <span class="navbar-brand mb-0 h1"><a href="/">Task application</a></span>
    </nav>
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <h1>Task List</h1>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <a href="/new" type="button" class="btn btn-success">New</a>
        </div>
        <div class="col-md-6">
            <a href="/<?= (isset($_SESSION['logged_in'])) ? 'logout' : 'login' ?>" type="button"
               class="btn btn-dark float-right"><?= (isset($_SESSION['logged_in'])) ? 'Logout' : 'Login' ?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_GET['added'])): ?>
                <div class="alert alert-success" role="alert">
                    Task Added
                </div><? endif; ?>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>

                    <th scope="col"><?php if (isset($_SESSION['logged_in'])): ?>Actions<? endif; ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <th scope="row"><?= $task['id'] ?></th>
                        <td><?= $task['name'] ?></td>
                        <td><?= $task['email'] ?></td>
                        <td><?= $task['content'] ?>
                            <?php if ($task['admin_edit']): ?>
                                <span class="badge badge-secondary">Edited by admin</span>
                            <? endif; ?>
                        </td>
                        <td>
                            <input type="checkbox" <?= ($task['status']) ? 'checked' : '' ?>
                                <?= (isset($_SESSION['logged_in'])) ? '' : 'disabled' ?>>
                        </td>

                        <td><?php if (isset($_SESSION['logged_in'])): ?>
                                <a href="/update?id=<?= $task['id'] ?>" type="button" class="btn btn-primary">Update</a>
                            <? endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>

