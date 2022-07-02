<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header text-white bg-primary"><strong>Add Product</strong></div>
        <div class="card-body">

            <form action="<?php echo site_url('product/upload') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="Nama Produk" name="nm_produk" class="form-control" placeholder="Product Name" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="Deskripsi" name="Deskripsi" class="form-control" placeholder="Description" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" id="harga" name="harga" class="form-control" placeholder="Price" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-label-group">
                            <input name="foto" type="file" placeholder="Picture" required>

                        </div>
                    </div>

                    <a class="btn btn-primary btn-block">
                        <input type="submit" value="Save">
                        <input type="reset" value="Cancel"></a>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="<?php echo site_url('product/list_product') ?>">
                    View Product</a>
            </div>
        </div>
    </div>
</div>