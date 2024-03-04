<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tables Produk</h6>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">ProdukID</th>
                        <th class="text-center">Nama Produk</th>
                        <th class="text-center">Harga Produk</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
              
                <tbody>
					<?php foreach($produk as $prdk):
						?>
                        <td class="text-center"><?= $prdk['ProdukID']?></td>
                        <td class="text-center"><?=$prdk['NamaProduk']?></td>
                        <td class="text-center"><?=$prdk['Harga']?></td>
                        <td class="text-center"><?=$prdk['Stok']?></td>
						<td class="text-center">
						<button type="button" data-bs-toggle="modal" data-bs-target="#getEditproduk<?= $prdk['ProdukID'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>

						<!-- Modal Edit-->
<div class="modal fade" id="getEditproduk<?= $prdk['ProdukID'] ?>" tabindex="-1" aria-labelledby="getEditproduk<?= $prdk['ProdukID'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="getEditproduk<?= $prdk['ProdukID'] ?>">Edit Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url() ?>dashboard/edit_produk/<?= $prdk['ProdukID'] ?>" method="post">
	  						<form class="user">    
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="<?= $prdk['NamaProduk']?>">
                                </div>
								<?= form_error('nama_produk'); ?>   
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="harga_produk" name="harga_produk" placeholder="Harga Produk" value="<?= $prdk['Harga']?>">
                                </div>
								<?= form_error('harga_produk'); ?>   
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Stok" value="<?= $prdk['Stok']?>">
                                </div>
								<?= form_error('stok'); ?>   
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"> 
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>   
								<div class="modal-footer">
								  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								  <button type="submit" class="btn btn-primary">Edit</button>
								</div>
                            </form>
      </div>
    </div>
  </div>
</div>
							<a href="<?= base_url()?>dashboard/hapusProduk/<?= $prdk['ProdukID'] ?>" onclick="return confirm('apakah anda yakin?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
							<!-- <a href="" class="btn btn-suscces btn-sm"><i class="fas fa-plus"></i></a> -->
						</td>
                    </tr>
					<?php endforeach ;?>
                </tbody>
				<div class="row">
					<div class="col-md-12">
							<!-- Button trigger modal -->
				<button type="button" data-bs-toggle="modal" data-bs-target="#getTambahproduk" class="btn btn-primary btn-lg mb-4 btn btn-success">Add Produk</button>

<!-- Modal Tambah-->
<div class="modal fade" id="getTambahproduk" tabindex="-1" aria-labelledby="getTambahproduk" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="getTambahproduk">Add Produk</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('dashboard/tambah_produk') ?>" method="post">
	  						<form class="user">    
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                                </div>
								<?= form_error('nama_produk'); ?>   
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="harga_produk" name="harga_produk" placeholder="Harga Produk">
                                </div>
								<?= form_error('harga_produk'); ?>   
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Stok">
                                </div>
								<?= form_error('stok'); ?>   
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"> 
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
																	Tambah
																</button>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																</div>
                              
                              
				</form>
													</div>
    </div>
  </div>
</div>	

					</div>
				</div>
            </table>
        </div> 
    </div>
</div>	

