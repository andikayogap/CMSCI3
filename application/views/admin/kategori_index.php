<div id="flash" data-flash="<?= $this->session->flashdata('alert') ?>"></div>


<!-- Vertically Centered Modal -->
<div class="col-lg-4 col-md-6">
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Kategori
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true" >
            <div class="modal-dialog modal-dialog" role="document">
                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Kategori Konten</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Kategori Konten</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($kategori as $aa) { ?>
                            <tr>
                                <td>
                                <p class="text-xs font-weight-bold mb-0"><?= $no; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['nama_kategori'] ?></p>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?> " class="btn m-0" id="btn-hapus">
                                        <i class="far fa-trash-alt tm-product-delete-icon tm-product-delete-link"></i>
                                    </a>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori'] ?>" class="btn m-0">
                                        <i class="far fa-edit tm-product-delete-icon tm-product-delete-link"></i>
                                    </a>
                                    <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog" role="document">
                                            <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                                <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Nama Kategori Konten</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?= $aa['nama_kategori'] ?>" name="nama_kategori">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>