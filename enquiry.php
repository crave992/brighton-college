<?php include('templates/header.php'); ?>
<div class="title">
    <div class="container">
        <h1 class="title">Enquire about the course</h1>
        <p class="description">Simply fill out the form to receive the course guide and a call from Brighton College Student Advisor.</p>
    </div>
</div>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="card w-100" style="max-width: 600px; margin: 10px auto">
                <div class="card-body">
                    <h5 class="card-title">Enquire Form</h5>
                    <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name (required)</label>
                        <input type="text" class="form-control" id="fullName">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email (required)</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course of Interest (required)</label>
                        <select class="form-select" id="course">
                            <option value="1">Diploma for Information Technology</option>
                            <option value="2">Diploma for Business</option>
                            <option value="3">Diploma for Hospitality Management</option>
                            <option value="4">Diploma for Community Service</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr>
                    <h4><a href="tel:07 3123 4911" class="text-decoration-none">Call 07 3123 4911</a></h4>
                    <p>8.00 AM – 5.30 PM Monday to Friday</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('templates/footer.php'); ?>