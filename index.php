<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/myCode.js"></script>

    <link rel="stylesheet" href="./css/style.css">
  </head>

  <body>
      
    <div class="gradient-green" id="bg">
        <!------------ Navbar --------------->
        <div class="row " style=""> 
            <div class="col">
                    <nav class="navbar navbar-expand-lg bg-dark-blue rounded" >
                        
                        <a class="navbar-brand" href="index.php"><h5 class=" ">Squirrel Cloud</h5></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active ">
                                    <a class="nav-link " href="list.php">Posts <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                            </ul>

                            <div class="nav-item dropdown login-dropdown">
                                <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><i class="fa fa-user-o"></i> Login</a>
                                <div class="dropdown-menu dropdown-menu-right login">	
                                    
                                        <form action="tools/login.php" method="post" class="row justify-content-center">
                                            <div class="col-md-4 p-1">
                                                <div class="form-group form-inline m-0">
                                                    <span class="input-group-text">
                                                        <span class="fa fa-user"></span>
                                                    </span>                    
                                                    <input type="text" class="form-control w-75" placeholder="Username" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-1">
                                                <div class="form-group form-inline m-0">
                                                    <span class="input-group-text ">
                                                        <i class="fa fa-lock"></i>
                                                    </span>                    
                                                    <input type="text" class="form-control w-75" placeholder="Password" required>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-outline-primary">Login</button>
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                            <div class="nav-item">
                                <button id="btn-register" class="btn btn-outline-success btn-sm mx-auto" type="button">Register</button>
                            </div>
			
                        </div> 
                    </nav>
            </div>
        </div>
        <!------------ /Navbar --------------->
        
        <div class="row justify-content-center pt-5" >
            <div class="col-md-3 align-self-center text-center pt-5">
                <img src="./img/squirrel.svg" class="img-fluid"alt="" /> 
            </div>
        </div>
    </div>
    <div class="container-fluid to-front pt-5">
        
        <div class="row justify-content-center pt-5" style="height:75vh;">
            
                <form action="registrar.php" class="col-md-3 round-10 f-white bg-dark align-self-center p-2" style="opacity: 0.8;">
                    <div class="row form-group justify-content-center">
                      <div class="col-md-10">
                        <label>User name:</label>
                        <input type="text" class="form-control" name="username" id="" placeholder="Macarrones007">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>
                    </div>
                    <div class="row form-group justify-content-center ">
                      <div class="col-md-10">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Macarrones007">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>
                    </div>
                    <div class="row form-group justify-content-center ">
                      <div class="col-md-10">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" id="" placeholder="Macarrones007">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>
                    </div>
                    <div class="row form-group justify-content-center ">
                      <div class="col-md-10">
                        <label>Re-type password:</label>
                        <input type="text" class="form-control" name="" id="password2" placeholder="Macarrones007">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                      </div>
                    </div>
                    <div class="row form-group justify-content-center ">
                        <div class="col text-center">
                            <a name="" id="btn-form-login" class="btn btn-outline-primary" href="#" role="button">Login</a>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </form>
            
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>