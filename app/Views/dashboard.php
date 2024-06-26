<?php 
echo view('header');
?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Peta Kabupaten Banyumas</h5>
                  </div>
                </div>
                <div id="map"style="min-height:360px;border-radius:8px;z-index:0;">
                <script type="text/javascript" src="<?php echo 'public/uploads/'.$kabupaten->kode_kabupaten.'.json';?>">
                </script>
                       <script>
                function getData(kode_kecamatan) {
                    $.ajax({
                        url: '<?php echo site_url('getdata'); ?>',
                        type: 'GET',
                        data: {kode_kecamatan: kode_kecamatan},
                        success: function (response) {
                            var obj = JSON.stringify(response);
                            var res = JSON.parse(obj);
                            $('#tableBody').html(res.hasil);
                        }
                    });
                }

                // koordinat kabupaten
                var coordinate = [<?php echo $kabupaten->koordinat; ?>];
                var zoomLevel = 10;
                var map = new L.map('map').setView(coordinate, zoomLevel);
                var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

                function onEachFeature(feature, layer) {
                    layer.on('click', function (e) {
                        let kode = '<tr><td width="45%">Kode</td><td>:</td><td>' + e.target.feature.properties.Code + '</td></tr>';
                        let nama = '<tr><td width="45%">Kecamatan</td><td>:</td><td>' + e.target.feature.properties.Name + '</td></tr>';
                        $('#tableBody').html(kode + nama);
                        let kode_kecamatan = e.target.feature.properties.Code;
                        getData(kode_kecamatan);
                    });

                    var label = L.marker(layer.getBounds().getCenter(), {
                        icon: L.divIcon({
                            className: 'text-dark fw-bold',
                            html: feature.properties.Name,
                            iconSize: [100, 40]
                        })
                    }).addTo(map);
                }

                function style(feature) {
                    return {
                        fillColor: 'royalblue', // warna polygon
                        weight: 2,
                        opacity: 1,
                        color: 'blue', // warna garis batas polygon
                        dashArray: '3',
                        fillOpacity: 0.7
                    };
                }

                const geojson = new L.geoJson(kecamatan, {
                    style: style,
                    onEachFeature: onEachFeature
                }).addTo(map);

                var lokasi = [<?php echo $marker; ?>];

                for (var i = 0; i < lokasi.length; i++) {
                    let marker_label = 'NPSN : ' + lokasi[i][0] + '<br>' + lokasi[i][1] + '<br>' + lokasi[i][2] + '<br>STATUS: ' + lokasi[i][3] + ' ' + lokasi[i][4];
                    marker = new L.marker([lokasi[i][5], lokasi[i][6]]).bindPopup(marker_label).addTo(map);
                }
            </script>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12">
                <!-- Yearly Breakup -->
                <div class="card overflow-hidden">
                  <div class="card-body p-4">
                    <h5 class="card-title mb-9 fw-semibold">Data Statistik</h5>
                    <div class="row align-items-center">
                      <tbody id="tableBody">
                        <tr>
                          <td>Kabupaten</td>
                          <td>:</td>
                          <td><?php echo $kabupaten->nama_kabupaten; ?></td><br>
                        </tr>
                        <tr>
                          <td>Luas Wilayah</td>
                          <td>:</td>
                          <td><?php echo number_format($kabupaten->luas_wilayah,0,',','.').' km'; ?></td><br>
                        </tr>
                        <tr>
                          <td>Jumlah Penduduk</td>
                          <td>:</td>
                          <td><?php echo number_format($kabupaten->jumlah_penduduk,0,',','.').' Jiwa' ?></td>
                        </tr>
                      </tbody>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
<?php 
echo view('footer');
?>