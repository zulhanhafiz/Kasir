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
                        <th>UserID</th>
						<th>Action</th>
                       
                        
                    </tr>
                </thead>
                
              
				<tbody>
					<?php foreach($petugas as $ptgs):
						?>
                        <td class="text-center"><?= $ptgs['ID']?></td>
                        <td class="text-center"><?=$ptgs['Nama']?></td>
                        <td class="text-center"><?=$ptgs['UserID']?></td>
                
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
					<a href="" class="btn btn-success"><i class="fa fa-plus"></i>  Tambah</a>

					</div>
				</div>
