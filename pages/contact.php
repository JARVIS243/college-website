<?php
$pageTitle = "Contact Us";
include '../includes/header.php';
?>

<?php
include "../config/database.php";

if (isset($_POST['submit_feedback'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO feedback (name,email,message)
            VALUES ('$name','$email','$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Feedback submitted successfully. Thank you!');</script>";
    } else {
        echo "<script>alert('Something went wrong.');</script>";
    }
}
?>

<section class="page-banner">
    <div class="container text-center">
        <h1>Contact Us</h1>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="row g-4">

            <!-- Contact Details -->

            <div class="col-lg-5">

                <div class="content-box h-100">

                    <h5>Address</h5>

                    <p>
                        College Of Applied Science, Mavelikkara (IHRD)<br>
                        Govt BHSS Campus<br>
                        Mavelikkara PO<br>
                        Alappuzha-690101
                    </p>

                    <h5>Phone</h5>

                    <p>
                        0479-2304494,8547005046
                    </p>

                    <h5>Email</h5>

                    <p>
                        <a href="mailto:casmvk@gmail.com">
                            casmvk@gmail.com
                        </a>
                    </p>

                </div>

            </div>

            <!-- Feedback Form -->

            <div class="col-lg-7">

                <div class="content-box">

                    <h2>Feedback Form</h2>

                    <form method="post">

                        <div class="mb-3">

                            <label class="form-label">
                                Name (required)
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="name"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Email (required)
                            </label>

                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Message
                            </label>

                            <textarea class="form-control"
                                      rows="5"
                                      name="message"></textarea>

                        </div>

                        <button type="submit"
                                name="submit_feedback"
                                class="btn btn-primary">
                            Submit
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- Google Map -->

        <div class="content-box mt-4">

            <h2>Location Map</h2>

            <div class="ratio ratio-16x9">

                <iframe
                    src="https://www.google.com/maps?q=College+Of+Applied+Science+Mavelikkara&output=embed"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

            <div class="text-center mt-3">

                <a href="https://maps.app.goo.gl/UqJvsrNjpg64VvXW6"
                   target="_blank"
                   class="btn btn-main">

                    Open in Google Maps

                </a>

            </div>

        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>
