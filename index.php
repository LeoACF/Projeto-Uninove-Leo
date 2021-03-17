<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="Wit Solutions">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body style="background-image: url(img/img1.jpg); background-attachment: fixed; background-size: 100%; background-repeat: no-repeat; background-color: blue;
">

    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid" style="height: 80px;">
            <a class="navbar-brand" href="#" style="font-size: 26px;">Wit Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/Logo do site.jpeg" style="width: 120px;height: 60px;">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="font-color: white; font-size: 20px;">Início</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#" style="font-color: white; font-size: 20px;">Serviços</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#"style="font-color: white; font-size: 20px;">preços</a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="font-color: white; font-size: 20px;">
            Outras informações
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <li><a class="dropdown-item" href="#"></a></li>
             <li><a class="dropdown-item" href="#"style="font-color: white; font-size: 16px;">sobre nós</a></li>
             <li><a class="dropdown-item" href="#"style="font-color: white; font-size: 16px;">blá blá blá</a></li>
             <li><a class="dropdown-item" href="#"style="font-color: white; font-size: 16px;"> ocupando espaço</li></a>
            </ul>
             </li>
            </ul>
            </div>
        </div>
    </nav>


    <div id="bottom" style="position: fixed; top: 500px; float: left; left: 25px;">
            <!-- botão de ligar Modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 200px;height: 60px;">
            Comprar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Formulário com os dados pra Api -->
                <form name="formu" class="row g-3" action="checkout.html" method="post">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email:
                    </label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
                     <select id="inputState" class="form-select">
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="MG">Minas Gerais</option>
                     </select>
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    selecione caso todas as informações tiverem sido preenchidas :)
                    </label>
                  </div>
                </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>
