<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Users</title>
</head>
<body>
    
    <div class="container mt-5">
        <?php echo anchor(base_url('user/create'),'New User',['class' => 'btn btn-success mb3']) ?>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Firstname</th>
                <th>Ações:</th>
            </tr>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?php echo $user['id'] ?></td>
                    <td><?php echo $user['username'] ?></td>
                    <td><?php echo $user['first_name'] ?></td>
                    <td><?php echo $user['last_name'] ?></td>
                        <td>
                    <?php echo anchor('user/edit/'.$user['id'],'Editar') ?>
                    <?php echo anchor('user/delete/'.$user['id'],'Delete') ?>
            </th>
                </tr>
            <?php endforeach; ?>
            </table>
            <?php echo $pager->links(); ?>
    </div>

</body>
</html>