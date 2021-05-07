<div class="container-fluid">
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <?= $this->session->flashdata('message') ?>
                    <button class="btn btn-sm btn-success float-right mt-0" onclick="add()"><i class="zmdi zmdi-hc-fw"></i></button>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Aksi</th>
                                    <th>No</th>
                                    <th>Kode Dept</th>
                                    <th>Nama Dept</th>
                                    <th>Alias</th>
                                    <th>Logo</th>
                                    <th>Is Created</th>
                                    <th>Is Active</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($dept as $d) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="row px-2">
                                                <button class="btn btn-sm btn-warning zmdi zmdi-edit" id="editdept" href="javascript:;" data-id="<?php echo $d['id_dept'] ?>" data-nama_dept="<?php echo $d['nama_dept'] ?>" data-kode_dept="<?php echo $d['kode_dept'] ?>" data-alias="<?php echo $d['alias'] ?>" data-deskripsi="<?php echo $d['deskripsi'] ?>" data-toggle="modal" data-target="#editModalDept"></button>
                                                <button class="btn btn-sm btn-danger zmdi zmdi-delete" onclick="deleteConfirm('<?= base_url('Dept/deleteDept/' . $d['id_dept']) ?>')" href="#!"></button>
                                            </div>
                                        </td>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d['kode_dept'] ?></td>
                                        <td><?= $d['nama_dept'] ?></td>
                                        <td><?= $d['alias'] ?></td>
                                        <td><?= $d['logo'] ?></td>
                                        <td><?= $d['is_created'] ?></td>
                                        <td><button class="badge badge-success">Aktif</button></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Departemen</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dept/addDept') ?>" enctype="multipart/form-data" method="POST">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Nama Departemen</label>
                            <div class="form-group">
                                <input type="text" name="namadept" class="form-control" placeholder="Nama Departemen" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Kode Departemen</label>
                            <div class="form-group">
                                <input type="text" name="kodedept" class="form-control" placeholder="Kode Departemen" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Alias</label>
                            <div class="form-group">
                                <input type="text" name="alias" class="form-control" placeholder="Alias" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Is Active</label>
                            <select name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Deskripsi</label>
                            <div class="form-group">
                                <textarea type="text" rows="2" id="deskripsi" name="deskripsi" class="form-control" placeholder="" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModalDept" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Departemen</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Dept/editDept') ?>" enctype="multipart/form-data" method="POST">
                    <div class="row clearfix">
                        <input type="hidden" id="id_dept" name="id_dept" class="form-control" />
                        <div class="col-sm-12">
                            <label for="">Nama Departemen</label>
                            <div class="form-group">
                                <input type="text" id="namadept" name="namadept" class="form-control" placeholder="Nama Departemen" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Kode Departemen</label>
                            <div class="form-group">
                                <input type="text" id="kodedept" name="kodedept" class="form-control" placeholder="Kode Departemen" required />
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mb-1">
                        <div class="col-sm-6">
                            <label for="">Alias</label>
                            <div class="form-group">
                                <input type="text" id="alias" name="alias" class="form-control" placeholder="Alias" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Is Active</label>
                            <select name="is_active" class="form-control" required>
                                <option value="1" selected>Y</option>
                                <option value="0">N</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <label for="">Deskripsi</label>
                            <div class="form-group">
                                <textarea type="text" rows="2" id="deskripsi" name="deskripsi" class="form-control" placeholder="" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row modal-footer">
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary btn-round waves-effect">SAVE CHANGES</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>


<script>
    function add() {
        $('#addModal').modal('show');
    }

    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }

    $(document).ready(function() {
        $(document).on('click', '#editdept', function() {

            var id_dept = $(this).data('id');
            var nama_dept = $(this).data('nama_dept');
            var kode_dept = $(this).data('kode_dept');
            var deskripsi = $(this).data('deskripsi');
            var alias = $(this).data('alias');
            var singkatan = $(this).data('singkatan');

            $('#id_dept').val(id_dept);
            $('#namadept').val(nama_dept);
            $('#kodedept').val(kode_dept);
            $('textarea#deskripsi').val(deskripsi);
            $('#alias').val(alias);
            $('#singkatan').val(singkatan);
        });
    });
</script>