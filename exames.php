<link href="assets/css/module-css/page-title.css" rel="stylesheet">
<link href="assets/css/module-css/service.css" rel="stylesheet">
<link href="assets/css/module-css/sidebar.css" rel="stylesheet">
<link href="assets/css/module-css/service-details.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


 
<?php if($_GET['ex']=='teste-ergometrico') { $texto = "Teste Ergométrico";}  ?>
<?php if($_GET['ex']=='metodosgraficos') { $texto = "Métodos Gráficos";}  ?>
<?php if($_GET['ex']=='ecocardiograma') { $texto = "Ecocardiograma";}  ?>
<?php if($_GET['ex']=='ultrassom-abdome') { $texto = "Ultrassonografia de Abdome Superior";}  ?>
<?php if($_GET['ex']=='mapa') { $texto = "Mapa 24h";}  ?>
<?php if($_GET['ex']=='mrpa') { $texto = "M.R.P.A";}  ?>
<?php if($_GET['ex']=='raiox-digital') { $texto = "Raio X Digital";}  ?>
<?php if($_GET['ex']=='tilt-test') { $texto = "Tilt Test";}  ?>
<?php if($_GET['ex']=='ultrassom-vascular') { $texto = "Ultrassom Vascular";}  ?>
<?php if($_GET['ex']=='ultrassom-ginecologico') { $texto = "Ultrassom Ginecológico";}  ?>
<?php if($_GET['ex']=='ultrassomgeral') { $texto = "Ultrassom Geral";}  ?>
<?php if($_GET['ex']=='eletrocardiograma') { $texto = "Eletrocardiograma digital";}  ?>
<?php if($_GET['ex']=='holter') { $texto = "Holter";}  ?>



<?php if($_GET['ex']=='mrpa') { $texto = "Monitorização Residencial da Pressão Arterial (MRPA)";}  ?>
        
        <!-- page-title -->
        <section class="page-title p_relative centred">
            <div class="bg-layer" style="background-image: url(assets/images/clinica4.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1><?php echo $texto ?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="/">Home</a></li>
                        <li><?php echo $texto ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- service-details -->
        <section class="service-details pt_120 pb_110">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar service-sidebar mr_15">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Exames</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                                     
                                                     
                                                     <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <li><a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">Ecocardiograma</a></li>
      </button>


    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">
        <p>- Adulto</p>
    </a>
   
    <a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">
        <p>- Fetal</p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">
        <p>- Transesofágico</p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">
        <p>- Estresse com dobutamina </p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ecocardiograma">
        <p>- Strain</p>
    </a>

      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collap4">
      <li><a href="http://localhost:8000/?Secao=exames&ex=mapa">Mapa 24 horas
      </a></li>
      </button>
    </h2>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="/http://localhost:8000/?Secao=exames&ex=mapa">
          <p>- Sobre o exame
          </p>
      </a>
      </div>
    </div>
  </div>






  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
      <li><a href="http://localhost:8000/?Secao=exames&ex=mrpa">M.R.P.A 7 dias
      </a></li>
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=mrpa">
          <p>- Sobre o exame
          </p>
      </a>
      </div>
    </div>
  </div>


  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
      <li><a href="http://localhost:8000/?Secao=exames&ex=holter">Holter
      </a></li>
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="/http://localhost:8000/?Secao=exames&ex=holter">
          <p>- Sobre o exame
          </p>
      </a>
      </div>
    </div>
  </div>



  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
      <li><a href="http://localhost:8000/?Secao=exames&ex=teste-ergometrico">Teste Ergométrico
      </a></li>
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=teste-ergometrico">
          <p>- Sobre o exame
          </p>
      </a>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
      <li><a href="http://localhost:8000/?Secao=exames&ex=eletrocardiograma">Eletrocardiograma digital
      </a></li>
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=eletrocardiograma">
          <p>- Sobre o exame
          </p>
      </a>
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       
      <li><a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">Ultrassom Geral</a></li>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">
          <p>- Abdome Total, Superior e Inferior
          </p>
      </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">
        <p>- Tireoide
        </p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">
        <p>- Mamas
        </p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">
        <p>- Articulação
        </p>
    </a>
    <a href="http://localhost:8000/?Secao=exames&ex=ultrassomgeral">
        <p>-Próstata
        </p>
    </a>
    
      </div>
    </div>
  </div>




  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
       
      <li><a href="http://localhost:8000/?Secao=exames&ex=ultrassom-vascular">Ultrassom Vascular</a></li>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="">
          <p>-Carótidas e Vertebras
          </p>
      </a>

    <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-vascular">
        <p>- Aorta e Arterial
        </p>
    </a>

    <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-vascular">
        <p>- Membros inferiores e Superiores
        </p>
    </a>

    <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-vascular">
        <p>- Venoso e Arterial
        </p>
    </a>

      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
       
      <li><a href="http://localhost:8000/?Secao=exames&ex=ultrassom-ginecologico">Ultrassom Ginecológico </a></li>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-ginecologico">
          <p>- Obstétrico Morfológico
          </p>
      </a>

    <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-ginecologico">
        <p>- Ginecológico
        </p>
    </a>

    <a href="http://localhost:8000/?Secao=exames&ex=ultrassom-ginecologico">
        <p>- Transvaginal
        
        </p>
    </a>
    
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
       
      <li><a href="http://localhost:8000/?Secao=exames&ex=tilt-test">Tilt Test</a></li>
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href="http://localhost:8000/?Secao=exames&ex=tilt-test">
            <p>- Sobre o exame</p>
        </a>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      <li><a href="http://localhost:8000/?Secao=exames&ex=raiox-digital">Raio X Digital</a></li>
     
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <a href="http://localhost:8000/?Secao=exames&ex=raiox-digital">
            <p>- Sobre o exame</p>
        </a>
      </div>
    </div>
  </div>
</div>
                                                     
                                                     
                                                  
                                                    
                                                   
                                                      
                                 
                                   
                                                     
                                    </ul>
                                </div>
                            </div>
                            <div class="service-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="https://catalaomedicalce1.hospedagemdesites.ws/assets/images/topo.jpg" alt=""></figure>
                                        <div class="icon-box"><img src="assets/images/h2.png" width="60%" style="margin-top: -20px;" alt=""></div>
                                    </div>
                                    <div class="lower-content">
                                        <h3>Clinica Thiago Jabur Bittar</h3>
                                        <p>Contamos com um quadro médico altamente qualificado, em diversas áreas, estrutura e aparelhos modernos para realizar exames precisos e, também, com ponto de coleta de exames laboratoriais. Entre em contato e saiba mais.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">

                        <?php
                                    if($_GET['ex']=='teste-ergometrico') { include 'ergometrico.php';} 
                                    else if($_GET['ex']=='mapa') { include 'mapa.php';} 
                                    else if($_GET['ex']=='raiox-digital') { include 'raiox-digital.php';} 
                                    else if($_GET['ex']=='tilt-test') { include 'tilt-test.php';} 
                                    else if($_GET['ex']=='ultrassomgeral') { include 'ultrassomgeral.php';} 
                                    else if($_GET['ex']=='ultrassom-ginecologico') { include 'ultrassom-ginecologico.php';} 
                                    else if($_GET['ex']=='ultrassom-vascular') { include 'ultrassom-vascular.php';} 
                                    else if($_GET['ex']=='metodosgraficos') { include 'metodosgraficos.php'; } 
                                    else if($_GET['ex']=='ecocardiograma') { include 'ecocardiograma.php';}
                                     else if($_GET['ex']=='mrpa') { include 'mrpa.php';}
                                     else if($_GET['ex']=='holter') { include 'holter.php';}  
                                     else if($_GET['ex']=='eletrocardiograma') { include 'eletrocardiograma.php';}  



                            ?>

                           <p class="mt-5"><a href="" class="theme-btn btn-three"><span>Agendar Exames</span></a></p>
                  
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </section>
        <!-- service-details end -->