<!-- Head -->
<?php require __DIR__ . '/../Template/head.php'; ?>
<style type="text/css">
  html,
  body,
  #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>

<!-- Começo da navbar -->
<?php require __DIR__ . '/../Template/harder.php'; ?>

<!-- Conteudo principal -->
<main>
  <section class="container-md-4 pt-5 mt-5">
    <div class="div">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-3">
          <div class="card border rounded-4 shadow-lg">
            <div class="card-body">
              <h3 class="card-title text-center">Propostas e Orçamentos <span><i class="bi bi-clipboard2-check" style="font-size: 30px;"></i></span></h3>
              <p id="negociacoes" style="font-size: 30px;">540</p>
              <div class="container">

              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Special title treatment</h6>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Special title treatment</h6>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="text-light">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium omnis perspiciatis quia eos beatae ipsum odit sed modi officia velit itaque dolore, ullam veniam placeat quasi ea aliquid ratione illum?</p>
    </div>
  </section>

</main>

<?php require __DIR__ . '/../Template/footer.php'; ?>