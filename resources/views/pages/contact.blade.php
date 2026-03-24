@include('pages.header')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Welcome to My Website</h1>
        <p class="subtitle">This is my Contact Form</p>

        <form action="#" method="post" class="contact-form">
            @csrf

            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter your name" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <label>Message</label>
            <textarea name="message" rows="4" placeholder="Write your message"></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
</section>

@include('pages.footer')