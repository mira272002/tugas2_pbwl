  <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container" action="<?php echo URL; ?>/pelanggan/tambah_proses/" method="post">
                <h4 class="text-center font-weight-bold"> Tambah Pelanggan </h4>
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan :</label>
                  <input type="text" name="pel_nama" class="form-control" >
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Golongan :</label>
                  <input type="text" name="pel_id_gol" class="form-control">
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat :</label>
                  <input type="text" name="pel_alamat" class="form-control">
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">HP :</label>
                  <input type="text" name="pel_hp" class="form-control">
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">KTP :</label>
                  <input type="text" name="pel_ktp" class="form-control">
                </div>                
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Seri :</label>
                  <input type="text" name="pel_seri" class="form-control">
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Meteran :</label>
                  <input type="text" name="pel_meteran" class="form-control">
                </div>
                <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Id User :</label>
                  <input type="text" name="pel_id_user" class="form-control">
                </div>                
                <div class="form-group m-2">
                  <input type="submit" name="tambah" value="Tambah" class="btn btn-secondary btn-block">
                </div>
            </form>
        </section>
        </section>
    </section>