const shareBtn = document.querySelector('#shareBtn');

shareBtn.addEventListener('click', async () => {
    const url = shareBtn.dataset.url;
    const title = shareBtn.dataset.title;
    const category = shareBtn.dataset.category;

    if (navigator.share) {
        try {
            await navigator.share({
                title: title,
                text: `Baca artikel menarik mengenai ${category} disini!`,
                url: url,
            });
        } catch (err) {
            console.log('Share dibatalkan:', err);
        }
    } else {
        alert("Browser kamu belum support Web Share API. Silakan copy link manual 😊");
    }
});


