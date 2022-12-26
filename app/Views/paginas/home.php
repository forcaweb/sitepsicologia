<main class="container">
  <section class="wellcome">
    <section class="carroselContainer">
      <div class="swiper selfies">
          <div class="swiper-wrapper">
            <?php
              $total = 5;
              for($i = 1; $i <= $total; $i++){
            ?>
            <div class="swiper-slide">
              <img src="<?= URL ?>/img/aulas/<?= $i ?>.jpeg" alt="aulas cerebro mais ativo">
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
        <nav>
        <a href="/" target="_blank" rel="noopener noreferrer">Ganhar treino grátis </a>
      </nav>
      </div>
    </section>
  </section>
  <section class="content" id="contentFirst">
        <article>
          <div class="text">
            <h2>O QUE É O <span>CÉREBRO+ATIVO</span>?</h2>

            <p>O Centro de psicologia e estimulação cognitiva Cérebro+Ativo promove a neuroplasticidade, ativação das funções cognitivas e a potencialização de habilidades naturais já existentes no indivíduo, através de atividades como: enigmas desafiadores e atividades lúdicas.</p>

            <p>Por meio das atividades e práticas cognitivas realizadas no Cérebro+Ativo, é possível exercitar e promover a ativação cerebral promovendo novas conexões neurais, mais equilíbrio nas relações, resoluções de problemas cotidianos, estimulação das habilidades mentais e melhora da qualidade de vida.</p>
          </div>
          <div class="video">
          <iframe width="100%" height="370" src="https://www.youtube.com/embed/eMotXjlLLZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </article>      
  </section>

  <section class="content" id="contentSecunds">
        <article>
          <div class="img">
            <img src="<?= URL ?>/img/aulas/1.jpeg" alt="Alunos">
          </div>
          <div class="text">
            <h2>QUEM PODE SER <span>ALUNO</span>?</h2>

            <p>Qualquer pessoa com dificuldades de memória e/ou transtornos de aprendizagem como TDA E TDAH.</p>

            <ul>
            <li>Crianças</li>
            <li>Adolescentes</li>
            <li>Jovens</li>
            <li>Adultos</li>
            <li>Idosos</li> 
            </ul>
          </div>
        </article>      
  </section>
</main>

