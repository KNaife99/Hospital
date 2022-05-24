<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="registoMedico.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>registoPaciente</title> 
</head>
<body>
    <div class="container">
        <header>Registo de Medico</header>

        <form action="#">
            <div class="form">
                <div class="details personal">
                    
                    <div class="fields">
                        <div class="input-field">
                            <label>Nomes</label>
                            <input type="text" placeholder="Digite o nome do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Apelido</label>
                            <input type="text" placeholder="Digite o apelido do medico" required>
                        </div>
                        <div class="input-field">
                            <label>Endereco</label>
                            <input type="text" placeholder="Digite o endereco do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Nacionalidade</label>
                            <input type="text" placeholder="Digite a nacionalidade medico" required>
                        </div>

                        <div class="input-field">
                            <label>Especialidade</label>
                            <input type="text" placeholder="Digite a especialidade" required>
                        </div>

                        <div class="input-field">
                            <label>Data de nascimento</label>
                            <input type="date" placeholder="Data de nascimento do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Digite o email do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Contacto</label>
                            <input type="number" placeholder="Digite o contacto do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Sexo</label>
                            <select required>
                                <option disabled selected>Genero</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nr. de B.I</label>
                            <input type="number" placeholder="Numero do B.I do medico" required>
                        </div>

                        <div class="input-field">
                            <label>Data de emissao</label>
                            <input type="date" placeholder="Digite a data de emissao" required>
                        </div>

                        <div class="input-field">
                            <label>Data de validade</label>
                            <input type="date" placeholder="Digite a data de validade" required>
                        </div>
                    
                        <button class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Voltar</span>
                            
                        </button>
        
                        <button class="sumbit">
                                <span class="btnText">Submeter</span>
                                <i class="uil uil-navigator"></i>
                         </button>
                                
                    </div> 
                </div>     
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>