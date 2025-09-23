<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A <br>";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B <br>";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C <br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D <br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
// Urutkan nilai dari kecil ke besar
$n = count($nilai);

for ($i = 0; $i < $n-1; $i++) {
    for ($j = 0; $j < $n-$i-1; $j++) {
        if ($nilai[$j] > $nilai[$j+1]) {
            $temp = $nilai[$j];
            $nilai[$j] = $nilai[$j+1];
            $nilai[$j+1] = $temp;
        }
    }
}

// Hapus 2 nilai terendah
array_shift($nilai); 
array_shift($nilai); 

// Hapus 2 nilai tertinggi
array_pop($nilai); 
array_pop($nilai); 

// Hitung total nilai yang tersisa
$total = array_sum($nilai);

echo "Total nilai setelah mengabaikan 2 tertinggi & 2 terendah: $total <br>";

// rata-rata
$rata_rata = $total / count($nilai);
echo "Rata-rata: $rata_rata <br>";

$diskon = 20;
$harga = 120000;
if ($harga > 100000) {
    $potongan = ($diskon / 100) * $harga;
    $hargaBayar = $harga - $potongan;
} else {
    $hargaBayar = $harga;
}
echo "Harga yang harus dibayar: Rp " . $hargaBayar ."<br>";

$poin = 620;
echo "Total skor pemain adalah: " . $poin . "<br>";
$hadiah = ($poin > 500) ? "YA" : "TIDAK";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $hadiah;
?>