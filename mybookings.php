<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnginBnB</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <?php

        session_start();
    ?>

    <nav>
        <div class="container">
            <h1>anginbnb</h1>
            <div class="middlenav">
                <?php if(!isset($_SESSION["logged_id_user"])):?>
                    <a href="index.php">Home</a>
                    <a href="properties.php">Properties</a>
                <?php elseif(isset($_SESSION["logged_id_user"])):?>
                    <a href="index.php">Home</a>
                    <a href="properties.php">Properties</a>
                    <a href="mybookings.php">My Bookings</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                <?php endif;?>
            </div>

            <div class="rightnav">
                <?php if(!isset($_SESSION["logged_id_user"])):?>
                    <a href="login.php">Login</a>
                    <a href="register.php">Sign Up</a>
                <?php elseif(isset($_SESSION["logged_id_user"])):?>
                    <p>Welcome, <?= $_SESSION["logged_id_user"]; ?></p>
                <?php endif;?>

            </div>
        </div>
        
    </nav>
    <main>
        <h2>My Bookings</h2>
        <p>Manage your current and past reservations</p>
        
        <!--CODE PHP MY BOOKINGS  -->
    </main>

    <footer>
        <div class="footer">
            <div class="foot1">
                <div class="footercards">
                    <p class="title">Anginbnb</p>
                    <p>Your home away from home. Discover unique places to stay around the world.</p>
                </div>
                <div class="footercards">
                    <p class="title">Support</p>
                    <p>Help Center</p>
                    <p>Safety Information</p>
                    <p>Cancellation Options</p>
                    <p>Contact Us</p>
                </div>
                <div class="footercards">
                    <p class="title">Community</p>
                    <p>Anginbnb Blog</p>
                    <p>Host Resources</p>
                    <p>Community Forum</p>
                    <p>Refer Friends</p>
                </div>
                <div class="footercards">
                    <p class="title">Company</p>
                    <p>About Us</p>
                    <p>Careers</p>
                    <p>Press</p>
                    <p>Investors</p>
                </div>
            </div>
            <div class="foot2">
                <div class="footercards2">
                    <p>&copy; 2025 Anginbnb, Inc. All Rights Reserved</p>
                </div>
                <div class="footercards2">
                    <p>Privacy Policy</p>
                    <p>Terms of Service</p>
                    <p>Cookie Policy</p>
                </div>
            </div>
            <div class="foot3">
                <p>2802413253 - Gicelyn Cen</p>
                <p>2802413316 - Louise Marie Bernadette Tjen</p>
            </div>
        </div>
    </footer>
</body>
</html>