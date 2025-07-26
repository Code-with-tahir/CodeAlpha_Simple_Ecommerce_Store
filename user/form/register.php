<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5 m-auto font-monospace shadow bg-white border border-info">
        <p class="text-warning fw-bold my-3 fs-3 text-center">User Register</p>
        <form action="insert.php" method="POST">
          <div class="mb-3">
            <label for="">UserName</label>
            <input type="text" name="name" placeholder="Enter User Name" class="form-control">
          </div>
                    <div class="mb-3">
            <label for="">UserEmail</label>
            <input type="email" name="email" placeholder="Enter User Email" class="form-control">
          </div>
                    <div class="mb-3">
            <label for="">UserNumber</label>
            <input type="number" name="number" placeholder="Enter User Number" class="form-control">
          </div>
                    <div class="mb-3">
            <label for="">UserPassword</label>
            <input type="password" name="password" placeholder="Enter User Password" class="form-control">
          </div>
          <div class="mb-3">
            <button class="w-100 bg-primary fs-4 text-warning text-center" name="submit">REGISTER</button>
          </div>
                    <div class="mb-3">
            <button class="w-100 bg-danger fs-4 text-white text-center"><a class="text-decoration-none text-white" href="login.php">ALREADY ACCOUNT</a></button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>