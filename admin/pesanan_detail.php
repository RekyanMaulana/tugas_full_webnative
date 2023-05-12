<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);
?>

<h1 class="mt-4">Detai Pelanggan</h1>
<div class="card-body">
    <div class="card mb-4">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Total </th>
                    <th>Nama Pelanggan</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><?= $pesanan['tanggal']?></td>
                        <td><?= $pesanan['total']?></td>
                        <td><?= $pesanan['nama']?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>