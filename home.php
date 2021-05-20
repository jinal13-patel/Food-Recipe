
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="food_recipe_css/h1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Food Recipes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="food_recipe_css/logo1.png" class="image-fluid logo w-50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse recipenav" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Recipes
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="breakfast.php">Breakfast</a>
                            <a class="dropdown-item" href="lunch.php">Lunch</a>
                            <a class="dropdown-item" href="dinner.php">Dinner</a>
                            <a class="dropdown-item" href="drink.php">Drinks</a>
                            <a class="dropdown-item" href="dessert.php">Dessert</a>
                            <a class="dropdown-item" href="snack_app.php">Snacks & Appetizers</a>
                            <a class="dropdown-item" href="diet.php">Recipes by Diet</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Quick & Easy
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="quickdinner.php">Quick Dinners</a>
                            <a class="dropdown-item" href="e_h.php">Easy & Health</a>
                            <a class="dropdown-item" href="veg.php">Quick Vegetarian</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addrecipe.php">Add Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="food_recipe_css/food1.jpeg" alt="Los Angeles" height="500px">
                <div class="carousel-caption">
                    <h3 style="color: #f51b26">Everybody Can Grow Their Own Food:</h3>
                    <h3 style="color: #f51b26;">Here's How To Get Started</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="food_recipe_css/food2.jpeg" height="500px">
                <div class="carousel-caption">
                    <h3 class="text-dark">Life is uncertain. </h3>
                    <h3 class="text-dark">Eat dessert first</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="food_recipe_css/food3.jpeg" alt="New York" height="500px">
                <div class="carousel-caption">

                    <h3 style="color: white">Cooking is like love.</h3>
                    <h3 style="color: white
              ">It should be entered into with abandon or not at all.</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <section>
        <div class="container-fluid section1 my-5">
            <h1><span>Our Newest Recipes</span></h1>
            <div class="row my-5">
                <div class="col-12 col-sm-3">
                    <figure class="figure">
                        <a href="redpepperpasta.php"><img src="food_recipe_css/newfood1.jpeg"
                                class="figure-img img-fluid " onmouseover="increase()" onmouseout="decrease()" id="img1"></a>
                        <a class="nav-link" href="redpepperpasta.php">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">Creamy Vegan
                                Red Pepper Pasta With Garlic Bread Breadcrumbs
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-3">
                    <figure class="figure">
                        <a href="saturdaybread.php"><img src="food_recipe_css/newfood2.jpeg"
                                class="figure-img img-fluid "></a>
                        <a class="nav-link" href="saturdaybread.php">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">The Saturday
                                White Bread</figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-3">
                    <figure class="figure">
                        <a href="driedgingerchai.php"><img src="food_recipe_css/newfood3.jpeg"
                                class="figure-img img-fluid "></a>
                        <a class="nav-link" href="driedgingerchai.php">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">Dried Ginger
                                Masala Chai</figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-3">
                    <figure class="figure">
                        <a href="#"><img src="food_recipe_css/newfood4.jpeg" class="figure-img img-fluid "></a>
                        <a class="nav-link" href="#">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">Oatmeal Date
                                Cookies</figcaption>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid section1 section2 my-5">
            <h1><span>Top Collections</span></h1>
            <div class="row my-5">
                <div class="col-12 col-sm-4">
                    <figure class="figure">
                        <a href="simplepastatoss.php"><img src="food_recipe_css/trendingfood1.jpg"
                                class="figure-img img-fluid rounded-circle"></a>
                        <a class="nav-link" href="simplepastatoss.php">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">SIMPLE PASTA
                                TOSS
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-4">
                    <figure class="figure">
                        <a href="lasagna.php"><img src="food_recipe_css/trendingfood2.png"
                                class="figure-img img-fluid rounded-circle"></a>
                        <a class="nav-link" href="lasagna.php">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">ABSOLUTE
                                BEST EVER LASAGNA</figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-4">
                    <figure class="figure">
                        <a href="#"><img src="food_recipe_css/trendingfood3.jpeg"
                                class="figure-img img-fluid rounded-circle"></a>
                        <a class="nav-link" href="#">
                            <figcaption class="figure-caption" style="font-size: 20px; text-align: center;">PIZZA
                                MEATLOAF CUPS</figcaption>
                        </a>
                    </figure>
                </div>

            </div>
        </div>
    </section>
    <article>
        <div class="container-fluid section1 section3 my-5">
            <h1><span>Who We Are?</span></h1>
            <div class="row my-5">
                <div class="col-12 col-sm-6">
                    <p class="my-5 mx-5" style="font-size: 20px;">allrecipes is a trusted resource for home cooks with
                        more than 3,000 tested recipes, guides, and meal plans, drawing over 15 million readers each
                        month from around the world. We’re supported by a group of recipe developers, food writers,
                        recipe and product testers, photographers, and other creative professionals.</p>
                    <button type="button" class="btn btn-primary" style="margin-left: 12rem;" data-toggle="tooltip"
                        data-placement="right" title="About Us"><a href="about.php" class="nav-link text-dark">Know
                            More?</a></button>
                </div>
                <div class="col-12 col-sm-6">
                    <img src="food_recipe_css/about.jpeg" width="600px" class="figure-img img-fluid">
                </div>
            </div>
    </article>
    <footer>
        <div class="container">


            <div class="row mb-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div>
                        <img src="food_recipe_css/logo1.png" height="90px" width="250px" alt="">
                    </div>
                    <div class="text-capitalize mt-4">
                        <h3>Ready to cook</h3>
                    </div>
                    <p class="text-capitalize">sign up for our weekly newsletters</p>
                    <div class="w-75 form-group">
                        <input type="email" class="form-control" placeholder="Enter your email" id="email"
                            autocomplete="off">
                        <button class="btn btn-primary mt-3">Sign Up</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-uppercase" href="#">Recipes <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Quick & Easy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Buying Guides</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase" href="#">Add recipes</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-capitalize text-dark" href="#">About us<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">terms of use</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">editorial guidelines</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-capitalize text-dark" href="#">advertise</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-5">
                <p class="text-uppercase">let's be friends!</p>
                <a href="#"><img class="mr-3" src="food_recipe_css/insta1.jpg" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/pinterest.png" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/facebook1.png" height="40px" width="40px" alt=""></a>
                <a href="#"><img class="mr-3" src="food_recipe_css/twitter1.png" height="40px" width="40px" alt=""></a>
            </div>
        </div>
    </footer>
    <script>
        var width="313.25";
        var difference=2;
        var intervalID = 0;
        function increase(){
            clearInterval(intervalID);
            intervalID=setInterval(expand,10);
        }
        function decrease(){
            clearInterval(intervalID);
            intervalID=setInterval(shrink,10);
        }
        function expand(){
            if(width<450){
                width=width+difference;
                document.getElementById("img1").style.width=width;
                console.log(width);
            }
            else{
                clearInterval(intervalID);
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>