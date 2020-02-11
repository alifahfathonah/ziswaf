<section class="content">
    <div class="container-fluid">
      <div class="container">
        <!-- Pesan Selamat Datang -->
        <div class="row">
            <div class="col-md">
            <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Formulir Ubah Donasi</h3>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?php echo base_url('Donasi/proses_ubah'); ?>" method="post">
                            <div class="form-group">
                                <label for="nama_donasi">Nama Donatur</label>
                                <input type="text" value="<?php echo $nama;?>" class="form-control" name="nama_donatur" required id="nama_donasi" maxvalue=25 placeholder="Masukan Nama Donatur">
                            </div>
                            <input type="hidden" name="id_donasi" value="<?php echo $id_donasi ?>">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" value="<?php echo $email ?>" name="email" disable id="email" placeholder="Masukan Email">
                            </div>
                            <div class="form-group">
                                <label for="zakat">Zakat Mal</label>
                                <input type="number" min="0" class="form-control" value="<?php echo $zakat_mal; ?>" name="zakat" required id="zakat" placeholder="Masukan Jumlah Zakat Mal">
                            </div>
                            <div class="form-group">
                                <label for="zakat_profesi">Zakat Profesi</label>
                                <input type="number" min="0" value="<?php echo $zakat_profesi ?>" class="form-control" name="zakat_profesi" required id="zakat_profesi" placeholder="Masukan Jumlah Zakat Profesi">
                            </div>
                            <div class="form-group">
                                <label for="infak">Infak</label>
                                <input type="number" min="0" value="<?php echo $infak ?>" class="form-control" name="infak" required id="infak" placeholder="Masukan Jumlah Infak">
                            </div>
                            <div class="form-group">
                                <label for="sedekah">Sedekah</label>
                                <input type="number" min="0" value="<?php echo $sedekah ?>" class="form-control" name="sedekah" required id="sedekah" placeholder="Masukan Jumlah Sedekah">
                            </div>
                            <div class="form-group">
                                <label for="wakaf">Wakaf</label>
                                <input type="number" min="0" value="<?php echo $wakaf ?>" class="form-control" name="wakaf" required id="wakaf" placeholder="Masukan Jumlah Wakaf">
                            </div>
                            <div class="form-group">
                                <label for="lainya">Lainya</label>
                                <input type="text" class="form-control" value="<?php echo $lainya ?>" name="lainya" id="lainya" placeholder="Masukan Donasi Tambahan">
                            </div>
                            <div class="form-grup">
                                <input type="submit" class="btn btn-info" style="float:right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>