<div>
    <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="border">
        </div>

        <div>
            <label for="type">Type</label>
            <select name="type" id="type">
                {{-- <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="internship">Internship</option>
                <option value="freelance">Freelance</option> --}}
                <option value="-">Pilih Tipe Pekerjaan</option>
                @foreach ($types as $type)
                    <option value="{{ $type->value }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="border">
        </div>

        <div>
            <label for="photo">Image</label>
            <input type="file" id="photo" name="photo" class="border">
        </div>

        <div><button type="submit">Submit</button></div>
    </form>
</div>
