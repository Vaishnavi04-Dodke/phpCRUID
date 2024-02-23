<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Application - Edit User</title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD Application</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="container">
    <h3>Edit User</h3>
    <form name="edit_user" action="<?php echo base_url().'index.php/user/Edit/' . $user['user_id']; ?>" method="post">
      <div class="row mb-3">
        <div class="col-md-12">
          <div class="form-group"> 
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="name" value="<?php echo set_value('name', $user['name']); ?>">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group"> 
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo set_value('email', $user['email']); ?>">
          </div>
        </div>
      </div>
      <div class="form-group"> 
        <button class="btn btn-primary">Update</button>
        <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
