<?php include 'header.php'; ?>

<!-- Page Header -->
<div class="hero" style="height: 50vh;">
    <div class="hero-bg" style="background-image: url('contact_bg.png');" onerror="this.style.backgroundImage='url(\'https://images.unsplash.com/photo-1525610553991-2bede1a236e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80\')'"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Contact Us</h1>
        <p>Get in touch for reservations and inquiries.</p>
    </div>
</div>

<section>
    <div class="contact-grid">
        <div class="contact-info">
            <h2 class="category-title" style="border-left: none; padding-left: 0; margin-bottom: 40px;">Information</h2>
            
            <div class="info-item">
                <h3>Address</h3>
                <p>123 Culinary Avenue, Food District<br>Metropolis, NY 10012</p>
            </div>
            
            <div class="info-item">
                <h3>Phone</h3>
                <p>+1 (555) 123-4567</p>
            </div>

            <div class="info-item">
                <h3>Email</h3>
                <p>reservations@aurarestaurant.com</p>
            </div>
            
            <div class="info-item">
                <h3>Opening Hours</h3>
                <p>Monday - Thursday: 5:00 PM - 10:00 PM<br>
                Friday - Saturday: 5:00 PM - 11:30 PM<br>
                Sunday: 4:00 PM - 9:00 PM</p>
            </div>
        </div>

        <div class="contact-form-wrapper">
            <h2 class="category-title" style="border-left: none; padding-left: 0; margin-bottom: 40px;">Send a Message</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" required placeholder="How can we help you?"></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
