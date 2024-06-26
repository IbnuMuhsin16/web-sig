<?php
echo view('header');
?>

      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Data Kecamatan</h5>
              <div class="card mb-0">
                <div class="card-body p-4">
                <?php
                    // menampilkan pesan setelah proses simpan, update dan hapus.data-bs-toggle="modal" data-bs-target="#exampleModal"
                    if(!empty($msg)){
                    echo $msg;
                    } ?>
                    <div class="mb-3">
                        <?php echo anchor('tambahkecamatan','<i class="ti ti-plus"></i>',['class'=>'btn btn-primary']); ?>
                    </div>
                    <div class="table-responsive"style="height:299px;">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Kode Kecamatan</th>
                                <th>Nama Kecamatan</th>
                                <th>Jumlah Penduduk</th>
                                <th>Luas Wilayah</th>
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
                                <td><?php echo $baris->kode_kecamatan;?></td>
                                <td><?php echo $baris->nama_kecamatan;?></td>
                                <td><?php echo number_format($baris->jumlah_penduduk,0,',','.').' Jiwa';?></td>
                                <td><?php echo number_format($baris->luas_wilayah,0,',','.').' Km<sup>2</sup>';?></td>
                                <td><?php echo anchor('editkecamatan/'.$baris->kode_kecamatan,'<i class="ti ti-pencil"></i>',['class'=>'btn btn-success']).' '.anchor('hapuskecamatan/'.$baris->kode_kecamatan,'<i class="ti ti-trash"></i>',['class'=>'btn btn-danger']);?></td>
                            </tr>
                        <?php
                            }
                            }else{
                        ?>
                            <tr>
                                <td class="text-center text-danger" colspan="6">
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

<?php echo view('footer'); ?>
