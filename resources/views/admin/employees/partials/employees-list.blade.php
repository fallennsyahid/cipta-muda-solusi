@foreach ($employees as $employee)
    <div
        class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-4 geometric-shape">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                @if ($employee->employee_image)
                    <img src="{{ Storage::url($employee->employee_image) }}" alt="{{ $employee->name }}"
                        class="w-16 h-16 rounded-full border border-text/25">
                @else
                    <img src="{{ Avatar::create($employee->name)->toBase64() }}" alt="{{ $employee->name }}"
                        class="w-16 h-16 rounded-full border border-text/25">
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
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="delete-form">
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
            <span class="bg-blue-200 py-1 px-3 rounded-full text-blue-700 border-blue-300 text-center text-sm w-fit">
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
