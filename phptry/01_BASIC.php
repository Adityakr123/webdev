<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstphp</title>
</head>
<body>
    <div>welcome</div>
    <?php
        define('PI',3.14);//defining a constant
        echo "HELLO HI GUYS ";//it prints th output
        /*this is a 
        multiple line comment*/
        $var1=3;//declaring variable
        $var2=5;
        echo$var1;//printing variable
        echo"<br>";
        echo$var1+$var2;//adding variable
        echo"<br>";//line break
        $name="aditya";//declaring string
        echo$name;//printing a string
        //all operators +,-,*,/,=,+=,==,*= are same 
        $num1=8;
        $num2=2;
        $num1+=$num2;
        echo $num1;
        echo"<br>";
        echo "value of 1==4 is";
        echo"<br>";
        echo var_dump(1==4);
        echo"<br>";
        echo var_dump($num1);//var_dump is shows the type of variable
        // you can use all html tags under echo"<h1>hello guys</h1>";
        echo"<br>";
        echo$num1++;//first it prints then increment
        echo"<br>";
        echo++$num1;//first it inrementsthen prints and same for --num1 and num1--
        //same is <=,<,>,>=
        //and(&&),or(||),xor,not variable:-(|)same as truth table
        // $myvar=(true and true);
        $myvar=(true and false);
        echo"<br>";
        echo var_dump($myvar);
        //DATA TYPES
        // 1. string 
        // 2.integer
        // 3.array 
        // 4.float 
        // 5.Boolean
        // 6.object 
        echo"<br>";
        $myname="aditya";
        echo $myname;
        echo"<br>";
        $var=true;
        echo var_dump($var);
        echo"<br>";
        echo PI;//PRINTING A CONSTANT



        
    ?>

    
</body>
</html>