<div class="row justify-content-center">
  <div class="col-lg-10">
    <div class="card card-outline card-primary mt-3">
      <div class="card">
        <div class="card-header text-bold">
          <?= $data['title']; ?>
        </div>
      </div>
    </div>

    <div class="card mt-3">
      <div class="card-body">
        <div class="h4">
          <?= $data['kegiatan_dosen']['jenis_kegiatan'] ?>
        </div>
        <hr />
        <div class="">
          <small for="">Bukti Penugasan</small>
          <br>
          <?php if ($data['kegiatan_dosen']['bukti_penugasan'] != '') : ?>
            <?php if (explode('.', $data['kegiatan_dosen']['bukti_penugasan'])[2] != 'pdf') : ?>
              <img src="<?= BASEURL . 'dist/img/IMG.PNG' ?>" alt="" width="30px" class="mr-3">
            <?php else : ?>
              <img src="<?= BASEURL . 'dist/img/PDF.PNG' ?>" alt="" width="30px" class="mr-3">
            <?php endif; ?>
            <?= explode('/', $data['kegiatan_dosen']['bukti_penugasan'])[2] ?>
            <a href="<?= BASEURL . $data['kegiatan_dosen']['bukti_penugasan'] ?>" class="badge badge-primary ml-2">Lihat Dokumen</a>
          <?php else : ?>
            <img src="<?= BASEURL . 'dist/img/IMG.PNG' ?>" alt="" width="30px" class="mr-3">
            Tidak ada file yang di upload
          <?php endif; ?>
        </div>
        <hr />
        <div class="form-group mt-4">
          <table>
            <tr>
              <td>Jumlah SKS</td>
              <td style="width: 20px;" class="text-center">:</td>
              <td><?= $data['kegiatan_dosen']['sks'] ?></td>
            </tr>
            <tr>
              <td>Masa Penugasan</td>
              <td class="text-center">:</td>
              <td><?= $data['kegiatan_dosen']['masa_penugasan'] ?></td>
            </tr>
            <tr>
              <td>Kinerja</td>
              <td class="text-center">:</td>
              <td><?= $data['kegiatan_dosen']['kinerja'] ?></td>
            </tr>
          </table>
        </div>
        <hr />
        <div class="mt-4">
          <small for="">Bukti Dokumen</small>
          <br>
          <?php if ($data['kegiatan_dosen']['bukti_dokumen'] != '') : ?>
            <?php if (explode('.', $data['kegiatan_dosen']['bukti_dokumen'])[2] != 'pdf') : ?>
              <img src="<?= BASEURL . 'dist/img/IMG.PNG' ?>" alt="" width="30px" class="mr-3">
            <?php else : ?>
              <img src="<?= BASEURL . 'dist/img/PDF.PNG' ?>" alt="" width="30px" class="mr-3">
            <?php endif; ?>
            <?= explode('/', $data['kegiatan_dosen']['bukti_dokumen'])[2] ?>
            <a href="<?= BASEURL . $data['kegiatan_dosen']['bukti_dokumen'] ?>" class="badge badge-primary ml-2">Lihat Dokumen</a>
          <?php else : ?>
            <img src="<?= BASEURL . 'dist/img/IMG.PNG' ?>" alt="" width="30px" class="mr-3">
            Tidak ada file yang di upload
          <?php endif; ?>
        </div>
        <div class="form-group mt-4">
          <table>
            <tr>
              <td>Jumlah SKS</td>
              <td style="width: 20px;" class="text-center">:</td>
              <td><?= $data['kegiatan_dosen']['sks_2'] ?></td>
            </tr>
            <tr>
              <td>Rekomendasi</td>
              <td class="text-center">:</td>
              <td><?= $data['kegiatan_dosen']['rekomendasi'] ?></td>
            </tr>
          </table>
        </div>
        <hr />
      </div>
    </div>
  </div>
</div>