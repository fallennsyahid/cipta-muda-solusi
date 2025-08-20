<nav class="bg-gray-200 px-6 py-5 flex flex-col lg:flex-row justify-between items-start gap-3 w-full shadow-md">
    <div class="flex justify-start items-center gap-2">
        <h1 class="text-heading font-bold text-2xl">
            {{ ucwords(str_replace(['.', 'index'], [' ', ''], Route::currentRouteName())) }}
        </h1>
    </div>
    <div class="hidden lg:flex flex-col lg:flex-row items-center w-full lg:w-auto">
        <input type="search" name="search" id="search" placeholder="Searching..."
            class="bg-white w-full lg:w-75 px-3 py-2.5 text-sm rounded-l-sm placeholder:text-black/50 focus:outline-none">
        <button type="button"
            class="text-white bg-primary px-3 py-2.5 text-sm rounded-r-sm cursor-pointer w-full lg:w-auto mt-2 lg:mt-0">
            <i class="fas fa-magnifying-glass"></i>
        </button>
    </div>
</nav>
