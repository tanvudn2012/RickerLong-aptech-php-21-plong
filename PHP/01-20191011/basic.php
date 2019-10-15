<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

<title>Title</title>
</head>
<body>
<div>
    <h1>Bài tập 1-4</h1>
    <table class="table table-light">
    <thead>
        <tr>
        <th scope="col"><?php echo"My"; print_r(" name") ?></th>
        <th scope="col"><?php print_r('Name Project wanna to '); ?></th>
        </tr>
    </thead>
    <tbody>
    <!--Bài tập 1-4-->
        <tr>
            <th scope="row">
            <?php   
                $name='Huỳnh Tấn Vũ';
                echo "$name";
                #Comment
                //Comment
            ?>
            </th>
            <th scope="row">
            <?php 
            $project='Website ...';
            echo"$project " ;
                /* Comment
                 * :)) 
                 */
            ?>
            </th>
        </tr>
    </tbody>
    </table>
</div>
<!--Bài tập 5-->
<h1>Bài tập 5</h1>
<?php 
    define("Ahihi",":)) :))",false);
    define("MYNAME","Vũ",true);
    echo Ahihi ."<br>"; 
    echo myname
?>
<!-- Bài tập 6-->
<h1>Bài tập 6</h1>
<?php
    function run(){
        define("lietke",["String",1,1.2,true,false]);
        // define có thể thay $lietke=["String",1,1.2,true,false]
        $dem=count(lietke);
        for ($i=0; $i <$dem ; $i++) { 
            echo lietke[$i] .'<br>';
        }
    }
    run()
?>
<!--Bài tập 7-->
<h1>Bài tập 7</h1>
<?php
    $a=15;
    $b=10;
    echo $a+$b ."<br>";
    echo $a-$b ."<br>";
    echo $a*$b ."<br>";
    echo $a/$b ."<br>";
    echo $a%$b ."<br>";
    echo $a**$b ."<br>";
?>
<!--Bài tập 8-->
<h1>Bài tập 8</h1>
<?php
    function sosanh(){
        $a=15;
        $b=19;
        if ($a>$b) {
            echo $a;
        }
        else {
            echo $b ."<br></br>";
        }
    }
    sosanh();
    function lietke(){
        $NameProgamming='HTML';
        switch ($NameProgamming) {
            case 'HTML':
                echo "HMLT : HyperText Markup Language";
                break;
            case 'CSS':
                echo "CSS: Cascading Style Sheets";
                break;
            default:
                echo "C#: C sharp";
                break;
        }
    }
    lietke()
?>
<!--Bài tập 9-->
<h1>Bài tập 9</h1>
<?php
    function VongLap(){
        for ($i=0; $i <5 ; $i++) { 
            echo $i ."<br>";
        }
    }
    VongLap();
    function VongLap1(){
        $arr = ["name" => "Name", "class" => "PHP", "age" => 18];
        foreach ($arr as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
        }
    }
    VongLap1()
?>

<!-- Bài tập 13-->
<h1>Bai Tap 13</h1>
<?php

        $authors = [
            [
             "name" =>"Lorem",
             "age"=>"18",
             "posts_quantity" =>"5",
            ],
            [
             "name" =>"KaKam",
             "age"=>"19",
             "posts_quantity" =>"11",
            ],
            [
             "name" =>"Adam",
             "age"=>"19",
             "posts_quantity" =>"5",
            ],
            [
             "name" =>"Eva",
             "age"=>"18",
             "posts_quantity" =>"5",
            ],
        ];
?>

<!-- Cơ bản array - về vị trí các values -->


<table class="table table-light">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Post Counting</th>
        <th scope="col">Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row" id="col"  ><?php echo $value=$authors[0]['name'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[0]['age'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[0]['posts_quantity'] ?></th>
            <th scope="row" id="col">
                <?php
                    if ($value=$authors[0]['posts_quantity'] > 10) {
                        echo $value2=$authors[0]['posts_quantity']*10000;
                    }
                    else {
                        echo 0;
                    } 
                ?>
            </th>
        </tr>
        <tr>
            <th scope="row" id="col"  ><?php echo $value=$authors[1]['name'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[1]['age'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[1]['posts_quantity'] ?></th>
            <th scope="row" id="col">
                <?php
                    if ($value=$authors[1]['posts_quantity']>10) {
                        echo $value2=$authors[1]['posts_quantity']*10000;
                    }
                    else {
                        echo 0;
                    } 
                ?>
            </th>
        </tr>
        <tr>
            <th scope="row" id="col"  ><?php echo $value=$authors[2]['name'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[2]['age'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[2]['posts_quantity'] ?></th>
            <th scope="row" id="col">
                <?php
                    if ($value=$authors[0]['posts_quantity'] > 10) {
                        echo $value2=$authors[0]['posts_quantity']*10000;
                    }
                    else {
                        echo 0;
                    } 
                ?>
            </th>
        </tr>
        <tr>
            <th scope="row" id="col"  ><?php echo $value=$authors[3]['name'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[3]['age'] ?></th>
            <th scope="row" id="col"><?php echo $value=$authors[3]['posts_quantity'] ?></th>
            <th scope="row" id="col">
                <?php
                    if ($value=$authors[3]['posts_quantity'] > 10) {
                        echo $value2=$authors[3]['posts_quantity']*10000;
                    }
                    else {
                        echo 0;
                    } 
                ?>
            </th>
        </tr>
    </tbody>
</table>

<h1>Vòng lặp</h1>
<!--Dùng vòng lặp nhanh và gọn :)) -->

<table class="table table-light">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Post Counting</th>
        <th scope="col">Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($authors as $key => $value) {
        ?>
        <tr>
            <th scope="row" id="col"  ><?php echo $value['name'] ?></th>
            <th scope="row" id="col"  ><?php echo $value['age'] ?></th>
            <th scope="row" id="col"  ><?php echo $value['posts_quantity'] ?></th>
            <th scope="row" id="col"  >
                <?php
                    if ($value['posts_quantity']>10) {
                        echo $value['posts_quantity']*10000;
                    }
                    else {
                        echo 0;
                    } 
                ?>
            </th>
        </tr>
                <?php  };
                
                ?>
    </tbody>
</table>
</body>
</html>
