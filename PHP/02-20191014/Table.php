<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>

<?php
$taphoa = [
            [
             "id" =>"01",
             "name"=>"Kẹo cao su",
             "price" =>"5000",
            ],
            [
             "id" =>"02",
             "name"=>"Bánh phồng tôm",
             "price" =>"50000",
            ],
            [
             "id" =>"03",
             "name"=>"Pepsi",
             "price" =>"20000",
            ],
            [
             "id" =>"04",
             "name"=>"Bò húc",
             "price" =>"15000",
            ],
            [
             "id" =>"05",
             "name"=>"Rau câu",
             "price" =>"30000",
            ],
            
        ];
?>
<div class="jumbotron">
  <h1 class="text-center">Bài Tập</h1>
</div>
<table class="table table-secondary">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($taphoa as $key => $value) {
        ?>
        <tr>
            <th scope="row" id="col"  ><?php echo $value['id'] ?></th>
            <th scope="row" id="col"  ><?php echo $value['name'] ?></th>
            <th scope="row" id="col"  ><?php echo '$'. number_format($value['price']) ?></th>
        </tr>
            <?php };
                $money= $taphoa[0]['price'] + $taphoa[1]['price'] + $taphoa[2]['price'] + $taphoa[3]['price'] + $taphoa[4]['price'];
                $VAT=$money / 10;
                $total=$money+$VAT
            ?>
        <tr>
            <th scope="row" id="col"></th>
            <th scope="row" class="text-right" id="col">Into money:</th>
            <th scope="row" id="col"><?php echo '$'. number_format($money)  ?></th>
        </tr>
        <tr>       
            <th scope="row" id="col"></th>
            <th scope="row " class="text-right" id="col">VAT:</th>
            <th scope="row" id="col"><?php echo '$'. number_format($VAT) ?></th>
        </tr>
        <tr>       
            <th scope="row" id="col"></th>
            <th scope="row " class="text-right" id="col">Total:</th>
            <th scope="row" id="col"><?php echo '$'. number_format($total) ?></th>
        </tr>
    </tbody>
</table>
</body>
</html>