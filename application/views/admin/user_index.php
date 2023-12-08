<div id="flash" data-flash="<?= $this->session->flashdata('alert') ?>"></div>

<!-- Vertically Centered Modal -->
<div class="col-lg-4 col-md-6">
    <div class="mt-3">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah User
        </button>
        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-lg" role="document">
                <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="username"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Level</label>
                                    <select name="level" class="form-control">
                                        <option value="Admin">Admin</option>
                                        <option value="Kontributor">Kontributor</option>
                                    </select>
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
                <h6>Data Pengguna</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Username</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Level</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($user as $aa) { ?>
                            <tr>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $no; ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['username'] ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['nama'] ?></p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0"><?= $aa['level'] ?></p>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/user/delete_data/'.$aa['id_user']); ?>" id="btn-hapus">
                                        <i
                                            class="far fa-trash-alt btn tm-product-delete-icon tm-product-delete-link"></i>
                                    </a>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                                        <i
                                            class="far fa-edit btn tm-product-delete-icon tm-product-delete-link"></i>
                                    </a>
                                    <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <form action="<?= base_url('admin/user/update') ?>" method="post">
                                                <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Perbarui Nama User
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" class="form-control"
                                                                    value="<?= $aa['nama'] ?>" name="nama">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <label class="form-label">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        value="<?= $aa['username'] ?>" name="username"
                                                                        readonly>
                                                                </div>
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