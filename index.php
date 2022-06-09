<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Site responsivo de hospital</title>
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- link css  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

 <!-- Inicio do cabeçalho --> 

<header class="header">   
    
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> Hospital de 25</a>

    <nav class="navbar">
        
        <a href="registoMedico.php?"> registarmedico</a>
        <a href="admin.php">Início</a>
        <a href="#servicos">serviços</a>
        <a href="AgendarConsulta.php?">Agendar consulta</a>
        <a href="login.php?">Entrar</a>   
        <a href="#sobre">Sobre</a>    
          
        
    </nav>

    <!-- botaozinho de menu -->
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- Termina  o cabeçalho -->

<!-- Inicia a seccao  home -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>mantenha-se saudável</h3>
        <p>Clique em "Agendar" para agendar uma consulta ou pedir uma receita médica conforme a descrição do que sente
        </p>
        <a href="login.php?" class="btn"> Agendar <span class="fas fa-chevron-right"></span> </a>
    </div>
</section>
<!-- Inicia a seccao  home -->

<!-- Inicia a seccao dos icons-->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>Medicos</p>
    </div>

    <!-- Seccao com icon de user-->
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>Pacientes satisfeitos</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>Historico de consultas</p>
    </div>

    <!-- Seccao com icon de hospital-->
    <!--<div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>Horarios disponiveis</p>
    </div>-->

</section>

<!--Fim da seccao dos icons -->

<!-- Inicio da seccao dos servicos -->
<section class="services" id="services">

    <h1 class="heading">  <span>Serviços</span> </h1>

    <div class="box-container">

      

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>Ambulância</h3>
            <p>O Serviço de Urgência de Adultos do Hospital de 25, é um 
                serviço...</p>
            <a href="#" class="btn"> Mais <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Médicos </h3>
            <p>O hospital de 25 conta com novos médicos especializados em diversas... </p>
            <a href="#" class="btn"> Mais <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Covid 19</h3>
            <p>O Serviço de Urgência de Adultos do Hospital de 25, é um 
                serviço...</p>
            <a href="#" class="btn"> Mais <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Saude</h3>
            <p>O Serviço de Urgência de Adultos do Hospital de 25, é um 
                serviço...</p>
            <a href="#" class="btn"> Mais <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!--Fim da seccao de servicos -->

<!-- Inicio da seccao "sobre nos" -->
<section class="about" id="about">

    <h1 class="heading"> <span> Sobre</span> nos </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Nos cuidamos da sua sude e vida</h3>
            <p>Hospital de 25 é uma unidade do nível secunário e de referência nacional, que desenvolve actividades assistenciais da saude.</p>
            <p> Além das actividades de rotina, o HCM vem desenvolvendo nos últimos anos actividades de   excelência tais como dialise,  
                Cirurgia Ortopédica de prótese da anca e joelho e Cirurgia de coração aberto com circulação extracorpórea. Tem ainda capacidade
                para realizar exames auxiliares de diagnostico tais como a Tomografia axial computarizada (TAC), Ressonância Magnética, 
                Mamografia entre outras.
            </p>
            <a href="#" class="btn"> Mais <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- Fim da eccao "Sobre nos" -->

<!-- Inicio da seccao "Medicos"  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> Nossos <span> Medicos</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Marisa Alenca</h3>
            <span>expert doctor</span>
            <div class="share">              
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- Fim da seccao "Medicos"  -->


<!-- Link para javascript -->
<script src="js/cript.js"></script>
</body>
</html>