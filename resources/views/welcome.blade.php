<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Kritik & Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-4">
        <form action="{{ route('submit.all') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Form Pengirim -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-gray-800">Form Pengirim</h3>
                <div class="mt-4">
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required />
                </div>

                <div class="mt-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required />
                </div>
            </div>

            <!-- Form Transaksi -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-gray-800">Form Transaksi</h3>

                <div class="mt-4">
                    <label for="metode_id" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                    <select id="metode_id" name="metode_id" class="mt-1 w-full p-2 border border-gray-300 rounded-md"
                        required>
                        <option value="">Pilih Metode Pembayaran</option>
                        @foreach ($metodePembayarans as $metode)
                            <option value="{{ $metode->id }}">{{ $metode->nama_metode }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <label for="status_pembayaran" class="block text-sm font-medium text-gray-700">Status
                        Pembayaran</label>
                    <select id="status_pembayaran" name="status_pembayaran"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="pending">Pending</option>
                        <option value="sukses">Sukses</option>
                        <option value="gagal">Gagal</option>
                    </select>
                </div>
                <div class="mt-4">
                    <label for="total_pembayaran" class="block text-sm font-medium text-gray-700">Total
                        Pembayaran</label>
                    <input type="number" id="total_pembayaran" name="total_pembayaran"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required />
                </div>

                <div class="mt-4">
                    <label for="tanggal_transaksi" class="block text-sm font-medium text-gray-700">Tanggal
                        Transaksi</label>
                    <input type="datetime-local" id="tanggal_transaksi" name="tanggal_transaksi"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required />
                </div>
            </div>

            <!-- Form Kritik Saran -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-2xl font-bold text-gray-800">Form Kritik & Saran</h3>

                <div class="mt-4">
                    <label for="isi_pesan" class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                    <textarea id="isi_pesan" name="isi_pesan" rows="4" class="mt-1 w-full p-2 border border-gray-300 rounded-md"
                        required></textarea>
                </div>

                <div class="mt-4">
                    <label for="kepuasan" class="block text-sm font-medium text-gray-700">Kepuasan (1-5)</label>
                    <select id="kepuasan" name="kepuasan" class="mt-1 w-full p-2 border border-gray-300 rounded-md"
                        required>
                        <option value="1">1 - Sangat Tidak Puas</option>
                        <option value="2">2</option>
                        <option value="3">3 - Cukup</option>
                        <option value="4">4</option>
                        <option value="5">5 - Sangat Puas</option>
                    </select>
                </div>

                <div class="mt-4">
                    <label for="status_tanggapan" class="block text-sm font-medium text-gray-700">Status
                        Tanggapan</label>
                    <select id="status_tanggapan" name="status_tanggapan"
                        class="mt-1 w-full p-2 border border-gray-300 rounded-md" required>
                        <option value="belum_ditanggapi">Belum Ditanggapi</option>
                        <option value="ditanggapi">Ditanggapi</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="/" class="px-6 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded-md font-medium">
                    Kembali
                </a>
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md font-medium">
                    Kirim Semua
                </button>
            </div>

        </form>
    </div>
</body>

</html>
