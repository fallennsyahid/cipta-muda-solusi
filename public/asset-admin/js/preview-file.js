document.querySelectorAll('.upload-group').forEach(group => {
    const input = group.querySelector('.file-input');
    const dropArea = group.querySelector('.drop-area');
    const preview = group.querySelector('.preview');
    const fileName = group.querySelector('.file-name');
    const fileSize = group.querySelector('.file-size');
    const previewImage = group.querySelector('.preview-image');
    const removeBtn = group.querySelector('.remove-file');

    // klik area = trigger input file
    dropArea.addEventListener('click', () => input.click());

    // pilih file manual
    input.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (!file) return;

        if (!["image/jpeg", "image/png", "image/jpg", "image/webp"].includes(file.type)) {
            alert('File harus JPEG/PNG/JPG/WEBP');
            return;
        }

        if (file.size > 5 * 1024 * 1024) {
            alert('Ukuran file maksimal 5MB!');
            return;
        }

        fileName.textContent = file.name;
        fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;

        const reader = new FileReader();
        reader.onload = (ev) => {
            previewImage.src = ev.target.result;
            previewImage.classList.remove('hidden');
        };
        reader.readAsDataURL(file);

        preview.classList.remove('hidden');
        preview.classList.add('flex');
    });

    // drag file
    dropArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropArea.classList.add('bg-text/5');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('bg-text/5');
    });

    dropArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dropArea.classList.remove('bg-text/5');

        if (e.dataTransfer.files.length > 0) {
            const file = e.dataTransfer.files[0];
            input.files = e.dataTransfer.files;

            if (!["image/jpeg", "image/png", "image/jpg", "image/webp"].includes(file.type)) {
                alert('File harus JPEG/PNG/JPG/WEBP');
                return;
            }

            if (file.size > 5 * 1024 * 1024) {
                alert('Ukuran file maksimal 5MB!');
                return;
            }

            fileName.textContent = file.name;
            fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;

            const reader = new FileReader();
            reader.onload = (ev) => {
                previewImage.src = ev.target.result;
                previewImage.classList.remove('hidden');
            };
            reader.readAsDataURL(file);

            preview.classList.remove('hidden');
            preview.classList.add('flex');
        }
    });

    // hapus file
    removeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        input.value = "";
        preview.classList.remove('flex');
        preview.classList.add('hidden');
        previewImage.src = "";
    });
});
