<?php
$pageTitle = "Gallery";
include '../includes/header.php';
?>

<section class="page-banner">
    <div class="container text-center">
        <h1>Gallery</h1>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="row gx-4 gy-4">

            <?php

            $images = [

                "G43.jpeg",
                "G42.jpeg",
                "resized_5thrank.jpg",
                "NSScamp.jpg",
                "G1.jpg",
                "G2.jpg",
                "G3.jpg",
                "G4.jpg",
                "G5.jpg",
                "G6.jpg",
                "G7.jpg",
                "G8.jpg",
                "G9.jpg",
                "G10.jpg",
                "G11.jpg",
                "G12.jpg",
                "G13.jpg",
                "G14.jpg",
                "G15.jpg",
                "G16.jpg",
                "G17.jpg",
                "G18.jpg",
                "G19.jpg",
                "G20.jpg",
                "G21.jpg",
                "G22.jpg",
                "G23.jpg",
                "G24.jpg",
                "G25.jpg",
                "G26.jpg",
                "G27.jpg",
                "G28.jpg",
                "G29.jpg",
                "G30.jpg",
                "G31.jpg",
                "G32.jpg",
                "G33.jpg",
                "G34.jpg",
                "G36.jpg",
                "G37.jpg",
                "G38.jpg",
                "G41.jpg",
                "G35.jpg",
                "G40.jpg",
                "G39.jpg"

            ];

            foreach ($images as $image) {
            ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">

                    <div class="gallery-card">

                        <a href="javascript:void(0)"
                            data-bs-toggle="modal"
                            data-bs-target="#galleryModal"
                            onclick="showImage('../assets/images/<?php echo $image; ?>')">

                            <img src="../assets/images/<?php echo $image; ?>"
                                class="gallery-img"
                                alt="Gallery Image">

                        </a>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>

<!-- Gallery Modal -->

<div class="modal fade" id="galleryModal" tabindex="-1">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    College Gallery
                </h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body text-center">

                <img id="modalImage"
                    src=""
                    class="img-fluid rounded">

            </div>

        </div>

    </div>

</div>

<script>
    function showImage(imagePath) {
        document.getElementById("modalImage").src = imagePath;
    }
</script>

<?php include '../includes/footer.php'; ?>