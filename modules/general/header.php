<?php
echo "<link href='assets/css/style.css' rel='stylesheet'> ";
?>
<header id="header" class="fixed-top">
  <div class="container-fluid" style="background-color:#1a2026;">

    <div class="row justify-content-center">
      <div class="col-xl-10 d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index.php"><img class="logoplus" src="assets/images/logo/logoPlayArenaFull.svg"><span></span></a></h1>
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="drop-down"><a href="index.php">О центре</a>
              <ul>
                <li><a href="gallery.php">Галерея</a></li>
                <li><a href="cafe.php">Кафе</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="index.php" class="link-hover-center">Услуги</a>
              <ul>
                <li><a href="booking.php">Аренда площадок</a></li>
                <li><a href="events.php">Организация мероприятий</a></li>
                <li><a href="dr_dish.php">Dr.Dish</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href=""><span class="proplay">PRO</span> Play</a>
              <ul style="background:#1a2026;">
                <li><a href="basketball.php">Баскетбол</a></li>
                <li><a href="volleyball.php">Волейбол</a></li>
                <li><a href="athletics.php">ОФП</a></li>
              </ul>
            </li>
            <li><a href="contacts.php">Контакты</a></li>
            <li class="drop-down"><a href="">Язык</a>
              <ul>
                <li><a href="?ln=eng"><?php echo "ENG";
                                      $pageLang = 'ENG'; ?></a></li>
                <li><a href="?ln=est"><?php echo "EST";
                                      $pageLang = 'EST'; ?></a></li>
                <li><a href="?ln=rus"><?php echo "RUS";
                                      $pageLang = 'RUS'; ?></a></li>
              </ul>
            </li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </div>

  </div>
</header><!-- End Header -->