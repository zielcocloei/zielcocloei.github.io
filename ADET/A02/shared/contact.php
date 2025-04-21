<?php

?>
<main class="container my-5">
    <h2 class="mb-4">Get in Touch</h2>
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Contact Form</h5>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Reach Us</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Email:</strong> info@bookwormlibrary.com</li>
                        <li class="list-group-item"><strong>Phone:</strong> (123) 456-7890</li>
                        <li class="list-group-item"><strong>Address:</strong> 123 Library Lane, Booktown</li>
                    </ul>
                    <div class="mt-3">
                        <a href="#" class="btn btn-outline-primary me-2" data-bs-toggle="tooltip" title="Follow us on Twitter">Twitter</a>
                        <a href="#" class="btn btn-outline-primary me-2" data-bs-toggle="tooltip" title="Join our Facebook community">Facebook</a>
                        <a href="#" class="btn btn-outline-primary" data-bs-toggle="tooltip" title="Follow us on Instagram">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>