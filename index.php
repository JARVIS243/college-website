<?php
$pageTitle = "Home | College of Applied Science Mavelikara";
include 'includes/header.php';
?>

<!-- =========================
     HERO CAROUSEL + LATEST NEWS
========================= -->

<section class="hero-news-section">
    <div class="container-fluid">
        <div class="row g-3">

            <!-- Carousel Left -->
            <div class="col-lg-8">

                <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="5"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="6"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="7"></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="assets/images/banner1.jpg" class="d-block w-100 carousel-img" alt="College Campus">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner2.jpg" class="d-block w-100 carousel-img" alt="Campus">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner3.jpg" class="d-block w-100 carousel-img" alt="Graduation">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner4.jpg" class="d-block w-100 carousel-img" alt="Sports">
                        </div>

                        <div class="carousel-item portrait-slide">

                            <div class="portrait-banner-container">

                                <img src="assets/images/banner5.jpeg"
                                    class="portrait-banner-img"
                                    alt="Achievement">

                            </div>

                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner6.jpg" class="d-block w-100 carousel-img" alt="Facilities">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner7.jpg" class="d-block w-100 carousel-img" alt="Infrastructure">
                        </div>

                        <div class="carousel-item">
                            <img src="assets/images/banner8.jpg" class="d-block w-100 carousel-img" alt="Facilities">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            </div>

            <!-- Latest News Right -->

            <div class="col-lg-4">

                <div class="latest-news-box">

                    <h4 class="news-title">
                        Latest News
                    </h4>

                    <ul class="news-list">

                        <!-- AI Workshop -->

                        <li>

                            <a href="javascript:void(0)"
                                class="news-toggle"
                                data-bs-toggle="modal"
                                data-bs-target="#aiWorkshopModal">

                                AI Workshop for Municipal Councillors

                            </a>

                        </li>

                        <!-- Admission Brochure -->

                        <li>

                            <a href="javascript:void(0)"
                                class="news-toggle"
                                data-bs-toggle="modal"
                                data-bs-target="#brochureModal">

                                Admission Brochure 2026-27

                            </a>

                        </li>

                        <!-- Online Admission -->

                        <li>

                            <a class="news-toggle"
                                data-bs-toggle="collapse"
                                href="#onlineAdmissionCollapse"
                                role="button">

                                Online Admission 2026-27

                            </a>

                            <div class="collapse"
                                id="onlineAdmissionCollapse">

                                <div class="portal-box">

                                    <a href="https://admissions.ihrd.ac.in/"
                                        target="_blank"
                                        class="portal-btn">

                                        Online Admission Portal

                                    </a>

                                </div>

                            </div>

                        </li>

                        <!-- Tug Of War -->

                        <li>

                            <a class="news-toggle"
                                data-bs-toggle="collapse"
                                href="#tugOfWarCollapse"
                                role="button">

                                Third Position in Inter Collegiate Tug of War Championship

                            </a>

                            <div class="collapse"
                                id="tugOfWarCollapse">

                                <div class="portal-box">

                                    <a href="javascript:void(0)"
                                        class="portal-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#tugOfWarModal">

                                        Third Position in Inter Collegiate Tug of War Championship conducted by Kerala University

                                    </a>

                                </div>

                            </div>

                        </li>

                        <!-- NSS Award -->

                        <li>

                            <a class="news-toggle"
                                data-bs-toggle="collapse"
                                href="#nssAwardCollapse"
                                role="button">

                                Kerala State Level NSS Award

                            </a>

                            <div class="collapse"
                                id="nssAwardCollapse">

                                <div class="portal-box">

                                    <a href="javascript:void(0)"
                                        class="portal-btn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#nssAwardModal">

                                        Kerala State Level NSS Award For Best Volunteer

                                    </a>

                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

            </div>

            <!-- AI WORKSHOP MODAL -->

            <div class="modal fade"
                id="aiWorkshopModal"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-xl">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">
                                AI Workshop for Municipal Councillors
                            </h5>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>

                        </div>

                        <div class="modal-body text-center">

                            <img src="assets/images/G42.jpeg"
                                class="img-fluid popup-img"
                                alt="AI Workshop">

                        </div>

                    </div>

                </div>

            </div>

            <!-- BROCHURE MODAL -->

            <div class="modal fade"
                id="brochureModal"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-xl">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">
                                Admission Brochure 2026-27
                            </h5>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>

                        </div>

                        <div class="modal-body text-center">

                            <img src="assets/images/admission-brochure.jpg"
                                class="img-fluid popup-img"
                                alt="Admission Brochure">

                        </div>

                    </div>

                </div>

            </div>

            <!-- TUG OF WAR MODAL -->

            <div class="modal fade"
                id="tugOfWarModal"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-xl">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">
                                Third Position in Inter Collegiate Tug of War Championship
                            </h5>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>

                        </div>

                        <div class="modal-body text-center">

                            <img src="assets/images/banner7.jpg"
                                class="img-fluid popup-img"
                                alt="Tug Of War">

                        </div>

                    </div>

                </div>

            </div>

            <!-- NSS AWARD MODAL -->

            <div class="modal fade"
                id="nssAwardModal"
                tabindex="-1">

                <div class="modal-dialog modal-dialog-centered modal-xl">

                    <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title">
                                Kerala State Level NSS Award For Best Volunteer
                            </h5>

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal">
                            </button>

                        </div>

                        <div class="modal-body text-center">

                            <img src="assets/images/banner9.jpeg"
                                class="img-fluid popup-img"
                                alt="NSS Award">

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================
     ADMISSION MARQUEE
========================= -->

<div class="admission-marquee">
    <div class="marquee-content">
        ♦ IHRD Admission Open 2026-27 ♦
        2026-27 വർഷത്തിലേക്കുള്ള UG/PG അഡ്മിഷൻ ആരംഭിച്ചിരിക്കുന്നു ♦
    </div>
</div>

<!-- =========================
     ABOUT COLLEGE
========================= -->

<section class="section welcome-section">
    <div class="container">

        <div class="section-title">
            <h2>About College</h2>
            <p>College of Applied Science Mavelikara</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-12">

                <div class="about-box">

                    <div class="row align-items-center">

                        <div class="col-md-5">
                            <img src="assets/images/banner1.jpg" class="img-fluid rounded shadow" alt="College">
                        </div>

                        <div class="col-md-7">

                            <h3>Welcome to CAS Mavelikara</h3>

                            <p>
                                The College of Applied Science, Mavelikkara was established in 1994. The institution is affiliated to the University of Kerala and is managed by the Institute of Human Resources Development, Thiruvananthapuram, a Government of Kerala undertaking popularly known as the IHRD in the Kerala higher education sector.
                            </p>

                            <a href="pages/about-us.php" class="btn btn-main">
                                Read More
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- =========================
     MANAGEMENT SECTION
========================= -->

<section class="section bg-light">
    <div class="container">

        <div class="section-title">
            <h2>Management</h2>
            <p>Institute of Human Resources Development (IHRD)</p>
        </div>

        <div class="row text-center g-4">

            <div class="col-lg-4 col-md-4">
                <div class="management-card">
                    <img src="assets/images/chairperson.jpg"
                        class="management-img"
                        alt="Chairperson">

                    <h5>Shri. Roji M John</h5>

                    <p>
                        Minister for Higher Education,<br>
                        Government of Kerala<br>
                        (Chairperson)
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="management-card">
                    <img src="assets/images/principal-secretary_2.jpg"
                        class="management-img"
                        alt="Principal Secretary">

                    <h5>Dr. B Ashok IAS</h5>

                    <p>
                        Principal Secretary<br>
                        Department of Higher Education<br>
                        ( Vice- Chairman )
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="management-card">
                    <img src="assets/images/director.jpg"
                        class="management-img"
                        alt="Director">

                    <h5>Dr. V A Arun Kumar</h5>

                    <p>
                        IHRD Director
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================
     PRINCIPAL MESSAGE
========================= -->

<section class="section">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-3 text-center">
                <img src="assets/images/principal.jpg"
                    class="principal-img"
                    alt="Principal">

                <h6 class="mt-3">Sajith S</h6>
            </div>

            <div class="col-lg-9">
                <div class="principal-message-box">

                    <h2>Principal's Message</h2>

                    <p>
                        Welcome to the College of Applied Science Mavelikkara, a premier institution of higher education managed by the Institute of Human Resources Development (IHRD), Government of Kerala. As we strive for excellence in education, research, and innovation, we are proud to embark on the journey towards NAAC accreditation…
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================
     ACHIEVEMENTS
========================= -->

<section class="section bg-light">
    <div class="container">

        <div class="section-title">
            <h2>Achievements</h2>
            <p>Our Pride Moments</p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4">
                <div class="info-card">
                    <img src="assets/images/banner5.jpeg" class="img-fluid rounded mb-3" alt="Achievement">

                    <h4>University Rank Holder</h4>

                    <p>
                        Outstanding academic achievement by our students in Kerala University examinations.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card">
                    <img src="assets/images/banner4.jpg" class="img-fluid rounded mb-3" alt="Sports">

                    <h4>Sports Excellence</h4>

                    <p>
                        Kerala University Inter Collegiate Tug of War Championship Winners.
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-card">
                    <img src="assets/images/banner8.jpg" class="img-fluid rounded mb-3" alt="Graduation">

                    <h4>Graduation Ceremony</h4>

                    <p>
                        Celebrating student success and academic excellence.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================
     DEPARTMENTS
========================= -->

<section class="section">
    <div class="container">

        <div class="section-title">
            <h2>Departments</h2>
            <p>Academic Departments</p>
        </div>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="department-card text-center">
                    <h4>Computer Science</h4>
                </div>
            </div>

            <div class="col-md-3">
                <div class="department-card text-center">
                    <h4>Commerce</h4>
                </div>
            </div>

            <div class="col-md-3">
                <div class="department-card text-center">
                    <h4>Electronics</h4>
                </div>
            </div>

            <div class="col-md-3">
                <div class="department-card text-center">
                    <h4>Management</h4>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>