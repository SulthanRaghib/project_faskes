 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-6">
                <h1><b>Data Komentar</b></h1>
             </div>
             <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active">Blank Page</li>
                </ol>
             </div>
          </div>
       </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <!-- Default box -->
       <div class="card card-primary card-outline">
          <div class="card-header">
             <h3 class="card-title"><b>List Komentar</b></h3>
          </div>

          <div class="card-body">
             <div class="row">
                <div class="form-group row ml-2">
                   <button name="submit" type="submit" class="btn btn-primary">
                      <i class="fa-solid fa-plus mr-2"></i><a href="#" class="text-white">Tambah Komentar</a>
                   </button>
                </div>
                <div class="col-12 table-responsive">
                   <table class="table table-hover table-bordered">
                      <thead class="thead-dark align-center">
                         <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Nama Faskes</th>
                            <th class="align-middle">Komentar</th>
                            <th class="align-middle">Rating</th>
                            <th class="align-middle">Username</th>
                            <th class="align-middle">Tanggal Komentar</th>
                            <th class="align-middle">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <?php $nomor = 1; ?>
                         <?php foreach ($dataKomentar as $k) : ?>
                            <tr>
                               <td class="align-middle"><?= $nomor++ ?></td>
                               <td class="align-middle"><?= $k->nama ?></td>
                               <td class="align-middle"><?= $k->isi ?></td>
                               <td class="align-middle"><?= $k->nama_rating ?></td>
                               <td class="align-middle"><?= $k->username ?></td>
                               <td class="align-middle"><?= $k->tanggal ?></td>
                               <td class="align-middle">
                                  <a href="<?= base_url('Master/detail?id=') . $k->id ?>" class="pr-2 text-info">
                                     <i class="fa-solid fa-eye pr-1 text-info"></i>View
                                  </a>
                                  <a href="<?= base_url('Master/edit?id=') . $k->id ?>" class="pr-2 text-success">
                                     <i class="fa-solid fa-file-pen pr-1 text-success"></i>Edit
                                  </a>
                                  <a href="<?= base_url('Master/delete?id=') . $k->id ?>" class="pr-2 text-danger" onclick="if(!confirm('Anda Yakin Menghapus Data Komentar yang diberikan oleh User bernama, <?= $k->username ?> ini ?')) {return false}">
                                     <i class="fa-solid fa-trash pr-1 text-danger"></i>Delete
                                  </a>
                               </td>
                            </tr>
                         <?php endforeach ?>
                      </tbody>
                   </table>
                </div>
             </div>
             <!-- /.card-body -->
          </div>
          <!-- /.card -->

    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->