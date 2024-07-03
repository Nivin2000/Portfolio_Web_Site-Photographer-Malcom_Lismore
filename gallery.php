<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gallery</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "stylesheet" href = "simplelightbox-master/dist/simple-lightbox.css">
    </head>
    <body>
        
        <!-- header -->
        <header class = "header">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        Lismore Photography
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <!-- navigation menu -->
                <nav class = "top-nav">
                    <ul>
                        <li><a href = "Home.html">Home</a></li>
                        <li><a href = "About.html">About</a></li>
                        <li><a href = "prices.html">Prices</a></li>
                        <li><a href = "gallery.php" class = "active">Gallery</a></li>
                        <li><a href = "blog.html">Blog</a></li>
                        <li><a href = "contact.html">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "images/shutterstock_71313856.jpg" alt = "photographer img">
                    </div>
                    <h2>I'm Malcome Lismore</h2>
                    <h3>Photographer | Traveller</h3>
                    <blockquote>
                        "Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever ... It remembers little things, long after you have forgotten everything."
                        <span>-Aaron Siskind</span>
                    </blockquote>
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "#"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "#"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <!-- main -->
        <section class = "section-three">
            <div class = "container">
                <div class = "gallery">
                    <?php
                    // Assuming you have a database connection
                    $dbConnection = mysqli_connect("localhost", "root", "anusara@2000", "photography");

                    // Check connection
                    if (!$dbConnection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    // Fetch image data from the database
                    $query = "SELECT * FROM images";
                    $result = mysqli_query($dbConnection, $query);

                    // Loop through the results and display images
                    while ($row = mysqli_fetch_assoc($result)) {
                        $imagePath = $row['path'];
                        $caption = $row['caption'];

                        echo '<a href="' . $imagePath . '">';
                        echo '<div class="single-img">';
                        echo '<img src="' . $imagePath . '" alt="gallery image">';
                        echo '<div class="single-img-content">';
                        echo '<h3>' . $caption . '</h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }

                    // Close the database connection
                    mysqli_close($dbConnection);
                    ?>
                </div>
            </div>
        </section>
        <!-- end of main -->


        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2>Malcome Lismore</h2>
                    <p>Welcome to the captivating world of Malcome Lismore, where moments are transformed into timeless masterpieces through the lens of a visionary photographer. </p>
                </div>
                <div>
                    <h3>Free Subscription!</h3>
                    <p>Unlock exclusive content with our complimentary subscription! Enjoy premium features and stay updated—subscribe now for a seamless experience.</p>

                    <div class = "subs">
                        <i class = "fas fa-envelope"></i>
                        <input type = "email" id = "email" placeholder="Email Address">
                        <button type = "submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <p>&copy; Copyright MALCOME_LISMORE.</p>
        </footer>
        <!-- end of footer -->
        
        <!-- LIGHTBOX -->
        <script src = "simplelightbox-master/dist/simple-lightbox.js"></script>

        <script src="script.js"></script>
    </body>
</html>