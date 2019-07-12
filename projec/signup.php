<?php include 'header.php' ?>
<div class="container" style="background-color: burlywood;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="signup_handler.php" method="post">
                <div class="form-group">
                    <label for="firstname">First name:</label>
                    <span class="btn-danger">
                         <?php

                         if(isset($_GET['f_error'])){
                             echo "First name is required";
                         }

                         ?>
                        </span>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first Name" name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Last name:</label>
                    <span class="btn-danger">
                                <?php

                                if(isset($_GET['l_error'])){
                                    echo "Last name is required";
                                }

                                ?>
                            </span>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <span class="btn-danger">
                                <?php

                                if(isset($_GET['e_error'])){
                                    echo "Email is required";
                                }

                                ?>
                            </span>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password_1">
                    </div>
                    <button type="submit" name="signup" class="btn btn-default">Sign up</button>
                </div>
                <div class="col-md-4"></div>
    </div>

    <?php include 'footer.php' ?>


