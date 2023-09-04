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
                  <h6 class="m-0 font-weight-bold text-primary">Edit Departemen</h6>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('Departemen/update') ?>" method="POST">
                    <input type="hidden" name="departemen_id" value="<?= @$data->departemen_id ?>">
                    <div class="form-group row">
                      <label for="inputtext3" class="col-sm-3 col-form-label">Nama Departemen</label>
                      <div class="col-sm-9">
                        <input name="nama_departemen" type="text" class="form-control" value="<?= @$data->nama_departemen ?>" id="inputtext3" placeholder="Dermatologists">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputDeskripsi3" class="col-sm-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-9">
                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="5" value="" placeholder="Dermatologists focus on diseases and conditions of the skin, nails, and hair. They treat conditions such as eczema, skin cancer, acne, and psoriasis."><?= @$data->deskripsi ?></textarea>
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