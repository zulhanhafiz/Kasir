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
							<a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
							<!-- <a href="" class="btn btn-suscces btn-sm"><i class="fas fa-plus"></i></a> -->
						</td>
                    </tr>
					<?php endforeach ;?>
                </tbody>
				<div class="row">
					<div class="col-md-12">

					</div>
				</div>
            </table>
        </div> 
    </div>
</div>

