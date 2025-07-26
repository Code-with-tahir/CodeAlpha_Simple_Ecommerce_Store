<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-secondary">
    <div class="container">
    <div class="row">
      <div class="col-md-6 bg-white p-3 font-monospace shadow m-auto border border-primary mt-3">
       <form action="login1.php" method="POST">
        <div class="col-mb-3">
       <p class="text-center fs-3 fw-bold text-warning">Login:</p>
        </div>
        <div class="col-mb-3">
        <label  class="form-label"> Name:</label>
        <input type="text" name="username" class="form-control" placeholder="Enter user name" >
        </div>
        <div class="col-mb-3">
        <label  class="form-label">Password:</label>
        <input type="password" name="userpassword" class="form-control" placeholder="Enter user password" >
        </div>



        <button   class="bg-danger fs-4 fw-bold my-3 form-control text-white">Login</button>
  </form>
      </div>
    </div>
  </div>
  
</body>
</html>