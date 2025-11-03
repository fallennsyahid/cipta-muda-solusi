@if ($jobs->isEmpty())
    <div class="col-span-1 lg:col-span-2 bg-white rounded-xl shadow-1 p-10 text-center">
        <i class="fas fa-briefcase text-5xl md:text-6xl text-primary/50 mb-3 md:mb-6"></i>
        <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-heading">Tidak Ada Lowongan</h2>
        <p class="text-text text-sm md:text-base mt-2">Kami belum membuka rekrutmen untuk saat ini.</p>
    </div>
@else
    @foreach ($jobs as $job)
        <div class="bg-white rounded-xl shadow-1 p-6">
            <div class="flex justify-between items-center mb-2">
                <h1 class="font-bold text-xl text-heading">{{ $job->position }}</h1>
                <span class="text-white bg-secondary px-3 py-2 rounded-sm">{{ $job->departement }}</span>
            </div>
            <p class="font-lato text-sm max-w-md text-text mb-3 truncate">
                {{ $job->description }}
            </p>
            <div class="flex items-center gap-6 mb-4">
                <div class="flex items-center text-text text-xs">
                    <i class="fas fa-location-dot mr-2"></i>
                    {{ $job->location }}
                </div>
                <div class="flex items-center text-text text-xs capitalize">
                    <i class="fas fa-clock mr-2"></i>
                    {{ $job->job_type }}
                </div>
                <div class="flex items-center text-text text-xs capitalize">
                    <i class="fas fa-money-bill mr-2"></i>
                    {{ $job->salary }}
                </div>
                @if ($job->job_type === 'contract')
                    <div class="flex items-center text-text text-xs">
                        <i class="fas fa-briefcase mr-2"></i>
                        {{ $job->contract_duration }}
                    </div>
                @endif
            </div>
            <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
            <div class="w-full overflow-x-auto mb-5 custom-scrollbar">
                <div class="flex flex-wrap items-center gap-4 mb-2 min-w-max">
                    @foreach ($job->skills as $skill)
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            {{ $skill }}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-between items-center">
                <h3 class="text-sm font-medium text-text">
                    Diposting {{ $job->created_at->locale('id')->diffForHumans() }}
                </h3>
                <div class="flex items-center space-x-3">
                    <button type="button" data-id="{{ $job->id }}"
                        class="open-detail-application bg-cyan-500 px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm hover:bg-cyan-600 cursor-pointer">
                        <i class="fas fa-eye mr-2"></i>
                        Lihat Detail
                    </button>
                    <a href="#" data-id="{{ $job->id }}"
                        class="open-apply bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm hover:bg-primary/90">
                        Lamar Sekarang
                        <i class="fas fa-chevron-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endif
