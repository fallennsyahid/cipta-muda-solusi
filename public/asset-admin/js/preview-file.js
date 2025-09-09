const input = document.querySelector('#image');
const dropArea = document.querySelector('#drop-area');
const preview = document.querySelector('#preview-file');
const fileName = document.querySelector('#file-name');
const fileSize = document.querySelector('#file-size');
const removeBtn = document.querySelector('#remove-file');

input.addEventListener('change', (e) => {
    handleFile(e.target.files[0]);
});

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
        handleFile(file);
    }
});

function handleFile(file) {
    if (!file) return;

    const validTypes = ["image/jpeg", "image/png", "image/jpg"];
    if (!validTypes.includes(file.type)) {
        alert('File harus JPEG/PNG/JPG');
        return;
    }

    if (file.size > 5 * 1024 * 1024) {
        alert('Ukuran file maksimal 5MB!');
        return;
    }

    fileName.textContent = file.name;
    fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;
    preview.classList.remove('hidden');
    preview.classList.add('flex');
}

removeBtn.addEventListener('click', (e) => {
    e.preventDefault();

    input.value = "";
    preview.classList.remove('flex');
    preview.classList.add('hidden');
});