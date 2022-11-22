<?= include "navigasi.php"; ?>



<div class="table-responsive">

    <div class="table-responsive">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Pengunjung</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>No. HP</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $tampil = mysqli_query($koneksi, "SELECT * FROM post order by id desc");
                $no = 1;
                while ($data = mysqli_fetch_array($tampil)) {


                ?>


                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['category'] ?></td>
                        <td><?= $data['excerpt'] ?></td>
                        <td><?= $data['body'] ?></td>
                    </tr>
            </tbody>
            </table>


           

        <?php } ?>

    </div>
</div>
</div>

<?= include "footer.php" ?>