<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Master Data</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $this->uri->segment(1) ?></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo $this->uri->segment(2) ?></li>
        </ol>
    </div>
    <div class="row">
      <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Dokter</h6>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('Dokter/update') ?>" method="POST">
                    <input type="hidden" name="dokter_id" value="<?php echo $data->dokter_id ?>">
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-3 col-form-label">Nama Dokter</label>
                      <div class="col-sm-9">
                        <input value="<?php echo $data->nama_dokter ?>" required name="nama_dokter" type="text" class="form-control" id="inputtext3" placeholder="Kyle Janner">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input value="<?php echo $data->email ?>" required name="email" type="email" class="form-control" id="inputtext3" placeholder="dokter@mail.com">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDeskripsi3" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input value="<?php echo $data->password ?>" required name="password" type="password" class="form-control" id="inputtext3" placeholder="********">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDeskripsi3" class="col-sm-3 col-form-label">Alamat</label>
                      <div class="col-sm-9">
                        <input value="<?php echo $data->alamat ?>" required name="alamat" type="text" class="form-control" id="inputtext3" placeholder="52 Kelly Drive">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDeskripsi3" class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input value="<?php echo $data->phone ?>" required name="phone" type="text" class="form-control" id="inputtext3" placeholder="4589998888">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDeskripsi3" class="col-sm-3 col-form-label">Departemen</label>
                      <div class="col-sm-9">
                        <select name="departemen_id" class="form-control" id="">
                            <option value="">Pilih Departemen</option>
                            <?php foreach ($departemen as $key => $value) { ?>
                                <option value="<?php echo $value->departemen_id ?>"<?php if($data->departemen_id == $value->departemen_id) : ?> selected  <?php endif; ?>><?php echo $value->nama_departemen ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div><hr>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>