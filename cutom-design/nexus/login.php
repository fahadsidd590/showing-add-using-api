<?php 
session_start();

?>


<!-- Login Work  -->

<!doctype html>
<html lang="en">
  <head>
    <style>
        section.vh-100 {
    background: linear-gradient( rgb(30 60 120 / 80%), rgb(3 7 14 / 80%)), 
    url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/sky-clouds-cloudy-mountain.jpg) no-repeat center center fixed;
}
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login Now</p>

                <form class="mx-1 mx-md-4" method="POST" action="">

                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label"  for="form3Example3c">Username</label>
                      <input type="text" name="username" id="form3Example3c" class="form-control" />
                    </div>
                  </div>

                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label"  for="form3Example4cd">Password</label>
                      <input type="password" name="password" id="form3Example4cd" class="form-control" />
                    </div>
                  </div>
                  

                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-check-label" for="form2Example3">
                      Don't Have Account  <a href="signup.php">Signup Now</a>
                    </label>
                  </div>



                  <!-- <button type="submit" name="login" value="submit" class="btn-signin">Login Now  <i class="fa fa-sign-in" aria-hidden="true"></i></a> -->




                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button  type="submit" name="login" value="submit" class="btn btn-primary btn-lg">Login Now  <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img1.PNG"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php 
if (isset($_POST['login']))
{
	$conn = mysqli_connect("localhost","root","","offerwall") or die("<h1>Connection Faild</h1>");

$u_username = $_POST['username'];
$u_password = $_POST['password'];

$query = "select * from signup where username='{$u_username}' and password='{$u_password}'";
$result = mysqli_query($conn,$query) or die("Query Fail");

if(mysqli_num_rows($result) >0)
{
	$res = mysqli_query($conn,"select firstname from signup where username='{$u_username}'");
	$row = mysqli_fetch_assoc($res);
	$name = $row['firstname'] ;
	
	$_SESSION['name'] = $name;
 echo "<script>
window.location.href ='index.php'
</script>";

	mysqli_close($conn);
}
else
{
		echo"<h3 style='color:red; text-align:center'>Invalid User Email Or Password</h3>";
	}
}

?>