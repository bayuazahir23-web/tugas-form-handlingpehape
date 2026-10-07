<?php
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $email = $_POST['email'];
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
    $perusahaan = $_POST['perusahaan'];

    $alasan = $_POST['alasan'];

    $kompetensi = isset($_POST['kompetensi']) ? $_POST['kompetensi'] : [];

    if (empty($nama) || empty($nis)) {

        echo "<h3 style='color:red;'>Data belum lengkap!</h3>";
        echo "Nama Lengkap dan NIS wajib diisi.";

    } else {

        echo "<h2>Data Pendaftaran PKL</h2>";

        echo "<p><b>Nama Lengkap:</b> " . htmlspecialchars($nama) . "</p>";
        echo "<p><b>NIS:</b> " . htmlspecialchars($nis) . "</p>";
        echo "<p><b>Email:</b> " . htmlspecialchars($email) . "</p>";

        echo "<p><b>Kompetensi Keahlian/Jurusan:</b> "
            . htmlspecialchars($jurusan) . "</p>";

        echo "<p><b>Perusahaan PKL:</b> "
            . htmlspecialchars($perusahaan) . "</p>";

        echo "<p><b>Kompetensi / Tech Stack:</b> ";

        if (!empty($kompetensi)) {
            echo implode(", ", array_map('htmlspecialchars', $kompetensi));
        } else {
            echo "Tidak ada";
        }

        echo "</p>";

        echo "<p><b>Alasan Memilih Perusahaan:</b><br>"
            . nl2br(htmlspecialchars($alasan)) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta PKL</title>

    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        form {
            width: 400px;
            padding: 15px;
            border: 1px solid black;
        }

        input, select, textarea {
            margin-top: 5px;
            padding: 5px;
        }

        button {
            padding: 7px 15px;
            background-color: black;
            color: white;
            border: none;
        }
    </style>
</head>

<body>

    <h2>Form Pendaftaran Peserta PKL</h2>

    <form action="" method="post">

        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama">
        <br><br>

        <label>NIS:</label><br>
        <input type="number" name="nis">
        <br><br>

        <label>Email Siswa:</label><br>
        <input type="email" name="email">
        <br><br>

        <label>Kompetensi Keahlian / Jurusan:</label><br>

        <input type="radio" name="jurusan" value="SIJA">
        SIJA

        <input type="radio" name="jurusan" value="TJAT">
        TJAT

        <input type="radio" name="jurusan" value="TITL">
        TITL

        <input type="radio" name="jurusan" value="TP">
        TP

        <br><br>

        <label>Pilihan Perusahaan PKL:</label><br>

        <select name="perusahaan">
            <option value="">-- Pilih Perusahaan --</option>
            <option value="PT Telkom Indonesia">PT Telkom Indonesia</option>
            <option value="PT PLN">PT PLN</option>
            <option value="PT Pertamina">PT Pertamina</option>
            <option value="PT Semen Indonesia">PT Semen Indonesia</option>
        </select>

        <br><br>

        <label>Kompetensi / Tech Stack yang Dikuasai:</label><br>

        <input type="checkbox" name="kompetensi[]" value="HTML">
        HTML

        <input type="checkbox" name="kompetensi[]" value="CSS">
        CSS

        <input type="checkbox" name="kompetensi[]" value="PHP">
        PHP

        <input type="checkbox" name="kompetensi[]" value="JavaScript">
        JavaScript

        <input type="checkbox" name="kompetensi[]" value="MySQL">
        MySQL

        <br><br>

        <label>Alasan Memilih Perusahaan:</label><br>

        <textarea name="alasan" rows="5" cols="40"></textarea>

        <br><br>

        <button type="submit" name="submit">Daftar PKL</button>

    </form>

</body>
</html>