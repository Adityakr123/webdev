<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:rgb(228,195,195);
        margin:auto;
        padding:23px;
    }
</style>
<body>
    <div class="container">
        <h1>let's learn</h1>
        this is a container
    <div>
        <?php
            $age=7;
           
            if($age>18){
                echo"<br>";
                echo"you can go to party";
            }
            else if($age==7){
                echo "you are 7 year old";
            }
            else{
                echo"<br>";
                echo"you can't go to party";
            }
        //arrays
        $language=array("python","c","php","nodejs");
        echo"<br>";
        echo $language[1];//prints 1st index 
        echo"<br>";
        echo "number of array";
        echo count($language);//gives output of lenth of array
        //loops in php
        $a=0;
        while ($a < 4) {
            echo"<br>";
            echo "the value of a is :- ";
            
            echo"$a";
            echo"<br>";
            echo $language[$a];
            $a++;
        }
        //do while
        $b=0;
        do{
            echo "<br> the value of language is using dowhile :- ";
            echo$language[$b];
            $b++;
        }
        while($b<4);
        echo"<br> Running for loop:-";
        //forloop
        for ($i=0; $i <10  ; $i++) { 
            echo"<br>";
            echo$i;
        }
        //for each loop
        foreach ($language as $value) {
            echo "<br>the value for each loop is ";
            echo $value;
        }
        function Print5(){//declaring a function
            echo"<br>Five";
        }
        for ($i=0; $i<2 ; $i++) { 
            Print5();
        }
        function printnumber($n,$x){
            echo"<br>Your number is:- ";
            echo$n;
            echo" and ";
            echo$x;
        }
        printnumber(10,50);
        ?>
    </div>

    
</body>
</html>