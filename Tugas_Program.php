<!DOCTYPE html>
<html>

<head>
    <title>Tugas Pemrograman Web2</title>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
        <label for="pekerjaan">Pekerjaan:</label>
        <select id="pekerjaan" name="pekerjaan">
            <option value="Software Enginering">Software Enginering</option>
            <option value="Web Development">Web Development</option>
            <option value="Data Analyst">Data Analyst</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>

    <br>
    <br>

    <?php
    // ambil nilai dari input form
    $nama = $_POST["nama"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $pekerjaan = $_POST["pekerjaan"];

    // hitung umur berdasarkan tanggal lahir
    $today = new DateTime();
    $birthdate = new DateTime($tgl_lahir);
    $umur = $today->diff($birthdate)->y;
    $tanggal_lahir_baru = date("d-m-Y", strtotime($tgl_lahir)); // mengubah format tanggal lahir



    // tentukan gaji berdasarkan pekerjaan
    if ($pekerjaan == "Software Enginering") {
        $gaji = 8000000;
    } else if ($pekerjaan == "Web Development") {
        $gaji = 12000000;
    } else if ($pekerjaan == "Data Analyst") {
        $gaji = 10000000;
    }

    // tampilkan hasil
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir_baru . "<br>";
    echo "Umur: " . $umur . " tahun<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ".", ".") . " /Bulan", "<br>";
    ?>
</body>

</html>