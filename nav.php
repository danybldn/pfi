<!--header section start -->
<div class="header_section">
            <div class="container">
               <div class="main">
                  <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                              <ul>
                                 <li><img src="images/user-icon.png"></li>
                                 <?php
                                    // Verifique se o usuário está logado
                                    if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
                                       // Se o usuário está logado, exiba o botão de logout
                                       echo '<li><a href="logout.php">Logout</a></li>';
                                    } else {
                                       // Se o usuário não está logado, exiba o botão de login
                                       echo '<li><a href="login.html">Login</a></li>';
                                    }
                                    ?>
                              </ul>
                           
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">Home</a>
                              <a href="login.html">Login</a>
                              <a href="cadastro.html">Cadastro</a>
                              <a href="chat.php">Chat</a>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        
         <!-- header section end -->