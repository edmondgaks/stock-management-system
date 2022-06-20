<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-screen">
    <div class='flex dark:bg-main-dark-bg h-screen'>
        <div class='w-4/12 sidebar bg-slate-300'>
            <div class='ml-3 h-screen md:overflow-hidden  overflow-auto md:hover:overflow-auto pb-10'>
                <span class="p-8">Stock Management system</span>
                <div class='mt-10'>
                    <div class="p-5 hover:bg-slate-400">
                        <a href="<?php echo base_url('products/display') ?>" class="text-black m-3 mt-4 uppercase">View Products</a>
                    </div>
                    <div class="p-5 hover:bg-slate-400">
                        <a href="<?php echo base_url('products/add') ?>" class="text-black m-3 mt-4 uppercase">Register Product</a>
                    </div>
                    <div class="p-5 hover:bg-slate-400">
                        <a href="<?php echo base_url('display/user') ?>" class="text-black m-3 mt-4 uppercase">View Users</a>
                    </div>
                    <div class="p-5 hover:bg-slate-400">
                        <a href="<?php echo base_url('outgoing') ?>" class="text-black m-3 mt-4 uppercase">Outgoing</a>
                    </div>
                    <div class="p-5 hover:bg-slate-400">
                        <a href="<?php echo base_url('inventory') ?>" class="text-black m-3 mt-4 uppercase">Inventory</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-8/12 flex justify-center">
            <h1 class="text-black">Stock management system</h1>
        </div>
    </div>
</body>
</html>