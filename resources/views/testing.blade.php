<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-300">

    <!-- Tombol Trigger -->
    <button id="openModal"
        class="px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white font-semibold rounded-xl shadow-lg hover:scale-105 transform transition">
        Ingin menjadi partner kami? Hubungi Kami
    </button>

    <!-- Modal Background -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div
            class="absolute -top-20 -right-20 w-96 h-96 bg-gradient-to-br from-purple-200 to-blue-200 rounded-full opacity-30 animate-float">
        </div>
        <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-gradient-to-tr from-pink-200 to-purple-200 rounded-full opacity-30 animate-float"
            style="animation-delay: -3s;"></div>
    </div>

    <!-- Demo Button to show modal -->
    <button onclick="document.getElementById('partnerModal').classList.remove('hidden')"
        class="fixed top-8 left-8 bg-gradient-to-r from-purple-500 to-blue-500 text-white px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
        🤝 Buka Form Partner
    </button>

    <!-- Modal -->
    <div id="partnerModal"
        class="fixed inset-0 bg-black/50 backdrop-blur-md hidden z-50 flex items-center justify-center p-4 animate-fadeIn">
        <!-- Modal Box -->
        <div
            class="bg-white/95 backdrop-blur-sm w-full max-w-lg rounded-3xl shadow-2xl relative animate-slideUp border border-white/20 overflow-hidden">

            <!-- Header dengan gradient -->
            <div
                class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-8 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                        <span class="text-3xl">🤝</span>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-2">Mari Berkolaborasi!</h2>
                    <p class="text-white/90 text-sm">Ceritakan ide kerjasama Anda dengan kami</p>
                </div>

                <!-- Close Button -->
                <button id="closeModal"
                    class="absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white transition-all duration-200 hover:rotate-90">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Form Content -->
            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">

                    <!-- Nama Perusahaan -->
                    <div class="group">
                        <label for="company"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            🏢 Nama Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="company" name="company" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm"
                            placeholder="PT. Contoh Perusahaan" />
                    </div>

                    <!-- Email -->
                    <div class="group">
                        <label for="email"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            📧 Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm"
                            placeholder="nama@perusahaan.com" />
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="group">
                        <label for="phone"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            📱 Nomor Telepon <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm"
                            placeholder="+62 812-3456-7890" />
                    </div>

                    <!-- Jenis Perusahaan -->
                    <div class="group">
                        <label for="type"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            🏭 Jenis Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <select id="type" name="type" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm cursor-pointer">
                            <option value="" disabled selected>Pilih kategori bisnis Anda</option>
                            <option value="fnb">🍔 Food & Beverage</option>
                            <option value="tech">💻 Teknologi</option>
                            <option value="education">📚 Pendidikan</option>
                            <option value="retail">🛍️ Retail</option>
                            <option value="finance">💰 Keuangan</option>
                            <option value="healthcare">🏥 Kesehatan</option>
                            <option value="other">✨ Lainnya</option>
                        </select>

                        <!-- Input untuk "Lainnya" -->
                        <input type="text" id="otherType" name="otherType"
                            placeholder="Ceritakan jenis bisnis Anda..."
                            class="mt-3 w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm hidden" />
                    </div>

                    <!-- Pesan -->
                    <div class="group">
                        <label for="message"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            💬 Ceritakan Ide Kerjasama <span class="text-red-400">*</span>
                        </label>
                        <textarea id="message" name="message" rows="4" maxlength="400" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 hover:bg-white text-sm resize-none"
                            placeholder="Kami ingin berkolaborasi dalam hal... Mari diskusikan peluang yang bisa kita kembangkan bersama! ✨"></textarea>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-xs text-slate-500">Ceritakan visi kerjasama Anda</p>
                            <p class="text-xs font-medium text-slate-600" id="charCount">0 / 400</p>
                        </div>
                    </div>

                    <!-- Upload File -->
                    <div class="group">
                        <label for="file"
                            class="block text-sm font-medium text-slate-700 mb-2 group-hover:text-indigo-600 transition-colors">
                            📎 Lampiran (Opsional)
                        </label>
                        <div class="relative">
                            <input type="file" id="file" name="file"
                                accept=".pdf,.doc,.docx,.jpg,.png,.ppt,.pptx"
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-gradient-to-r file:from-indigo-500 file:to-purple-500 file:text-white hover:file:from-indigo-600 hover:file:to-purple-600 file:transition-all text-sm text-slate-600" />
                        </div>
                        <p class="text-xs text-slate-500 mt-1">Portofolio, proposal, atau dokumen pendukung</p>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 text-sm flex items-center justify-center space-x-2">
                            <span>🚀</span>
                            <span>Kirim Proposal Kerjasama</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="bg-slate-50 px-8 py-4 text-center border-t border-slate-100">
                <p class="text-xs text-slate-500">
                    Tim kami akan merespons dalam 1-2 hari kerja 💌
                </p>
            </div>
        </div>
    </div>


    <!-- Script -->
    <script>
        const openModal = document.getElementById('openModal');
        const closeModal = document.getElementById('closeModal');
        const partnerModal = document.getElementById('partnerModal');
        const message = document.getElementById('message');
        const charCount = document.getElementById('charCount');

        // Buka modal
        openModal.addEventListener('click', () => {
            partnerModal.classList.remove('hidden');
        });

        // Tutup modal
        closeModal.addEventListener('click', () => {
            partnerModal.classList.add('hidden');
        });

        // Hitung karakter pesan
        message.addEventListener('input', () => {
            charCount.textContent = `${message.value.length} / 400 karakter`;
        });

        const typeSelect = document.getElementById('type');
        const otherInput = document.getElementById('otherType');

        typeSelect.addEventListener('change', () => {
            if (typeSelect.value === 'other') {
                otherInput.classList.remove('hidden'); // tampilkan input
                otherInput.required = true; // jadikan wajib diisi
            } else {
                otherInput.classList.add('hidden'); // sembunyikan input
                otherInput.required = false; // tidak wajib
                otherInput.value = ''; // reset value
            }
        });
    </script>

    <!-- Animasi -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Custom scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>

</body>

</html>
