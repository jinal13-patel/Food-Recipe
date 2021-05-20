<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="food_recipe_css/h1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Dinner Recipes</title>
</head>

<body>
    <header>
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php"><img src="food_recipe_css/logo1.png" class="image-fluid logo w-50"></a>
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
                                <a class="dropdown-item" href="">Dinner</a>
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
       
        <div class="jumbotron text-center">
            <h1 class="text-uppercase">Dinner Recipes</h1>
            <nav class="navbar navbar-expand justify-content-center">
                <ul class="navbar-nav mb-4 mt-3 text-uppercase">
                    <li class="nav-item active text-dark">
                        <a class="nav-link" href="#comfort"><u>Comfort Food</u><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#family"><u>Family Dinners</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#diet"><u>Dinner By Diets</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sauce"><u>Sauces</u></a>
                    </li>
                </ul>
            </nav>

            <p class="mb-0">Need help with dinner ideas? We have one-pot dishes, 30-minute meals, slow cooker feasts, and dinner recipes for every mood.</p>
        </div>
    </header>
    <section>
        <div id="comfort" class="text-center">
            <a href="comfort.php" class="text-dark">
                <h2>Comfort Food Recipes <img src="food_recipe_css/arw.png" height="25px" width="30px" alt=""></h2>
            </a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/lasanga.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">COMFORT FOOD</h6>
                                <p class="card-text">VEGETARIAN SPINACH AND MUSHROOM LASANGA</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">2 hrs
                                    <img class="ml-md-5" src="food_recipe_css/5star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/rice.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">COMFORT FOOD</h6>
                                <p class="card-text">RICE PUDDING</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">35 mins
                                    <img class="ml-md-5" src="food_recipe_css/5star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/potato.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">COMFORT FOOD</h6>
                                <p class="card-text">CHEESY POTATO CASSEROLE</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">65 mins
                                    <img class="ml-md-5" src="food_recipe_css/4.5star.jpg" height="40px" width="125px" alt="">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="family" class="text-center">
            <a href="family.php" class="text-dark">
                <h2>Family Dinner Recipes <img src="food_recipe_css/arw.png" height="25px" width="30px" alt=""></h2>
            </a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/friedrice.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">FAMILY DINNER</h6>
                                <p class="card-text">FRIED RICE</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">30 mins
                                    <img class="ml-md-5" src="food_recipe_css/4star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/penne.jfif" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">FAMILY DINNER</h6>
                                <p class="card-text">PENNE ALLA VODKA</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">40 mins
                                    <img class="ml-md-5" src="food_recipe_css/5star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/baked.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">FAMILY DINNER</h6>
                                <p class="card-text">TWICE BAKED POTATOES</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">110 mins
                                    <img class="ml-md-5" src="food_recipe_css/4.5star.jpg" height="40px" width="125px" alt="">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div id="diet" class="text-center">
            <a href="diet.php" class="text-dark">
                <h2>Dinner Recipes By Diet<img src="food_recipe_css/arw.png" height="25px" width="30px" alt=""></h2>
            </a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/quesadilla.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">DINNER BY DIET</h6>
                                <p class="card-text">QUESADILLA</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">08 mins
                                    <img class="ml-md-5" src="food_recipe_css/5star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/rissotto.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">DINNER BY DIET</h6>
                                <p class="card-text">MUSHROOM RISSOTTO</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">10 mins
                                    <img class="ml-md-5" src="food_recipe_css/4star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/curry.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">DINNER BY DIET</h6>
                                <p class="card-text">POTATO AND BROCCOLI CURRY</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">10 mins
                                    <img class="ml-md-5" src="food_recipe_css/4.5star.jpg" height="40px" width="125px" alt="">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="sauce" class="text-center">
            <a href="sauce.php" class="text-dark">
                <h2>Sauce Recipes <img src="food_recipe_css/arw.png" height="25px" width="30px" alt=""></h2>
            </a>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/chutney.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">SAUCES</h6>
                                <p class="card-text">GREEN TOMATO CHUTNEY</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">30 mins
                                    <img class="ml-md-5" src="food_recipe_css/4.5star.jpg" height="30px" width="120px" alt="">
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/white.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">SAUCES</h6>
                                <p class="card-text">ROASTED GARLIC WHITE PIZZA SAUCE</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">07 mins
                                    <img class="ml-md-5" src="food_recipe_css/5star.png" height="30px" width="120px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 col-lg-4 col-md-4 col-12">
                    <a href="#">
                        <div class="card">
                            <img class="card-img-top" src="food_recipe_css/mango.jpg" alt="Card image" width="100px"
                                height="300px">
                            <div class="card-body">
                                <h6 class="card-title text-dark">SAUCES</h6>
                                <p class="card-text">MANGO CHUTNEY</p>
                                <p><img class="mr-2" src="food_recipe_css/clock.png" height="20px" width="20px" alt="">40 mins
                                    <img class="ml-md-5" src="food_recipe_css/4star.png" height="40px" width="125px" alt=""></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr class="bg-warning h-25">
    <footer id="abt">
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
                            <a class="nav-link text-uppercase" href="#">Recipes <span class="sr-only">(current)</span></a>
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
                            <a class="nav-link text-capitalize text-dark" href="#">About us<span class="sr-only">(current)</span></a>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>