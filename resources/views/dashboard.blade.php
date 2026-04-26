<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="/" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition duration-200 ease-in-out transform hover:scale-105">
                📝 Ke Todo List
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="mb-8">
                <div class="bg-gradient-to-r from-blue-600 to-blue-500 rounded-2xl shadow-lg overflow-hidden">
                    <div class="px-8 py-12 text-white">
                        <h1 class="text-4xl font-bold mb-2">
                            👋 Selamat Datang!
                        </h1>
                        <p class="text-blue-100 text-lg">
                            Anda berhasil login. Kelola tugas-tugas Anda dengan mudah dan efisien.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 p-6 border-l-4 border-blue-600">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-700 font-semibold text-lg">Tasks</h3>
                        <span class="text-3xl">✅</span>
                    </div>
                    <p class="text-gray-600 mb-2">Total Tugas Anda</p>
                    <p class="text-3xl font-bold text-blue-600">-</p>
                    <p class="text-gray-500 text-sm mt-2">Update otomatis dari database</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 p-6 border-l-4 border-green-600">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-700 font-semibold text-lg">Completed</h3>
                        <span class="text-3xl">🎉</span>
                    </div>
                    <p class="text-gray-600 mb-2">Tugas Selesai</p>
                    <p class="text-3xl font-bold text-green-600">-</p>
                    <p class="text-gray-500 text-sm mt-2">Terus tingkatkan produktivitas</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300 p-6 border-l-4 border-purple-600">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-gray-700 font-semibold text-lg">Pending</h3>
                        <span class="text-3xl">⏳</span>
                    </div>
                    <p class="text-gray-600 mb-2">Tugas Menunggu</p>
                    <p class="text-3xl font-bold text-purple-600">-</p>
                    <p class="text-gray-500 text-sm mt-2">Prioritaskan tugas penting</p>
                </div>
            </div>

            <!-- Main Content Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <div class="border-b border-gray-200 pb-6 mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        {{ __("Kamu berhasil login! 🚀") }}
                    </h2>
                    <p class="text-gray-600">
                        Aplikasi siap membantu Anda mengelola daftar tugas dengan lebih produktif.
                    </p>
                </div>

                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl">📌</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-1">Buat Tugas</h3>
                            <p class="text-gray-600 text-sm">Tambahkan tugas baru dengan deskripsi lengkap</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl">✔️</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-1">Tandai Selesai</h3>
                            <p class="text-gray-600 text-sm">Tandai tugas sebagai selesai ketika dikerjakan</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl">🗑️</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-1">Hapus Tugas</h3>
                            <p class="text-gray-600 text-sm">Hapus tugas yang tidak lagi diperlukan</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl">🎯</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800 mb-1">Pantau Progress</h3>
                            <p class="text-gray-600 text-sm">Lihat statistik dan progress tugas Anda</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center">
                <a href="/" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 text-white font-semibold rounded-lg shadow-lg transition duration-200 transform hover:scale-105">
                    ⭐ Mulai Kelola Tugas Sekarang
                </a>
            </div>
        </div>
    </div>
</x-app-layout>