<html>
<head>
    <title>Kuis Pemrograman Web</title>

    <style>

select {
    width: 100%;
    padding: 13px;
    border: 1px solid #ccc;
    border-radius: 7px;
    font-size: 15px;
    border-color: #a29bfe;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 6px;
}

.container {
    width: 600px;
    background: #FFF;
    border-radius: 5px;
    box-shadow: 0 0 20px rgba(0,0,0,.3);
    padding: 10px 30px;
}

.container .input {
    width: 100%;
    height: 40px;
    border: 2px solid #e7e7e7;
    border-radius: 7px;
    padding: 15px 20px;
    font-size: 1rem;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container textarea {
    width: 100%;
    height: 80px;
    border: 2px solid #e7e7e7;
    border-radius: 7px;
    padding: 15px 20px;
    font-size: 1rem;
    background: transparent;
    outline: none;
    transition: .3s;
}

.container .input:focus, .container .input:valid {
border-color: #a29bfe;
}

.container textarea:focus, .container textarea:valid {
border-color: #a29bfe;
}

.container .btn {
    width: 100%;
    padding: 15px 20px;
    text-align: center;
    background: #a29bfe;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #FFF;
    cursor: pointer;
    transition: .3s;
}
 
.container .btn:hover {
    transform: translateY(-5px);
    background: #6c5ce7;
}
    </style>

</head>

<body bgcolor="#8a1a77ff">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <table align="center" cellpadding="10" class="container">
            <tr>
                <td>
                    <p style="font-size: 2rem; font-weight: 800;" align="center">Form Pencarian</p>
                </td>
                </tr>
            <tr>
                <td>
                    Cari Data <br>
                <input type="text" name="kunci" class="input" placeholder="Masukkan kata kunci..." required>
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Cari" class="btn">
                </td>
            </tr>

<?php
// Proses Form Pencarian
if (isset($_GET['kunci']) && $_GET['kunci'] != "") {
    $kunci = htmlspecialchars($_GET['kunci']);
    echo "<tr><td><p><b>Anda mencari data dengan kata kunci: $kunci</b></p></td></tr>";
}
?>

</table>
</form>
<br>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
        <table align="center" cellpadding="10" class="container">
            <tr>
                <td>
                    <p style="font-size: 2rem; font-weight: 800;" align="center">Form Biodata Mahasiswa</p>
                </td>
                </tr>
            <tr>
                <td>Nama Lengkap <br>
            <input type="text" name="nama" placeholder="Masukkan Nama Anda..." class="input" required>
        </td>
            </tr>
            <tr>
                <td>NIM <br>
                <input type="text" name="nim" placeholder="Masukkan NIM Anda..." class="input" required>
            </td>
            </tr>
            <tr>
                <td>Jenis Kelamin: <br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
                </td>
            </tr>
                <td>Program Studi <br>
            <select name="program_studi" required>
                        <option hidden>Pilih Program Studi...</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
            </td>
            </tr>
            <tr>
                <td>Hobi <br>
            <input type="checkbox" name="hobi[]" value="Membaca">Membaca
                    <input type="checkbox" name="hobi[]" value="Berenang">Berenang
                    <input type="checkbox" name="hobi[]" value="Mendengarkan Musik">Mendengarkan Musik
            </td>
            </tr>
            <tr>
                <td>Alamat <br>
            <textarea name="alamat" placeholder="Masukkan Alamat Lengkap Anda..." required></textarea>
            </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="kirim_data" value="Kirim" class="btn">
                </td>
            </tr>
        </table>
    </form>
    <br>

    <?php

// Proses Form Biodata
if (isset($_POST['kirim_data'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $program_studi = $_POST['program_studi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "-";
    $alamat = $_POST['alamat'];

    echo "<table align='center' cellpadding='10' class='container'>
            <tr><td colspan='2'><p style='font-size: 2rem; font-weight: 800;' align='center'>Biodata Mahasiswa</p></td></tr>
            <tr style='background:#594d9c; color:white'><td><b>Nama Lengkap</b></td><td background='black'>$nama</td></tr>
            <tr style='background:#9c8df1; color:white'><td><b>NIM</b></td><td>$nim</td></tr>
            <tr style='background:#594d9c; color:white'><td><b>Program Studi</b></td><td>$program_studi</td></tr>
            <tr style='background:#9c8df1; color:white'><td><b>Jenis Kelamin</b></td><td>$jenis_kelamin</td></tr>
            <tr style='background:#594d9c; color:white'><td><b>Hobi</b></td><td>$hobi</td></tr>
            <tr style='background:#9c8df1; color:white'><td><b>Alamat</b></td><td>$alamat</td></tr>
          </table>";
}
?>

</body>
</html>
