<!-- 
Program : array1DimensiFilter
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Data produk dalam array 1 dimensi
$produk = [
    ["Kaos Polos", 50000, "Pakaian"],
    ["Celana Jeans", 100000, "Pakaian"],
    ["Sepatu Lari", 150000, "Sepatu"],
    ["Buku Pelajaran", 75000, "Buku"],
    ["Tas Sekolah", 60000, "Tas"],
];

// Fungsi untuk memfilter produk berdasarkan kategori
function filterProdukByKategori($produk, $kategori)
{
    $filteredProduk = [];

    foreach ($produk as $item) {
        if (strtolower($item[2]) == strtolower($kategori)) {
            $filteredProduk[] = $item;
        }
    }

    return $filteredProduk;
}

// Meminta input kategori dari pengguna
if (isset($_POST['kategori'])) {
    $kategoriDipilih = $_POST['kategori'];

    // Memfilter produk berdasarkan kategori
    $hasilFilter = filterProdukByKategori($produk, $kategoriDipilih);

    if (count($hasilFilter) > 0) {
        echo "<h3>Daftar Produk dalam Kategori: $kategoriDipilih</h3>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr><th>Nama Produk</th><th>Harga</th><th>Kategori</th></tr>";

        foreach ($hasilFilter as $item) {
            echo "<tr><td>{$item[0]}</td><td>Rp. " . number_format($item[1], 0, ',', '.') . "</td><td>{$item[2]}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Tidak ada produk yang ditemukan dalam kategori: $kategoriDipilih</p>";
    }
}
?>

<!-- Form untuk input kategori yang ingin difilter -->
<form method="POST" action="">
    <label for="kategori">Masukkan Kategori Produk: </label>
    <input type="text" id="kategori" name="kategori" required>
    <input type="submit" value="Filter">
</form>