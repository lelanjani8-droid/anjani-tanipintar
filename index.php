<?php 
session_start();
// Cek status login
$is_logged_in = isset($_SESSION['status']) && $_SESSION['status'] == "login";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Tani Pintar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
        background-color: #083023 !important; /* Ganti dengan kode warna pilihan Anda */
    font-family: sans-serif;
    margin: 0;
    padding: 0;}
        .halaman { display: none; }
        .halaman-aktif { display: block; transition: all 0.3s ease; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <?php if (!$is_logged_in): ?>
        <div class="mt-8 pt-6 border-t border-gray-100 text-center">
    <p class="text-gray-600 text-sm">
        Belum punya akun? 
        <a href="register.php" class="text-emerald-600 font-bold hover:text-emerald-700 hover:underline transition">
            Daftar Sekarang
        </a>
    </p>
</div>
    <div id="area-login" class="fixed inset-0 z-[100] flex items-center justify-center bg-emerald-900 px-4">
        <div class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl w-full max-w-md">
            <div class="text-center mb-8">
                <span class="text-4xl">👩‍🌾</span>
                <h2 class="text-3xl font-extrabold text-emerald-800 mt-2">Masuk Akun</h2>
                <p class="text-gray-500 mt-1">Portal Tani Pintar</p>
            </div>
            
            <form action="proses_login.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Username</label>
                    <input type="text" name="username" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 shadow-sm" placeholder="Masukkan username" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 shadow-sm" placeholder="••••••••" required>
                </div>
                <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg text-lg transition duration-200">
                    Masuk Sekarang
                </button>
                <div class="mt-8 pt-6 border-t border-gray-100 text-center">
        <p class="text-gray-600 text-sm">
            Belum punya akun? 
            <a href="register.php" class="text-emerald-600 font-bold hover:text-emerald-700 hover:underline transition">
                Daftar Sekarang
            </a>
        </p>
    </div>
            </form>

            <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
                <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-600 text-sm text-center italic">
                    Username atau Password salah!
                </div>
            <?php endif; ?>
            <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'logout'): ?>
    <div class="mt-4 p-3 bg-green-50 border border-green-200 rounded-lg text-green-600 text-sm text-center italic">
        Anda telah berhasil keluar. Sampai jumpa lagi!
    </div>
<?php endif; ?>
        </div>
    </div>
    <?php endif; ?>


    <?php if ($is_logged_in): ?>
    
    <nav class="bg-emerald-800 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">👩‍🌾</span>
                    <div class="font-bold text-xl tracking-wide">Tani Pintar</div>
                </div>
                <div class="flex space-x-2 md:space-x-4 overflow-x-auto py-2 text-sm md:text-base scrollbar-hide">
                    <button onclick="bukaHalaman('hal-utama')" class="halaman-menu hover:bg-emerald-700 px-3 py-2 rounded-lg whitespace-nowrap font-medium transition bg-emerald-700">Utama</button>
                    <button onclick="bukaHalaman('hal-kalkulator')" class="halaman-menu hover:bg-emerald-700 px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Kalkulator</button>
                    <button onclick="bukaHalaman('hal-catatan')" class="halaman-menu hover:bg-emerald-700 px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Catatan Budidaya</button>
                    <button onclick="bukaHalaman('hal-penyuluh')" class="halaman-menu hover:bg-emerald-700 px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Kontak Penyuluh</button>
                    <a href="logout.php" class="bg-red-600 hover:bg-red-700 px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Keluar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto p-4 md:p-8">
        
        <div id="hal-utama" class="halaman halaman-aktif rounded-2xl shadow-xl overflow-hidden">
            <div class="relative bg-emerald-900 text-white p-8 md:p-16 text-center rounded-2xl" style="background-image: linear-gradient(rgba(10, 50, 20, 0.7), rgba(10, 50, 20, 0.7)), url('bg6.png'); background-size: cover; background-position: center;">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight text-white">Selamat Datang,<br><?php echo $_SESSION['username']; ?></h1>
                <p class="text-xl text-emerald-100 max-w-2xl mx-auto">Selamat menjadi "Petani Pintar" dengan kalkulator modal, buku catatan digital, dan kontak penyuluh terpercaya.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-emerald-100 transition duration-300">
                    <img src="bg7.png" alt="Uang dan Tanaman" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-emerald-800 mb-2">Hitung Modal & Perkiraan Keuntungan</h3>
                    <p class="text-gray-600 mb-5">Halaman ini membantu Anda merencanakan modal secara akurat agar terhindar dari kerugian.</p>
                    <button onclick="bukaHalaman('hal-kalkulator')" class="bg-emerald-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-emerald-700 text-lg">Buka Kalkulator</button>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-green-100 transition duration-300">
                    <img src="bg3.png" alt="Buku Catatan" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-green-800 mb-2">Buku Catatan Budidaya</h3>
                    <p class="text-gray-600 mb-5">Halaman ini adalah buku harian digital Anda. Catat setiap pemupukan dan kegiatan penting.</p>
                    <button onclick="bukaHalaman('hal-catatan')" class="bg-green-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-green-700 text-lg">Buka Catatan</button>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-emerald-100 transition duration-300">
                    <img src="bg4.jpeg" alt="Penyuluh Pertanian" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-emerald-900 mb-2">Tanya & Diskusi Ahli</h3>
                    <p class="text-gray-600 mb-5">Halaman ini menghubungkan Anda langsung dengan para penyuluh profesional untuk konsultasi.</p>
                    <button onclick="bukaHalaman('hal-penyuluh')" class="bg-emerald-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-emerald-700 text-lg">Hubungi Penyuluh</button>
                </div>
            </div>
        </div>

        <div id="hal-kalkulator" class="halaman">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-6 md:p-10 border border-gray-200">
                <div class="flex items-center gap-4 mb-8">
                    <img src="bg7.png" alt="Uang" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
                    <div>
                        <h2 class="text-3xl font-bold text-emerald-800">Kalkulator Modal & Perkiraan Keuntungan Tani</h2>
                        <p class="text-gray-600 mt-1">Isi data modal awal dan perkiraan hasil panen Anda di bawah ini dengan mudah.</p>
                    </div>
                </div>
                
                <form id="calcForm" class="space-y-10">
                    <section>
                        <h3 class="text-xl font-semibold text-emerald-700 border-b-2 border-emerald-200 pb-2 mb-6">Biaya Tetap (Modal Awal)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Sewa Lahan per musim,Sewa Alat per musim,Pajak Lahan per Musim(Rp)</label>
                                <input type="number" id="sewaLahan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                            
                            <div class="md:col-span-2 bg-emerald-50 p-6 rounded-2xl border border-emerald-200 mt-2 shadow-inner">
                                <h4 class="font-bold text-emerald-800 mb-1.5">Penyusutan Alat (Bantu Hitung)</h4>
                                <p class="text-sm text-emerald-700 mb-5">Alat seperti cangkul atau mesin tidak dibeli setiap panen. Mari bagi biayanya per musim panen.</p>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Total Harga Beli Alat Baru (Rp)</label>
                                        <input type="number" id="hargaBeliAlat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="Misal: 500000">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Sudah Dipakai Berapa Musim Panen?</label>
                                        <input type="number" id="umurAlat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="Misal: 5">
                                    </div>
                                </div>
                                
                                <div class="mt-5 p-4 bg-white rounded-lg border border-emerald-200 inline-block w-full text-center">
                                    <span class="text-sm text-gray-600">Beban biaya alat per musim: </span>
                                    <span id="hasilPenyusutanTeks" class="font-bold text-emerald-600 text-2xl ml-2">Rp 0</span>
                                    <input type="hidden" id="penyusutanAlat" value="0">
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-xl font-semibold text-emerald-700 border-b-2 border-emerald-200 pb-2 mb-6">Biaya Variabel (Modal Berjalan)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Biaya Bibit (Rp)</label>
                                <input type="number" id="biayaBibit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Biaya Pupuk & Pestisida (Rp)</label>
                                <input type="number" id="biayaPupuk" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Biaya Tenaga Kerja (Rp)</label>
                                <input type="number" id="biayaTenagaKerja" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                        </div>
                    </section>

                    <section>
                        <h3 class="text-xl font-semibold text-emerald-700 border-b-2 border-emerald-200 pb-2 mb-6">Proyeksi Pendapatan</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Perkiraan Panen (kg)</label>
                                <input type="number" id="jumlahPanen" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Harga Jual per kg (Rp)</label>
                                <input type="number" id="hargaJual" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500" placeholder="0">
                            </div>
                        </div>
                    </section>

                    <button type="button" onclick="hitungAnalisa()" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 px-4 rounded-xl transition duration-200 shadow-lg text-lg">
                        Hitung Perkiraan Keuntungan Sekarang
                    </button>
                </form>

                <div id="panelHasil" class="mt-12 hidden bg-gray-50 border-2 border-emerald-500 rounded-2xl p-8 shadow-inner">
                    <h3 class="text-3xl font-bold text-center text-gray-800 mb-8">Laporan Analisa Panen Anda</h3>
                    <div class="space-y-6 text-xl">
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-600">Total Modal:</span>
                            <span id="outTotalBiaya" class="font-semibold text-red-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-600">Pendapatan Kotor:</span>
                            <span id="outPendapatan" class="font-semibold text-emerald-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3 mt-5">
                            <span class="text-gray-800 font-bold">Keuntungan Bersih:</span>
                            <span id="outKeuntungan" class="font-bold text-3xl text-emerald-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between items-center pt-3">
                            <span class="text-gray-600 text-sm">R/C Ratio:</span>
                            <span id="outRCRatio" class="font-bold text-2xl px-4 py-1.5 bg-gray-200 rounded-lg">0.00</span>
                        </div>
                    </div>
                    <div class="mt-10 text-center">
                        <p id="outKesimpulan" class="text-xl font-bold py-5 px-6 rounded-2xl shadow"></p>
                    </div>
                </div>
            </div>
        </div>
<div id="hal-catatan" class="halaman">
    <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-6 md:p-10 border border-gray-200">
        <div class="flex items-center gap-4 mb-8">
            <img src="bg3.png" alt="Catatan" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
            <div>
                <h2 class="text-3xl font-bold text-green-800">Buku Harian Digital Budidaya</h2>
                <p class="text-gray-600 mt-1">Catat setiap kegiatan harian Anda di bawah ini. Data tersimpan aman di akun Anda.</p>
            </div>
        </div>
        
        <form action="simpan_catatan.php" method="POST" class="mb-10 bg-green-50 p-6 rounded-2xl border border-green-200 shadow-inner">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal Kegiatan</label>
                    <input type="date" name="tanggal" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Kegiatan</label>
                    <input type="text" name="kegiatan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="Contoh: Pemupukan NPK" required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Biaya (Rp)</label>
                    <input type="number" name="biaya" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500" placeholder="0">
                </div>
            </div>
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-5 rounded-lg w-full text-lg shadow-lg transition duration-200">
                + Simpan ke Buku Catatan
            </button>
        </form>

        <h3 class="font-bold text-xl text-gray-700 mb-4 flex items-center gap-2">
            <span>🗓️</span> Riwayat Kegiatan Anda
        </h3>
        
        <div class="overflow-x-auto shadow-sm rounded-xl border border-gray-200">
            <table class="w-full text-left border-collapse bg-white">
                <thead>
                    <tr class="bg-gray-50 text-gray-700">
                        <th class="p-4 border-b font-semibold">Tanggal</th>
                        <th class="p-4 border-b font-semibold">Kegiatan</th>
                        <th class="p-4 border-b font-semibold">Biaya Keluar</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <?php 
                    include 'koneksi.php';
                    // Mengambil ID user dari session agar catatan tidak tertukar
                    $id_user = $_SESSION['id_pengguna'];
                    $ambil_data = mysqli_query($koneksi, "SELECT * FROM catatan_tani WHERE id_pengguna = '$id_user' ORDER BY tanggal DESC");
                    
                    if(mysqli_num_rows($ambil_data) > 0){
                        while($pecah = mysqli_fetch_array($ambil_data)){
                            ?>
                            <tr class="hover:bg-green-50 transition border-b">
                                <td class="p-4 border-r"><?php echo date('d M Y', strtotime($pecah['tanggal'])); ?></td>
                                <td class="p-4 border-r font-medium text-gray-800"><?php echo $pecah['kegiatan']; ?></td>
                                <td class="p-4 text-red-600 font-bold">
                                    Rp <?php echo number_format($pecah['biaya'], 0, ',', '.'); ?>
                                </td>
                            </tr>
                            <?php 
                        }
                    } else {
                        echo '<tr><td colspan="3" class="text-center p-10 text-gray-400 italic">Belum ada catatan. Silakan isi form di atas untuk memulai.</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
                            <tr>
                                <td colspan="3" class="text-center p-6 text-gray-400 italic">Belum ada catatan yang tersimpan.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="hal-penyuluh" class="halaman">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-6 md:p-10 border border-gray-200">
                <div class="flex items-center gap-4 mb-8">
                    <img src="bg4.jpeg" alt="Ahli" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
                    <div>
                        <h2 class="text-3xl font-bold text-emerald-900">Kontak Penyuluh Pertanian</h2>
                        <p class="text-gray-600 mt-1">Konsultasikan permasalahan tanaman dengan ahlinya.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full">PM</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900">Pak Meyer</h4>
                            <p class="text-sm text-gray-500">POPT KABUPATEN GROBOGAN</p>
                        </div>
                        <a href="https://wa.me/6281391632231" target="_blank" class="bg-emerald-500 text-white p-3 rounded-full shadow">💬</a>
                    </div>

                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full">LA</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900">Laela Anjani</h4>
                            <p class="text-sm text-gray-500">Mahasiswa Polbangtan YOMA</p>
                        </div>
                        <a href="https://wa.me/6283831463275" target="_blank" class="bg-emerald-500 text-white p-3 rounded-full shadow">💬</a>
                    </div>

                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full">BS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900">Bu Sofi</h4>
                            <p class="text-sm text-gray-500">Koordinator PPL Kec. Toroh</p>
                        </div>
                        <a href="https://wa.me/6281575352940" target="_blank" class="bg-emerald-500 text-white p-3 rounded-full shadow">💬</a>
                    </div>

                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full">IL</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900">Ibu Laeli</h4>
                            <p class="text-sm text-gray-500">PPL BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285290728684" target="_blank" class="bg-emerald-500 text-white p-3 rounded-full shadow">💬</a>
                    </div>
<div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-emerald-200">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Sinta</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/628812799737?text=Halo%20Bu%20Sinta,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-emerald-200">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">PB</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Pak Bagus</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6288228836803?text=Halo%20Pak%20Bagus,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-emerald-200">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IE</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Eny</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285866908210?text=Halo%20Bu%20Eny,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-emerald-200">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">PA</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Pak Agung</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285226196442?text=Halo%20Pak%20Agung,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-emerald-200">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Sari</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/62882003927542?text=Halo%20Bu%20Sari,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl">
                        <div class="bg-emerald-200 text-emerald-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full">IY</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900">Ibu Yoana</h4>
                            <p class="text-sm text-gray-500">PPL BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6289670907862" target="_blank" class="bg-emerald-500 text-white p-3 rounded-full shadow">💬</a>
                    </div>
                </div>
                <p class="text-center mt-12 italic text-gray-400">Semua konsultasi bersifat Rahasia & Terpercaya.</p>
            </div>
        </div>

    </div>
    <?php endif; ?>

    <script>
        // --- LOGIKA UTAMA ---
        const formatRupiah = (angka) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(angka);

        function bukaHalaman(idHalaman) {
            document.querySelectorAll('.halaman').forEach(h => h.classList.remove('halaman-aktif'));
            document.getElementById(idHalaman).classList.add('halaman-aktif');

            document.querySelectorAll('.halaman-menu').forEach(btn => btn.classList.remove('bg-emerald-700'));
            if(event) event.currentTarget.classList.add('bg-emerald-700');
        }

        // --- KALKULATOR ---
        function hitungOtomatisPenyusutan() {
            const harga = parseFloat(document.getElementById('hargaBeliAlat').value) || 0;
            const umur = parseFloat(document.getElementById('umurAlat').value) || 0;
            const penyusutan = umur > 0 ? harga / umur : 0;
            document.getElementById('hasilPenyusutanTeks').innerText = formatRupiah(penyusutan);
            document.getElementById('penyusutanAlat').value = penyusutan;
        }

        document.getElementById('hargaBeliAlat')?.addEventListener('input', hitungOtomatisPenyusutan);
        document.getElementById('umurAlat')?.addEventListener('input', hitungOtomatisPenyusutan);

        function hitungAnalisa() {
            const sewa = parseFloat(document.getElementById('sewaLahan,sewaAlat,pajakLahan').value) || 0;
            const susut = parseFloat(document.getElementById('penyusutanAlat').value) || 0;
            const bibit = parseFloat(document.getElementById('biayaBibit').value) || 0;
            const pupuk = parseFloat(document.getElementById('biayaPupuk').value) || 0;
            const upah = parseFloat(document.getElementById('biayaTenagaKerja').value) || 0;
            const hasil = parseFloat(document.getElementById('jumlahPanen').value) || 0;
            const harga = parseFloat(document.getElementById('hargaJual').value) || 0;

            const modal = sewa + susut + bibit + pupuk + upah;
            const pendapatan = hasil * harga;
            const untung = pendapatan - modal;
            const rc = modal > 0 ? pendapatan / modal : 0;

            document.getElementById('outTotalBiaya').innerText = formatRupiah(modal);
            document.getElementById('outPendapatan').innerText = formatRupiah(pendapatan);
            document.getElementById('outKeuntungan').innerText = formatRupiah(untung);
            document.getElementById('outRCRatio').innerText = rc.toFixed(2);
            
            const kesimpulan = document.getElementById('outKesimpulan');
            document.getElementById('panelHasil').classList.remove('hidden');

            if(rc > 1) {
                kesimpulan.innerText = "Usaha Anda Menguntungkan Harap Bisa Dikembangkan! 🌱";
                kesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-emerald-100 text-emerald-800 border-2 border-emerald-400 shadow";
            } else {
                kesimpulan.innerText = "Usaha Anda Berpotensi Rugi, Pertimbangkan untuk Menghentikan atau Merubah Strategi. ⚠️";
                kesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-red-100 text-red-800 border-2 border-red-400 shadow";
            }
        }

        // --- CATATAN ---
        function tambahCatatan() {
            const tgl = document.getElementById('tglCatatan').value;
            const kegiatan = document.getElementById('kegiatanCatatan').value;
            const biaya = document.getElementById('biayaCatatan').value || 0;

            if(!tgl || !kegiatan) return alert("Isi tanggal dan kegiatan!");

            const tbody = document.getElementById('tabelCatatan');
            if(tbody.innerText.includes("Belum ada catatan")) tbody.innerHTML = "";

            const row = `<tr class="hover:bg-gray-50 border-b"><td class="p-4 border-r">${tgl}</td><td class="p-4 border-r font-medium">${kegiatan}</td><td class="p-4 text-red-600 font-semibold">${formatRupiah(biaya)}</td></tr>`;
            tbody.innerHTML = row + tbody.innerHTML;
            
            document.getElementById('kegiatanCatatan').value = '';
            document.getElementById('biayaCatatan').value = '';
        }
    </script>
</body>
</html>