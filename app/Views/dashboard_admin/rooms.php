<?php if(in_groups('admin')) : ?>
<?php $this->extend('layouts/template') ?>
<?php $this->section('container') ?>
        <?php include APPPATH . 'Views/layouts/navbaradmin.php'; ?>
        <div class="p-1 my-container active-cont">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom"
            >
                <h1 class="h2 p-3"><?= $title; ?></h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button
                            type="button"
                            class="btn btn-sm btn-outline-secondary"
                            >
                            Export
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
    <div
        id="w0-container"
        class="table-responsive kv-grid-container"
    >
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total Lab</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body border-dark">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total Ruang Kelas</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total Kapasitas Ruangan Terbesar</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total Kapasitas Ruangan Terkecil</p>
                        </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary mb-3 ml-4">
            <i class='bx bx-plus-medical'></i> Tambah Ruangan
        </button>
        <table
            class="table text-nowrap table-striped table-bordered mb-0 kv-grid-table kv-table-wrap"
        >
            <thead>
                <tr>
                    <th style="width: 5.95%">NO</th>
                    <th style="width: 6%">ID Ruangan</th>
                    <th data-col-seq="1" style="width: 15.11%">
                        Nama Ruangan
                    </th>
                    <th data-col-seq="2" style="width: 10.46%">
                        Gedung
                    </th>
                    <th data-col-seq="3" style="width: 10.46%">
                        Lantai
                    </th>
                    <th data-col-seq="4" style="width: 11.13%">
                        Kondisi Ruangan
                    </th>
                    <th data-col-seq="2" style="width: 10.46%">
                        Kapasitas
                    </th>
                    <th data-col-seq="6" style="width: 11%">
                        Action
                    </th>
                </tr>

                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="no"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="id_ruangan"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="nm_ruangan"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="gedung"
                    />
                </td>
                <td>
                    <input 
                        type="text"
                        class="form-control"
                        name="lantai"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="kondisi"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="kapasitas"
                    />
                </td>
            </thead>

            <tbody>
                <tr class="w0" data-key="260481">
                    <td>1</td>
                    <td>LBAIA4</td>
                    <td class="w0" data-col-seq="1">
                        Lab AI 
                    </td>
                    <td class="w0" data-col-seq="2">
                        Agape
                    </td>
                    <td class="w0" data-col-seq="3">Lantai 4</td>
                    <td class="w0" data-col-seq="3" style="white-space: pre-line;">Normal</td>
                    <td class="w0" data-col-seq="3">30 Orang</td>
                    <td>
                        <button
                            type="button"
                            class="btn btn-warning"
                        >
                            <i class='bx bxs-comment-edit'></i>
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger"
                            onclick="(function(){
                                swal({
                                    title: 'Yakin Ingin Menghapus Data',
                                    icon: 'warning',
                                    buttons: true,
                                    dangerMode: true,
                                    })
                                    .then((willDelete) => {
                                    if (willDelete) {
                                        swal('Poof! Your imaginary file has been deleted!', {
                                        icon: 'success',
                                    });
                                    } else {
                                        swal('Data Batal Dihapus');
                                    }
                                });
                            })();return false;"
                        >
                            <i class='bx bxs-trash'></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $this->endSection() ?>
<?php endif; ?>