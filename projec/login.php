<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="alignment: center">
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
        </div>
        <div class="col-md-4"></div>

    </div>

<?php include 'footer.php' ?>
