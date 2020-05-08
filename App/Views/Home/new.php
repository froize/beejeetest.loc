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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="/public/js/validation-task.js"></script>

    <title>Tasks</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light mb-3">
        <span class="navbar-brand mb-0 h1"><a href="/">Task application</a></span>
    </nav>
    <h1>New Task</h1>
    <form action="new" method="post" name="task_form">
        <div class="form-group">
            <label for="name">name</label>
            <input name="name" class="form-control" id="name" placeholder="name" required></input>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input name="email" class="form-control" id="email" placeholder="user@example.com" required></input>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
        </div>
        <div class="form-check mb-3">
            <input name="status" class="form-check-input" type="checkbox" id="status">
            <label class="form-check-label" for="status">
                Status
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

</body>
</html>

