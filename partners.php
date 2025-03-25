<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partners - FoodSecure</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="animate__animated animate__fadeInDown">
            <div class="logo">FoodSecure</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="partners.php">Partners</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section class="content" data-aos="fade-up">
        <h1 class="animate__animated animate__fadeIn">Our Partners</h1>
        <p>We collaborate with amazing organizations to drive food security.</p>
        <div class="cards">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
                <h3>Green Farms</h3>
                <p>Supporting sustainable agriculture since 2010.</p>
            </div>
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
                <h3>Community Roots</h3>
                <p>Building local farming networks.</p>
            </div>
        </div>
    </section>

    <footer data-aos="fade-up">
        <p>© 2025 FoodSecure. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>