
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="project.css"/>
    
</head>
<body>

    <form  action="loginform.php" method="POST">

        <div class="container-fluid loginheader">
               <a href="menu.php"><img src="laras kitchen.jpg"></a>
        </div>
        <br>
        <br>

        <div class="container">
                <div class="form-group col-4">
                        <label for="username">username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="username" autofocus required>
                </div>

                <div class="form-group col-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                   </div>

        </div>
        <br>
        <div class="container">
        <button class="btn btn-success btn-small" type="submit" name="submit">Submit</button>
        </div>
    </form>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</body>
</html>