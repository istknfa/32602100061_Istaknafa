<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php ($mahasiswa)?>
<main>
    <div class="tittle">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>nim</th>
                <th>prodi</th>
                <th>universitas</th>
                <th>no_hp</th>
                <th>action</th>
            </tr>

            <?php
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td collspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $a['nama']; ?></td>
                        <td><?= $a['nim']; ?></td>
                        <td><?= $a['prodi']; ?></td>
                        <td><?= $a['universitas']; ?></td>
                        <td><?= $a['no_hp']; ?></td>
                        <td class="action">
                            <a href="crud/hapus/<?= $a['nim']; ?>"><button class="btn-delete" onclick="return confirm('Are You Sure to Delete Nim <?= $a['nim'] ?>')">Delete</button></a>
                            <a href="crud/edit/<?= $a['nim']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php    }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>
