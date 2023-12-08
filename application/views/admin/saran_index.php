<h2 class="mb-4">Halaman Saran</h2>
<div id="flash" data-flash="<?= $this->session->flashdata('alert') ?>"></div>
<div class="row d-flex">
    <?php foreach($saran as $s){ ?>
    <div class="card mx-3 mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title mb-3"><?= $s['nama'] ?></h5>
            <p class="card-subtitle mb-2 text-body-secondary"><?= $s['email'] ?></p><hr>
            <p class="card-text"><?= $s['keterangan'] ?></p>
            <a href="<?= base_url('admin/saran/delete/' . $s['id']) ?>" class="btn m-0" id="btn-hapus">
                <i class="far fa-trash-alt tm-product-delete-icon tm-product-delete-link"></i>
            </a>
        </div>
    </div>
    <?php } ?>
</div>