<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook | Welcome</title>

    <!-- adding bootstrap stylesheet and js files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <!-- adding font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <!-- adding own stylesheet -->
    <link rel="stylesheet" href="styles/nav.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark container">
        <a class="navbar-brand" href="home.php"><i class="fab fa-facebook-square"></i>Facebook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <i class="fas fa-bars"></i> -->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button><i class="fas fa-search"></i></button>
                        <label for="submit"></label>
                    </form>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- body -->
    <div class="container">
        <div class="col-5">
            <div class="box intro">
                <div class="title" >
                    <i class="fas fa-globe-americas"></i>
                    <h3>Intro</h3>
                </div>
                <div class="bio">
                    <i class="far fa-address-card"></i>
                    <p>Add a short bio to tell people more about yourself.</p>
                    <a href="#">Add Bio</a>
                </div>
                <hr>
                <div class="perInfo">
                    <i class="fas fa-pen"></i>
                    <p>Customize Your Intro</p>
                    <a href="#">Add Education, Current City, and Hometown</a>
                </div>
            </div>
            <div class="box friends">
                <div class="title" >
                    <i class="fas fa-user"></i>
                    <h3>Add More Friends</h3>
                    <div class="instruct">
                        <p>Find friends by typing their name in the search bar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="box post">
                <div class="createPost">
                    <div class="title">
                        <i class="fas fa-pen"></i>
                        <h3>Create Post</h3>
                    </div>
                    <hr>
                    <form action="#">
                        <textarea class="longInput" cols="130" rows="50" placeholder="What's on your mind?"></textarea>
                        <button type="button" class="btn btn-primary">share</button>
                    </form>
                </div>
            </div>
            <h6>
                Posts
            </h6>
            <div class="box event"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>