
<html>

<head>

<title></title>

</head>

<body>

 

<?php

 

 

            if(isset($_POST['result']))

           {

           include "at.php";

             $oper=$_POST['calculate'];

              

            if($_oper == '+')

            {  

                echo "+";

                $oper='+';

                $result=$_POST['number']+10;

                echo $result;

                

            }

         else if($oper == '-')

            {

                    echo "-";

                    $oper='-';

                    $result=$_POST['number']-10;

                    echo $result;

                     

            }

           else if($_POST['calculate'] == '/' )

            {
                echo "/";

                    $oper='/';

                    $result=$_POST['number']/10;

                    echo $result;

                 

            }

            else

     

                {

                    echo "*";

                    $oper='*';

                    $result=$_POST['number']*10;

                    echo $result;

                }

            }

    

 

        if(isset($_POST['number']))

            {

             

            include "at.php";

            $var=$_POST['number'];

             

            echo "</br>";

            echo  $var;

            echo "Enter the operator";

            }

   

        if(isset($_POST['calculate']))

            {

            include "at.php";

            $oper=$_POST['calculate'];

             

            echo $_POST['calculate'];

            echo "</br>";

             

            }

             

                         

            ?>

         

</body>

</html>
