<?php include 'header.php'; ?>

<!-- Page Header -->
<div class="hero" style="height: 50vh;">
    <div class="hero-bg" style="background-image: url('menu_bg.png');" onerror="this.style.backgroundImage='url(\'https://images.unsplash.com/photo-1414235077428-33898ed1e830?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80\')'"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Our Menu</h1>
        <p>A symphony of flavors carefully curated for your palate.</p>
    </div>
</div>

<section>
    <!-- Breakfast -->
    <div class="menu-category">
        <h2 class="category-title">Breakfast</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1533089860892-a7c6f0a88666?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Avocado Toast" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Avocado Toast <span class="card-price">$14</span></h3>
                    <p class="card-desc">Sourdough bread, smashed avocado, poached egg, chili flakes, microgreens.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Belgian Waffles" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Belgian Waffles <span class="card-price">$16</span></h3>
                    <p class="card-desc">Fresh berries, whipped mascarpone, pure maple syrup, candied pecans.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Lunch -->
    <div class="menu-category">
        <h2 class="category-title">Lunch</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Quinoa Bowl" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Superfood Quinoa Bowl <span class="card-price">$18</span></h3>
                    <p class="card-desc">Roasted sweet potato, kale, chickpeas, avocado, lemon tahini dressing.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Artisan Burger" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Artisan Burger <span class="card-price">$22</span></h3>
                    <p class="card-desc">Grass-fed beef, aged cheddar, caramelized onions, truffle aioli, brioche bun.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dinner -->
    <div class="menu-category">
        <h2 class="category-title">Dinner</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Salmon Filet" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Wild Caught Salmon <span class="card-price">$34</span></h3>
                    <p class="card-desc">Miso glaze, black garlic risotto, blistered snap peas, yuzu foam.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1558030006-450675393462?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Lamb Chops" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Herb-Crusted Lamb Chops <span class="card-price">$42</span></h3>
                    <p class="card-desc">Rosemary and mint crust, fondant potatoes, roasted baby carrots, port wine reduction.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Drinks -->
    <div class="menu-category">
        <h2 class="category-title">Drinks</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Signature Cocktail" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Aura Sunset <span class="card-price">$14</span></h3>
                    <p class="card-desc">Gin, elderflower liqueur, grapefruit juice, rosemary sprig, prosecco float.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Craft Beer" class="card-img">
                <div class="card-content">
                    <h3 class="card-title">Local Craft IPA <span class="card-price">$8</span></h3>
                    <p class="card-desc">Hazy IPA from local brewery, notes of citrus and pine, perfectly balanced.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
