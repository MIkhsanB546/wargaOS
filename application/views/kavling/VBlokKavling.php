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
                <form action="<?php echo site_Url('Welcome/blokKavlingInsert') ?>" method="POST">
                    <div class="mb-3">
                        <label for="nama_blok" class="form-label">Nama blok</label>
                        <input type="text" class="form-control" name="nama_blok" id="nama_blok" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="no_blok" class="form-label">No blok</label>
                        <input type="text" class="form-control" name="no_blok" id="no_blok" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="">
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
      <h5>Form Data Kavling</h5>
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
                    <th scope="col">Nama blok</th>
                    <th scope="col">No</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($DataKavling))
            {
                foreach($DataKavling as $ReadDS)
                {
            ?>
                <tr>
                    <td><?php echo $ReadDS->kd_blok; ?></td>
                    <td><?php echo $ReadDS->nama_blok; ?></td>
                    <td><?php echo $ReadDS->no_blok; ?></td>
                    <td><?php echo $ReadDS->lokasi; ?></td>
                    <td>
                        <!-- tools -->
                        <a class="btn btn-warning" href="" data-bs-toggle="modal" data-bs-target="#editdata">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('Welcome/blokKavlingDelete/'.$ReadDS->kd_blok); ?>" onclick="return confirm('are yous sure?')">Delete</a>

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
                                        <form  action="<?php echo site_Url('Welcome/blokKavlingUpdate') ?>" method="POST">
                                        <div class="mb-3">
                                            <label for="kd_blok" class="form-label">Kode blok</label>
                                            <input type="text" class="form-control" name="kd_blok" id="kd_blok" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama_blok" class="form-label">Nama blok</label>
                                            <input type="text" class="form-control" name="nama_blok" id="nama_blok" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_blok" class="form-label">No blok</label>
                                            <input type="text" class="form-control" name="no_blok" id="no_blok" placeholder="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lokasi" class="form-label">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="">
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
            <td colspan="5">Tidak ada data</td>
            <?php } ?>
            </tbody>
        </table>
        <!-- table data end -->
        
    </div>
</div>