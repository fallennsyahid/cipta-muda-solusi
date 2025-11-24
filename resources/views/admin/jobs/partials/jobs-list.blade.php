@foreach ($jobs as $job)
    <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
        <div class="flex justify-between">
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-3">
                    <h1 class="text-2xl text-heading font-semibold">{{ $job->position }}</h1>
                    @if ($job->status === 'Active')
                        <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">
                            Active
                        </span>
                    @else
                        <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">
                            Non-Active
                        </span>
                    @endif
                </div>
            </div>
            <div class="relative z-50 flex items-center gap-2">
                <button type="button"
                    class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                    <i class="fas fa-ellipsis"></i>
                </button>
                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cursor-pointer">
                        <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                    </button>
                </form>
            </div>
        </div>

        <span class="block mt-2 text-text font-medium text-lg">
            {{ $job->departement }}
        </span>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10">
            <div class="flex items-center text-text text-base">
                <i class="fas fa-location-dot mr-2"></i>
                {{ $job->location }}
            </div>
            @if ($job->job_type === 'contract')
                <div class="flex items-center text-text text-base capitalize">
                    <i class="fas fa-clock mr-2"></i>
                    {{ $job->job_type }} ({{ $job->contract_duration }})
                </div>
            @else
                <div class="flex items-center text-text text-base capitalize">
                    <i class="fas fa-clock mr-2"></i>
                    {{ $job->job_type }}
                </div>
            @endif

            <div class="flex items-center text-text text-base">
                <i class="fas fa-money-bill mr-2"></i>
                {{ $job->salary }}
            </div>
            <div class="flex items-center text-text text-base">
                <i class="fas fa-user-group mr-2"></i>
                {{ $job->applicants_count }} Pelamar
            </div>
        </div>

        <p class="mt-5 text-text font-lato">
            {{ $job->description }}
        </p>

        <div class="flex flex-wrap gap-2 mt-5">
            @foreach ($job->skills as $skill)
                <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                    <i class="fas fa-tag mr-2"></i>
                    {{ $skill }}
                </span>
            @endforeach
        </div>

        <div class="flex justify-between items-center mt-5">
            <div class="text-sm text-text">
                <i class="fas fa-calendar mr-1"></i>
                Dibuat pada: {{ $job->created_at->format('d/m/Y') }}
            </div>
            <div class="flex items-center gap-2">
                <button type="button" data-id="{{ $job->id }}"
                    class="open-edit-modal flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                    <i class="fas fa-edit mr-2"></i>
                    Edit Lowongan
                </button>
                <a href="{{ route('jobs.show', $job->id) }}"
                    class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                    <i class="fas fa-user-group mr-2"></i>
                    Lihat Pelamar
                </a>
            </div>
        </div>
    </div>
@endforeach
