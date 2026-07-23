<?php
$base = "/college-website";
?>

<nav class="navbar navbar-expand-xl custom-navbar">
    <div class="container-fluid">

        <button class="navbar-toggler bg-light ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="<?= $base ?>/index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">About HEI</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/about-us.php">About us</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/mission-vision.php">Mission and Vision</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/act-statutes.php">Act and Statutes or MoA</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/institutional-development-plan.php">Institutional Development Plan</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/constituent-units.php">Constituent Units</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/accreditation.php">Accreditation</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/recognition.php">Recognition</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/annual-reports.php">Annual Reports</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/annual-accounts.php">Annual Accounts</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/sponsoring-body.php">Sponsoring body</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/pta.php">PTA</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Administration</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/chancellor.php">Chancellor</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/pro-chancellor.php">Pro Chancellor</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/vice-chancellor.php">Vice-Chancellor</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/pro-vice-chancellor.php">Pro Vice-Chancellor</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/registrar.php">Registrar</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/principal.php">Principal</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/finance-officer.php">Finance Officer</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/controller-of-examination.php">Controller of Examination</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/chief-vigilance-officer.php">Chief Vigilance Officer</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/ombudsperson.php">Ombudsperson</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/executive-council.php">Executive Council</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/internal-complaint-committee.php">Internal Complaint Committee</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/academic-leadership.php">Academic Leadership</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Academics</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/academic-programs.php">Details of Academic Programs</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/academic-calendar.php">Academic Calendar</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/statutes.php">Statutes</a></li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#">Departments <span class="submenu-arrow">▶</span></a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/computer-science.php">Computer Science</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/commerce.php">Commerce</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/electronics.php">Electronics</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/management.php">Management</a></li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item" href="<?= $base ?>/pages/ugc-odl.php">List of UGC recognized ODL</a></li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#">Internal Quality Assurance Cell <span class="submenu-arrow">▶</span></a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/iqac.php">About IQAC</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/audit-report.php">Audit Report</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/internationalization.php">Internationalization</a></li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item" href="<?= $base ?>/pages/library.php">Library</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/academic-collaborations.php">Academic Collaborations</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Admissions</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#">Prospects <span class="submenu-arrow">▶</span></a>
                            <ul class="dropdown-menu submenu">

                                <li>
                                    <a class="dropdown-item"
                                        href="<?= $base ?>/assets/images/UG_Prospects.pdf"
                                        target="_blank">
                                        UG Prospects
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item"
                                        href="<?= $base ?>/assets/images/PG_Prospectus_2025.pdf"
                                        target="_blank">
                                        PG Prospects
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li><a class="dropdown-item" href="<?= $base ?>/pages/admission-process.php">Admission Process and Guidelines</a></li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#">Fee Refund Policy <span class="submenu-arrow">▶</span></a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/fee-structure.php">Fee Structure</a></li>
                                <li><a class="dropdown-item" href="<?= $base ?>/pages/fee-payment.php">Fee Payment</a></li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item submenu-toggle" href="#">Online Admission(UG/PG) <span class="submenu-arrow">▶</span></a>
                            <ul class="dropdown-menu submenu">

                                <li>
                                    <a class="dropdown-item"
                                        href="https://admissions.keralauniversity.ac.in/"
                                        target="_blank">
                                        Kerala University UG/PG Online Admission
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item"
                                        href="https://admissions.ihrd.ac.in/"
                                        target="_blank">
                                        IHRD UG/PG Online Admission
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Research</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/research-development-cell.php">Research and Development Cell</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/incubation-centre.php">Incubation Centre</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/central-facilities.php">Central Facilities</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Student Life</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/sports-facilities.php">Sports Facilities</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/nss.php">NSS</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/red-ribbon-club.php">Red Ribbon Club</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/science-club.php">Science Club</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/women-club.php">Women Club</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/ed-club.php">ED Club</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/placement-cell.php">Placement Cell and Activities</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/sgrc.php">SGRC</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/health-facilities.php">Health Facilities</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/internal-complaint-committee.php">Internal Complaint Committee</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/anti-ragging-cell.php">Anti Ragging Cell</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/equal-opportunity-cell.php">Equal Opportunity Cell</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/sedg.php">SEDG</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/facilities-for-different-abled.php">Facilities for Different Abled</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base ?>/pages/alumni.php">Alumni</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">Info Corner</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/rti.php">RTI</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/circulars-notices.php">Circulars and Notices</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/announcements.php">Announcements</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/newsletters.php">Newsletters</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/nirf.php">NIRF</a></li>
                        <li>
                            <a class="dropdown-item"
                                href="<?= $base ?>/assets/images/EOA-Report-2026-2027.pdf"
                                target="_blank">
                                AICTE
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/news-events-achievements.php">News, Recent Events & Achievements</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/job-openings.php">Job Openings</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/reservation-roster.php">Reservation Roster</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/study-in-india.php">Study In India</a></li>
                        <li><a class="dropdown-item" href="<?= $base ?>/pages/international-students.php">Admission Procedure & Facilities Provided to International Students</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base ?>/pages/gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base ?>/pages/contact.php">Contact Us</a>
                </li>

            </ul>
        </div>
    </div>
</nav>