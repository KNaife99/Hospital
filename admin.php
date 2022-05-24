<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Painel do gestor</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>
            
            <span class="logo_name">Gestao</span>
            
        </div>

        <div class="menu-items">  <!--menu da esquerda------------------->
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-user-md"></i>
                    <span class="link-name">Medicos</span>
                </a></li>
                <li><a href="#">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="link-name">Agendamentos</span>
                </a></li>
                
               
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">sair</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Modo escuro</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar aqui...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fas fa-heartbeat"></i>
                    <span class="text">Hospital de 25</span>
                </div>

                <div class="boxes">
                    
                    <div class="box box2">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span class="text">Agendamentos</span>
                        
                    </div>
                    <div class="box box3">
                        <i class="fas fa-user-md"></i>
                        <span class="text">+ Medicos</span>
                       
                    </div>
                    <div class="box box1">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span class="text">Historico</span>
                        <span class="number">  </span>
                    </div>
                </div>
            </div>
            <!------------------ Deve ter a lista de medicos ---------------------------------------->
            <div class="tables">
                <div class="las-appointments" >
                    <h2> appointments</h2>
                    <a href="#" class="btn"> ver </a>
                </div>
                <table class="appointments">
                    <thead>
                        <td>Nome</td>
                        <td>Apelido</td>
                        <td>sexo</td>
                        <td>Nacionalidade</td>
                        <td>Especialidade</td>
                        <td>Nr_Bi</td>
                        <td>Contacto</td>  
                    </thead>
                </table>
                <tbody>
                    <div class="input-field">
                        <input type="text" placeholder="Digite o nome do medico" required>
                    </div>

                </tbody>

            </div>
            <!-------------------------------------------------- Aqio termina a  lista de medicos --------------------------->
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>