<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application - View Users</title>
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
    <div class="row">
    <div class="col-md-12">
        <?php
        $success = $this->session->userdata('success');
        if($success != "") {
        ?>
        <div class="alert alert-success">
            <?php echo $success; ?>
        </div>
        <?php } ?>
        
        <?php
        $failure = $this->session->userdata('failure');
        if($failure != "") {
        ?>
        <div class="alert alert-danger">
            <?php echo $failure; ?>
        </div>
        <?php } ?>
    </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-11">
                <h3>View Users</h3>
                </div>
                <div class="col-md-1">
                    <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Creation Date</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php 
                        if(!empty($users)) {
                            foreach($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user['user_id']?></td>
                                    <td><?php echo $user['name']?></td>
                                    <td><?php echo $user['email']?></td>
                                    <td><?php echo $user['create_at']?></td> 
                                    <td><a href="<?php echo base_url().'index.php/user/Edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                        <?php }
                        } else { ?>
                            <tr>
                                <td colspan="6">Records Not found</td> 
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

