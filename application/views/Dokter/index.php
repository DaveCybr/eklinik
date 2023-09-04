<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Master Data</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url('Home') ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->uri->segment(1) ?></li>
      </ol>
    </div>
    <?php echo $this->Core->massage(); ?>
    <!-- Row -->
    <div class="row">
      <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Dokter</h6>
                    <a href="<?php echo base_url('Dokter/add') ?>" class="btn btn-success">Tambah</a>
                </div>
                <div class="table-responsive table-hover p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                        <thead class="thead-light">
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Departemen</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Phone</th>
                            <th class="aksi">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($data as $key => $value) {
                          ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $value->nama_dokter ?></td>
                              <td><?php echo $value->nama_departemen ?></td>
                              <td><?php echo $value->email ?></td>
                              <td><?php echo $value->alamat ?></td>
                              <td><?php echo $value->phone ?></td>
                              <td class="aksi">
                                <a href="<?php echo base_url('Dokter/edit/' . $value->dokter_id) ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo base_url('Dokter/delete/' . $value->dokter_id) ?>" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>