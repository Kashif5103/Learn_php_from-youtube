<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Toutroial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width :80%;
        background-color: gray;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
    <h1>Let"s larn about php</h1>
    Your Adult status is hare 
    <br>
    <!-- This is a container -->
  
    <?php
    $age=7;
    if($age>=18){
        echo "you are the Adult";
    }
    elseif($age<=10){
        echo "You are a child";
    }
    else{
        echo "you are not the Adult";

    }
    // Array in PHP 
    $language=array('Python','C++','JS','PHP','nodeJS');
    // echo count($language);
    // echo $language[2];
    // loops in php
    $a=0;
    while ($a <= 10) {
        echo "<br> The value of a is ";
        echo $a;
        $a++;
    }
    // itrating loops in php while 
    $a=0;
    while ($a < count($language)) {
        echo "<br> The value of Language is ";
        echo $language[$a];
        $a++;
    }
    // itrating loops in php do while
    $a=0;
    do {
        echo "<br> The value of Language is ";
        echo $language[$a];
        $a++;
    } while ($a < count($language));
    // itrating loops in php for loop
    for ($a=0; $a < 10; $a++) { 
        echo "<br>The value of a is ";
        echo $a;
    }
    foreach ($language as $key => $value) {
        echo "<br> th value from foreach loop  ";
        echo $value;
    }
    // function in PHP
    function print5(){
        echo 'five';
    }
    
    print5();
    print5();
    print5();
    
    function print_number($num){
        echo 'your no is :';
        echo $num;
    }

    print_number(6);
    print_number(34);
    print_number(64);
    print_number(55);



    ?>
    </div>

   
</body>
</html>