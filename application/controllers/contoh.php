<?php

//Koneksi dan Menentukan Database Di Server

$server="localhost";

$user="root";

$pass="";

$db="kampus";

$konek=mysql_connect($server,$user,$pass) or die ("KONEKSI GAGAL");

$konek_database=mysql_select_db($db) or die ("DATABASE TIDAK BISA DIBUKA");

?>

<div class='row'>

    <div class='col-sm-12 col-xs-12 col-md-12'>

        <form action="" method="post">

            <!-- Pembuatan Combobox Pertama/Pemilihan Fakultas -->

            <div class="form-group">

                <label">Fakultas</label>

                    <div class="col-sm-4">

                        <select id="fakultas" name="fakultas">

                            <option> Silahkan Pilih..</option>

                            <?php

                $query = mysql_query("SELECT * FROM fakultas ORDER BY id_fakultas");

                while ($row = mysql_fetch_array($query)) {

                ?>

                            <option value="<?php echo $row['fakultas']; ?>">

                                <?php echo $row['fakultas']; ?>

                            </option>

                            <?php } ?>

                        </select>

                    </div>

            </div>

            <!-- Pembuatan Combobox Kedua/Pemilihan Prodi -->

            <div class="form-group">

                <label>Program Studi</label>

                <div class="col-sm-4">

                    <select id="prodi" name="prodi">

                        <option value="">Silahkan Pilih..</option>

                        <?php

                $query = mysql_query("SELECT

                                        *

                                      FROM

                                        prodi

                                        INNER JOIN fakultas ON prodi.id_fakultas = fakultas.id_fakultas ORDER BY id_prodi");

                while ($row = mysql_fetch_array($query)) {

                ?>

                        <option id="prodi" class="<?php echo $row['fakultas']; ?>" value="<?php echo $row['prodi']; ?>">

                            <?php echo $row['prodi']; ?>

                        </option>

                        <?php } ?>

                    </select>

                </div>

            </div>

            <div class="form-group">

                <input name="simpan" class="btn btn-success" type="submit" id="simpan" value="Simpan" />

                <input name="batal" class="btn btn-danger" type="reset" id="batal" value="Batal" />

            </div>

        </form>

    </div>

</div>

<!--//kodingbuton.com-->

<script src="js/jquery-1.10.2.min.js"></script>

<script src="js/jquery.chained.min.js"></script>

<script>
$("#prodi").chained("#fakultas");
</script>
