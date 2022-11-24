<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>-->
    
    <!-- Favicons -->
    <link href="https://i.ibb.co/t3jKyBC/favicon.png" rel="icon">
    <link href="https://i.ibb.co/GFdb0W7/apple-touch-icon.png" rel="apple-touch-icon">
    
</head>
<body class="body">
    <div id="titulo"><a id="logoa">e<span id="logob">-mobiliaria</span></a></div>
    <!--nav bar-->
    <!-- fazer as paginas abaixo -->  
    <div class="container-nav">
        <div class="topnav">
            <a class="active" href="index.html">Home</a>
            <a href="lancamentos.html">Lançamentos</a>
            <a href="comprar.html">Comprar</a>
            <a href="alugar.html">Alugar</a>
            <a href="anuncie.html">Anuncie</a>
            <a href="sobre.contato.html">Sobre</a>
            <a href="sobre.contato.html">Contato</a>
            <div id="btnlg">
                <a id="topnavlogin" href="login.php">Login</a>
            </div>
            </div>
        <div style="padding-left:16px"></div>
        </div>
        

        <!--formulario de cadastro-->
        <div class="bodycc">
            
            <div class="containercc">
                
                <form class="form" action="Cadastrocliente.php" method = "POST">
            
                    <?php
                        if(isset($_GET['fail'])){
                            $vericar_cadastro = $_GET['fail'];
                    
                            if($vericar_cadastro==1){
                            echo '<div class="alert alert-danger" role="alert">
                            Falha ao cadastrar usuário
                            </div>';
                            }
                        } 
                        else if(isset($_GET['success'])){
                            $vericar_cadastro = $_GET['success'];
                    
                            if($vericar_cadastro==1){
                            echo '<div class="alert alert-success" role="alert">
                            Sucesso ao cadastrar usuário
                            </div>';
                            }
                        }
                    ?>

                    <div class="form-control">

                        <label for="username" >Nome </label>
                        <input type="text" name="nome" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <div class="form-control">

                        <label for="username" >Telefone</label>
                        <input type="tel" name="telefone" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <div class="form-control">

                        <label for="username" >E-mail</label>
                        <input type="email" name="email" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <div class="form-control">

                        <label>login</label>
                        <input type="text" name="login" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <div class="form-control">

                        <label>Senha</label>
                        <input type="password" name="senha" minlength="8" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <div class="form-control">

                        <label>Confirme sua senha</label>
                        <input type="password" name="password-two" minlength="8" required>
                        <i class="img-success" ><img src="images/success-icon.svg" alt=""></i>
                        <i class="img-error" ><img src="images/error-icon.svg" alt=""></i>

                        <small>Error Message</small>

                    </div>

                    <button class="btn btn-outline-light btn-lg px-5" type="submit" >Enviar</button>
                    
                </form>
            </div>
            
        </div>

    
    
    <footer>
        <div class="footer-content">
            <h3><a id="logoa">e<span id="logob" style="color: #fff;">-mobiliaria</span></a></h3>
            <div class="footerlnk">
                <ul class="footerul" >
                    <li><a href="https://goo.gl/maps/ZyfvktbDaN11Za8x9">Rua Erê n°207 - Prado Laboratorio 6 Turma: 3005</a></li>
                </ul>
                <ul>
                    <!-- fazer as paginas abaixo-->
                    <li><a href="trabalhe.html"> Trabalhe conosco </a>
                        <a href="lancamentos.html">Lançamentos</a>
                        <a href="comprar.html">Comprar</a>
                        <a href="alugar.html">Alugar</a>
                        <a href="anuncie.html">Anuncie</a>
                        <a href="sobre.contato.html">Sobre</a>
                        <a href="sobre.contato.html">Contato</a>
                    </li>
                </ul>
            </div>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 e-mobiliaria designed by <span>alunos prof: Bruno Rodrigues</span></p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>