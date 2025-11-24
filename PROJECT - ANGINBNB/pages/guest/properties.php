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
                <?php if(!isset($_SESSION["user"])):?>
                    <a href="index.php">Home</a>
                    <a href="/pages/guest/properties.php">Properties</a>
                <?php elseif(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === "Member"):?>
                    <a href="index.php">Home</a>
                    <a href="properties.php">Properties</a>
                    <a href="mybookings.php">My Bookings</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                <?php elseif(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === "Admin"):?>
                    <a href="manageuser.php">Manage Users</a>
                    <a href="manageproperties.php">Manage Properties</a>
                    <a href="paymenttypes.php">Payment Types</a>
                    <a href="categories.php">Categories</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Logout</a>
                <?php endif;?>
            </div>

            <div class="rightnav">
                <?php if(!isset($_SESSION["user"])):?>
                    <a href="/pages/guest/login.php">Login</a>
                    <a href="/pages/guest/register.php">Sign Up</a>
                <?php elseif(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === "Member"):?>
                    <p>Welcome, <?php echo $_SESSION["user"]["name"];?></p>
                <?php elseif(isset($_SESSION["user"]) && $_SESSION["user"]["role"] === "Admin"):?>
                    <p>Welcome, <?php echo $_SESSION["user"]["name"];?></p>
                <?php endif;?>
            </div>
        </div>
        
    </nav>
    <main class="properties">
        <h2>All Properties</h2>
        <div class="searchbar">
            <input type="text" placeholder="Search properties by name or location...">
            <button id="search">Search</button>
        </div>

        <div class="filter">
            <select name="categories" id="categories">
                <option value="">All Categories</option>
            </select>
            <button id="filter">Filter</button>
        </div>
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
