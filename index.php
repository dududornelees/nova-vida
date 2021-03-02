<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/nova-vida-logo.svg" />

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Owl Carousel2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!-- Título e descrição -->
    <title>Nova Vida - Residencial Geriátrico | Exelência ao cuidado de Idosos</title>
    <meta content="Conheça o residencial geriátrico Nova Vida, a melhor geriatria para a sua família. Temos uma extensa equipe, com médico, enfermeira, técnicos em enfermagem, cuidadores, nutricionista e fisioterapeuta. Porto Alegre/RS. (51) 3044 2229." name="description">
    <meta content="geriatria, nova vida, lar para idosos, porto alegre, idosos, rs, residencial geriatrico, hospedagem fixa, hospedagem temporaria, fisioterapia, terapia ocupacional, nutrição, musicoterapia" name="keywords">    
  </head>
  <body>

    <div class="container-fluid m-0 p-0">  
      <?php include_once(__DIR__.'/assets/inc/navbar.php') ?>



      <!-- Capa -->
      <div class="capa" id="home">        
          <div class="container-capa">            
            <div class="container">
              <h1>Bem-Vindo ao <span style="color: white; text-decoration: underline; text-decoration-color: #ff5f64">Nova Vida</span></h1>
              <h2>Conheça mais sobre o nosso residencial geriátrico.</h2>
            </div>
          </div>
      </div>



      <!-- Sobre Nós -->
      <div class="container-fluid m-0 p-0" id="filosofia" style="background-color: #fff7f7">
        <section class="container">
          <div class="content-section">
            <div class="title">
              <h2>Sobre nós</h2>
            </div>

            <div class="separator-line">
              <div class="separator-line-in"></div>
            </div>

            <div class="description">
              <p>Aqui estão alguns dos nossos valores.</p>
            </div>

            <div class="container-cards">

              <div class="card">
                <div class="card-in">
                  <div class="card-image">
                    <div class="card-image-in">
                      <i class="far fa-handshake"></i>
                    </div>
                  </div>

                  <div class="card-title">
                    <h4>Comprometimento</h4>
                  </div>

                  <div class="card-desc">
                    <p>Temos uma equipe muito comprometida em atender as necessidades dos nossos clientes.</p>
                  </div>
                </div>
              </div>

              <div class="card" onmouseover="activeCard()">
                <div class="card-in card-active" id="card-active">
                  <div class="card-image">
                    <div class="card-image-in">
                      <i class="fas fa-home"></i>
                    </div>
                  </div>

                  <div class="card-title card-title-active" id="card-title-active">
                    <h4>Diferencial</h4>
                  </div>

                  <div class="card-desc">
                    <p>Cuidados preventivos com a saúde física e mental e emocional de nossos hospedes.</p>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-in">
                  <div class="card-image">
                    <div class="card-image-in">
                      <i class="fas fa-user-friends"></i>
                    </div>
                  </div>

                  <div class="card-title">
                    <h4>Humanização</h4>
                  </div>

                  <div class="card-desc">
                    <p>Cada hospede recebe cuidados de acordo com as suas necessidades e particularidades.</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="container-banner row">              
              <div class="col-12 col-sm-6 m-0 p-0">
                <img src="assets/images/banner.jpg">  
              </div>

              <div class="col-12 col-sm-6 banner-filosofia">
                <div class="banner-title">
                  <h2>Filosofia</h2>
                </div>

                <div class="banner-desc">
                  <p>O Residencial Nova Vida é uma empresa familiar, onde o carinho, o respeito e os laços familiares são nosso referencial.</p>
                </div>

                <div class="banner-separator">
                  <p><i class="fas fa-chevron-right"></i>Hospedagem assistida.</p>
                  <p><i class="fas fa-chevron-right"></i>Exclusividade e conforto.</p>
                </div>

                <div class="banner-subs row">
                  <div class="col-12 col-sm-6">
                    <div class="subs-ico">
                      <i class="fas fa-hand-holding-medical"></i>
                      <h5>Cuidado Subjetivo</h5>
                    </div>

                    <div class="subs-desc">
                      <p>Oferecemos todo o cuidado ao nosso hospede de forma singular e que vai além do investimento voltado ao seu bem-estar físico.</p>
                    </div>
                  </div>

                  <div class="col-12 col-sm-6">
                    <div class="subs-ico">
                      <i class="fas fa-hand-holding-heart"></i>
                      <h5>Flexibilidade</h5>
                    </div>

                    <div class="subs-desc">
                      <p>Excelente relação custo x benefício, praticidade de ter todos os serviços em um só lugar.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>             
        </section>
      </div>
      <!-- Wave -->
      <div style="height: 80px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-6.49,69.56 C119.92,187.00 273.42,27.13 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff7f7;"></path></svg></div>



      <!-- Galeria -->
      <div class="container-fluid m-0 p-0" id="galeria">
        <section class="container">
          <div class="content-section">
            <div class="title">
              <h2>Galeria</h2>
            </div>

            <div class="separator-line">
              <div class="separator-line-in"></div>
            </div>

            <div class="description">
              <p>Aqui estão algumas fotos de nossa estrutura.</p>
            </div>

            <div class="container-galeria">
              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/refeitorio-2.jpg" loading="lazy">
                    <div class="galeria-title">Refeitório</div>
                  </div>
                </div>
              </div>

              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/lanche-da-tarde.jpg" loading="lazy">
                    <div class="galeria-title">Lanche da tarde</div>
                  </div>
                </div>
              </div>

              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/refeitorio.jpg" loading="lazy">
                    <div class="galeria-title">Refeitório</div>
                  </div>
                </div>
              </div>

              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/quartos.jpg" loading="lazy">
                    <div class="galeria-title">Quartos</div>
                  </div>
                </div>
              </div>

              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/sacada.jpg" loading="lazy">
                    <div class="galeria-title">Sacada</div>
                  </div>
                </div>
              </div>

              <div class="galeria">
                <div class="galeria-in">
                  <div class="galeria-in-geral">
                    <img src="assets/images/galeria/sala-de-estar.jpg" loading="lazy">
                    <div class="galeria-title">Sala de estar</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Wave -->
      <div style="height: 80px; overflow: hidden; background-color: #fff7f7;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C41.48,111.02 271.49,-49.98 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>



      <!-- Serviços -->      
      <div class="container-fluid m-0 p-0" id="servicos" style="background-color: #fff7f7">        
        <section class="container">
          <div class="content-section">
            <div class="title m-0 p-0">
              <h2>Serviços</h2>
            </div>

            <div class="separator-line">
              <div class="separator-line-in"></div>
            </div>

            <div class="description" style="text-align: center;">
              <p>Temos uma equipe multidisciplinar, composta por médico, enfermeira, técnicos em enfermagem, cuidadores, nutricionista e fisioterapeuta, todos comprometidos com a saúde e o bem estar de nossos residentes.</p>
            </div>

            <div class="container-servico">
              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-bed"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Hospedagem - Fixa ou Temporária</h5>
                      <p>O idoso hospeda-se por tempo determinado ou indeterminado e usufrui de cuidados com a saúde e atividades desenvolvidas no residencial.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-user-md"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Médico e Enfermagem</h5>
                      <p>Atendimento médico com geriatra.<br>Enfermagem 24h com profissionais experientes e qualificados.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-apple-alt"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Nutrição e Alimentação</h5>
                      <p>Nutricionista especialista em nutrição sênior. Seis refeições diárias, todas atendendo as necessidades nutricionais de nossos hospedes.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-music"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Musicoterapia</h5>
                      <p>A musicoterapia é uma técnica terapêutica no contexto de tratamento, reabilitação ou prevenção de saúde e bem-estar dos nossos hospedes.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-heartbeat"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Terapia Ocupacional</h5>
                      <p>Atividades lúdicas, interação social. Atividades que visam preservar a cognição e coordenação motora.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="servico">
                <div class="servico-in">
                  <div class="servico-in-geral">
                    <div class="servico-ico">
                      <i class="fas fa-tasks"></i>
                    </div>

                    <div class="servico-desc">
                      <h5>Fisioterapia</h5>
                      <p>Individual ou coletiva, visando a preservação da autonomia e bem-estar dos nossos clientes.</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
      <!-- Wave -->
      <div style="height: 80px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-6.49,69.56 C119.92,187.00 273.42,27.13 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff7f7;"></path></svg></div> 



      <!-- Depoimentos -->
      <div class="container-fluid m-0 p-0" id="depoimentos">
        <section class="container">
          <div class="content-section">
            <div class="title m-0 p-0">
              <h2>Depoimentos</h2>
            </div>

            <div class="separator-line">
              <div class="separator-line-in"></div>
            </div>

            <div class="description" style="text-align: center;">
              <p>Aqui estão alguns depoimentos dos nossos clientes e colaboradores.</p>
            </div>

            <div class="owl-carousel owl-theme" style="text-align: center;">
              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>Meu pai, após sofrer um AVC, ficou hospedado por quase um ano na casa geriátrica. A casa é ampla, limpa e arejada. O atendimento é profissional. Recomendo o residencial!<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/everton.png">
                  </div>

                  <div class="owl-name">
                    <h5>Éverton de Moraes</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Cliente</p>
                  </div>
                </div>
              </div>

              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>Cuidado que o residencial oferece, vai muito além dos cuidados de uma equipe multiprofissional! Oferecemos um cuidado sibjetivo.<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/tamara.jpg">
                  </div>

                  <div class="owl-name">
                    <h5>Tamara Beatriz</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Colaboradora</p>
                  </div>
                </div>
              </div>

              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>A clínica é ótima, ampla e bem cuidada. A limpeza é um dos pontos positivos.<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/marize.jpg">
                  </div>

                  <div class="owl-name">
                    <h5>Marize</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Cliente</p>
                  </div>
                </div>
              </div>

              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>A melhor. Excelentes profissionais!<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/jeniffer.jpg">
                  </div>

                  <div class="owl-name">
                    <h5>Jeniffer Araujo</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Colaboradora</p>
                  </div>
                </div>
              </div>

              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>Minha mãe é portadora da doença Alzheimer e desde que a levei para a clínica, só vi melhoras. Além disso, é um lugar amplo e muito arejado, nota 10 para mim.<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/sergio.jpeg">
                  </div>

                  <div class="owl-name">
                    <h5>Sérgio</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Cliente</p>
                  </div>
                </div>
              </div>

              <div class="owl-container">
                <div class="owl-container-in">
                  <div class="owl-desc">
                    <p><i class="fas fa-quote-left"></i>Clínica em excelente localização, ambiente acolhedor e tranquilo.<i class="fas fa-quote-right"></i></p>
                  </div>

                  <div class="owl-image">
                    <img src="assets/images/depoimentos/cesar.jpg">
                  </div>

                  <div class="owl-name">
                    <h5>César Rocha</h5>
                    <div class="owl-stars">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="text-muted">Colaborador</p>
                  </div>
                </div>
              </div>
            </div>            

          </div>
        </section>
      </div>
      <!-- Wave -->
      <div style="height: 80px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff7f7;"></path></svg></div>



      <!-- Contato -->      
      <div class="container-fluid m-0 p-0" id="contato" style="background-color: #fff7f7;">
        <section class="container">
          <div class="content-section">
            <div class="title m-0 p-0">
              <h2>Contato</h2>
            </div>

            <div class="separator-line">
              <div class="separator-line-in"></div>
            </div>

            <div class="description" style="text-align: center;">
              <p>Entre em contato via email ou Whatsapp para saber mais.</p>
            </div>

            <div class="container-contato">
              <div class="contato">
                <div class="contato-banner">
                  <div class="contato-banner-card">
                    <div class="banner-card-ico">
                      <div>
                        <i class="fas fa-map-marked-alt"></i>
                      </div>
                    </div>
                    <div class="banner-card-text">
                      <h5>Localização:</h5>
                      <p class="text-muted">Avenida Nonoai, nº 1195</p>
                      <p class="text-muted">Porto Alegre - RS</p>
                    </div>
                  </div>

                  <div class="contato-banner-card">                    
                    <div class="banner-card-ico">
                      <div>
                        <i class="fas fa-envelope"></i>
                      </div>
                    </div>
                    <div class="banner-card-text">
                      <h5>Email:</h5>
                      <p class="text-muted">novavidarh@gmail.com</p>
                    </div>                    
                  </div>

                  <div class="contato-banner-card">
                    <div class="banner-card-ico">
                      <div>
                        <i class="fas fa-phone-alt"></i>
                      </div>
                    </div>
                    <div class="banner-card-text">
                      <h5>Telefone:</h5>
                      <p class="text-muted">(51) 3044-2229</p>
                      <p class="text-muted">(51) 98633-5788</p>
                    </div>
                  </div>
                </div>

                <div class="contato-form">
                  <form method="POST" action="">
                    <div class="row">
                      <div class="mb-3 col-12 col-sm-6">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
                      </div>

                      <div class="mb-3 col-12 col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu email">
                      </div>
                    </div>

                    <div class="mb-3">
                      <textarea class="form-control" id="msg" rows="6" placeholder="Mensagem"></textarea>                     
                    </div>
                    
                    <button type="submit" class="btn w-100">Enviar Mensagem</button>                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>      


      <?php include_once(__DIR__.'/assets/inc/footer.php') ?>
    </div>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/067d370e3e.js" crossorigin="anonymous"></script>        

    <!-- Owl Carousel2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>