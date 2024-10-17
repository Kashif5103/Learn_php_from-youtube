<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container">
    This is my php website
    <?php
    define("pi",3.14); //this is a constant
    echo"hello world and this is printed using php";
    // single line comment 
    /*
    this is multilin 
    comment

    */
    // Lorem ipsum dolor sit, 
    // amet consectetur adipisicing elit. 
    // Perspiciatis nemo incidunt sunt rerum cumque!

    $var1=5;
    $var2=2;
    Echo $var1;
    echo $var2;
    echo $var1+$var1;
    // operator in php
    // arthmati operator
    echo "the value of Variable1 + Variable2";
    echo "<br/>";
    echo $var1+$var2;
    echo "<br/>";
    echo "the value of Variable1 - Variable2";
    echo "<br/>";
    echo $var1-$var2;
    echo "<br/>";
    echo "the value of Variable1 * Variable2";
    echo "<br/>";
    echo $var1*$var2;
    echo "<br/>";
    echo "the value of Variable1 / Variable2";
    echo "<br/>";
    echo $var1/$var2;
    echo "<br/>";
    
    // asssignmnt operator
    $nwvar=$var1;
    // $nwvar+=1;
    // $nwvar-=1;
    // $nwvar*=1;
    echo "the value of new variable is";
    echo $nwvar;
    echo"<br/>";


    // comperision operator
    echo "<h1> Compersion operators </h1>";
    echo "the value of 1==4";
    echo var_dump(1==4);
    echo '<br/>';
    echo "the value of 1!=4";
    echo var_dump(1!=4);
    echo '<br/>';
    echo "the value of 1>=4";
    echo var_dump(1>=4);
    echo '<br/>';
    echo "the value of 1<=4";
    echo var_dump(1<=4);
    echo '<br/>';

    // incrment /decrment operator
    echo $var1++;
    echo $var1;
    echo "<br/>";
    echo $var1--;
    echo $var1;
    echo "<br/>";
    echo ++$var1;
    echo $var1;
    echo "<br/>";
    echo --$var1;
    echo $var1;
    echo "<br/>";


    // logical operator
    // and (&&)
    // or(||)
    // xor
    // not (!)
    /*$myvar= (true and true);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (true and false);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (false and true);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (false and false);
    echo var_dump($myvar);
    echo '<br/>';
    // for or
    $myvar= (true or true);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (true or false);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (false or true);
    echo var_dump($myvar);
    echo '<br/>'; 
    $myvar= (false or false);
    echo var_dump($myvar);
    echo '<br/>';
    // for xor
    $myvar= (true xor true);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (true xor false);
    echo var_dump($myvar);
    echo '<br/>';
    $myvar= (false xor true);
    echo var_dump($myvar);
    echo '<br/>'; 
    $myvar= (false xor false);
    echo var_dump($myvar);
    echo '<br/>';*/



    ?>
    <?php
    // echo"hello world again !";
    // data typr in php
    // 1.string
    echo "<br/> Data typres <br/>";
    $var="This is a string";
    echo var_dump($var);
    echo "<br/>";
    // 2.integer
    $var=67;
    echo var_dump($var);
    echo "<br/>";
    // 3.float
    $var=67.1;
    echo var_dump($var);
    echo "<br/>";
    // 4.boolean
    $var=true;
    echo var_dump($var);
    echo "<br/>";
    // 5.array
    // 6.object
    $var=pi;
    echo var_dump($var);
    echo "<br/>";

    ?>
    </div>
</body>
</html>