<?php
echo view('header');
?>
<!--  Header End -->
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Data Sekolah</h5>
                <div class="card mb-0">
                    <div class="card-body p-4">
                        
                        <?php echo form_open('updatesekolah') ?>
                        <div class="row align-items-start">
                            <div class="col">
                            <label class="form-label">Kecamatan</label>
                            <?php
                            echo form_hidden('id',$id);
                            echo form_dropdown('kode_kecamatan',$kecamatanOptions,$query->kode_kecamatan,'class="form-control"');
                            ?>
                            </div>
                            <div class="col">
                            <label class="form-label">NPSN</label>
                            <?php
                            $npsn = [
                            'name'=>'npsn',
                            'type'=>'number',
                            'class'=>'form-control',
                            'autocomplete'=>'off',
                            'placeholder'=>'Masukkan NPSN Sekolah',
                            'required'=>'required',
                            'value'=>$query->npsn
                            ];
                            echo form_input($npsn);?>
                            </div>
                            <div class="col">
                            <label class="form-label">Nama Sekolah</label>
                            <?php
                            $nama_sekolah = [
                            'name'=>'nama_sekolah',
                            'class'=>'form-control',
                            'autocomplete'=>'off',
                            'placeholder'=>'Masukkan Nama Sekolah',
                            'required'=>'required',
                            'value'=>$query->nama_sekolah
                            ];
                            echo form_input($nama_sekolah);
                            ?>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                            <label class="form-label">Alamat Sekolah</label>
                            <?php
                            $alamat_sekolah = [
                            'name'=>'alamat_sekolah',
                            'class'=>'form-control',
                            'autocomplete'=>'off',
                            'placeholder'=>'Masukkan Alamat Sekolah',
                            'required'=>'required',
                            'value'=>$query->alamat_sekolah
                            ];
                            echo form_input($alamat_sekolah);
                            ?>
                            </div>
                            <div class="col">
                            <label class="form-label">Jenjang Pendidikan</label>
                            <?php
                            echo form_dropdown('jenjang_pendidikan',
                            $jenjangOptions,$query->jenjang_pendidikan,'class="form-control"');
                            ?>
                            </div>
                            <div class="col">
                            <label class="form-label">Koordinat Sekolah</label>
                            <?php
                            $koordinat = [
                            'name'=>'koordinat',
                            'class'=>'form-control',
                            'autocomplete'=>'off',
                            'placeholder'=>'Contoh : -7.5134,109.0702',
                            'required'=>'required',
                            'value'=>$query->koordinat
                            ];
                            echo form_input($koordinat);
                            ?>
                            </div>
                        </div><br>

                        <div class="col">
                            <label class="form-label">Status</label>
                            <?php
                            echo form_dropdown('status',$statusOptions,$query->status,'class="formcontrol"');
                            ?>
                            </div>
                        <div>
                            <br>
                            <?php $simpan = [
                                'type'=>'submit',
                                'content'=>'Simpan',
                                'class'=>'btn btn-primary'
                            ];
                            echo form_button($simpan);
                    
                            echo anchor('sekolah','Batal',['class'=>'btn btn-danger']);?>
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
