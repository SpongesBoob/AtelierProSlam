<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Blog Killian Bunel</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<!-- menue -->
<body>

    <header class="header">
        <a href="#" class="logo">Logo</a>
    <nav>
        <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#apropos">A Propos</a></li>
          <li><a href="#competences">Compétences</a></li>
          <li><a href="#experience">Expérience</a></li>
          <li><a href="#formation">Formation</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    
<!-- Différentes Section -->
<main>
    
    <section id="accueil">
      <h1>Accueil</h1>
       <div>
        <?php
        $data = yaml_parse_file('./assets/yaml/accueil.yaml');

        echo '<div style="display: flex; align-items: center;">';
        echo '<div style="flex: 1;"><img src="./assets/images/' . $data['Image'] . '" alt=""></div>';
        echo '<div style="flex: 1;">';
        echo '<h3>' . $data['Name'] . '</h3>';
        echo '<h3>' . $data['Accroche'] . '</h3>';
        echo '</div>';
        echo '</div>';
        ?>
       </div>
    </section>
    
    <section id="apropos">
      <h1>A Propos</h1>
        <div>
            <?php
            require_once("yaml/yaml.php");
            $data=yaml_parse_file('./assets/yaml/apropos.yaml');

            echo '<div style="display: flex; align-items: center;">';
            echo '<div style="flex: 1;"><img src="./assets/images/' . $data['Image'] . '" alt=""></div>';
            echo '<div style="flex: 1;">';
            echo "<h3>".$data['Accroche']."</h3>";
            echo '<br>';
            echo "<h3>".$data['Presentation']."</h3>";
            echo '</div>';
            echo '</div>';
            ?>
        </div>
    </section>
    
    <section id="competences">
      <h1>Compétences</h1>
        <?php
        require_once("yaml/yaml.php");
        $data=yaml_parse_file('./assets/yaml/competences.yaml');

        echo '<div style="display: flex; align-items: center;">';
        echo '<div style="flex: 1;"><img src="./assets/images/' . $data['Image'] . '" alt=""></div>';
        echo '<div style="flex: 1;">';
        echo "<h3>".$data['HTML']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starshtml'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo "<h3>".$data['CSS']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starscss'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo "<h3>".$data['PHP']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starsphp'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo "<h3>".$data['Cisco']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starscisco'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo "<h3>".$data['Francais']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starsfr'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo "<h3>".$data['Anglais']."</h3>";
        echo '<div class="star-rating">';
        echo '<div class="star-rating">';
        foreach ($data['starsanglais'] as $star) {
            echo '<span class="' . $star . ' fa-2x fa-lightblue"></span>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        ?>
        </div>
    </section>

    <section id="experience">
        <h1>Expériences</h1>
        <div>
          <image src="./assets/images/PhotoMoi.png" ></image>
          <h3> Je suis un Pokemon <br>
            J'adore manger de l'herbe<br>
            Vraiment mon site vous apprendras les meilleurs herbes <br>
            <a href ='https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUHcmVjcm9sbA%3D%3D'>CV</a></h3>
         </div>
      </section>
      
      <section id="formation">
        <h1>Formation</h1>
        <div>
          <image src="./assets/images/PhotoMoi.png" ></image>
          <h3> Je suis un Pokemon <br>
            J'adore manger de l'herbe<br>
            Vraiment mon site vous apprendras les meilleurs herbes <br>
            <a href ='https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUHcmVjcm9sbA%3D%3D'>CV</a></h3>
        </div>
      </section>
      
      <section id="contact">
        <h1>Contact</h1>i
      </section>

  </main>
  <script src="https://kit.fontawesome.com/68048cc640.js" crossorigin="anonymous"></script>
</body>
</html>