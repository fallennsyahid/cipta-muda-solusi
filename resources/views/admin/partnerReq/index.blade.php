<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

    <title>Cipta Muda Solusi - Partner Request</title>

    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">

    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">Partnership Requests</h1>
                <p class="text-text font-lato">Manage partnership applications and collaboration requests</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Permintaan
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-file text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalRequest }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Pending
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-amber-600 flex justify-center items-center">
                        <i class="fas fa-clock text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPendings }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Diterima
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalAccepts }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Ditolak
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalDenieds }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @foreach ($partnerReq as $request)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex flex-col">
                                <div class="flex items-center gap-3">
                                    <h1 class="text-2xl text-heading font-semibold">{{ $request->company_name }}</h1>
                                    @if ($request->company_status === 'Pending')
                                        <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                                    @elseif ($request->company_status === 'Diterima')
                                        <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Diterima</span>
                                    @else
                                        <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Ditolak</span>
                                    @endif
                                </div>
                                <span class="block mt-2 text-text font-medium">
                                    {{ $request->category->name ?? '-' }}
                                </span>
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <a href="{{ Storage::url($request->file_attachments) }}"
                                download="{{ $request->company_name }}.pdf" title="Download Lampiran"
                                class="h-9 w-9 rounded-full flex text-lg items-center justify-center cursor-pointer text-darkChoco hover:bg-text/20">
                                <i class="fas fa-download"></i>
                            </a>
                            <form action="{{ route('partnerReq.destroy', $request->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-6">
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $request->company_email }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $request->company_phone_number }}
                        </div>
                        <a href="{{ $request->company_link }}" target="_blank"
                            class="flex items-center text-primary text-base group">
                            <i class="fas fa-globe mr-2 text-text"></i>
                            <span class="group-hover:underline">
                                Website / Social Media
                            </span>
                        </a>
                        <a href="{{ Storage::url($request->file_attachments) }}" target="_blank"
                            class="flex items-center text-primary text-base group">
                            <i class="fas fa-file mr-2 text-text"></i>
                            <span class="group-hover:underline">
                                Lampiran
                            </span>
                        </a>
                    </div>

                    <div class="flex justify-between items-center mt-5">
                        <div class="text-sm text-text">
                            <i class="fas fa-calendar mr-1"></i>
                            Masuk pada {{ $request->created_at->format('d/m/Y') }}
                        </div>
                        <div class="flex items-center gap-2">
                            @if ($request->company_status === 'Pending')
                                <button type="button" data-id="{{ $request->id }}"
                                    class="update-status-btn flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                                    <i class="fas fa-edit mr-2"></i>
                                    Update Status
                                </button>
                            @else
                                <button type="button" disabled
                                    class="flex items-center text-white bg-amber-400/50 px-4 py-2 rounded-lg cursor-not-allowed">
                                    <i class="fas fa-edit mr-2"></i>
                                    Update Status
                                </button>
                            @endif

                            <button type="button" data-id="{{ $request->id }}"
                                class="call-partner flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                                <i class="fas fa-phone mr-2"></i>
                                Contact
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-end mt-4">
            {{ $partnerReq->links() }}
        </div>
    </x-admin.layout>

    {{-- Update Status Start --}}
    @foreach ($partnerReq as $request)
        <div id="update-status-{{ $request->id }}"
            class="fixed z-[99999] inset-0 hidden justify-center items-center">
            <div class="close-modal absolute bg-black/40 inset-0 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden p-4">
                <div class="flex justify-end">
                    <a href=""
                        class="close-modal w-8 h-8 text-darkChoco flex justify-center items-center rounded-full hover:bg-text/30">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <div class="flex flex-col items-center justify-center my-3 space-y-5">
                    <i class="fas fa-circle-exclamation text-7xl text-darkChoco/75"></i>
                    <h1 class="text-lg text-darkChoco font-semibold">Update Status untuk Permohonan Kerjasama</h1>
                    {{-- <p>{{ $request->company_status }}</p> --}}
                </div>

                <div class="flex items-center justify-center space-x-3">
                    <form action="{{ route('partner-request.updateStatus', $request->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="company_status" id="company_status" value="Diterima">
                        <button type="submit"
                            class="flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 cursor-pointer">
                            <i class="fas fa-circle-check mr-2"></i>
                            Accept
                        </button>
                    </form>
                    <form action="{{ route('partner-request.updateStatus', $request->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="company_status" id="company_status" value="Ditolak">
                        <button type="submit"
                            class="flex items-center justify-center text-white text-lg bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 cursor-pointer">
                            <i class="fas fa-circle-xmark mr-2"></i>
                            Denied
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Update Status End --}}

    {{-- Call Modal Start --}}
    @foreach ($partnerReq as $request)
        <div id="call-modal-{{ $request->id }}" class="fixed z-[99999] inset-0 hidden justify-center items-center">
            <div class="close-modal absolute bg-black/40 inset-0 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="flex justify-between items-center bg-gradient-to-r from-heading via-primary to-secondary p-5 relative overflow-hidden">
                    <h1 class="text-xl text-white font-bold">Pilih Metode Hubungi</h1>
                    <a href=""
                        class="close-modal w-8 h-8 text-white flex justify-center items-center rounded-full hover:bg-white/30">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <div class="flex flex-col justify-center space-y-4 p-5">
                    <a href="https://wa.me/{{ $request->company_phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Whatsapp
                    </a>
                    <a href="tel:{{ $request->company_phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-amber-500 px-4 py-2 rounded-lg hover:bg-amber-600">
                        <i class="fas fa-phone mr-2"></i>
                        Telepon
                    </a>
                    <a href="mailto:{{ $request->company_email }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">
                        <i class="fas fa-envelope mr-2"></i>
                        Email
                    </a>
                    <a href="{{ $request->company_link }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-cyan-500 px-4 py-2 rounded-lg hover:bg-cyan-600">
                        <i class="fas fa-globe mr-2"></i>
                        Website / Social Media
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Call Modal End --}}

</body>

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/partner-req.js') }}"></script>

</html>
