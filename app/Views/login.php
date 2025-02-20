<?php require __DIR__.'/../Template/header.php'?>


  <div class="container-sm d-flex justify-content-center align-items-center vh-100 ">
    <div class="border rounded-4 shadow-lg p-5">
      <form id="loginForm" method="POST">
        <div class="mb-4">
          <img src="./assets/img/sistem/logo.png" alt="Logo sistema" width="400">
        </div>
        <div class="mb-4">
          <label for="email" class="form-label">Email:</label>
          <input type="email" name="email" class="form-control" placeholder="Email de acesso" maxlength="30" required>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Password de acesso" maxlength="20" required>
        </div>
        <div class="mb-3 text-center">
          <a href="#">Esqueceu a senha !</a>
        </div>
        <div class="mb-4 d-grid grip-2">
          <button type="submit" class="btn btn-outline-primary">Entrar</button>
        </div>
      </form>
    </div>
  </div>



  <script src="./assets/js/validedate.js"></script>
<?php require __DIR__.'/../Template/footer.php'; ?>