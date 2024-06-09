<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse; width: 100%; margin-bottom: 20px;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0}
        h1, h3 {text-align: center}
    </style>
</head>
<body>
    <h1>Sistem Penjualan</h1>

    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Status Keanggotaan</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM Pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pelanggan']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Tanggal_Lahir']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
                <td><?php echo $row['Status_Keanggotaan']; ?></td>
                <td><?php echo $row['Tanggal_Bergabung']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Barang</h3>
    <table>
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Buku';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Buku']; ?></td>
                <td><?php echo $row['Judul']; ?></td>
                <td><?php echo $row['Pengarang']; ?></td>
                <td><?php echo $row['Penerbit']; ?></td>
                <td><?php echo $row['Harga']; ?></td>
                <td><?php echo $row['Stok']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pegawai';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Jabatan']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>ID Pegawai</th>
                <th>Tanggal Transaksi</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Transaksi']; ?></td>
                <td><?php echo $row['ID_Pelanggan']; ?></td>
                <td><?php echo $row['ID_Pegawai']; ?></td>
                <td><?php echo $row['Tanggal_Transaksi']; ?></td>
                <td><?php echo $row['Total_Biaya']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Detail Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Buku</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Detail_Transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Transaksi']; ?></td>
                <td><?php echo $row['ID_Buku']; ?></td>
                <td><?php echo $row['Jumlah']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pemasok</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pemasok</th>
                <th>Nama Pemasok</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pemasok';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $row['ID_Pemasok']; ?></td>
                <td><?php echo $row['Nama_Pemasok']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>