<!-- DataTables Example -->
<div class="container-fluid">
    <div class="card-header">
        <i class="fas fa-table"></i>
        All Product
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($produk as $u) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $u->nama_produk ?></td>
                            <td><?php echo $u->deskripsi ?></td>
                            <td><?php echo $u->harga ?></td>
                            <td><img src='<?= base_url() ?>assets/foto_kue/<?= $u->gambar; ?>' width="100" height="100"></td>
                            <td><a href="<?= base_url(); ?><?= $u->id_produk ?>" class="badge badge-success">+ Add to cart</a></td>

                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<!-- Sticky Footer -->