<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/swiper-bundle.min.css">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/style.css">
   <title> Aliance Production</title>
</head>
<body class="front-page">
   <div class="mobile-menu">
      <ul class="mobile-menu-nav">
         <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">О&nbsp;компании</a>
         </li>
         <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контрактное&nbsp;производство</a>
            <ul class="mobile-submenu">
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Автомобильная химия</a>
               </li>
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Бытовая химия</a>
               </li>
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
               </li>
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
               </li>
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
               </li>
               <li class="mobile-submenu-item">
                  <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
               </li>
            </ul>
         </li>
         <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Собственные&nbsp;торговые&nbsp;марки</a>
         </li>
         <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Новости</a>
         </li>
         <li class="mobile-menu-nav-item">
            <a href="#" class="mobile-menu-link">Контакты</a>
         </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
         <img src="img/mobile-address.svg" alt="Address">
          <address class="mobile-info-address">
            г. Мосвка, Холодильный пер. 4к1с8
          </address>
      </div>
      <div class="mobile-info">
         <img src="img/mobile-mail.svg" alt="Mail">
          <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
            a.dragunov@tdaliance.ru
          </a>
      </div>
      <div class="mobile-images">
         <a class="mobile-images-item" href="#">
            <img src="img/mobile-vk.svg" alt="VK">
         </a>
         <a href="#">
            <img src="img/mobile-inst.svg" alt="Instagram">
         </a>
      </div>
   </div>
   <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
         <div class="mobile-menu-line"></div>
         <div class="mobile-menu-line"></div>
         <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
         <svg class="logo-svg logo-light">
            <use href="img/sprite.svg#logo-light"></use>
          </svg>
          <svg class="logo-svg logo-dark">
            <use href="img/sprite.svg#logo"></use>
          </svg>
      </a>
      <ul class="header-nav">
         <li class="header-nav-item">
            <a href="./about.php" class="header-nav-link">О&nbsp;компании</a>
         </li>
         <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контрактное&nbsp;производство</a>
         </li>
         <li class="header-nav-item">
            <a href="#" class="header-nav-link">Собственные&nbsp;торговые&nbsp;марки</a>
         </li>
         <li class="header-nav-item">
            <a href="#" class="header-nav-link">Новости</a>
         </li>
         <li class="header-nav-item">
            <a href="#" class="header-nav-link">Контакты</a>
         </li>
      </ul>
      <div class="header-phone">
         <svg class="phone-icon">
            <use href="img/sprite.svg#phone"></use>
          </svg>
         <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
      </div>
      <button class="navbar-button button" data-toggle="modal">
         <svg class="phone-icon">
            <use href="img/sprite.svg#phone"></use>
          </svg>
         <span class="button-text">Получить консультацию</span>
      </button>
   </nav>

   <header class="header header-image">
      
      <div class="container">
         <div class="header-content">
            <div class="seporator"></div>
            <h1 class="header-title">
               Комплексное обеспечение товарами и расходными материалами бизнеса
            </h1>
            <p class="header-text">
               Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
            </p>
            <div class="button header-button">
               Подробнее о компании
            </div>
         </div>

         
                  <!-- Основной блок слайдера -->
         <div class="swiper features-slider">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper header-features">
            <!-- Slides -->
            <li class="swiper-slide header-features-item">
               <svg width="36" height="36">
                  <use href="img/sprite.svg#time"></use>
                </svg>
               <p class="header-features-text">
                  Непрерывная работа c 2017 года
               </p>
            </li>
            <li class="swiper-slide header-features-item">
               <svg width="36" height="36">
                  <use href="img/sprite.svg#certificate"></use>
                </svg>
               <p class="header-features-text">
                  Вся продукция сертифицирована
               </p>
            </li>
            <li class="swiper-slide header-features-item">
               <svg width="36" height="36">
                  <use href="img/sprite.svg#person"></use>
                </svg>
               <p class="header-features-text">
                  Контроль качества на всех этапах
               </p>
            </li>
            <li class="swiper-slide header-features-item">
               <svg width="36" height="36">
                  <use href="img/sprite.svg#car"></use>
                </svg>
               <p class="header-features-text">
                  Возможны поставки по всей России
               </p>
            </li>
            <li class="swiper-slide header-features-item">
               <svg width="36" height="36">
                  <use href="img/sprite.svg#speed"></use>
                </svg>
               <p class="header-features-text">
                  Оперативное производство
               </p>
            </li>
            </ul>
         
            <!-- If we need navigation buttons -->
            <div class="slider-buttons">
               <div class="slider-button-prev">
                  <svg width="36" height="24">
                     <use href="img/sprite.svg#arrow-prev"></use>
                   </svg>
               </div>
               <div class="slider-button-next">
                  <svg width="36" height="24">
                     <use href="img/sprite.svg#arrow-next"></use>
                   </svg>
               </div>
            </div>
         </div>

      </div>
   </header>
   <section class="section section-light">
      <div class="container">
         <div class="seporator"></div>
         <h2 class="section-title">
            схема работы
         </h2>

         <!-- Slider main container -->
         <div class="swiper steps-slider">
            <!-- Additional required wrapper -->
            <ol class="swiper-wrapper steps">
            <!-- Slides -->
               <li class="swiper-slide steps-item">
                  <span class="steps-num">01</span>
                  <h3 class="steps-title">Знакомство</h3>
                  <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
                  <a href="#" class="button-link">
                     Оставить заявку
                  </a>
               </li>
               <li class="swiper-slide steps-item">
                  <span class="steps-num">02</span>
                  <h3 class="steps-title">Заключение договора</h3>
                  <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
               </li>
               <li class="swiper-slide steps-item">
                  <span class="steps-num">03</span>
                  <h3 class="steps-title">Производство</h3>
                  <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
               </li>
               <li class="swiper-slide steps-item">
                  <span class="steps-num">04</span>
                  <h3 class="steps-title">Доставка</h3>
                  <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации разума над эмоциями.</p>
               </li>
            </ol>
            <!-- If we need navigation buttons -->
            <div class="steps-buttons primary-buttons-wrapper">
               <div class="steps-button-prev primary-button-prev">
                  <svg width="36" height="24">
                     <use href="img/sprite.svg#arrow-prev"></use>
                   </svg>
               </div>
               <div class="steps-button-next primary-button-next">
                  <svg width="36" height="24">
                     <use href="img/sprite.svg#arrow-next"></use>
                   </svg>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="section production">
      <div class="container">
         <div class="seporator"></div>
         <h2 class="section-title">
            Контрактное производство
         </h2>
         <div class="cards">
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Автомобильная химия
                  </h3>
                  <p class="card-text">
                     Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                  </p>
               </div>
               <img src="img/avto-him.png" alt="Автомобильная химия" class="card-image">
            </a>
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Бытовая химия
                  </h3>
                  <p class="card-text">
                     А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.
                  </p>
               </div>
               <img src="img/bit-him.png" alt="Бытовая химия" class="card-image">
            </a>
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Дезинфицирующие средства
                  </h3>
                  <p class="card-text">
                     Лишь интерактивные прототипы призваны к ответу.
                  </p>
               </div>
               <img src="img/dezinfect.png" alt="Дезинфицирующие средства" class="card-image">
            </a>
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Пищевые аэрозоли
                  </h3>
                  <p class="card-text">
                     Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.
                  </p>
               </div>
               <img src="img/dezinfect.png" alt="Пищевые аэрозоли" class="card-image">
            </a>
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Косметическая продукция
                  </h3>
                  <p class="card-text">
                     Лишь интерактивные прототипы призваны к ответу.
                  </p>
               </div>
               <img src="img/avto-him.png" alt="Косметическая продукция" class="card-image">
            </a>
            <a href="#" class="card">
               <div class="card-content">
                  <h3 class="card-title">
                     Краски аэрозольные
                  </h3>
                  <p class="card-text">
                     А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.
                  </p>
               </div>
               <img src="img/bit-him.png" alt="Краски аэрозольные" class="card-image">
            </a>
         </div>
      </div>
   </section>
   <section class="section trademark">
      <div class="container">
         <div class="seporator"></div>
         <h2 class="section-title">
            собственные торговые марки
         </h2>
         <div class="trademark-cards">
            <div class="trademark-card">
               <svg class="trademark-card-logo">
                  <use href="img/sprite.svg#AGTECH"></use>
                </svg>
               <h3 class="trademark-card-title">
                  Автохимия AG-Tech
               </h3>
               <p class="trademark-card-text">
                  Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
               </p>
            </div>
            <div class="trademark-card">
               <svg class="trademark-card-logo">
                  <use href="img/sprite.svg#AP"></use>
                </svg>
               <h3 class="trademark-card-title">
                  Автохимия AP
               </h3>
               <p class="trademark-card-text">
                  Для современного мира разбавленное изрядной долей эмпатии, рациональное мышление создаёт предпосылки для поставленных обществом задач.
               </p>
            </div>
         </div>
      </div>
   </section>
   <section class="section founder">
      <img class="founder-photo" src="img/founder.jpg" alt="Founder">
      <div class="container">
         <div class="founder-content-wrapper">
            <div class="founder-content">
               <div class="seporator"></div>
               <h2 class="section-title">
               собственные торговые марки
               </h2>
            <p class="founder-text">
               Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
               А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.
            </p>
            <a href="#" class="button-link">
               Подробнее о компании
            </a>
            </div>
         </div>
      </div>
   </section>
   <section class="section clients">
      <div class="container">
         <div class="seporator"></div>
         <div class="clients-wrapper">
            <div class="clients-content">
               <h2 class="section-title">
                  Производим аэрозольную продукцию для разных сфер
               </h2>
               <ul class="clients-list">
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Химические производства
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car"></use>
                </svg>
                Автомойки
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#car-cosmetic"></use>
                </svg>
                Автомобильная косметика
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
                  </li>
                  <li class="clients-list-item">
                     <svg width="30" height="30" class="clients-list-icon">
                  <use href="img/sprite.svg#more"></use>
                </svg>
                И многих других
                  </li>
               </ul>
            </div>
            <div class="clients-logo-list">
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
               <a href="#" class="clients-logo-item">
                  <img src="img/client.png" alt="" class="clients-logo">
               </a>
            </div>
         </div>
      </div>
   </section>
   <section class="section blog">
      <div class="container">
         <div class="seporator"></div>
         <h2 class="section-title">
            Блог экспертов в области производства
         </h2>
         <!-- Slider main container -->
         <div class="swiper blog-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
               <img src="img/blog/blog-photo-1.jpeg" alt="Blog" class="blog-card-image">
               <h3 class="blog-card-title">
                  Современная методология разработки одухотворила всех причастных
               </h3>
               <p class="blog-card-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
               </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
               <img src="img/blog/blog-photo-1.jpeg" alt="Blog" class="blog-card-image">
               <h3 class="blog-card-title">
                  Современная методология разработки одухотворила всех причастных
               </h3>
               <p class="blog-card-text">
                  Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...
               </p>
            </a>
            <a href="#" class="swiper-slide blog-card">
               <img src="img/blog/blog-photo-2.jpeg" alt="Blog" class="blog-card-image">
               <h3 class="blog-card-title">
                  Сложно сказать, почему жизнь прекрасна
               </h3>
               <p class="blog-card-text">
                  Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...
               </p>
            </a>
            </div>
            <div class="blog-slider-footer">
               <a href="#" class="button-link">
                  Весь блог
               </a>
               <div class="blog-buttons primary-buttons-wrapper">
                  <div class="blog-button-prev primary-button-prev">
                     <svg width="36" height="24">
                        <use href="img/sprite.svg#arrow-prev"></use>
                      </svg>
                  </div>
                  <div class="blog-button-next primary-button-next">
                     <svg width="36" height="24">
                        <use href="img/sprite.svg#arrow-next"></use>
                      </svg>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php include_once('footer.php');?>
   <div class="modal">
      <div class="modal-dialog">
         <h2 class="modal-title">
            Есть вопросы?
         </h2>
         <a href="#" class="modal-close" data-toggle="modal">
            <svg width="24" height="24" class="close-icon">
               <use href="img/sprite.svg#close"></use>
             </svg>
         </a>
         <p class="modal-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
         </p>
         <form action="#" class="moodal-form">
            <div class="input-group-wrapper input-group-vertical">
               <div class="input-group modal-input-group">
                  <input id="modal-user-name" type="text" class="input modal-input" placeholder=" ">
                  <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
               </div>
               <div class="input-group modal-input-group">
                  <input id="modal-user-phone" type="tel" class="input modal-input" placeholder=" ">
                  <label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
               </div>
            </div>
            <div class="modal-form-footer">
               <button type="submit" class="button modal-form-button">
                  Отправить заявку
               </button>
               <div class="notify">
                  <svg class="notify-icon" width="14" height="14">
                     <use href="img/sprite.svg#shield"></use>
                   </svg>
                  <p class="notify-text">
                     Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                  </p>
               </div>
            </div>
         </form>
      </div>
   </div>
   
   <script src="js/swiper-bundle.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>

