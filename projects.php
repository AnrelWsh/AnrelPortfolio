<?php 
    $pageTitle = "Projects - Anrel Portfolio";
    $pageDescription = "Welcome to this Incredible web portfolio. Here Angel, a future Fullstack developer, will show you his newest website projects. You wanna be amazed? You'll be!"; 
    $pageSnippet =     
      '<script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "headline": "Discover Angel`s marvelous projects",
        "image": [
          "img/",
          "https://example.com/photos/4x3/photo.jpg",
          "https://example.com/photos/4x3/photo.jpg",
          "https://example.com/photos/16x9/photo.jpg"
        ],
        "datePublished": "2022-10-10"
        "author": [{
            "@type": "Person",
            "name": "Angel Hmeli",
            "url": "https://www.instagram.com/a_aine_jai_eu_el/"
        }]
      }
      </script>';
    
    require "doctype.php";
    require "header.php";
?>

    <main>    
      <div class="sep">
        <div class="sep-line"></div>
        <img src="img/anrel.png" alt="Logo Anrel Separation">
        <div class="sep-line"></div>
      </div>
      
      <section id="projects" class="projects">
        <h2 id="project-heading" class="zoom ">Projects</h2>
        <div class="project1 reveal">
          <div class="project-card" id="project-card1"></div>
          <div class="project-txt">
            <h4>Anrel Smart Clothes</h4>
            <p>Anrel Smart Clothes is a website where you can see the new Anrel connected hoodie, linked to its app. You can also read all the articles in the blog, post comments and many others things!</p>
            <a href="http://www.anrelsmartclothes.tk/home.php"><p class="magnet">See Project</p></a>
          </div>
        </div>
        <div class="project2 reveal">
          <div class="project-card" id="project-card2"></div>
          <div class="project-txt">
            <h4>Rueil Website</h4>
            <p>This website was made to make people discover the city of Rueil-Malmaison. A beautiful city with its plains, the Seine and its wild grid displays !</p>
            <a href="https://anrelwsh.github.io/ProjetRueil/" rel="nofollow"><p class="magnet">See Project</p></a>
          </div>
        </div>
      </section>
    </main>

    <?php 
      require "footer.php";
    ?>

  </body>

  <?php 
    require "javaCall.php";
  ?>

</html>