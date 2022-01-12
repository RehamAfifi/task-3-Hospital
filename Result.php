<?php 
session_start();
//  echo($_SESSION['visitor_number']);

if(!$_POST){
    header("location:Number.php");die;}


 



 function test($variable){
    switch($variable)
    {
        case 'bad':
            echo'bad';
            break;
            case 'good':
                echo'good';
                break;
                case 'vgood':
                    echo'very good';
                    break;
                    case 'exellent':
                        echo 'exellent';
                        break;
    }
  
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
                <h1 class="text-danger text-center">Hospital Servey </h1>

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
                              
                               test($_POST['cleanlines'])
                                ?></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the service prices?</td>
                                <td> <?php
                                   test($_POST['prices'])
                                 ?></td>

                            </tr>
                            <tr>
                                <td>Are you satisfied with the nursing sevice?</td>
                                <td>

                            <?php       
                               test($_POST['nursing'])
                               ?>

                                </td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the level of the doctor?</td>
                                <td>

                            <?php       
                               test($_POST['doctor'])
                               ?>

                                </td>
                            </tr>
                            <tr>
                                <td>Are you satisfied with the calmness of the hospital?</td>
                                <td>
                                <?php       
                               test($_POST['calmness'])

                               ?>
   

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group ">
                        <h1 name="Result"  class="text-center bg-danger w-100 ">Result</h1>
                    </div>
                    <div class='alert alert-danger'> thank you we will call you on <?= $_SESSION['visitor_number']?></div>
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