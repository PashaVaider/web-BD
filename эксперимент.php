<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная страница</title>
  <!-- Подключение Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

</head>
<body>
<header class="header">
  <div class="logo">
    <img src="img/bb7181ab-558f-4d5c-9903-d0487b21bee6.jpg" height="50"
         width="165"/>
  </div>
  <button class="button">Записаться</button>
  <nav class="nav">

    <div class="nav-item">
      <a href="#">О нас <img src="img/png-clipart-arrow-greater-than-sign-playerunknown-s-battlegrounds-arrow-angle-king.png" height="9" width="13"/></a>
      <div class="nav-submenu">
        <a href="#">О компании</a>
        <a href="#">Принципы</a>
        <a href="#">Вакансии</a>
        <a href="#">Коллектив</a>
        <a href="#">Новости</a>
        <a href="#">Сложные пациенты</a>
        <a href="#">Эвтаназия</a>
        <a href="#">Детские экскурсии</a>
      </div>
    </div>
    <div class="nav-item">
      <a href="#">Услуги <img src="img/png-clipart-arrow-greater-than-sign-playerunknown-s-battlegrounds-arrow-angle-king.png" height="9" width="13"/></a>
      <div class="nav-submenu">
        <a href="#">Все Услуги</a>
        <a href="#">Check-up</a>
        <a href="#">Консультации</a>
      </div>
    </div>
    <a href="#">Маркет</a>
    <a href="#">Консультация</a> <!-- Добавленная ссылка -->
    <div class="nav-item">
      <a href="#">Ещё <img src="img/png-clipart-arrow-greater-than-sign-playerunknown-s-battlegrounds-arrow-angle-king.png" height="9" width="13"/></a>
      <div class="nav-submenu">
        <a href="#">База Знаний</a>
        <a href="#">Доноры</a>
        <a href="#">Аверия Курсы</a>
        <a href="#">Аверия Поиск</a>
        <a href="#">Конкурсы</a>
        <a href="#">Лохматая уборка</a>
      </div>
    </div>
  </nav>
  <div class="right-items">
    <a href="#" class="contact">Контакты</a>
    <a href="#" class="review">Отзывы</a>
    <div class="phone-number">Телефон: +123456789</div>
    <div class="buttons-container">
      <div class="buttons-container">
        <!-- Кнопка для открытия страницы личного кабинета -->
        <button class="btn btn-success" onclick="window.location.href='login.php'">Личный кабинет</button>
      </div>
      <button class="green-button">Онлайн оплата</button>
    </div>
  </div>
</header>

<main class="container p-2"  >
  <div class="text-justify mt-3 mb-1 ">
    <a href="#" style="color: gray;text-decoration: none;">Ветеринарная клиника</a>
    <img src="img/стрелка вправо.png" height="9" width="13"/>
    <a href="#" style="color: gray;text-decoration: none;">Check-up</a>

    <!-- ссылки на регистрацию -->
    <?php if (isset($_SESSION['user_id'])): ?>
    <p>Вы вошли как <?php echo $_SESSION['username']; ?>. <a href="logout.php">Выйти</a></p>
    <?php else: ?>
    <p>Вы не авторизованы. <a href="login.php">Войти</a> или <a href="register.php">Зарегистрироваться</a></p>
    <?php endif; ?>

    <!-- Кнопка для перехода к фильтрации -->
    <a href="filter.php" class="btn btn-primary">Перейти к фильтрации</a>



    <div class="context-title special">Первое полное обследование</div>
    <div class="context-container">
      <div class="image-container">
        <div class="container bg-light">
          <div class="image-container d-flex justify-content-center">
            <img src="img/FKKFYC.png" alt="Первое полное обследование">
            <div class="image-text">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="covering-block"></div>
    <div class="content-section">
      <!-- Содержимое блока содержания -->
    </div>

    <div class="content-section">
      <h3>Содержание:</h3>
      <ol>
        <li><a href="#section1">Будет необходимо вашему<br> питомцу, если</a></li>
        <li><a href="#section2">Как пройти обследование</a></li>
        <li><a href="#section3">Результаты</a></li>
      </ol>
    </div>




    <div class="wrap-schedule-price checkup-wrap">
    <div class="wrap-price-mobile">
      <div class="checkup-full-price">
      </div>
      <div class="wrap-buttons-service">
        <div class="control-buttons">
        </div>
      </div>



        <div class="context-subtitle" id="section1">Будет необходимо вашему питомцу, если:</div>
        <div class="context-text">
          <ul>
            <li>это котенок или щенок до 1 года, он взят с улицы или у других владельцев и поэтому анамнез неизвестен.</li>
          </ul>
        </div>


      <div id="section2">

      <div class="context-subtitle">Как пройти обследование</div>

      </div>
    <div class="images">
      <div>
        <img src="img/телефон.png" alt="Image 1" style="height:70px;width:60px;"/>
        <p><strong>Запишитесь по<br> телефону или через сайт</strong></p>
        <p>Администратор <br>подберёт<br> удобное время</p>
      </div>
      <div>
        <img src="img/пес.png" alt="Image 2" style="height:70px;width:60px;"/>
        <p><strong>Привезите питомца<br> в клинику натощак</strong></p>
        <p>Пройдите check-up<br> питомца всего <br>за 3 посещения</p>
      </div>
      <div>
        <img src="img/результаты .png"  alt="Image 3" style="height:70px;width:60px;"/>
        <p><strong>Получите<br> результаты</strong></p>
        <p>Расшифровка анализов<br> и медицинская карта<br>
          так же будут доступны<br> в личном кабинете</p>

      </div>
      <div>
        <img src="img/врач.png" alt="Image 4" style="height:70px;width:60px;"/>
        <p><strong>Пройдите итоговую<br>консультацию</strong></p>
        <p>Вы получите<br> подробные назначения<br> и зададите<br> интересующие вопросы<br> врачу</p>
      </div>
    </div>


    <span href="#" class="green-link underline" onclick="toggleText('analysis', this)">Анализы</span>
    <span href="#" class="green-link underline" onclick="toggleText('research', this)">Исследования</span>
    <span href="#" class="green-link underline" onclick="toggleText('hygiene', this)">Гигиенические мероприятия</span>
    <span href="#" class="green-link underline" onclick="toggleText('consultations', this)">Консультации</span>


    <div id="analysis" class="hidden otstup">
      <p class="bold">Общий анализ крови<p/>
      <p>Оценка основных показателей для определения уровня иммунного статуса, наличия<br> воспаления, анемии, признаков новообразований.</p>
      <p class="bold">Биохимический анализ крови (стандартный)</p>
      <p>Оценка состояния внутренних органов: поджелудочной железы, почек, печени, желчного<br> пузыря и сердца и др.</p>
      <p class="results">Результаты:</p>
      <ul>
        <li>заключение врача-терапевта по результатам диагностики, анализов и осмотра;</li>
        <li>назначение терапии и рекомендаций по уходу;</li>
        <li>возможность задать вопросы и получить ответы;</li>
        <li>полный план прививок и обработок;</li>
        <li>рекомендации по кастрации;</li>
        <li>рекомендации по оптимизации кормления питомца и образа жизни питомца.</li>
      </ul>
      <p>Все результаты вместе с историей обследований доступны в личном кабинете.</p>
    </div>



    <div id="research" class="hidden otstup">
      <p><span class="bold">УЗИ брюшной полости</span></p>
      <p>Необходимо для оценки размера и расположения органов, их внутренней структуры, а<br> также для определения наличия объемных образований и свободной жидкости.
        Метод <br>позволит выявить возможные патологии в органах и нарушения их функций.</p>
      <p class="results">Результаты:</p>
      <ul>
        <li> заключение врача-терапевта по результатам диагностики, анализов и осмотра;</li>
        <li> назначение терапии и рекомендаций по уходу;</li>
        <li> возможность задать вопросы и получить ответы;</li>
        <li> полный план прививок и обработок;</li>
        <li> рекомендации по кастрации;</li>
        <li> рекомендации по оптимизации кормления питомца и образа жизни питомца.</li>
      </ul>
      <p>Все результаты вместе с историей обследований доступны в личном кабинете.</p>
      <span/>
    </div>


    <div id="hygiene" class="hidden otstup">
      <p style="font-size: medium;"><span>Стрижка когтей, обработка наружного слухового прохода, гигиена глаз, чистка <br>
      параанальных желез.</span></p>
      <p class="results">Результаты:</p>
      <ul>
        <li> заключение врача-терапевта по результатам диагностики, анализов и осмотра;</li>
        <li> назначение терапии и рекомендаций по уходу;</li>
        <li> возможность задать вопросы и получить ответы;</li>
        <li> полный план прививок и обработок;</li>
        <li> рекомендации по кастрации;</li>
        <li> рекомендации по оптимизации кормления питомца и образа жизни питомца.</li>
      </ul>
      <p>Все результаты вместе с историей обследований доступны в личном кабинете.</p>
    </div>

    <div id="consultations" class="hidden otstup">
      <p style="font-size: larger;"><span class="bold">Приём врача-терапевта перед обследованием</span></p>
      <p style="font-size: larger;"><span>Открытие электронной медкарты, сбор анамнеза жизни питомца и его осмотр:</span></p>
      <ul>
        <li> аускультация сердца и легких с помощью стетофонендоскопа, чтобы проверить наличие<br> нарушения сердечных ритмов, шумов, которые могут указывать на патологии сердца, хрипы и<br> жесткое дыхание в легких;</li>
        <li> пальпация живота, чтобы оценить наполненность мочевого пузыря, количество каловых масс,<br> наличие болезненности в брюшной полости и даже образований;</li>
        <li> пальпация лимфатических узлов (увеличение лимфатических узлов может указывать на наличие<br> воспаления, инфекции или даже онкологии);</li>
        <li> осмотр носа, ушей и глаз для исключения воспалительных процессов и признаков вирусных<br> инфекций;</li>
        <li> исследование полости рта — включает проверку цвета слизистых, а также поиск поврежденных <br>зубов и признаков заболеваний десен (гингивит, стоматит и т. д.);</li>
        <li> проверка шерстного покрова для выявления инфекции кожи или внешних паразитов (блохи, вши<br> и т. д.), а также для комплексной оценки состояния организма.</li>
      </ul>
      <p style="font-size: larger;"><span>Заключительная консультация по результатам обследования (возможна без<br> участия питомца).</span></p>
      <p>По итогам всех обследований врач объяснит и распишет все необходимые назначения<br>
        и рекомендации, а также даст консультацию по содержанию питомца и уходу за ним,<br>
        кормлению и подбору рациона. Будет составлена правильная схема вакцинаций и<br>
        профилактических обработок (дегельминтизации, обработки от эктопаразитов),<br>
        указаны оптимальные сроки кастрации, а также вязки. Может потребоваться<br>
        дополнительная сдача анализов в стороннюю лабораторию и прохождение узких<br>
        специалистов, если будут выявлены признаки заболеваний.</p>
      <p class="results">Результаты:</p>
      <ul>
        <li> заключение врача-терапевта по результатам диагностики, анализов и осмотра;</li>
        <li> назначение терапии и рекомендаций по уходу;</li>
        <li> возможность задать вопросы и получить ответы;</li>
        <li> полный план прививок и обработок;</li>
        <li> рекомендации по кастрации;</li>
        <li> рекомендации по оптимизации кормления питомца и образа жизни питомца.</li>
      </ul>
      <p>Все результаты вместе с историей обследований доступны в личном кабинете.</p>
    </div>


    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ваш заголовок</title>
      <!-- ваш стиль -->
    </head>
    <body>
    <!-- ваш HTML -->

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        // Вызываем функцию для открытия вкладки "Анализы" при загрузке страницы
        toggleText('analysis', null);
      });

      var visibleId = null;

      function toggleText(id, event) {
        if (visibleId !== null) {
          document.getElementById(visibleId).classList.add('hidden');
        }

        var element = document.getElementById(id);
        if (element.classList.contains('hidden')) {
          element.classList.remove('hidden');
          visibleId = id;
        } else {
          element.classList.add('hidden');
          visibleId = null;
        }

        if (event) {
          event.preventDefault(); // Предотвращаем переход по ссылке, если событие передано
        }
      }
    </script>

    </body>
    </html>



    <div class="doctors-title">
      <h2>Врачи</h2>
    </div>
    <div class="card-container">
      <div class="column">
        <a href="#" class="card"><img src="img/карта1.png" height="72" width="220" alt="Card 1"/> </a>
        <a href="#" class="card"> <img src="img/карта2.png" height="72" width="220" alt="Card 2"></a>
        <a href="#" class="card"> <img src="img/карта3.png" height="72" width="220"alt="Card 3"></a>
      </div>
      <div class="column">
        <a href="#" class="card"><img src="img/карта4.png" height="72" width="220" alt="Card 4"></a>
        <a href="#" class="card"><img src="img/карта5.png" height="72" width="220"alt="Card 3"></a>
      </div>
      <div class="column">
        <a href="#" class="card"><img src="img/карта6.png" height="72" width="220"alt="Card 3"></a>
      </div>
    </div>

</main>
<footer>


  <div class="footer-column">
    <a href="#">О нас</a>
    <a href="#">Личный кабинет</a>
    <a href="#">Аверия Маркет</a>
    <a href="#">Новости</a>
    <a href="#">Консультации</a>
  </div>
  <div class="footer-column">
    <a href="#">База знаний</a>
    <a href="#">Аверия курсы</a>
    <a href="#">Доноры</a>
    <a href="#">Контакты</a>
  </div>
  <div class="footer-column">
    <a href="#">Наши принципы</a>
    <a href="#">Услуги</a>
    <a href="#">Отзывы</a>
    <a href="#">Партнерская программа</a>
  </div>
  <div class="copyright">
    <p>© Ветеринарная клиника «Аверия» 2024. <a class="privacy-policy" href="#">Конфиденциальность</a></p>
  </div>
  <div class="footer-right">
    <a href="#"><img src="img/вк.png" height="33" width="32" alt="вк"></a>
    <a href="#"><img src="img/фасебук.png" height="33" width="32" alt="фасебук"></a>
    <a href="#"><img src="img/инста.png" height="35" width="32" alt="инста"></a>
    <a href="#"><img src="img/пук.png" height="33" width="32" alt="пук"></a>
    <a href="#"><img src="img/тикитоки.png" height="33" width="32" alt="тикитоки"></a>
    <br>
    <a href="#"><img src="img/эплстор.png" height="38" width="121" alt="эплстор"></a>
    <a href="#"><img src="img/гуглстор.png" height="38" width="121" alt="гуглстор"></a>
  </div>



</footer>
<!-- Подключение Bootstrap JavaScript (необходимо для некоторых компонентов Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
