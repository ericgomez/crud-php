<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>CRUD</title>
</head>
<body>

<nav class="navbar navbar-expand navbar-light bg-light">
  <div class="nav navbar-nav">
    <a href="#" class="nav-item nav-link active">System</a>
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="?controller=employees&action=initiation" class="nav-item nav-link active">Employees</a>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-12">
    <?php include_once("router.php")?>
    </div>
  </div>
</div>
  
</body>
</html>