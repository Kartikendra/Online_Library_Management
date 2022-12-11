<!doctype html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
       >

    <title>Welcome to Kartik's Library</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Kartik Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="searchTxt" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="message"></div>


    <div class="container my-3">
        <h1>Fill Your Detail</h1>
        <hr>
        <form id="libraryForm" method="POST">
            <div class="form-group row">
                <label for="bookName" class="col-sm-2 col-form-label"> Your Name</label>
                <div class="col-sm-10">
                    <input type="text"name="name" class="form-control" id="bookName" placeholder="Enter Your Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="bookName" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email"class="form-control" id="bookName" placeholder="Enter Your Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="bookName" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone"class="form-control" id="bookName" placeholder="Enter Your Phone No.">
                </div>
            </div>

            <h1>Fill Book Detail</h1>
        <hr>
            <div class="form-group row">
                <label for="Author" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" name="author" class="form-control" id="author" placeholder="Author">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="fiction" value="DBMS"
                                checked>
                            <label class="form-check-label" for="fiction">
                                DBMS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" id="programming"
                                value="programming">
                            <label class="form-check-label" for="programming">
                                Computer Programming
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <input class="form-check-input" type="radio" name="type" id="cooking" value="Web Development">
                            <label class="form-check-label" for="cooking">
                                Web Development
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" name="sub" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

       

   
<?php
$con=mysqli_connect('localhost','root','','lib');
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
   $author=$_POST['author'];
    $type=$_POST['type'];

$que= "INSERT INTO dat (name,email,phone,author,type) VALUES('$name','$email','$phone','$author','$type');";
$run= mysqli_query($con,$que);
}
?>

<p><a href="index1.php">already ordered</a></p>

</body>

</html>
