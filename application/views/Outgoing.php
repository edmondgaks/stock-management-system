<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outgoing</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            list-style: none;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
        }

        body{
            background: #fafafa;
            font-size: 14px;
        }

        .wrapper .header{
            max-width: 350px;
            width: 100%;
            height: auto;
            margin: 50px auto;
        }

        .wrapper .header .top,
        .wrapper .signup{
            background: #fff;
            border: 1px solid #e6e6e6;
            border-radius: 1px;
            padding: 40px 40px 20px;
        }

        .wrapper .header .logo h3{
            display: block;
            margin: 0 auto 35px;
        }

        .wrapper .header .form .input_field{
            margin-bottom: 5px;
        }

        .wrapper .header .form .input_field .input{
            width: 100%;
            background: #fafafa;
            border: 1px solid #efefef;
            font-size: 12px;
            border-radius: 3px;
            color: #262626;
            padding: 10px;
        }

        .wrapper .header .form .input_field .input:focus{
            border: 1px solid #b2b2b2;
        }

        .wrapper .header .form button{
            margin: 10px 0;
            background-color: #3897f0;
            border: 1px solid #3897f0;
            border-radius: 4px;
            text-align: center;
            padding: 5px;
        }

        .wrapper .header .or{
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 15px;
            margin: 15px 0 20px;
        }

        .wrapper .header .or .line{
            width: 105px;
            height: 2px;
            background: #efefef
        }

        .wrapper .header .or p{
            color: #999;
            font-size: 12px;
        }


        .wrapper .signup{
            margin: 10px 0 20px;
            padding: 25px 40px;
            text-align: center;
            color: #262626;
        }

        .wrapper .signup a{
            color: #3897f0;
        }
    </style>
    <?php echo form_open('outgoing/add'); ?>
    <div class="wrapper">
	<div class="header">
		<div class="top">
			<div class="logo">
				<h3>Stock Management system</h3>
			</div>
			<div class="form">
				<div class="input_field">
					<select name="productId" value="Choose" class="input">
                    <?php foreach ($products as $product): ?>
                        <option value="<?php echo $product->productId ?>"><?php echo $product->product_Name ?></option>
                        <?php endforeach; ?>
                    </select>
                    <small class="text-danger"><?php echo form_error('productId'); ?></small>
				</div>
				<div class="input_field">
					<input type="text" placeholder="Enter the product quantity" name="quantity" class="input">
                    <small class="text-danger"><?php echo form_error('quantity'); ?></small>
				</div>
				<div class="btn"><button type="submit">Register Outgoing</button></div>
			</div>
			<div class="or">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
		</div>
	</div>
    <?php echo form_close(); ?>
</div>
</body>
</html>