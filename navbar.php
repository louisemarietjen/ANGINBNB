<?php if(!isset($_SESSION["user"])):?>
    <a href="index.php">Home</a>
    <a href="properties.php">Properties</a>
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