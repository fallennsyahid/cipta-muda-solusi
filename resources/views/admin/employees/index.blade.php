<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

    <title>Cipta Muda Solusi - Blogs</title>

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
                <h1 class="text-2xl text-heading font-bold">Employee Management</h1>
                <p class="text-text font-lato">Manage employee data and personnel information</p>
            </div>
            <div>
                <a href="{{ route('employee.export') }}"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-green-500 via-green-600 to-green-700 cursor-pointer hover:from-green-600 hover:via-green-700 hover:to-green-800 transition">
                    <i class="fas fa-file-excel"></i>
                    Export Excel
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-users text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalEmployees }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Active Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-user-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalActiveEmployees }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Inactive/Resigned Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-user-slash text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalNonActiveEmployees }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        New Hires
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-user-plus text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalNewHires }}
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape flex flex-col lg:flex-row items-center gap-3">
            <div class="relative w-full lg:w-4/5">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-magnifying-glass text-text"></i>
                </div>

                <input type="search" name="searchEmployee" id="searchEmployee" placeholder="Cari Blog.."
                    class="w-full block pl-10 pr-4 py-2 border border-text/25 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-base">
            </div>

            <div class="w-full lg:w-1/5">
                <select name="filterStatus" id="filterStatus"
                    class="w-full block px-4 py-2 border border-text/25 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-base">
                    <option value="-">Semua Status</option>
                    @foreach ($statusEmployees as $status)
                        <option value="{{ $status->value }}">{{ $status->value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="employeesList">
            @foreach ($employees as $employee)
                <div
                    class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-4 geometric-shape">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            @if ($employee->employee_image)
                                <img src="{{ Storage::url($employee->employee_image) }}" alt="{{ $employee->name }}"
                                    class="w-16 h-16 rounded-full border border-text/25">
                            @else
                                <img src="{{ Avatar::create($employee->name)->toBase64() }}"
                                    alt="{{ $employee->name }}" class="w-16 h-16 rounded-full border border-text/25">
                            @endif
                            <div class="flex flex-col">
                                <h1 class="text-lg font-semibold text-text">{{ $employee->name }}</h1>
                                <span
                                    class="{{ $employee->status === 'Active' ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700' }} py-1 px-3 rounded-full text-center text-sm w-fit">
                                    {{ $employee->status === 'Active' ? 'Aktif' : 'Non-Aktif' }}
                                </span>
                            </div>
                        </div>

                        <div class="relative">
                            <button type="button" data-id="{{ $employee->id }}"
                                class="dropdown-button flex items-center justify-center h-8 w-8 rounded-full cursor-pointer hover:bg-gray-200 relative z-10">
                                <i class="fas fa-ellipsis-vertical text-darkChoco"></i>
                            </button>

                            <div id="dropdown-menu-{{ $employee->id }}"
                                class="absolute right-0 p-1 bg-white rounded-lg border border-text/25 min-w-16 shadow-md space-y-3 scale-y-0 origin-top transition-all duration-300 ease-in-out overflow-hidden">
                                @if ($employee->status === 'Active')
                                    <form action="{{ route('employee.toggleStatus', $employee->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-darkChoco hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                            <i class="fas fa-user-xmark"></i>
                                            Nonaktifkan
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('employee.toggleStatus', $employee->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-darkChoco hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                            <i class="fas fa-user-check"></i>
                                            Aktifkan
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-red-700 hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col mt-4 space-y-2">
                        <span
                            class="bg-blue-200 py-1 px-3 rounded-full text-blue-700 border-blue-300 text-center text-sm w-fit">
                            {{ $employee->position }}
                        </span>
                        <span class="flex items-center text-text text-sm">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $employee->email }}
                        </span>
                        <span class="flex items-center text-text text-sm">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $employee->phone_number }}
                        </span>
                        <span class="flex items-center text-text text-sm">
                            <i class="fas fa-calendar-days mr-2"></i>
                            Bergabung pada: {{ $employee->created_at->format('d/m/Y') }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-end mt-4">
            {{ $employees->links() }}
        </div>

    </x-admin.layout>

</body>

<script>
    (function() {
        const searchEl = document.getElementById('searchEmployee'); // input pencarian
        const filterEl = document.getElementById('filterStatus'); // dropdown status
        const employeeListEl = document.getElementById('employeesList'); // container data employee
        const searchUrl = `{{ route('employee.search') }}`; // URL endpoint pencarian

        // 🕒 Debounce helper (supaya fetch tidak terlalu sering dipanggil)
        function debounce(fn, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => fn.apply(this, args), delay);
            };
        }

        // 🚀 Ambil & render hasil pencarian
        async function fetchAndRender() {
            try {
                const q = searchEl.value.trim();
                const status = filterEl.value;

                const url = new URL(searchUrl, window.location.origin);
                if (q) url.searchParams.set('q', q);
                if (status && status !== '-') url.searchParams.set('status', status);

                const res = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                if (!res.ok) throw new Error('Network error');

                const html = await res.text();

                // Jika hasil kosong
                if (!html.trim()) {
                    employeeListEl.innerHTML = `
                    <div class="flex flex-col justify-center items-center py-20 col-span-full">
                        <i class="fas fa-circle-exclamation text-5xl mb-4 text-gray-400"></i>
                        <p class="text-lg font-medium text-gray-500">Tidak ada hasil yang sesuai</p>
                    </div>
                `;
                } else {
                    employeeListEl.innerHTML = html;
                }
            } catch (err) {
                console.error(err);
                employeeListEl.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center py-10 text-red-500">
                        <i class="fas fa-triangle-exclamation text-3xl mb-2"></i>
                        <p class="text-lg font-medium">Terjadi kesalahan saat memuat data</p>
                    </td>
                </tr>
            `;
            }
        }

        const debouncedFetch = debounce(fetchAndRender, 300);

        // 🔍 Event input pencarian
        searchEl.addEventListener('input', debouncedFetch);

        // 🧹 Event tombol X di search input (jika user klik clear)
        searchEl.addEventListener('search', fetchAndRender);

        // 🎛️ Event filter status
        filterEl.addEventListener('change', fetchAndRender);

        // 🟢 Dropdown menu (aktifkan/ nonaktifkan/ hapus)
        document.addEventListener('click', function(e) {
            const button = e.target.closest('.dropdown-button');
            if (button) {
                const id = button.dataset.id;
                const menu = document.getElementById(`dropdown-menu-${id}`);
                if (menu) {
                    menu.classList.toggle('scale-y-100');
                    menu.classList.toggle('scale-y-0');
                }
            }
        });

        // Tutup dropdown jika klik di luar
        document.addEventListener('click', function(e) {
            const isDropdown = e.target.closest('.dropdown-button');
            const isMenu = e.target.closest('[id^="dropdown-menu-"]');
            if (!isDropdown && !isMenu) {
                document.querySelectorAll('[id^="dropdown-menu-"]').forEach(menu => {
                    menu.classList.remove('scale-y-100');
                    menu.classList.add('scale-y-0');
                });
            }
        });
    })();
</script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin menghapus',
                text: 'Data yang sudah dihapus tidak dapat dipulihkan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500,
        });
    @endif
</script>

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/employee.js') }}"></script>

</html>
