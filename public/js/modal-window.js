// Получаем элементы
const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('open-modal');
const closeModalBtn = document.getElementById('close-modal');
const video = document.getElementById('server-video');

// Открытие модального окна
openModalBtn.addEventListener('click', (e) => {
    e.preventDefault();
    modal.style.display = 'flex';
    video.play(); // Начать воспроизведение видео
});

// Закрытие модального окна
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    video.pause(); // Остановить воспроизведение видео
    video.currentTime = 0; // Сбросить видео на начало
});

// Закрытие окна при клике вне области
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
        video.pause();
        video.currentTime = 0;
    }
});



$('.scrollto a').on('click', function() {

    let href = $(this).attr('href');

    $('html, body').animate({
        scrollTop: $(href).offset().top
    }, {
        duration: 370,   // по умолчанию «400»
        easing: "linear" // по умолчанию «swing»
    });

    return false;
});
