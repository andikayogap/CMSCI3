<div id="flash" data-flash="<?= $this->session->flashdata('alert') ?>"></div>

<!-- Vertically Centered Modal -->
<div class="col-lg-4 col-md-6">
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah Konten
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control" placeholder="Judul" name="judul" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Kategori</label>
                                    <select name="id_kategori" class="form-control">
                                        <?php foreach($kategori as $aa) { ?>
                                        <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <textarea name="keterangan" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Link Youtube</label>
                                    <input type="text" class="form-control" placeholder="Link Youtube" name="youtube"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Foto</label>
                                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
                                    Judul</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kategori Konten</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kreator</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Foto</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($konten as $aa) { ?>
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $no; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['judul'] ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['nama_kategori'] ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['tanggal'] ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['username'] ?></p>
                                </td>
                                <td>
                                    <a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
                                        <i class="fas fa-regular fa-camera"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/konten/delete_data/'.$aa['foto']); ?> " class="btn m-0" id="btn-hapus">
                                        <i class="far fa-trash-alt tm-product-delete-icon tm-product-delete-link"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn m-0" data-bs-toggle="modal"
                                        data-bs-target="#konten<?= $no; ?>">
                                        <i class="far fa-edit tm-product-delete-icon tm-product-delete-link"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <form action="<?= base_url('admin/konten/update') ?>" method="post"
                                                enctype='multipart/form-data'>
                                                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">
                                                            <?= $aa['judul'] ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Judul</label>
                                                                <input type="text" class="form-control" name="judul"
                                                                    value="<?= $aa['judul'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Kategori</label>
                                                                <select name="id_kategori" class="form-control">
                                                                    <?php foreach($kategori as $uu) { ?>
                                                                    <option
                                                                        <?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected";} ?>
                                                                        value="<?= $uu['id_kategori'] ?>">
                                                                        <?= $uu['nama_kategori'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Keterangan</label>
                                                                <textarea name="keterangan"
                                                                    class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Link Youtube</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Link Youtube" name="youtube" value="<?= $aa['youtube'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control"
                                                                    accept="image/png, image/jpeg">
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