<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - Tani Pintar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-emerald-900 font-['Poppins'] flex items-center justify-center min-h-screen px-4">

    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl w-full max-w-md">
        <div class="text-center mb-8">
            <span class="text-4xl">🌱</span>
            <h2 class="text-3xl font-extrabold text-emerald-800 mt-2">Daftar Akun</h2>
            <p class="text-gray-500 mt-1">Bergabung dengan Portal Tani Pintar</p>
        </div>
        
        <form action="proses_register.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Username Baru</label>
                <input type="text" name="username" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 shadow-sm" placeholder="Pilih username" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                <input type="password" name="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-emerald-500 focus:border-emerald-500 shadow-sm" placeholder="••••••••" required>
            </div>
            <button type="submit" class="w-full bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-3 px-4 rounded-xl shadow-lg text-lg transition duration-200">
                Daftar Sekarang
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Sudah punya akun? 
                <a href="index.php" class="text-emerald-600 font-bold hover:underline">Masuk di sini</a>
            </p>
        </div>

        <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
            <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-600 text-sm text-center">
                Pendaftaran gagal. Username mungkin sudah digunakan.
            </div>
        <?php endif; ?>
    </div>

</body>
</html>