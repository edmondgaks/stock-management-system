<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Display User</title>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5">
                <a href="<?php echo base_url('signup/add') ?>" class="text-light">Add user</a>
            </button>
            <button class="btn btn-primary my-5">
                <a href="<?php echo base_url('home') ?>" class="text-light">Go back to Home</a>
            </button>
            
            
            <table class="table" id="userTable">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user):
                            ?>
                            
                    <tr>
                        <td><?php echo $user->id ?></td>
                        <td><?php echo $user->firstname ?></td>
                        <td><?php echo $user->lastname ?></td>
                        <td><?php echo $user->email ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('user/edit/'.$user->id) ?>">Update</a>
                            <a class="btn btn-danger" href="<?php echo base_url('user/delete/'.$user->id); ?>">Delete</a>
                        </td>            
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#userTable').DataTable();
        });
    </script>
</html>