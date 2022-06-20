<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Display Products</title>
    </head>
    <body>
        <div class="container">
            <button class="btn btn-primary my-5">
                <a href="<?php echo base_url('products/add') ?>" class="text-light">Add Product</a>
            </button>
            
            
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Supplier Phone</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Addded Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                        
                <tr>
                    <td><?php echo $product->productId ?></td>
                    <td><?php echo $product->product_Name ?></td>
                    <td><?php echo $product->brand ?></td>
                    <td><?php echo $product->supplier_phone ?></td>
                    <td><?php echo $product->supplier ?></td>
                    <td><?php echo $product->added_date ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo base_url('products/edit/'.$product->productId) ?>">Update</a>
                        <a class="btn btn-danger" href="<?php echo base_url('products/delete/'.$product->productId); ?>">Delete</a>
                    </td>            
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
