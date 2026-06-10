<?php include 'header.php'; ?>

<!-- Page Header -->
<div class="hero" style="height: 50vh;">
    <div class="hero-bg" style="background-image: url('about_bg.png');" onerror="this.style.backgroundImage='url(\'https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80\')'"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>About Us</h1>
        <p>The story behind our culinary passion.</p>
    </div>
</div>

<section>
    <div class="about-grid">
        <div>
            <h2 class="category-title" style="border-left: none; padding-left: 0;">Our Story</h2>
            <p style="margin-bottom: 20px; color: #ccc;">Founded in 2020, Aura began as a simple vision: to bring world-class fine dining to the heart of the city in a modern, unpretentious atmosphere. Our founders travelled the globe to source inspiration, bringing back a tapestry of flavors and techniques.</p>
            <p style="color: #ccc;">Every dish we serve is a testament to our commitment to quality, sustainability, and innovation. We partner with local farmers and artisans to ensure the freshest ingredients make it to your plate.</p>
        </div>
        <div>
            <img src="restaurant.png" alt="Restaurant Interior" class="about-img" onerror="this.src='https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
        </div>
    </div>
</section>

<section>
    <div class="about-grid">
        <div style="order: 2;">
            <h2 class="category-title" style="border-left: none; padding-left: 0;">Meet the Executive Chef</h2>
            <p style="margin-bottom: 20px; color: #ccc;">Chef Marcus Reynolds brings over two decades of culinary expertise to Aura. Having trained in Michelin-starred restaurants across Paris and Tokyo, Marcus blends classic French techniques with bold Asian influences.</p>
            <p style="color: #ccc;">"My goal is not just to feed people, but to evoke emotion through food. Every element on the plate must serve a purpose, contributing to a harmonious and unforgettable dining experience."</p>
        </div>
        <div style="order: 1;">
            <img src="chef.png" alt="Executive Chef" class="about-img" onerror="this.src='https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'">
        </div>
    </div>
</section>

<section>
    <h2 class="section-title">Gallery</h2>
    <div class="grid">
        <img src="images\restaurant.png" alt="Gallery 1" class="about-img" style="height: 250px; object-fit: cover;">
        <img src="https://images.unsplash.com/photo-1550966871-3ed3cdb5ed0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gallery 2" class="about-img" style="height: 250px; object-fit: cover;">
        <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gallery 3" class="about-img" style="height: 250px; object-fit: cover;">
    </div>
</section>

<?php include 'footer.php'; ?>
