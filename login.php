<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-mobiliaria</title>
    <!--css e bootstrap -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
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
              <a id="topnavcriar" href="criarconta.php">Criar Conta</a>
            </div>
        </div>
        <div style="padding-left:16px"></div>
    </div>
    <br><br><br><br>
    <form method="post" action="Cadastrocliente.php"> 
      <section class="vh-100 gradient-custom">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                  <div class="card-body p-5 text-center">
        
                    <div class="mb-md-5 mt-md-4 pb-5">
        
                      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                      <p class="text-white-50 mb-5">Por favor, digite seu login e senha!</p>
        
                      <div class="form-outline form-white mb-4">
                        <input type="email" name="typeEmailX" class="form-control form-control-lg" placeholder="Digite o E-mail para acesso"/>
                        <label class="form-label" for="typeEmailX">E-mail </label>
                      </div>
        
                      <div class="form-outline form-white mb-4">
                        <input type="password" name="typePasswordX" class="form-control form-control-lg" placeholder="Digite a Senha para acesso"/>
                        <label class="form-label" for="typePasswordX">Senha</label>
                      </div>
        
                      <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu a senha?</a></p>
                    
                      <input class="btn btn-outline-light btn-lg px-5" type="submit" value ="Logar">

                      <div class="d-flex justify-content-center text-center mt-4 pt-1">
                          <div class="socialslg">
                              <a href="#!" class="text-white"><i class="fa fa-facebook"> </i></a>
                              <a href="#!" class="text-white"><i class="fa fa-twitter"></i></a>
                              <a href="#!" class="text-white"><i class="fa fa-google-plus-square"></i></a>
                          </div>
                      </div>
        
                    </div>
        
                    <div>
                      <p class="mb-0">Não tem uma conta?<a href="criarconta.php" class="text-white-50 fw-bold">Criar conta</a></p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </form>






    <!--footer-->
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
    
</body>
</html>