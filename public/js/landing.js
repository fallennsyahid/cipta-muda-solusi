/**
 * Landing Page Scripts
 * PT. Cipta Muda Solusi
 */

document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper
    initSwiper();

    // Initialize File Upload
    initFileUpload();

    // Initialize Clock
    initClock();
});

/**
 * Initialize Swiper Carousel
 */
function initSwiper() {
    if (typeof Swiper === 'undefined') return;

    new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}

/**
 * Initialize File Upload Handler
 */
function initFileUpload() {
    const uploadGroups = document.querySelectorAll('.upload-group');

    uploadGroups.forEach(group => {
        const input = group.querySelector('input[type="file"]');
        const dropArea = group.querySelector('.drop-area');
        const preview = group.querySelector('.preview');
        const fileName = group.querySelector('.file-name');
        const fileSize = group.querySelector('.file-size');
        const previewImage = group.querySelector('.preview-image');
        const removeBtn = group.querySelector('.remove-file');

        if (!input || !dropArea) return;

        // Click area triggers file input
        dropArea.addEventListener('click', () => input.click());

        // Render file preview
        const renderFile = (file) => {
            if (!file) return;

            // Check file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                alert('Ukuran file maksimal 5MB!');
                return;
            }

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                alert('File harus berupa JPEG/PNG/JPG/WEBP!');
                return;
            }

            if (fileName) fileName.textContent = file.name;
            if (fileSize) fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;

            // Reset preview
            if (previewImage) {
                previewImage.src = '';
                previewImage.classList.add('hidden');
            }

            // Show image preview
            const reader = new FileReader();
            reader.onload = (ev) => {
                if (previewImage) {
                    previewImage.src = ev.target.result;
                    previewImage.classList.remove('hidden');
                }
            };
            reader.readAsDataURL(file);

            if (preview) {
                preview.classList.remove('hidden');
                preview.classList.add('flex');
            }
        };

        // Handle file selection
        input.addEventListener('change', (e) => {
            const file = e.target.files[0];
            renderFile(file);
        });

        // Drag and drop handlers
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
                renderFile(file);
            }
        });

        // Remove file handler
        if (removeBtn) {
            removeBtn.addEventListener('click', (e) => {
                e.preventDefault();
                input.value = '';
                if (preview) {
                    preview.classList.remove('flex');
                    preview.classList.add('hidden');
                }
                if (previewImage) previewImage.src = '';
                if (fileName) fileName.textContent = '';
                if (fileSize) fileSize.textContent = '';
            });
        }
    });
}

/**
 * Initialize Clock
 */
function initClock() {
    const clockEl = document.getElementById('clock');
    if (!clockEl || !clockEl.dataset.time) return;

    let serverTime = new Date(clockEl.dataset.time);

    const updateClock = () => {
        serverTime.setSeconds(serverTime.getSeconds() + 1);

        const hours = serverTime.getHours().toString().padStart(2, '0');
        const minutes = serverTime.getMinutes().toString().padStart(2, '0');
        const seconds = serverTime.getSeconds().toString().padStart(2, '0');

        clockEl.innerText = `${hours}:${minutes}:${seconds} WIB`;
    };

    setInterval(updateClock, 1000);
    updateClock();
}
