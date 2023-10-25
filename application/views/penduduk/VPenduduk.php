<!-- tambah modal -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- tambah Modal -->
<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addDataLabel">Tambah data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form action="<?php echo site_Url('Welcome/pendudukInsert') ?>" method="POST">
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="">
                    </div>
                    <div class="mb-3">
                      <label for="status1" class="form-label">Status 1</label>
                      <select name="status1" id="status1" class="form-select">
                        <option value="" selected disabled>apakah menikah?</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Janda">Janda</option>
                        <option value="Duda">Duda</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="status2" class="form-label">Status 2</label>
                      <select name="status2" id="status2" class="form-select">
                        <option value="" selected disabled>kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="status3" class="form-label">Status 3</label>
                      <select name="status3" id="status3" class="form-select">
                        <option value="" selected disabled>posisi keluarga</option>
                        <option value="Kepala Keluarga">Kepala Keluarga</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Saudara">Saudara</option>
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="kd_blok" class="form-label">Kode blok</label>
                        <select name="kd_blok" id="kd_blok" class="form-select">
                            <option value="" selected disabled>blok</option>
                            <?php foreach ($Select as $item) : ?>
                                <option value="<?= $item->kd_blok; ?>"><?= $item->nama_blok; ?></option>		
                            <?php endforeach ?>
                        </select>
                    </div>
                
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
        </div>
    </div>
</div>
<!-- end tambah modal -->




<!-- data -->
<div class="card">
    <div class="card-header">
      <h5>Form Data penduduk</h5>
    </div>
    <div class="card-body">
        <!-- tombol tambah -->
        <a href="" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addData">Tambah</a>
        <!-- tombol tambah end -->
        
        <!-- table data -->
        <table class="table table-bordered table-hover">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">tgl. lahir</th>
                    <th scope="col">Status 1</th>
                    <th scope="col">Status 2</th>
                    <th scope="col">Status 3</th>
                    <th scope="col">kd blok</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($DataPenduduk))
            {
                foreach($DataPenduduk as $ReadDS)
                {
            ?>
                <tr>
                    <td><?php echo $ReadDS->kd_penduduk; ?></td>
                    <td><?php echo $ReadDS->nik; ?></td>
                    <td><?php echo $ReadDS->nama; ?></td>
                    <td><?php echo $ReadDS->tempat_lahir; ?></td>
                    <td><?php echo $ReadDS->tgl_lahir; ?></td>
                    <td><?php echo $ReadDS->status1; ?></td>
                    <td><?php echo $ReadDS->status2; ?></td>
                    <td><?php echo $ReadDS->status3; ?></td>
                    <td><?php echo $ReadDS->kd_blok; ?></td>
                    <td>
                        <!-- tools -->
                        <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#editdata">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('Welcome/pendudukDelete/'.$ReadDS->kd_penduduk); ?>" onclick="return confirm('are yous sure?')">Delete</a>

                        <!-- update Modal -->
                        <div class="modal fade" id="editdata" tabindex="-1" aria-labelledby="editdataLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editdataLabel">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- form -->
                                        <form  action="<?php echo site_Url('Welcome/pendudukUpdate') ?>" method="POST">
                                            <div class="mb-3">
                                                <label for="kd_penduduk" class="form-label">Kode penduduk</label>
                                                <input type="text" class="form-control" name="kd_penduduk" id="kd_penduduk" value="<?php echo $ReadDS->kd_penduduk; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" value="<?php echo $ReadDS->nik; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $ReadDS->nama; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="<?php echo $ReadDS->tempat_lahir; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tgl_lahir" class="form-label">Tanggal lahir</label>
                                                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?php echo $ReadDS->tgl_lahir; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="status1" class="form-label">Status 1</label>
                                                <select name="status1" id="status1" class="form-select">
                                                    <option value="" selected disabled>apakah menikah?</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Janda">Janda</option>
                                                    <option value="Duda">Duda</option>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="status2" class="form-label">Status 2</label>
                                                <select name="status2" id="status2" class="form-select">
                                                    <option value="" selected disabled>kelamin</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="status3" class="form-label">Status 3</label>
                                                <select name="status3" id="status3" class="form-select">
                                                    <option value="" selected disabled>posisi keluarga</option>
                                                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Orang Tua">Orang Tua</option>
                                                    <option value="Saudara">Saudara</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kd_blok" class="form-label">Kode blok</label>
                                                <select name="kd_blok" id="kd_blok" class="form-select">
                                                    <option value="" selected disabled>blok</option>
                                                    <?php foreach ($Select as $item) : ?>
                                                        <option value="<?= $item->kd_blok; ?>"><?= $item->nama_blok; ?></option>		
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- update modal end -->
                    </td>
                </tr>
            <?php		
                }
            } else {
            ?>
            <td colspan="10">Tidak ada data</td>
            <?php } ?>
            </tbody>
        </table>
        <!-- table data end -->
        
    </div>
</div>