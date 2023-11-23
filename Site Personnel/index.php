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
        $data=my_yaml_parse_file('./assets/yaml/accueil.yaml');
        foreach($data as $Accueil){
            echo "<h3>".$Accueil['name']."</h3>";
            echo "<h3>".$Accueil['']."</h3>";
        }
        ?>
       </div>
    </section>
    
    <section id="apropos">
      <h1>A Propos</h1>
      <div>
        <image src="./assets/images/apropos.jpeg" ></image>
        <h3> Je suis un Pokemon <br>
        J'adore manger de l'herbe<br>
        Vraiment mon site vous apprendras les meilleurs herbes
        </h3>
       </div>
    </section>
    
    <section id="competences">
      <h1>Compétences</h1>
      <div>
        
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