'use sctrict';

let menuIcon = document.querySelector('.menu_icon > img'),
    vertical_menu = document.querySelector('.navbar_vertical');
    let isOpened = null;

menuIcon.addEventListener('click', () => {
    if (isOpened) {
        vertical_menu.classList.remove('open');
        vertical_menu.classList.add('close');
        document.body.style.overflow = '';
        vertical_menu.classList.remove('navbar_vertical__scroll');
        isOpened = false;
    }   else {
        vertical_menu.classList.add('open');
        vertical_menu.classList.remove('close');
        vertical_menu.classList.add('navbar_vertical__scroll');
        // document.body.style.overflow = 'hidden';
        isOpened = true;
    } 
});

document.addEventListener('click', (event) => {
    if (event.target.classList.contains('navbar_vertical')){
        vertical_menu.classList.remove('open');
        vertical_menu.classList.add('close');
        vertical_menu.classList.remove('navbar_vertical__scroll');
        // document.body.style.overflow = '';
        isOpened = false;
    }
})

// Section intellectual-property
// Галерея - увеличение изображений
const galleryItems = document.querySelectorAll('.gallery-item img');
const modal = document.getElementById('modal');
const modalImg = document.getElementById('modal-img');
const closeModal = document.querySelector('.closeModal');

// Открытие модального окна при клике на изображение
galleryItems.forEach(item => {
    item.addEventListener('click', function () {
        modal.style.display = 'flex';
        modalImg.src = this.src;
    });
});

// Закрытие модального окна
closeModal.addEventListener('click', function () {
    modal.style.display = 'none';
});

// Закрытие модального окна по клику вне изображения
modal.addEventListener('click', function (e) {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});


// Получаем кнопку
const scrollToTopBtn = document.getElementById('scroll-to-top');

// Показать/скрыть кнопку при прокрутке
window.onscroll = function() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    scrollToTopBtn.classList.add('visible');
  } else {
    scrollToTopBtn.classList.remove('visible');
  }
};

// Прокрутка вверх при клике на кнопку
scrollToTopBtn.addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
