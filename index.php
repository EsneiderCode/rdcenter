<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css?family=Raleway:400,500,700&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="./slider/simple-adaptive-slider.css">
    <!-- Подключаем JS слайдера -->
    <script defer src="./slider/simple-adaptive-slider.js"></script>
    <link rel="stylesheet" href="index.css?v=<?php echo rand(0, 900);?>">
    <meta name="description" content="Центр исследований и разработки - ковчег инноваций, где гений и творчество соединяются. Создаем прогрессивные программные и аппаратные решения, объединяя науку и технологии. Мастерство наших разработчиков преображает идеи в реальность. ">
    <meta name="keywords" content="исследования и разработка, инновации, прогрессивные решения, веб-приложения, мобильные приложения, аппаратные разработки, интернет вещей, виртуальная реальность, дополненная реальность, цифровая трансформация, эффективные технологии">
    <link rel="shortcut icon" href="./images/header-icon.svg"
      type="image/x-icon">
    <title>R&D Center</title>
  </head>

  <body>
    <div class="container">

      <!-- Header -->
      <header class="header">
        <div class="header__logo">
          <img src="./images/header-icon.svg" alt="header-icon">
        </div>
        <nav class="header__nav">
          <ul class="nav__list">
            <li class="nav__item nav__item-active"><a href="#about">О нас</a></li>
            <li class="nav__item"><a href="#services">Услуги</a></li>
            <li class="nav__item"><a href="#projects">Проекты</a></li>
            <li class="nav__item"><a href="#contact">Контакты</a></li>
          </ul>
          <div class="header__burger" id="burgerMenu">
            <div class="header__burger-line"></div>
            <div class="header__burger-line"></div>
            <div class="header__burger-line"></div>
          </div>
        </nav>
        <img src="./images/mobile-women.svg" alt="mobile-women" class="mobile__women inactive">
      </header>

      <!-- Home section -->
      <section id="home" class="home">
        <a href="#about" class="arrow-down"><img src="./images/arrow-down.svg"
            alt="arrow-down"></a>
        <img src="./images/home-background.svg" alt="home-background"
          class="home-background">
        <img class="mobile-home-background"
          src="./images/home__mobile-background.svg" alt="mobile-home">
        <div class="home__centered">
          <h1 class="home__title">Центр исследований и разработки</h1>
          <img src="./images/services-lines.svg" alt="mobile__line-home"
            class="mobile__line-home">
          <img src="./images/home-logo.svg" alt="great-icon" class="home__logo">
        </div>
        <div class="mobile__home-info">
          <img src alt>
        </div>
      </section>

      <!-- About section -->
      <section id="about" class="about">
        <div class="about__container desktop__about">
          <h2 class="about__title prm-title">О нас</h2>
          <div class="about__title-lines">
            <img alt="about-us-lines" src="./images/about-us-lines.svg" />
          </div>
          <div class="about__text-container">
            <p class="about__text">Центр исследований и разработки это передовая
              научно-техническая компания, занимающаяся разработкой
              прогрессивных
              программных и аппаратных решений.</p>
            <p class="about__text">Мы решаем широкий спектр задач, включая
              разработку веб приложений, приложений для мобильных платформ,
              разработку
              аппаратных решений и систем на базе интернета вещей, решений с
              использованием виртуальной и дополненной реальности,
              преобразовывая идеи, в уникальные, эффективные и доступные
              технологии.</p>
            <p class="about__text">Мы стремимся помочь нашим клиентам ускорить
              цифровую трансформацию и улучшить бизнес-процессы с помощью наших
              продуктов и услуг.</p>
          </div>
        </div>
        <div class="mobile__about">
          <img src="./images/mobile-men.svg" alt="mobile-men"
            class="mobile__about-picture">
          <div class="mobile__about-info">
            <p class="mobile__about-text">Центр исследований и разработки это
              передовая
              научно-техническая компания, занимающаяся разработкой
              прогрессивных
              программных и аппаратных решений.</p>
            <img class="arrow-mobile arrow-mobile-down"
              src="./images/arrow-down-mobile.svg" alt="arrow-down-mobile">
            <div class="about-text__hide">
              <p class="mobile__about-text">Мы решаем широкий спектр задач,
                включая
                разработку веб приложений, приложений для мобильных платформ,
                разработку
                аппаратных решений и систем на базе интернета вещей, решений с
                использованием виртуальной и дополненной реальности,
                преобразовывая идеи, в уникальные, эффективные и доступные
                технологии.</p>
              <p class="mobile__about-text">Мы стремимся помочь нашим клиентам
                ускорить
                цифровую трансформацию и улучшить бизнес-процессы с помощью
                наших
                продуктов и услуг.</p>
            </div>

          </div>
        </div>
      </section>

      <!-- Services section -->
      <section class="services">
        <div class="services__desktop">
          <img class="services__circle circle__right-down"
            src="./images/right-down.svg" alt="right-down">
          <img class="services__circle circle__right-up"
            src="./images/right-up.svg" alt="right-up">
          <img class="services__circle circle__left-down"
            src="./images/left-down.svg" alt="left-down">
          <img class="services__circle circle__left-up"
            src="./images/left-up.svg" alt="left-up">
          <h2 class="services__title prm-title">Услуги</h2>
          <div class="services__title-lines">
            <img alt="services-lines" src="./images/services-lines.svg" />
          </div>
          <img class="services__background"
            src="./images/services-background.svg" />
          <div class="services__container" >
            <div class="services__grid" id="services">
              <div class="services__item">
                <p class="services__text">Разработка веб приложений</p>
              </div>
              <div class="services__item">
                <p class="services__text">Разработка программно-аппаратных<br>
                  решений</p>
              </div>
              <div class="services__item" >
                <p class="services__text">Разработка мобильных<br> приложений</p>
              </div>
              <div class="services__item">
                <p class="services__text">Разработка решений IoT</p>
              </div>
            </div>
            <div class="services__button-container">
              <a class="services__button" href="#contact">Связаться с нами</a>
            </div>
          </div>
        </div>
        <div class="services__mobile">
          <img class="services__mobile-background"
            src="./images/mobile-services-background.svg"
            alt="services-background">
          <ul>
            <li><img src="./images/like-blue.svg" alt="like-blue"><p>Разработка
                веб приложений</p></li>
            <li><img src="./images/like-blue.svg" alt="like-blue"><p>Разработка
                мобильных приложений</p></li>
            <li><img src="./images/like-blue.svg" alt="like-blue"><p>Разработка
                программно-аппаратных<br> решений</p></li>
            <li><img src="./images/like-blue.svg" alt="like-blue"><p>Разработка
                решений IoT</p></li>
          </ul>
          <a href="#contact" class="btn__mobile">Связаться с нами</a>
        </div>
      </section>

      <!-- Projects section -->
      <section id="projects" class="projects">
        <div class="projects__desktop">
          <h2 class="projects__title prm-title">Проекты</h2>
          <div class="projects__title-lines">
            <img alt="projects-lines" src="./images/projects-title-lines.svg" />
          </div>
          <div class="projects__container">
              <h3 class="projects__subtitle">Программные решения</h3>
              <div class="projects__division-lines">
              <img alt="projects-division-line"
                src="./images/projects-down-lines.svg" />
            </div>
            <div class="projects-row-container">
              <div class="project">
                <img src="./images/horse.svg" alt="project-picture"
                  class="project__pictubre">
                <h4 class="project__description">Фестиваль <br>
                  “Оборона Таганрога”</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.sfedu.crafsed.taganrogdefence">Google Play</a></li>
                  </ul>
                </div>
              </div>
              <div class="project">
                <img src="./images/tree.svg" alt="project-picture"
                  class="project__picture">
                <h4 class="project__description">Амброзия</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li><a target="_BLANK" href="https://apps.apple.com/ru/app/амброзия/id1620858412?l=en">App Store</a></li>
                    <li><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.TagProject&hl=ru&gl=US">Google Play</a></li>
                  </ul>
                </div>
              </div>
              <div class="project">
                <img src="./images/graduates.svg" alt="project-picture"
                  class="project__picture">
                <h4 class="project__description">Биржа практик</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li><a target="_BLANK" href="https://биржапрактик.рф">Web</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <h3 class="projects__subtitle">Аппаратные решения</h3>
            <div class="projects__division-lines">
              <img alt="projects-division-line"
                src="./images/projects-down-lines.svg" />
            </div>
            <div class="projects-row-container">
              <div class="project">
                <img src="./images/processor.svg" alt="project-picture"
                  class="project__picture">
                <h4 class="project__description">Лабораторный стенд<br> STM32</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="project">
                <img src="./images/recycle.svg?v=<?php echo rand(0, 900);?>" alt="project-picture"
                  class="project__picture">
                <h4 class="project__description">Мониторинг<br> наполненности<br>
                  мусорных контейнеров</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
              <div class="project">
                <img src="./images/traffic-light.svg" alt="project-picture"
                  class="project__picture">
                <h4 class="project__description">Умный пешеходный <br>
                  переход</h4>
                <div class="project__sale">
                  <span class="project__info-line"></span>
                  <ul>
                    <li></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="projects__mobile">
          <div class="projects__titlemobile-container">
            <h2 class="projects__mobile-title">Проекты</h2>
            <img src="./images/lines-mobile-projects.svg"
              alt="lines-mobile-projects">
          </div>
          <!-- Разметка слайдера -->
          <div class="itcss">
            <div class="itcss__wrapper">
              <div class="itcss__items">
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/horse.svg" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Фестиваль <br>
                      “Оборона Таганрога”</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.sfedu.crafsed.taganrogdefence">Google Play</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/tree.svg" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Амброзия</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li><a target="_BLANK" href="https://apps.apple.com/ru/app/амброзия/id1620858412?l=en">App Store</a></li>
                        <li><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.TagProject&hl=ru&gl=US">Google Play</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/graduates.svg" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Биржа практик</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li><a target="_BLANK" href="https://биржапрактик.рф">Web</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/processor.svg" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Лабораторный стенд<br>
                      STM32</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/recycle.svg?v=<?php echo rand(0, 900);?>" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Мониторинг<br>
                      наполненности<br>
                      мусорных контейнеров</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="itcss__item">
                  <div class="project">
                    <img src="./images/traffic-light.svg" alt="project-picture"
                      class="project__picture">
                    <h4 class="project__description">Умный пешеходный <br>
                      переход</h4>
                    <div class="project__sale">
                      <span class="project__info-line"></span>
                      <ul>
                        <li></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>

      <!-- Contact section -->
      <section id="contact" class="contact">
        <div class="contact__projects">
          <div class="contact__projects-info">
            <p class="project__title">Фестиваль “Оборона Таганрога”</p>
            <p class="project__caption"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.sfedu.crafsed.taganrogdefence">Google Play</a></p>
          </div>
          <div class="contact__projects-info">
            <p class="project__title">Амброзия</p>
            <p class="project__caption"><a target="_BLANK" href="https://play.google.com/store/apps/details?id=com.TagProject&hl=ru&gl=US">Google Play</a></p>
            <p class="project__caption"><a target="_BLANK" href="https://apps.apple.com/ru/app/амброзия/id1620858412?l=en">App Store</a></p>
          </div>
          <div class="contact__projects-info">
            <p class="project__title">Биржа практик</p>
            <p class="project__caption"><a target="_BLANK" href="https://биржапрактик.рф">Web</a></p>
          </div>
          <div class="contact__projects-info">
            <p class="project__title">Лабораторный стенд STM32</p>
            <p class="project__caption"></p>
          </div>
          <div class="contact__projects-info">
            <p class="project__title">Мониторинг наполненности мусорных
              контейнеров</p>
            <p class="project__caption"></p>
          </div>
          <div class="contact__projects-info">
            <p class="project__title">Умный пешеходный переход</p>
            <p class="project__caption"></p>
          </div>
        </div>
        <div class="contact__container">
          <img class="contact__lines-white"
            src="./images/contact-white-lines.svg" alt="contact-lines">
          <img src="./images/contact-lines-white-mobile.svg"
            alt="lines-contact-mobile" class="contact-lines-mobile">
          <h2 class="contact__title prm-title">Связь с нами</h2>
          <h3 class="contact__subtitle">info@rdcenter.ru</h3>
          <form class="contact__form" action="send-email.php" method="post">
            <div class="contact__form-group">
              <input placeholder="Имя*" type="text" id="name" name="name"
                class="contact__input">
            </div>
            <div class="contact__form-group">
              <input placeholder="Email*" type="email" id="email" name="email"
                class="contact__input">
            </div>
            <div class="contact__form-group">
              <textarea placeholder="Ваше сообщение*" id="message"
                name="message"
                class="contact__textarea"></textarea>
            </div>
            <button type="submit" name="submit" class="contact__submit">Отправить</button>
          </form>
        </div>
      </section>

      <!-- Footer -->
      <footer class="footer">
        <div class="footer__logo">
          <img src="./images/white-footer-icon.svg"
            alt="icon-footer">
        </div>
        <div class="footer__copy">
          <p>
             <script type="text/javascript">
                  copyright=new Date();
                  update=copyright.getFullYear();
                  document.write("© " + update + " ООО Центр исследований и разработки");
             </script>
          </p>
          <p>город Таганрог</p>
          <p>ИНН 6154164546, ОГРН: 1236100005613</p>
        </div>
      </footer>
    </div>

    <!-- Add this HTML code for the modal window -->
    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Форма отправлена</h3>
      </div>
    </div>
    
    <script src="index.js?v=<?php echo rand(0, 900);?>"></script>
  </body>

</html>