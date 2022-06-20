<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Display Outgoing</title>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5">
                <a href="<?php echo base_url('outgoing/add') ?>" class="text-light">Add Outgoing products</a>
            </button>
            <button class="btn btn-primary my-5">
                <a href="<?php echo base_url('home') ?>" class="text-light">Back to the home</a>
            </button>
            
        <table class="table" id="tableProduct">
            <thead>
                <tr>
                    <th scope="col">Outgoing Id</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Addded Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($outgoings as $outgoing): ?>

                <tr>
                    <td><?php echo $outgoing->outgoingId ?></td>
                    <td><?php echo $outgoing->productId ?></td>
                    <td><?php echo $outgoing->quantity ?></td>
                    <td><?php echo $outgoing->added_date ?></td>       
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#tableProduct').DataTable();
        });
    </script>

</html>
