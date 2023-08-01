<div class="page">
    <div class="page-title blue">
        <h3>
            <?php echo $breadcrumb; ?>
        </h3>
       
    </div>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel rounded-0">
                    <div class="panel-heading rounded-0">
                        <h3 class="panel-title">Selamat datang di Panel Administrator</h3>
                    </div>
                    <div class="panel-body container-fluid">
                        <div class="blockquote gray">
                            <h3>Welcome,&nbsp;
                                <?php echo $admin->admin_nama; ?>!
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>
                                    <?php echo $jml_data_transaksi_masuk ?>
                                </h3>
                                <p>Stok Bahan Makanan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/masuk" class="small-box-footer">
                            Lihat Stok Bahan Makanan
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>
                                    <?php echo $jml_data_transaksi_keluar ?>
                                </h3>
                                <p>Penjualan</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-archive"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/keluar" class="small-box-footer">
                            Lihat Penjualan

                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    <?php $query = $this->db->query('SELECT * FROM supplier'); echo $query->num_rows();?>
                                </h3>
                                <p>Supplier</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-th-large"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/supplier" class="small-box-footer">
                            Lihat info Supplier
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>
                                    <?php $query = $this->db->query('SELECT * FROM customer'); echo $query->num_rows();?>
                                </h3>
                                <p>Customer</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="<?php echo site_url();?>website/customer" class="small-box-footer">
                            Lihat info Customer
                                <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h4><b>Stok Bahan Makanan Rendah:</b></h4>
                <hr>
                <div class="list-group rounded-0" id="notif-list">
                    <?php foreach($notif as $row): ?>
                        <div class="list-group-item list-group-item-action bg-danger rounded-0 border border-light"><?= $row['nama_barang'] ?> has only <b><?= $row['qty'] ?></b> Stock Left.</div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>