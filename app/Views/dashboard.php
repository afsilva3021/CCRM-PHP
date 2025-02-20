<?php require __DIR__ . '/../Template/header.php'; ?>
<!-- Começo da navbar -->
<header>
  <nav class="navbar bg-dark border-bottom fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigatison">
        <span class="bi bi-menu-app-fill"></span>
      </button>
      <div class="me-3">
        <?php
        $mensage = 5;

        if ($mensage > 0) {
          echo '<button type="button" class="btn btn-outline-primary active position-relative">
          <i class="bi bi-bell"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            ' . $mensage . '
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>';
        } else {
          echo '<button type="button" class="btn btn-outline-primary  position-relative">
          <i class="bi bi-bell"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            ' . $mensage . '
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>';
        }

        ?>

      </div>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <img class="d-flex justify-content-center aling-items-center rounded-4" src="./assets/img/sistem/logo-removebg-preview.png" alt="Logo da empresa CCRM" width="200">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item border-bottom d-grid grip-3 mb-2">
              <button class="btn btn-outline-primary" aria-current="page" href="/dashboard">Dashboard</button>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes / Contatos
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Leads / Oportunidades
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tarefas e Atividades
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Vendas
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Marketing
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Suporte e Atendimento ao Cliente
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Configurações
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown border-bottom d-grid grip-3 mb-2">
              <button type="button" class=" btn btn-outline-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Relatórios e Análises
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <form class="d-flex justify-content-end align-items-end h-100 d-inline-block" role="search" style="margin-top: 60%;">
              <div class="container d-flex">
                <input class="form-control" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
              </div>

            </form>

          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<!-- Final Navabar -->

<!-- Conteudo principal -->
<main>

</main>

<?php require __DIR__ . '/../Template/footer.php'; ?>