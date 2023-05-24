<?php include('templates/header.php'); ?>
<div class="title">
    <div class="container">
        <h1 class="title">Contact Us</h1>
    </div>
</div>
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Contact Form</h5>
                        <form>
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6454878.7613987895!2d135.206531425!3d-37.81824069999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad643705c0e8599%3A0xcdfe4cfc4126eba5!2sBrighton%20College%20(Melbourne)!5e0!3m2!1sen!2sph!4v1684909620293!5m2!1sen!2sph" style="border:0; width: 100%; height: 450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<?php include('templates/footer.php'); ?>