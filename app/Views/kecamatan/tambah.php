<?php
echo view('header');
?>
<!--  Header End -->
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Input Data Kecamatan</h5>
                <div class="card mb-0">
                    <div class="card-body p-4">
                        
                        <?php echo form_open('simpankecamatan') ?>
                        <div class="row align-items-start">
                            <div class="col">
                                            <label class="form-label">Kabupaten</label>
                                            <?php echo form_dropdown('id_kabupaten', $kabupatenOptions,'','class="form-control"');?>
                            </div>
                            <div class="col">
                                    <label class="form-label">Kode Kecamatan</label>
                                    <?php $kode_kecamatan = [
                                        'name'=>'kode_kecamatan',
                                        'type'=>'number',
                                        'class'=>'form-control',
                                        'autocomplete'=>'off',
                                        'placeholder'=>'Masukkan Kode Kecamatan',
                                        'required'=>'required'
                                    ];
                                    echo form_input($kode_kecamatan);
                                    ?>
                            </div>
                            <div class="col">
                                    <label class="form-label">Nama Kecamatan</label>
                                    <?php $nama_kecamatan = [
                                        'name'=>'nama_kecamatan',
                                        'class'=>'form-control',
                                        'autocomplete'=>'off',
                                        'placeholder'=>'Masukkan Nama Kecamatan',
                                        'required'=>'required'
                                    ];
                                    echo form_input($nama_kecamatan);?>
                            </div>
                        </div>

                        <div class="col">
                            <label class="form-label">Jumlah Penduduk</label>
                                    <?php $jumlah_penduduk = [
                                        'name'=>'jumlah_penduduk',
                                        'type'=>'number',
                                        'class'=>'form-control',
                                        'autocomplete'=>'off',
                                        'placeholder'=>'Masukkan Jumlah Penduduk',
                                        'required'=>'required'
                                    ];
                                    echo form_input($jumlah_penduduk);?>
                        </div>
                        <div class="col">
                            <label class="form-label">Luas Wilayah</label>
                                    <?php $luas_wilayah = [
                                        'name'=>'luas_wilayah',
                                        'type'=>'number',
                                        'class'=>'form-control',
                                        'autocomplete'=>'off',
                                        'placeholder'=>'Masukkan Luas Wilayah',
                                        'required'=>'required'
                                    ];
                                    echo form_input($luas_wilayah);?>
                        </div>  
                        <div>
                            <br>
                            <?php $simpan = [
                                'type'=>'submit',
                                'content'=>'Simpan',
                                'class'=>'btn btn-primary'
                            ];
                            echo form_button($simpan);
                    
                            echo anchor('kecamatan','Batal',['class'=>'btn btn-danger']);?>
                            </div>
                    </div>
                </div>
                        <?php echo form_close(); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



<?php echo view('footer'); ?>
