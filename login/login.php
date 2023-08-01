<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #333; /* Cor de fundo escuro */
      color: #fff; /* Cor do texto */
    }
    .login-container {
      background-color: rgba(0, 0, 0, 0.7); /* Fundo semi-transparente */
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="login-container p-4 mx-auto p-2">
          <h1 class="text-center mb-4">Login</h1>
          <form method="post" action="validar.php">
            <div class="form-group">
              <label for="username">Usuário:</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
              <label for="password">Senha:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
</body>
</html>