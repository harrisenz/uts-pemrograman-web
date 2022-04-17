<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<div class="container">
    <div class="row">

        <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
            <div class="about-text">
                <small class="small-text">Welcome to <span class="mobile-block">website portfolio Haris Ristu Sendang!</span></small>
                <h1 class="animated animated-text">
                    <span class="mr-2">Hey dunia, aku</span>
                    <div class="animated-info">
                        <span class="animated-item">Haris Ristu</span>
                        <span class="animated-item">Web Designer</span>
                        <span class="animated-item">UI Specialist</span>
                    </div>
                </h1>

                <p>portfolio ini di buat untuk memenuhi tugas UTS</p>

                <div class="custom-btn-group mt-4">
                    <a href=”/img/Capture.png” class="btn mr-lg-2 custom-btn" <i class='uil uil-file-alt' download></i> Download Resume</a>
                    <a <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">dapatkan penawaran gratis</a>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-12">
            <div class="about-image svg">
                <img src="/template/images/undraw/20220402_222152.png" class="img-fluid" alt="haris image">
            </div>
        </div>

    </div>
</div>
</section>

<center>
    <H1>About me</H1>
    <?php foreach ($am as $row) : ?>
        <center>
            <p><?= $row['am_detail'] ?></p>
        </center>
    <?php endforeach; ?>
</center>
<!-- hobi -->
<section class="hobi py-5" id="hobi">
    <div class="container">

        <div class="row">
            <div class="col-lg-11 text-center mx-auto col-12">

                <div class="col-lg-8 mx-auto">
                    <h2>HOBI</h2>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="hobi-info my-3">
                            <img src="/template/images/project/anime (1).png" class="img-fluid" alt="hobi image">
                            <div class="card-body">
                                <h4 class="card-title">NONTON ANIME</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="hobi-info">
                            <img src="/template/images/project/riding.png" class="img-fluid" alt="hobi image">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">RIDING</h4>
                        </div>
                    </div>

                    <div class="item">
                        <div class="hobi-info">
                            <img src="/template/images/project/basket.png" class="img-fluid" alt="hobi image">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">OLAHRAGA</h4>
                        </div>
                    </div>

                    <div class="item">
                        <div class="hobi-info">
                            <img src="/template/images/project/gaming.png" class="img-fluid" alt="hobi image">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">MAIN GAME</h4>
                        </div>
                    </div>

                    <div class="item">
                        <div class="hobi-info">
                            <img src="/template/images/project/liburan.png" class="img-fluid" alt="hobi image">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">LIBURAN</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
    <div class="container">
        <div class="row">

            <div class="timeline">
                <!-- skill -->
                <center>
                    <div class="timeline-info">
                        <h2>Skill</h2> <br><br>
                        <?php foreach ($skill as $row) : ?>
                            <center>
                                <h3><?= $row['skill_name'] ?></h3>
                            </center>
                            <center>
                                <p><?= $row['skill_detail'] ?></p>
                            </center>
                        <?php endforeach; ?>
                    </div>
                </center>
            </div>

            <div class="timeline">
                <!-- pendidikan -->
                <center>
                    <div class="timeline-info">
                        <h2>PENDIDIKAN</h2> <br><br>
                        <?php foreach ($edu as $row) : ?>
                            <center>
                                <h3><?= $row['edu_name'] ?></h3>
                            </center>
                            <center>
                                <p><?= $row['edu_detail'] ?></p>
                            </center>
                        <?php endforeach; ?>
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="contact py-5" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mr-lg-5 col-12">
                <div class="google-map w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507423.5037172394!2d106.46013985377385!3d-6.490487699896803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683633fcd15215%3A0x261f558445241e0c!2sUniversitas%20Muhammadiyah%20Sukabumi!5e0!3m2!1sen!2sid!4v1648903845764!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                    <div class="contact-info-item">
                        <h3 class="mb-3 text-white">katakan peta</h3>
                        <p class="footer-text mb-0">010 020 0960</p>
                        <p><a href="mailto:hello@company.co">harrisenz50@gmail.com</a></p>
                    </div>
                    <ul class="social-links">
                        <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                        <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                        <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <h2 class="mb-4">Tertarik untuk bekerja sama? Let's talk</h2>
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                            </div>
                            <div class="col-lg-6 col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                            </div>
                            <div class="col-12">
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="ml-lg-auto col-lg-5 col-12">
                                <input type="submit" class="form-control submit-btn" value="Send Button">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>