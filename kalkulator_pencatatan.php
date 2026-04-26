<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Tani Pintar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .halaman { display: none; }
        .halaman-aktif { display: block; }
        /* Transisi halus saat pindah halaman */
        .halaman { transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-emerald-800 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center gap-2">
                    <span class="text-2xl">🌱</span>
                    <div class="font-bold text-xl tracking-wide">Tani Pintar</div>
                </div>
                <div class="flex space-x-2 md:space-x-4 overflow-x-auto py-2 text-sm md:text-base scrollbar-hide">
                    <button onclick="bukaHalaman('hal-utama')" class="halaman-menu hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-lg whitespace-nowrap font-medium transition active-halaman">Utama</button>
                    <button onclick="bukaHalaman('hal-kalkulator')" class="halaman-menu hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Kalkulator</button>
                    <button onclick="bukaHalaman('hal-catatan')" class="halaman-menu hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Catatan Budidaya</button>
                    <button onclick="bukaHalaman('hal-penyuluh')" class="halaman-menu hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-lg whitespace-nowrap font-medium transition">Kontak Penyuluh</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto p-4 md:p-8">

        <div id="hal-utama" class="halaman halaman-aktif rounded-2xl shadow-xl overflow-hidden">
            <div class="relative bg-emerald-900 text-white p-8 md:p-16 text-center rounded-2xl" style="background-image: linear-gradient(rgba(10, 50, 20, 0.7), rgba(10, 50, 20, 0.7)), url('bg1.png'); background-size: cover; background-position: center;">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4 leading-tight">Selamat Datang di<br>Tani Pintar</h1>
                <p class="text-xl text-emerald-100 max-w-2xl mx-auto">Solusi untuk memajukan usaha tani Anda dengan kalkulator modal, buku catatan digital, dan kontak penyuluh terpercaya.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-emerald-100 transition duration-300">
                    <img src="bg2.png" alt="Uang dan Tanaman" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-emerald-800 mb-2">Hitung Modal & Untung</h3>
                    <p class="text-gray-600 mb-5">Halaman ini membantu Anda merencanakan modal secara akurat agar terhindar dari kerugian.</p>
                    <button onclick="bukaHalaman('hal-kalkulator')" class="bg-emerald-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-emerald-700 text-lg">Buka Kalkulator</button>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-blue-100 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&w=600&auto=format&fit=crop" alt="Buku Catatan" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-blue-800 mb-2">Buku Catatan Budidaya</h3>
                    <p class="text-gray-600 mb-5">Halaman ini adalah buku harian digital Anda. Catat setiap pemupukan dan kegiatan penting.</p>
                    <button onclick="bukaHalaman('hal-catatan')" class="bg-blue-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-blue-700 text-lg">Buka Catatan</button>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-lg group hover:shadow-yellow-100 transition duration-300">
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=600&auto=format&fit=crop" alt="Penyuluh Pertanian" class="w-full h-40 object-cover rounded-xl mb-4 group-hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-yellow-900 mb-2">Tanya & Diskusi Ahli</h3>
                    <p class="text-gray-600 mb-5">Halaman ini menghubungkan Anda langsung dengan para penyuluh profesional untuk konsultasi.</p>
                    <button onclick="bukaHalaman('hal-penyuluh')" class="bg-yellow-600 text-white font-bold px-5 py-3 rounded-lg w-full transition hover:bg-yellow-700 text-lg">Hubungi Penyuluh</button>
                </div>
            </div>
        </div>

        <div id="hal-kalkulator" class="halaman">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden p-6 md:p-10 border border-gray-200">
                <div class="flex items-center gap-4 mb-8">
                    <img src="https://images.unsplash.com/photo-1579621970588-a35d0e7ab9b6?q=80&w=200&auto=format&fit=crop" alt="Uang" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
                    <div>
                        <h2 class="text-3xl font-bold text-emerald-800">Kalkulator Modal & Untung Tani</h2>
                        <p class="text-gray-600 mt-1">Isi data modal awal dan perkiraan hasil panen Anda di bawah ini dengan mudah.</p>
                    </div>
                </div>
                
                <form id="calcForm" class="space-y-10">
                    <section>
                        <h3 class="text-xl font-semibold text-emerald-700 border-b-2 border-emerald-200 pb-2 mb-6">Biaya Tetap (Modal Awal)</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Sewa Lahan per Musim (Rp)</label>
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
                                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Bisa Dipakai Berapa Musim Panen?</label>
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
                        Hitung Keuntungan Sekarang
                    </button>
                </form>

                <div id="panelHasil" class="mt-12 hidden bg-gray-50 border-2 border-emerald-500 rounded-2xl p-8 shadow-inner">
                    <h3 class="text-3xl font-bold text-center text-gray-800 mb-8">Laporan Analisa Panen Anda</h3>
                    
                    <div class="space-y-6 text-xl">
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-600">Total Modal (Pengeluaran):</span>
                            <span id="outTotalBiaya" class="font-semibold text-red-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3">
                            <span class="text-gray-600">Pendapatan Kotor:</span>
                            <span id="outPendapatan" class="font-semibold text-blue-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-200 pb-3 mt-5">
                            <span class="text-gray-800 font-bold">Keuntungan Bersih:</span>
                            <span id="outKeuntungan" class="font-bold text-3xl text-emerald-600">Rp 0</span>
                        </div>
                        <div class="flex justify-between items-center pt-3">
                            <span class="text-gray-600 text-sm">Skor Kelayakan (R/C Ratio):<br><i class="text-xs text-gray-400">(Jika > 1, artinya menguntungkan)</i></span>
                            <span id="outRCRatio" class="font-bold text-2xl px-4 py-1.5 bg-gray-200 rounded-lg shadow-sm">0.00</span>
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
                    <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&w=200&auto=format&fit=crop" alt="Catatan" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
                    <div>
                        <h2 class="text-3xl font-bold text-blue-800">Buku Harian Digital Budidaya</h2>
                        <p class="text-gray-600 mt-1">Catat setiap kegiatan dan biaya keluar agar tidak lupa kapan Anda memupuk.</p>
                    </div>
                </div>
                
                <form id="formCatatan" class="mb-10 bg-blue-50 p-6 rounded-2xl border border-blue-200 shadow-inner">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal</label>
                            <input type="date" id="tglCatatan" class="w-full px-4 py-3 border border-gray-300 rounded-lg" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Kegiatan (Contoh: Pemupukan NPK)</label>
                            <input type="text" id="kegiatanCatatan" class="w-full px-4 py-3 border border-gray-300 rounded-lg" placeholder="Ngapain hari ini?" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Biaya Keluar (Rp)</label>
                            <input type="number" id="biayaCatatan" class="w-full px-4 py-3 border border-gray-300 rounded-lg" placeholder="0">
                        </div>
                    </div>
                    <button type="button" onclick="tambahCatatan()" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-5 rounded-lg w-full text-lg shadow">
                        + Simpan Kegiatan
                    </button>
                </form>

                <h3 class="font-bold text-xl text-gray-700 mb-4 border-b pb-2 flex items-center gap-2"><span>🗓️</span> Riwayat Kegiatan Anda:</h3>
                <div class="overflow-x-auto shadow-sm rounded-lg border">
                    <table class="w-full text-left border-collapse bg-white">
                        <thead>
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="p-4 border-b font-semibold">Tanggal</th>
                                <th class="p-4 border-b font-semibold">Kegiatan</th>
                                <th class="p-4 border-b font-semibold">Biaya Keluar</th>
                            </tr>
                        </thead>
                        <tbody id="tabelCatatan" class="text-gray-600 text-lg">
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
                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?q=80&w=200&auto=format&fit=crop" alt="Ahli" class="w-20 h-20 object-cover rounded-xl shadow-md border border-gray-100">
                    <div>
                        <h2 class="text-3xl font-bold text-yellow-900">Kontak Penyuluh Pertanian</h2>
                        <p class="text-gray-600 mt-1">Konsultasikan permasalahan tanaman dengan ahlinya.</p>
                    </div>
                </div>
                                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">PM</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Pak Meyer</h4>
                            <p class="text-sm text-gray-500">POPT KABUPATEN GROBOGAN</p>
                        </div>
                        <a href="https://wa.me/6281391632231?text=Halo%20Pak%20Meyer,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">LA</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Laela Anjani</h4>
                            <p class="text-sm text-gray-500">Mahasiswa Politeknik Pembangunan Pertanian Yogyakarta Magelang</p>
                        </div>
                        <a href="https://wa.me/6283831463275?text=Halo%20Ananda%20Laela,%20saya%20petani%20mau%20bertanya%20soal%20pertanian" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">BS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Bu Sofi</h4>
                            <p class="text-sm text-gray-500">Koordinator Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6281575352940?text=Halo%20Bu%20Sofi,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                           💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IL</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Laeli</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285290728684?text=Halo%20Bu%20Laeli,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Sinta</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/628812799737?text=Halo%20Bu%20Sinta,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">PB</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Pak bagus</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6288228836803?text=Halo%20Pak%20Bagus,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IE</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Eny</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285866908210?text=Halo%20Bu%20Eny,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">PA</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Pak Agung</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6285226196442?text=Halo%20Pak%20Agung,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IS</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Sari</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/62882003927542?text=Halo%20Bu%20Sari,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                    <div class="flex items-center gap-6 p-6 bg-white border border-gray-100 shadow-md rounded-2xl group transition hover:border-yellow-200">
                        <div class="bg-yellow-200 text-yellow-900 text-2xl font-bold w-16 h-16 flex items-center justify-center rounded-full shadow-inner border-2 border-white">IY</div>
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 text-lg">Ibu Yoana</h4>
                            <p class="text-sm text-gray-500">Peyuluh Pertanian Lapang BPP Kecamatan Toroh</p>
                        </div>
                        <a href="https://wa.me/6289670907862?text=Halo%20Bu%20Yoana,%20saya%20petani%20mau%20bertanya%20konsultasi" target="_blank" class="bg-emerald-500 hover:bg-emerald-600 text-white p-3 rounded-full text-lg shadow transition transform hover:scale-110">
                            💬 
                        </a>
                    </div>
                </div>
                <p class="text-center mt-12 italic text-gray-400">Semua konsultasi bersifat Rahasia & Terpercaya.</p>
            </div>
        </div>

    </div>

    <script>
        // --- 1. Fungsi Format Angka ke Rupiah ---
        const formatRupiah = (angka) => {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(angka);
        };

        // --- 2. Fungsi Khusus Hitung Penyusutan ---
        function hitungOtomatisPenyusutan() {
            const hargaAlat = parseFloat(document.getElementById('hargaBeliAlat').value) || 0;
            let umurAlat = parseFloat(document.getElementById('umurAlat').value) || 0;
            
            let penyusutan = 0;
            // Rumus: Harga Beli / Berapa musim dipakai
            if (hargaAlat > 0 && umurAlat > 0) {
                penyusutan = hargaAlat / umurAlat;
            } else if (hargaAlat > 0 && umurAlat === 0) {
                // Anggap untuk 1 musim dulu jika umur belum diisi
                penyusutan = hargaAlat; 
            }

            // Tampilkan ke layar
            document.getElementById('hasilPenyusutanTeks').innerText = formatRupiah(penyusutan);
            // Simpan ke input tersembunyi
            document.getElementById('penyusutanAlat').value = penyusutan;
        }

        // Pasang "pendengar" saat input harga/umur diketik
        document.getElementById('hargaBeliAlat').addEventListener('input', hitungOtomatisPenyusutan);
        document.getElementById('umurAlat').addEventListener('input', hitungOtomatisPenyusutan);

        // --- 3. Fungsi Utama Hitung Kalkulator ---
        function hitungAnalisa() {
            // Ambil data dari form
            const sewaLahan = parseFloat(document.getElementById('sewaLahan').value) || 0;
            const penyusutanAlat = parseFloat(document.getElementById('penyusutanAlat').value) || 0;
            const biayaBibit = parseFloat(document.getElementById('biayaBibit').value) || 0;
            const biayaPupuk = parseFloat(document.getElementById('biayaPupuk').value) || 0;
            const biayaTenagaKerja = parseFloat(document.getElementById('biayaTenagaKerja').value) || 0;
            const jumlahPanen = parseFloat(document.getElementById('jumlahPanen').value) || 0;
            const hargaJual = parseFloat(document.getElementById('hargaJual').value) || 0;

            // Proses Matematika
            const totalBiayaTetap = sewaLahan + penyusutanAlat;
            const totalBiayaVariabel = biayaBibit + biayaPupuk + biayaTenagaKerja;
            const totalBiaya = totalBiayaTetap + totalBiayaVariabel;
            
            const totalPendapatan = jumlahPanen * hargaJual;
            const keuntunganBersih = totalPendapatan - totalBiaya;
            
            // Hitung R/C Ratio
            let rcRatio = 0;
            if (totalBiaya > 0) {
                rcRatio = totalPendapatan / totalBiaya;
            }

            // Tampilkan Hasil ke HTML
            document.getElementById('outTotalBiaya').innerText = formatRupiah(totalBiaya);
            document.getElementById('outPendapatan').innerText = formatRupiah(totalPendapatan);
            
            const elKeuntungan = document.getElementById('outKeuntungan');
            elKeuntungan.innerText = formatRupiah(keuntunganBersih);
            
            // Ubah warna teks jika rugi
            if(keuntunganBersih < 0) {
                elKeuntungan.classList.replace('text-emerald-600', 'text-red-600');
            } else {
                elKeuntungan.classList.replace('text-red-600', 'text-emerald-600');
            }

            document.getElementById('outRCRatio').innerText = rcRatio.toFixed(2);

            // Logika Kesimpulan
            const elKesimpulan = document.getElementById('outKesimpulan');
            if (rcRatio > 1) {
                elKesimpulan.innerText = "Alhamdulillah, Usaha Anda Menguntungkan! 🌱";
                elKesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-emerald-100 text-emerald-800 border-2 border-emerald-400 shadow";
            } else if (totalBiaya === 0 && totalPendapatan === 0) {
                elKesimpulan.innerText = "Silakan masukkan data modal dan panen Anda di atas.";
                elKesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-gray-100 text-gray-800 border-2 border-gray-300 shadow";
            } else if (rcRatio === 1) {
                elKesimpulan.innerText = "Usaha Anda Balik Modal (Tidak Untung, Tidak Rugi).";
                elKesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-yellow-100 text-yellow-800 border-2 border-yellow-400 shadow";
            } else {
                elKesimpulan.innerText = "Waspada! Usaha Anda Berpotensi Rugi. Evaluasi Pengeluaran Anda! ⚠️";
                elKesimpulan.className = "text-xl font-bold py-5 px-6 rounded-2xl bg-red-100 text-red-800 border-2 border-red-400 shadow";
            }

            // Munculkan panel hasil
            document.getElementById('panelHasil').classList.remove('hidden');
        }

        // --- 4. Fungsi Pindah Halaman & Gaya Navigasi ---
        function bukaHalaman(idHalamanTujuan) {
            // Sembunyikan semua halaman
            let semuaHalaman = document.querySelectorAll('.halaman');
            semuaHalaman.forEach(halaman => halaman.classList.remove('halaman-aktif'));

            // Tampilkan halaman tujuan
            document.getElementById(idHalamanTujuan).classList.add('halaman-aktif');

            // Ganti gaya nav untuk tombol menu yang aktif
            let semuaTombolMenu = document.querySelectorAll('.halaman-menu');
            semuaTombolMenu.forEach(tombol => tombol.classList.remove('bg-emerald-700', 'text-white'));

            // Beri warna khusus pada tombol yang barusan ditekan
            let tombolAktif = [...semuaTombolMenu].find(t => t.innerText.includes(idHalamanTujuan.replace('hal-', '').charAt(0).toUpperCase() + idHalamanTujuan.replace('hal-', '').slice(1)));
            // Trik: Karena nama halamannya berbeda, kita pakai manual saja:
            if(idHalamanTujuan === 'hal-utama') tombolAktif = semuaTombolMenu[0];
            if(idHalamanTujuan === 'hal-kalkulator') tombolAktif = semuaTombolMenu[1];
            if(idHalamanTujuan === 'hal-catatan') tombolAktif = semuaTombolMenu[2];
            if(idHalamanTujuan === 'hal-penyuluh') tombolAktif = semuaTombolMenu[3];
            
            if(tombolAktif) tombolAktif.classList.add('bg-emerald-700', 'text-white');
        }

        // --- 5. Fungsi Buku Catatan Budidaya ---
        function tambahCatatan() {
            let tgl = document.getElementById('tglCatatan').value;
            let kegiatan = document.getElementById('kegiatanCatatan').value;
            let biaya = document.getElementById('biayaCatatan').value || 0;

            if(tgl === '' || kegiatan === '') {
                alert("Tanggal dan Kegiatan harus diisi ya, Pak/Bu!");
                return;
            }

            let biayaFormat = formatRupiah(biaya);

            // Hapus baris 'belum ada catatan' jika ada
            let tBody = document.getElementById('tabelCatatan');
            if (tBody.innerText.includes("Belum ada catatan")) {
                tBody.innerHTML = "";
            }

            // Buat baris baru
            let barisBaru = `
                <tr class="hover:bg-gray-50 border-b">
                    <td class="p-4 border-r">${tgl}</td>
                    <td class="p-4 border-r font-medium text-gray-900">${kegiatan}</td>
                    <td class="p-4 text-red-600 font-semibold">${biayaFormat}</td>
                </tr>
            `;

            // Masukkan
            tBody.innerHTML = barisBaru + tBody.innerHTML; // Tambah di paling atas

            // Kosongkan form
            document.getElementById('kegiatanCatatan').value = '';
            document.getElementById('biayaCatatan').value = '';
        }

        // --- 6. Inisialisasi: Beri warna tombol menu pertama (Utama) ---
        document.querySelectorAll('.halaman-menu')[0].classList.add('bg-emerald-700', 'text-white');
    </script>
</body>
</html>