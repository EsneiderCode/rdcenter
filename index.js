// Получаем ссылки на элементы меню-бургера и списка навигации
const burgerMenu = document.getElementById('burgerMenu');
const navList = document.querySelector('.nav__list');
const header = document.querySelector('header');
const navItems = document.querySelectorAll('.nav__item');
const womenImg = document.querySelector(".mobile__women");
const body = document.querySelector("body");
const logoMobile = document.querySelector(".header__logo img");

// Добавляем обработчик события клика на меню-бургер
burgerMenu.addEventListener('click', function () {
  // Переключаем класс "active" для меню-бургера
  burgerMenu.classList.toggle('active');
  // Переключаем класс "active" для списка навигации
  navList.classList.toggle('active');
  // Переключаем класс "header-mobile" для заголовка
  header.classList.toggle('header-mobile');

  // Если класс "active" присутствует у меню-бургера
  if (burgerMenu.classList.contains('active')) {
    burgerMenu.innerHTML = `
      <p class="close-header">X</p>
    `;
    body.style.overflow = "hidden";
    womenImg.style.display = "block";
    logoMobile.style.display = "none";
  } else {
    burgerMenu.innerHTML = `
      <div class="header__burger-line"></div>
      <div class="header__burger-line"></div>
      <div class="header__burger-line"></div>
    `;
    womenImg.style.display = "none";
    body.style.overflow = "auto";
    logoMobile.style.display = "block";
  }
});

// Добавляем обработчик события клика на пункты навигации
navItems.forEach((navItem, index) => {
  navItem.addEventListener('click', () => {
    // Если список навигации имеет класс "active"
    if (navList.classList.contains('active')) {
      // Удаляем классы "active" и "header-mobile"
      burgerMenu.classList.remove('active');
      navList.classList.remove('active');
      header.classList.remove('header-mobile');
      body.style.overflow = "auto";
      logoMobile.style.display = "block";
      womenImg.style.display = "none";
      
      if (navItem.innerText === "Услуги"){
            window.scrollY = "1764";
      }
      
    }
    // Удаляем класс "nav__item-active" у текущего активного пункта навигации
    document.querySelector('.nav__item-active').classList.remove('nav__item-active');
    // Добавляем класс "nav__item-active" к выбранному пункту навигации
    navItem.classList.add('nav__item-active');
    
    // Если класс "active" присутствует у меню-бургера
    if (burgerMenu.classList.contains('active')) {
      burgerMenu.innerHTML = `
        <p class="close-header">X</p>
      `;
      body.style.overflow = "hidden";
      womenImg.style.display = "block";
      logoMobile.style.display = "none";
    } else {
      burgerMenu.innerHTML = `
        <div class="header__burger-line"></div>
        <div class="header__burger-line"></div>
        <div class="header__burger-line"></div>
      `;
      womenImg.style.display = "none";
      body.style.overflow = "auto";
      logoMobile.style.display = "block";
    }
  });
});

// Функция для клика по стрелке вниз в мобильной версии
document.querySelector(".arrow-mobile").addEventListener("click", (e) => {
  const aboutTextContainer = document.querySelector(".about-text__hide");
  if (e.target.classList.contains("arrow-mobile-down")) {
    e.target.classList.add("arrow-mobile-up");
    e.target.classList.remove("arrow-mobile-down");
    aboutTextContainer.style.display = "block";
    e.target.style.display = "none";
  } else {
    e.target.classList.add("arrow-mobile-down");
    e.target.classList.remove("arrow-mobile-up");
    aboutTextContainer.style.display = "none";
  }
});

// Инициализация слайдера после загрузки страницы
document.addEventListener('DOMContentLoaded', () => {
  // Инициализация слайдера
  new ItcSimpleSlider('.itcss', {
    loop: true,
    autoplay: true,
    interval: 5000,
    swipe: true,
  });
});


//Modal window
    // Get the modal
    let modal = document.querySelector("#myModal");
    
    // Get the <span> element that closes the modal
    let span = document.querySelector(".close");
    
    // Function to show the modal
    function showModal() {
      modal.style.display = "block";
    }
    
    // Function to hide the modal
    function closeModal() {
      modal.style.display = "none";
    }
    
    // Close the modal when the user clicks on <span> (x)
    span.addEventListener('click', ()=>{
        closeModal();
    })
    
    // Close the modal when the user clicks anywhere outside the modal
    window.onclick = function (event) {
      if (event.target == modal) {
        closeModal();
      }
    };
    
document.addEventListener("DOMContentLoaded", function() {
  var params = new URLSearchParams(window.location.search);
  var modal = params.get('modal');

  if (modal === 'success') {
    showModal();
  }
});

// Header
window.addEventListener('scroll', (e)=>{
    
    //Arrow fixing position
   let arrowDown = document.querySelector('.arrow-down');
   
   if (window.scrollY >= 600){
       arrowDown.classList.add('arrowFixed');
   }else{
       arrowDown.classList.remove('arrowFixed');
   }
    
        let header =  document.querySelector(".header");
        
        if (window.innerWidth > 600){
            if (window.scrollY !== 0){
                header.classList.add('headerFixed');
            }else{
                header.classList.remove('headerFixed');
            }
        }else {
            if (window.scrollY !== 0){
                header.classList.add('headerFixedMobile');
            }else{
                header.classList.remove('headerFixedMobile');
            }
        }

        //Toggle nav section
        if (window.scrollY < 970){
           for (let i = 0; i < navItems.length; i++) {
            const item = navItems[i];
            if (item.classList.contains('nav__item-active')) { 
              item.classList.toggle("nav__item-active");
              navItems[0].classList.add("nav__item-active");
            }
          } 
        }else if (window.scrollY < 2500){
             for (let i = 0; i < navItems.length; i++) {
            const item = navItems[i];
            if (item.classList.contains('nav__item-active')) { 
              item.classList.toggle("nav__item-active");
              navItems[1].classList.add("nav__item-active");
            }
          } 
        }else if (window.scrollY < 4000){
             for (let i = 0; i < navItems.length; i++) {
            const item = navItems[i];
            if (item.classList.contains('nav__item-active')) { 
              item.classList.toggle("nav__item-active");
              navItems[2].classList.add("nav__item-active");
              break;
            }
          } 
        }else{
             for (let i = 0; i < navItems.length; i++) {
            const item = navItems[i];
            if (item.classList.contains('nav__item-active')) { 
              item.classList.toggle("nav__item-active");
              navItems[3].classList.add("nav__item-active");
            }
          } 
        }
        
        
    
})