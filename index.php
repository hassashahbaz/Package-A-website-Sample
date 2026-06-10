<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<div class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Taste the Extraordinary</h1>
        <p>Experience culinary excellence in a modern, atmospheric setting. We craft unforgettable flavors using the finest seasonal ingredients.</p>
        <a href="menu.php" class="btn">Explore Menu</a>
    </div>
</div>

<!-- Introduction Section -->
<section>
    <h2 class="section-title">Welcome to Aura</h2>
    <div class="about-grid" style="grid-template-columns: 1fr; text-align: center; max-width: 800px; margin: 0 auto;">
        <p style="font-size: 1.1rem; color: #ccc;">At Aura, we believe that dining is more than just eating—it's an experience that awakens the senses. Our chefs blend traditional techniques with modern innovation to present dishes that are as visually stunning as they are delicious. Join us for an evening of elegance and exceptional taste.</p>
    </div>
</section>

<!-- Featured Dishes -->
<section>
    <h2 class="section-title">Featured Creations</h2>
    <div class="grid">
        <!-- Card 1 -->
        <div class="card">
            <img src="images/dish_1.png" alt="Seared Scallops" class="card-img" onerror="this.src='https://images.unsplash.com/photo-1544025162-8315ea07525b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'">
            <div class="card-content">
                <h3 class="card-title">Pan-Seared Scallops <span class="card-price">$28</span></h3>
                <p class="card-desc">Served with butternut squash purée, crispy pancetta, and sage brown butter.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="images/dish_2.png" alt="Wagyu Beef Filet" class="card-img" onerror="this.src='https://images.unsplash.com/photo-1558030006-450675393462?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'">
            <div class="card-content">
                <h3 class="card-title">Wagyu Beef Filet <span class="card-price">$65</span></h3>
                <p class="card-desc">Grade A5 Wagyu, truffle pomme purée, charred asparagus, and red wine demi-glace.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="images/dish_3.png" alt="Chocolate Dome" class="card-img" onerror="this.src='https://images.unsplash.com/photo-1563805042-7684c8a9e9cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80'">
            <div class="card-content">
                <h3 class="card-title">Dark Chocolate Dome <span class="card-price">$16</span></h3>
                <p class="card-desc">Valrhona chocolate mousse, raspberry coulis center, finished with edible gold leaf.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
