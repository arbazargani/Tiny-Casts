<?php
    require 'roles.php';
    require 'validator.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TinyCasts - 001</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.4/examples/starter-template/starter-template.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<main role="main" class="container">
    <div class="starter-template">
        <h1>How Secure is my password?</h1>
        <form method="POST" style="margin: 10%">
            <div class="form-group">
                <input type="text" class="form-control" name="password" id="password" placeholder="type your password here ...">
                <small id="emailHelp" class="form-text text-muted">type your password to see how secure is yours.</small>
            </div>
            <button type="submit" class="btn btn-primary">How?</button>
        </form>
        <?php if($score): ?>
            <?php if($score < $middScore): ?>
                <div class="alert alert-danger" role="alert">
                Your password is very poor !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>

            <?php if($score >= $middScore && $score < $highScore): ?>
                <div class="alert alert-warning" role="alert">
                Your password is good, but it can be better.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>

            <?php if($score >= $highScore): ?>
                <div class="alert alert-success" role="alert">
                Great, Your password is secure.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

</main>
    
</body>
</html>