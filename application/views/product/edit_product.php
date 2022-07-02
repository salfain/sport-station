<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-white bg-primary"><strong>Product Edit</strong></div>
        <div class="card-body">
            <?php foreach ($produk as $u) { ?>
                <form action="<?php echo    site_url('product/update') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="" name="id" value="<?php echo $u->id_produk ?>">
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="Product Name">Product Name</label>
                            <input type="text" id="Nama Produk" name="nm_produk" value="<?php echo $u->nama_produk ?> " class="form-control" placeholder="Product Name" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="Description">Description</label>
                            <input type="text" id="Deskripsi" name="Deskripsi" value="<?php echo $u->deskripsi ?> " class="form-control" placeholder="Description" required>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="Price">Price</label>
                            <input type="text" id="Harga" name="harga" value="<?php echo $u->harga ?>" class="form-control" placeholder="Price" required>

                        </div>
                    </div>
                    <div>"<img src='<?= base_url() ?>assets/foto_kue/<?= $u->gambar; ?>' height="100" width="100" "</div></div>
<div class=" form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input name="foto" type="file" placeholder="Foto" required>
                                    <label for="foto">If the photo is not changed, just leave it blank</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-block"><input type="submit" value="Edit"><input type="reset" value="Batal"></a>
                </form>
            <?php } ?>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo site_url('product/list_product') ?>">View Product</a>
            </div>
        </div>
    </div>
</div>