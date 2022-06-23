<?php 
require "includes/cabecalho.php";
require "includes/conecta.php";



?>


   <!--  Bot carrosel -->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/soccer-3471402_960_720 (1).webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/soccer-3471402_960_720 (1).webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/soccer-3471402_960_720 (1).webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
   <!--  Bot carrosel -->
   
   

   <article>
<div class="container">
    <h1>Avaliações de clientes</h1>
    <section class="cards">
      
      <div class="card" >

        <img class="user" src="imagens/images.jpg" alt="">

        <h3>Roberto</h3>
        <div class="stars">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        
        <p class="text-center">" O melhor site para alugar quadras!!!, Simplesmente o melhor site para alugar quadras. Atendimento extremamente ágil e eficiente, oferencem as melhores quadras e com o melhor preço. "</p>

        </div>
      </div>
    
    
    
      <div class="card" >

        <img class="user" src="imagens/images-pessoa2.jpg" alt="">

        <h3>Pedro</h3>
        <div class="stars">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        
        <p class="text-center">" Esse site me ajudou muito a facilidade de alugar quadras, site perfeito !!! "</p>

        </div>
      </div>
    
    
    
      <div class="card" >

        <img class="user" src="imagens/images-pessoa3.jpg" alt="">

        <h3>Caio</h3>
        <div class="stars">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        <img class="star" src="imagens/estrela.png" alt="">
        
        <p class="text-center"> " Site excelente para alugar quadras, nunca vi um igual !!! "</p>

        </div>
      </div>     

</div>      
    </section>

   <h2>Sobre o site</h2>

  <p class="text-start">
    Esse site foi desenvolvido para facilitar a locação de quadras para nossos clientes. Com poucos sites que atendem para essas alocações, resolvemos criar a <b>Rent Sports</b>. Que vai ajudar a alugar qualquer tipo de quadra sem sair de casa. vale lembrar que o site ainda esta em desenvolvimento para atendermos da melhor forma nossos clientes. Mande seu feedback para nós através do suporte, para ajustar o site da melhor forma para vocês e terem a melhor experiência conosco. Muito obrigado!! - equipe <b>Rent Sports</b>
  </p>

    

    


   </article>

   <?php require "includes/rodape.php" ?>