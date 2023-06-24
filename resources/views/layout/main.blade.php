<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/analysis.css">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/loginOrRegister.css">
  <link rel="stylesheet" href="../css/questions.css">
  <link rel="stylesheet" href="../css/welcome.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Heebo:wght@300&family=Nunito:wght@200&family=Raleway:wght@200&family=Signika&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>@yield('title')</title>
</head>
<body>
  <div class="menu">
    <div>
      <a href="/">INÍCIO</a>
      <a href="/login">ENTRAR</a>
      <a href="/register">CADASTRAR</a>
      <a href="#">SAIR</a>
      <a href="#">MINHA CONTA</a>
      <a href="#">ADMINISTRADOR</a>
    </div>
  </div>
  @yield('content')
</body>
</html>
