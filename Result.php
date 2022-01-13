<?php 
session_start();
//  echo($_SESSION['visitor_number']);

if(!$_POST){
    header("location:Number.php");die;}
function test2($x){
    $grade="";
if($x=='bad'){
    $x=0;}
elseif(($x=='good')){
        $x=10;
    }
elseif($x=='vgood'){
        $x=30;
    }
else{
        $x=50;
    }
    return $x;
}
    $grade= test2($_POST['cleanlines'])+test2($_POST['nursing'])+test2($_POST['prices'])+test2($_POST['doctor'])+test2($_POST['calmness']);
    $message="";
    $message1="";
    if($grade>25){
        $message="thank you for your review";
        $message1="Good";
    }
    else{
        $message="We will call you on the number ".$_SESSION['visitor_number'];
        $message1="Bad";
    }


 function test($variable){
     $Res="";
    switch($variable)
    {
        case 'bad':
            $Res= 'bad';
            break;
            case 'good':
                $Res='good';
                break;
                case 'vgood':
                    $Res='very good';
                    break;
                    case 'excellent':
                        $Res='excellent';
                        break;
    }
  return $Res;
}


?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <div class="row offset-2">
            <div class="col-12 mt-5">
                <h1 class="text-danger text-center">Hospital Review </h1>

            </div>
            <div class="offset-1 col-10">
                <form action="Result.php" method="post">
                    <table class="table">
                        <thead class="thead-danger">
                            <tr class="bg-danger">
                                <th>Question</th>
                                <th> Result</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Are you satisfied with the level of cleanlines?</td>
                                <td>
                                    <?php
                              
                              echo(test($_POST['cleanlines']));
                                ?></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the service prices?</td>
                                <td> <?php
                                  echo (test($_POST['prices']));
                                 ?></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the nursing sevice?</td>
                                <td>

                            <?php       
                               echo(test($_POST['nursing']));
                               ?>

                                </td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td>

                            <?php       
                              echo(test($_POST['doctor']));
                               ?>

                                </td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the calmness of the hospital?</td>
                                <td>
                                <?php       
                              echo (test($_POST['calmness']));

                               ?>
   

                                </td>
                            </tr>
                            <tr class="bg-danger font-weight-bold text-light">
                        <td>Total==>></td>
                       <td > <?php if(isset($message1)){echo$message1;}?></td>
</tr>
              
                        </tbody>
                    </table>
                    <div class='alert alert-danger'> <?php if (isset($message)){echo $message;} ?></div>
                </form>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>