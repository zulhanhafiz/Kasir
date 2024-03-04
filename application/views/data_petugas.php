<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tables Petugas</h6>
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama </th>
                        <th>Action</th>    
                    </tr>
                </thead>
				<tbody>
					<?php foreach($role as $rl):
						?>
                        <td class="text-center"><?= $rl['ID']?></td>
                        <td class="text-center"><?=$rl['Nama']?></td>
                        <td class="text-center"><?=$rl['UserID']?></td>
                        
						<td class="text-center">
						<button type="button" data-bs-toggle="modal" data-bs-target="#getEditpetugas<?= $rl['ID'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
<!-- Modal Edit-->
<div class="modal fade" id="getEditpetugas<?= $rl['ID'] ?>" tabindex="-1" aria-labelledby="getEditpetugas<?= $rl['ID'] ?>" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title" id="getEditpetugas<?= $rl['ID'] ?>">Edit Produk</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="<?= base_url() ?>dashboard/editPetugas/<?= $rl['ID'] ?>" method="post">
	  <form class="user">    
		<div class="form-group">
			<input type="text" class="form-control form-control-user" id="nama_petugas" name="nama_petugas" placeholder="Nama Petugas" value="<?= $rl['Nama']?>">
		</div>
		<?= form_error('nama_petugas'); ?>   
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
							<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
							<!-- <a href="" class="btn btn-suscces btn-sm"><i class="fas fa-plus"></i></a> -->
						</td>
                    </tr>
					<?php endforeach ;?>
                </tbody>
				<div class="row">
					<div class="col-md-12">
					<!-- Button trigger modal -->
				<button type="button" data-bs-toggle="modal" data-bs-target="#getTambahpetugas" class="btn btn-primary btn-lg mb-4 btn btn-success">Add Petugas</button>

<!-- Modal Tambah-->
<div class="modal fade" id="getTambahpetugas" tabindex="-1" aria-labelledby="getTambahpetugas" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="getTambahpetugas">Add Petugas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('dashboard/tambahpetugas') ?>" method="post">
	  						<form class="user">    
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_petugas" name="nama_petugas" placeholder="Nama petugas">
                                </div>
								<?= form_error('nama_petugas'); ?>   
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"> 
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Tambah</button>                                                           
                            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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



