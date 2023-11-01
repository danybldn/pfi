<?php 
   include "conexao.php";
   session_start();
   $sql = "SELECT id,texto FROM postagens";
   $resultado = $conn->query($sql);

   // Verifique se o usuário está autenticado.
   if (!isset($_SESSION['logado'])) {

      // O usuário não está autenticado, redirecione para a página de login.
      header('Location: login.html');
  
          exit(); 
      }
  ?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A Flor Não Vista</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="index/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="index/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="index/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="index/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- font family -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Raleway:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="index/css/owl.carousel.min.css">
      <link rel="stylesheet" href="index/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="index/css/fim.css">
      
      
      
   </head>
   <body>
      
         <?php include 'nav.php';?>
</div>

<div class="centered-box">
   <div>
      <label for="nome" name="nome" style="font-size:20px"> 
         <?php 
      include 'nome_usuario.php';
      echo "$nomeUsuario"; 
      ?>
      </label>
      <form action="enviar_publicacao.php" method="post">
      <input type="text" name="publicacao" id="publicacao" placeholder="Qual a sua dúvida?" style="padding: 20px">
      <input type="text" name="email" id="email" value ="" style="visibility: hidden">

      <div class="container-form-btn" style="margin-top: 150px">
						<button class="form-btn" id="entrar" name="entrar" style="margin-left: 450px;" type="submit">
							Enviar
						</button>
					</div></form>	
   </div>
</div>

<?php
            // Loop para exibir os registros da tabela adocao
            while ($row = $resultado->fetch_assoc()) {              
              $id = $row["id"];
              $postagem = $row["texto"];
              
        ?>
        <div class="centered-box">
        <label for="nome" name="nome" style="font-size:20px"> 
         <?php 
      include 'nome_usuario.php';
      echo "$nomeUsuario"; 
      ?>
      </label>
        <div class="text_section layout_padding">
               <p class="informacao-animal">
                           <?php echo $postagem; ?>
                           </p>
                           </div>
          
            
        </div>
        <?php
            }
        ?>
        
      
<?php include "rodape.php";?>
      <!-- Javascript files-->
      <script src="index/js/jquery.min.js"></script>
      <script src="index/js/popper.min.js"></script>
      <script src="index/js/bootstrap.bundle.min.js"></script>
      <script src="index/js/jquery-3.0.0.min.js"></script>
      <script src="index/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="index/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="index/js/custom.js"></script>
      <!-- javascript --> 
      <script src="index/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
              
         $(".zoom").hover(function(){
              
         $(this).addClass('transition');
         }, function(){
              
         $(this).removeClass('transition');
         });
         });
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>  
   </body>
</html>


    <!-- Seu código de rodapé -->
    <script src="js/main.js"></script>
</body>
</html>