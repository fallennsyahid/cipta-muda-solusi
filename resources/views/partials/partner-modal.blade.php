<div id="partner-modal" class="fixed inset-0 z-[99999] hidden items-center justify-center p-2 sm:p-4">
    <div class="close-partner-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

    <div
        class="bg-white w-full max-w-[95%] sm:max-w-lg rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
        {{-- Header --}}
        <div
            class="bg-gradient-to-r from-heading via-primary to-secondary p-6 sm:p-8 text-center overflow-hidden relative">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10">
                <div
                    class="w-12 h-12 sm:w-16 sm:h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                    <i class="fas fa-handshake text-2xl sm:text-3xl"></i>
                </div>
                <h1 class="text-xl sm:text-2xl font-bold text-white mb-2">Mari Berkolaborasi!</h1>
                <p class="text-white/90 text-sm sm:text-base font-lato">Ceritakan ide kerjasama Anda dengan kami</p>
            </div>
            <button
                class="close-partner-modal absolute top-3 right-3 sm:top-4 sm:right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                <i class="fas fa-times text-base sm:text-lg"></i>
            </button>
        </div>

        {{-- Body --}}
        <div class="p-4 sm:p-8 max-h-[70vh] sm:max-h-96 overflow-y-auto custom-scrollbar">
            <form action="{{ route('user.partnerReq') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4 sm:space-y-6">
                @csrf

                {{-- Nama Perusahaan --}}
                <div class="group">
                    <label for="company_name"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-building"></i>
                        Nama Perusahaan <span class="text-red-400">*</span>
                    </label>
                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}"
                        required
                        class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                        placeholder="PT. Nama Perusahaan">
                </div>

                {{-- Email --}}
                <div class="group">
                    <label for="company_email"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-envelope"></i>
                        Email <span class="text-red-400">*</span>
                    </label>
                    <input type="email" id="company_email" name="company_email" value="{{ old('company_email') }}"
                        required
                        class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                        placeholder="nama@perusahaan.com">
                </div>

                {{-- Nomor Telepon --}}
                <div class="group">
                    <label for="company_phone_number"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-mobile-screen"></i>
                        Nomor Telepon <span class="text-red-400">*</span>
                    </label>
                    <input type="tel" id="company_phone_number" name="company_phone_number" required
                        class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                        placeholder="+62 123-3456-7890">
                </div>

                {{-- Jenis Perusahaan --}}
                <div class="group">
                    <label for="company_category"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-industry"></i>
                        Jenis Perusahaan <span class="text-red-400">*</span>
                    </label>
                    <select name="company_category" id="company_category"
                        class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                        <option value="-" disabled selected>Pilih Kategori Perusahaan Anda</option>
                        @foreach ($partnerTypes as $partnerType)
                            <option value="{{ $partnerType->id }}">{{ $partnerType->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" id="other_category_company" name="other_category_company"
                        class="hidden mt-4 w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                        placeholder="Ceritakan jenis bisnis Anda...">
                </div>

                {{-- Upload --}}
                <div class="upload-group">
                    <label for="file_attachments"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-paperclip"></i>
                        Logo Perusahaan <span class="text-red-400">*</span>
                    </label>
                    <input type="file" name="file_attachments" id="file_attachments" class="hidden" required
                        accept=".png,.webp,.jpg,.jpeg">
                    <label
                        class="drop-area p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
                        <div class="mb-4">
                            <i class="fas fa-cloud-arrow-up text-2xl text-darkChoco"></i>
                        </div>
                        <div>
                            <h1 class="text-base font-medium text-darkChoco">Choose a file or drag & drop it here</h1>
                            <p class="text-text text-sm font-medium font-lato">JPEG, PNG, JPG format, max. 5MB</p>
                        </div>
                    </label>

                    {{-- Preview --}}
                    <div class="preview hidden bg-text/10 p-4 mt-2 rounded-lg items-center justify-between">
                        <div class="flex items-center gap-3">
                            <img class="preview-image w-16 h-16 object-cover rounded-lg" alt="Preview">
                            <div>
                                <h1 class="file-name text-base text-darkChoco font-semibold">title.jpg</h1>
                                <div class="flex items-center gap-2 text-xs text-text">
                                    <span class="file-size"></span>
                                    <span>•</span>
                                    <span><i class="fa-solid fa-circle-check text-green-400"></i> Completed</span>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="remove-file">
                            <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                        </button>
                    </div>
                </div>

                {{-- Link --}}
                <div class="group">
                    <label for="company_link"
                        class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                        <i class="fas fa-globe"></i>
                        Website / Media Sosial <span class="text-red-400">*</span>
                    </label>
                    <input type="url" id="company_link" name="company_link" required
                        class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                        placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                </div>

                {{-- Submit --}}
                <div class="flex justify-center">
                    <button type="submit"
                        class="flex items-center justify-center w-full gap-2 bg-gradient-to-r from-primary via-primary to-secondary py-3 sm:py-4 px-6 sm:px-10 text-white font-semibold text-lg sm:text-xl rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                        <i class="fas fa-rocket"></i>
                        Kirim Permohonan Kerjasama
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
