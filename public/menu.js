// Автор: Илюша Чернов

let isOpened = false

let hamburger = document.getElementById('burger-icon')

let menuNav = document.getElementById('menuNav')

hamburger.onclick = function(e){

    if (isOpened == false) {
        menuNav.style.display = 'block';
        isOpened = true;
    } else {
        menuNav.style.display = 'none';
        isOpened = false;
    }
  }


