<!-- navbarBuilder.php -->
<style>
    .navbar-brand {
      

    position: relative;
    background: url(../images/logo.png);
    width: 170px;
    left: 15px;
    max-height: 70px; /* height of the navbar */

    }
</style>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: var(--polo-blue-500);">
    <div class="container">
        <img src="../assets/images/placeholder-logo.png" class="navbar-brand" href="../pages/pixify_main_landing.php">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="color: var(--polo-blue-100);">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php" style="color: var(--polo-blue-100);">Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pricing.php" style="color: var(--polo-blue-100);">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal" style="color: var(--polo-blue-100);">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include contact modal here -->
<?php include '../assets/scripts/contactModalBuilder.php'; ?> 
