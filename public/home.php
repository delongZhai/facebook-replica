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
    <nav class="navbar navbar-expand-md navbar-dark justify-content-between">
        <div class="container">
            <a class="navbar-brand" href="home.php"><i class="fab fa-facebook-square"></i>Facebook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <i class="fas fa-bars"></i> -->
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0" method="GET" action="search.php">
                            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
                            <button><i class="fas fa-search"></i></button>
                            <label for="submit"></label>
                        </form>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item dropbdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
                        <div class="dropdown-menu profile-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Setting</a>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item" href="#">Logout</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- body -->
    <div class="container">
        <div class="col-12">
            <div>
                <div>
                    <div class="background-image"></div>
                    <img src="#" alt="">
                    <h2>UserName</h2>
                    <div class="dropdown">
                        <div class="btn btn-outline-primary btn-sm">
                            <input type="file" id="background-image-file" class="inputfile" accept='image/*'>
                            <label for="background-image-file"><i class="fas fa-camera"></i>  Choose a Background Image</label>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-lg-5 col-sm-12">
            <div class="box intro">
                <div class="title" >
                    <i class="fas fa-globe-americas"></i>
                    <h3>Intro</h3>
                </div>
                <div class="bio">
                    <div class="bio-intro">
                        <i class="far fa-address-card"></i>
                        <p>Change Bio</p>
                        <a class="adding-bio">Add Bio</a>
                    </div>
                    <div id="bio">
                        <form>
                            <textarea name="user_bio" id="bio-value" cols="300" rows="100"  maxlength="80" placeholder="Write Something Interesting about Yourself"></textarea>
                            <input class="btn-outline-primary" id="okay-bio" type="submit" value="Okay">
                        </form>
                    </div>
                </div>
                <hr>
                <div class="perInfo">
                    <i class="fas fa-pen"></i>
                    <p>Add Intro</p>
                    <a href="#" data-toggle="modal" data-target="#exampleModal">Add Education, Current City, and Hometown</a>
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
        <div class="col-lg-7 col-sm-12">
            <div class="box post">
                <div class="createPost">
                    <div class="title">
                        <i class="fas fa-pen"></i>
                        <h3>Create Post</h3>
                    </div>
                    <hr>
                    <form action="#" id="post-form">
                        <textarea class="longInput" cols="130" rows="50" id="post-value" placeholder="What's on your mind?"></textarea>
                        <button type="button" class="btn btn-primary">share</button>
                    </form>
                </div>
            </div>
            <h6>
                Posts
            </h6>
            <div class="box event"></div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Customize Your Intro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="education">
                            <h6><i class="fas fa-university"></i>Education</h6>
                            <form>
                                <input class="modal-input" type="text" id="institution" placeholder="Institution">
                                <input class="modal-input" type="text" id="degree" placeholder="Degree">
                            </form>
                        </div>
                        <div class="currentCity">
                            <h6><i class="fas fa-city"></i>Current City</h6>
                            <form>
                                <input class="modal-input" type="text" id="inhabit" placeholder="Current City">
                            </form>
                        </div>
                        <div class="hometown">
                            <h6><i class="fas fa-search-location"></i>Hometown</h6>
                            <form>
                                <input class="modal-input" type="text" id="hometown" placeholder="Hometown">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="SAVE" class="btn-primary">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts/index.js"></script>
</body>
</html>