<main class="container">
  <section class="carroselContainer">
    <div class="swiper selfies">
        <div class="swiper-wrapper">
          <?php
            $total = 26;
            for($i = 1; $i < $total; $i++){
          ?>
          <div class="swiper-slide">
            <img src="<?= URL ?>/img/aulas/<?= $i ?>.jpg" alt="aulas cerebro mais ativo">
          </div>
          <?php } ?>
        </div>
      </div>
  </section>

  <section class="welcomeContainer">
    <div class="logo">
      <img src="<?= URL ?>/img/logo.svg" alt="Logo cerebro mais ativo">
      <h1>Ative o seu cérebro e ganhe +</h1>
      <span id="textAuto"></span>
    </div>
    <nav>
      <a href="/" target="_blank" rel="noopener noreferrer">Ganhe agora 7 dias de curso grátis </a>
    </nav>
  </section>
</main>


