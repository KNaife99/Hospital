<?php include('agendaserver.php'); 
include('loginserver.php');
	

?>
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

<!-- Inicio da seccao de agendar  -->
<section class="book" id="book">

    <h1 class="heading"> <span>Agendar consulta</span>  </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="POST" action="agendaserver.php">
            <h3>Agende a tua consulta</h3>
            <input type="text" placeholder="Nome completo" class="box">
            <input type="text" placeholder="Nº de BI. ou Passaporte" class="box">
            <input type="number" placeholder="Contacto" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="date" class="box">
            <input type="submit" value="Submit" class="btn">
            
              <label class="box">Hora</label>
            <select name="hora" required>
             <option disabled selected>Horario</option>
             <option value="M">07:30 - 08:30</option>
             <option value="F">08:30 - 09:30</option>
             <option value="F">09:30 - 10:30</option>
             <option value="F">11:30 - 12:30</option>
             <option value="F">13:00 - 14:00</option>
             <option value="F">14:00 - 15:00</option>
             <option value="F">15:00 - 16:00</option>
             
           </select>
                    
        </form>
    </div>
</section>

