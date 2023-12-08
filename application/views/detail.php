<div id="flash" data-flash="<?= $this->session->flashdata('alert') ?>"></div>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="<?= base_url('assets/furni/'); ?>favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="<?= base_url('assets/furni/'); ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/furni/'); ?>css/tiny-slider.css" rel="stylesheet">
	<link href="<?= base_url('assets/furni/'); ?>css/style.css" rel="stylesheet">
	<title><?= $judul; ?></title>
    <!-- tutup furni -->
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><?= $konfig->judul_website; ?><span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
				aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<?php foreach ($kategori as $kate): ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
							<?= $kate['nama_kategori'] ?>
						</a>
					</li>
					<?php endforeach; ?>
				</ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-4">
                    <a href="<?= base_url('auth') ?>">
                        <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i>
                    </a>
                </ul>
			</div>
		</div>
	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="intro-center">
						<h1>Artikel</h1>
						<p>Selamat datang di ruang eksklusif ini, tempat yang menyimpan kekayaan isi dari materi
							pembelajaran yang unik dan berharga. Di sini, kita memasuki dunia pengetahuan yang
							melibatkan setiap aspek pembelajaran dengan mendalam.
							Halaman ini dirancang khusus untuk menawarkan pengalaman pembelajaran yang lebih dalam dan
							menarik tentang materi <?= $konten->judul; ?>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="img-wrap d-flex justify-content-center">
						<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="Image" class="img-fluid col-lg-8 h-50">
					</div>
                    <div class="text-center">
                        <h2 class="section-title my-4"><b><?= $konten->judul; ?></b></h2>
                    </div>
					<hr>
					<p><?= $konten->keterangan; ?></p>
                    <div class="col-auto mt-5">
                        <a href="<?= $konten->youtube ?>" class="btn btn-primary" target="_blank"><span
                                class="fa fa-brands fa-youtube">
                                youtube</span></a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section -->

	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">
			<div class="row g-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap">
						<a style="text-green;font-size: 50px;" href="#"
							class="footer-logo"><?= $konfig->judul_website; ?><span>.</span></a>
					</div>
					<p><?= $konfig->profil_website; ?></p>
					<ul class="list-unstyled custom-social">
						<li><a href="<?= $konfig->facebook; ?>"><span class="fa fa-brands fa-facebook-f"></span></a>
						</li>
						<li><a href="<?= $konfig->instagram; ?>"><span class="fa fa-brands fa-instagram"></span></a>
						</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<div class="pl-3">
								<h5 class="footer-logo">Alamat</h5>
								<p><?= $konfig->alamat; ?></p>
							</div>
							<div class="pl-3">
								<h5 class="footer-logo">Email</h5>
								<p><?= $konfig->email; ?></p>
							</div>
							<div class="pl-3">
								<h5 class="footer-logo">Phone</h5>
								<p><?= $konfig->no_wa; ?></p>
							</div>
						</div>
						<div class="col-6 col-sm-6 col-md-3">
							<div class="d-flex flex-column justify-content-start">
								<a class="text-green mb-2" href="<?= base_url() ?>"><i class=""></i>Home</a>
								<?php foreach ($kategori as $kate): ?>
								<a class="text-green mb-2"
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<i class=""></i><?= $kate['nama_kategori'] ?>
								</a>
								<?php endforeach; ?>
							</div>
						</div>
                        <div class="col-6 col-sm-6 col-md-3">
						<p class="mr-4">
							<i class="fa fa-user"></i> <?= $konten->nama; ?>
						</p>
						<p class="mr-4">
							<i class="fa fa-folder"></i> <?= $konten->nama_kategori; ?>
						</p>
					</div>
					</div>
				</div>
			</div>
			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">
							Copyright &copy;<script>
								document.write(new Date().getFullYear());

							</script>.
							All Rights Reserved. &mdash; Designed with love by <a
								href="#"><?= $konfig->judul_website; ?></a>
							<!-- License information: https://untree.co/license/ -->
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<!-- Back to Top -->
	<a href="#" class="btn btn-primary p-3 back-to-top"
		style="position: fixed; bottom: 0; right: 0; margin: 30px ;box-shadow:0px 0px 100px black;">
		<i class="fa fa-angle-double-up"></i>
	</a>

	<script src="<?= base_url('assets/furni/'); ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/furni/'); ?>js/tiny-slider.js"></script>
	<script src="<?= base_url('assets/furni/'); ?>js/custom.js"></script>
</body>

</html>
