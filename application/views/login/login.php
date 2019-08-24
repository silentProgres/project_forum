<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page - Forum Untitled</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="fontawesome/css/all.css"/>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="card pt-2">
            <div class="card-header">
                <h3 class="text-center">Login Page</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <div class="col-sm">
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username / Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <i class="fa-fw fas fa-user"></i>
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="fontawesome/js/all.js"></script>
</body>
</html>