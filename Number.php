<?php
session_start();
if(isset($_POST['Number'])){
  $_SESSION['visitor_number']=$_POST['Number'];
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
                <h1 class="text-danger text-center mt-3">Hospital </h1>

            </div>
            <div class="offset-3 col-6">
                <form action="Review.php" method="post">
                    <div class="form-group row">
                        <input  type="text" name="enter" class="form-control col-4 " placeholder="Enter your Number" readonly></input>
                        <input type="number" name="Number" id="Number" value="<?php if(isset($_POST['Number'])) {echo $_POST['Number'];} ?>"
                         class="form-control  mx-1 col-7" placeholder=""
                        aria-describedby="helpId">
                    </div>


                    <div class="form-group ">
                        <button name="servey" class="btn btn-danger rounded w-100">Survey</button>

                    </div>
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