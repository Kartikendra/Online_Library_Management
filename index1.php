<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="index.css">
    <title>Status</title>
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
    <div class="container my-3">
    <form action="" method="POST">
    <h1>Enter Your Detail</h1>
        <hr>
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
                <div class="col-sm-10">
                    <button type="submit" name="sub" class="btn btn-primary">Check</button>
                </div>
            </div>
    </form>
</div>
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">order_no</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Type</th>
 </tr>
  </thead>
  <tbody>
  <?php
$con=mysqli_connect('localhost','root','','lib');
if(isset($_POST['sub'])){
$name=$_POST['name'];
$email=$_POST['email'];
$que= "SELECT * from dat where '$name'=name AND '$email'= email ";
$run = mysqli_query($con,$que);
if($con->query($que)== true){
foreach( $run as $row){
    ?>
    <tr>
        <td><?= $row['order_no'];?></td>
        <td><?= $row['name'];?></td>
        <td><?= $row['author'];?></td>
        <td><?= $row['type'];?></td>
     
    </tr>
    <?php
echo "<h3>Your order will be delivered shortly</h3>";
  }
}
else{echo "<h3>No data found</h3>";} 
}

?>

  </tbody>

</table>

</body>
</html>