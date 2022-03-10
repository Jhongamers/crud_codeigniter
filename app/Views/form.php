<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container mt5">
        <?php echo form_open('user/store') ?>
        <div class="form-group">
            <label for="username">Username: </label>
               <input type="text" value="<?php echo isset($user['username']) ? $user['username'] : '' ?>"  name="username" id="username" class="form-control">

        </div>
        <div class="form-group">
            <label for="username">First Name: </label>
               <input type="text" value="<?php echo isset($user['first_name']) ? $user['first_name'] : '' ?>"  name="first_name" id="first_name" class="form-control">

        </div>
        <div class="form-group">
            <label for="username">Last Name: </label>
               <input type="text" value="<?php echo isset($user['last_name']) ? $user['last_name'] : '' ?>" name="last_name" id="last_name" class="form-control">

        </div>

            <input type="submit" value="Save" class="btn btn-primary mb5">
            <input type="hidden" value="<?php echo isset($user['id']) ? $user['id'] : '' ?>"   name="id" >
        <?php echo form_close(); ?>
    </div>
</body>
</html>