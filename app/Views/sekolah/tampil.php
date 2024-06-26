<?php
echo view('header');
?>


      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Data Sekolah</h5>
              <div class="col d-flex align-items-stretch">
          <div class="card mb-0">
            <div class="card-body p-4">
                <?php
                  if(!empty($msg)){
                    echo $msg;
                  } 
                  ?>
                  <div class="mb-3">
                    <?php echo anchor('tambahsekolah','<i class="ti ti-plus"></i>',['class'=>'btn btn-primary']); ?>
              </div>
              <div class="table-responsive"style="height:299px;">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                  <tr>
                    <th>No</th>
                    <th>Kecamatan</th>
                    <th>NPSN</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat Sekolah</th>
                    <th>Status</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Koordinat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $no=1;
                      if(!empty($query)){
                      foreach ($query as $baris) {
                    ?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $baris->nama_kecamatan;?></td>
                        <td><?php echo $baris->npsn;?></td>
                        <td><?php echo $baris->nama_sekolah;?></td>
                        <td><?php echo $baris->alamat_sekolah;?></td>
                        <td><?php echo $baris->status;?></td>
                        <td><?php echo $baris->jenjang_pendidikan;?></td>
                        <td><?php echo $baris->koordinat;?></td>
                        <td><?php echo anchor('editsekolah/'.$baris->npsn,'<i class="ti ti-pencil"></i>',['class'=>'btn btn-success']).' '.anchor('hapussekolah/'.$baris->npsn,'<i class="ti ti-trash"></i>',['class'=>'btn btn-danger']);?>
                        </td>
                      </tr>
                    <?php
                      }
                      }else{
                    ?>
                      <tr>
                        <td class="text-center text-danger" colspan="9">
                        DATA TIDAK ADA
                        </td>
                      </tr>
                    <?php
                      }
                    ?>                 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        
              
            </div>
          </div>
        </div>
      </div>

<?php echo view('footer'); ?>
