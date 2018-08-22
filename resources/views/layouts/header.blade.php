<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMART</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">



  <link href="{{ URL::asset('/css/all.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ URL::asset('/img/favicon.ico') }}">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center">
          <img src="{{ URL::asset('/img/avatar-1.jpeg') }} " alt="person" class="img-fluid rounded-circle">
          <h2 class="h5">Jorge Serrano</h2>
          <span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo">
          <a href="#" class="brand-small text-center">
            <strong>V</strong>
            <strong class="text-primary">D</strong>
          </a>
        </div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading text-center">Menu</h5>

        <ul id="side-admin-menu" class="side-menu list-unstyled">
          <li>
            <a href="{{url('/')}}">
              <i class="fa fa-home"></i>Inicio</a>
          </li>
          <li>
            <a href="#rhMenu" aria-expanded="false" data-toggle="collapse" class="collapsed">
              <i class="fa fa-users"></i>RH </a>
            <ul id="rhMenu" class="list-unstyled collapse" style="">
              <li>
                <a href="{{ route('funcionarios') }}">
                  <i class="fa fa-users"> </i>Funcionários</a>
              </li>
              <li>
                <a href="{{ route('variaveis') }}">
                  <i class="fa fa-bar-chart"> </i>Variaveis Mensais</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-university text-danger"> </i>Contabilidade</a>
              </li>
              <li>
                <a href="{{ route('diastrabalhados') }}">
                  <i class="fa fa-calendar"> </i>Qtd. Dias Trabalhados</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-calendar-check-o text-danger"> </i>Escala de Plantão</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Recibos</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-credit-card text-danger"> </i>Cartão de Ponto</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-bus text-danger"> </i>Vale Transporte</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-cutlery text-danger"> </i>Vale Refeição</a>
              </li>

            </ul>
          </li>

          <li>
            <a href="#enfermagemMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-ambulance "></i>Enfermagem</a>
            <ul id="enfermagemMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-stethoscope text-danger"> </i>Coren a Vencer</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-heartbeat text-danger"> </i>Vácinas</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-user-md text-danger"> </i>Exame Médico</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-book text-danger"> </i>RCM</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#financeiroMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-money"></i>Financeiro</a>
            <ul id="financeiroMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-list-alt text-danger"> </i> Contas a Pagar</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-list-ol text-danger"> </i> Fatura Consolidado</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-calculator text-danger"> </i>Orçamentos Aprovados</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-check-circle text-danger"> </i>Pagamentos Realizados</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-window-restore text-danger"> </i>Emissão de Faturas</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-plus-circle text-danger"> </i>Cadastrar Orçamento</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text text-danger"> </i>Relatório Manutenção</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#manutencaoMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-cog"></i>Manutenção</a>
            <ul id="manutencaoMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-plus-circle  text-danger"> </i>Cadastrar Orçamento</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text  text-danger"> </i>Relatórios</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-calculator  text-danger"> </i>Aprovados</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-circle-o-notch text-danger"> </i>Pendencias</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-plus  text-danger"> </i>Cadastrar OS</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-pie-chart text-danger"> </i>Gestão</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-calendar text-danger"> </i>Data Entrega OS (?)</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-list text-danger"> </i>Lista de Entrega da OS</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#protocolosMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-wpforms"></i>Protocolos</a>
            <ul id="protocolosMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-keyboard-o text-danger"> </i>Digitação</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-eye text-danger"> </i>Ver e Alterar</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-eye text-danger"> </i>Impres. de Formulário</a>
              </li>

              <li>
                <a href="#relatorioProtocoloMenu" aria-expanded="false" data-toggle="collapse">
                  <i class="fa fa-file-text"></i>Relatórios</a>
                <ul id="relatorioProtocoloMenu" class="collapse list-unstyled ">
                  <li>
                    <a href="#">
                      <i class="fa fa-search text-danger"> </i>Busca Avançada</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#patrimonioMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-rebel"></i>Patrimonio</a>
            <ul id="patrimonioMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-search text-danger"> </i>Busca Avançada</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Serviços a Vencer</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Parque de Equipamento</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Rel. de equipamentos</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Invent. Equipamentos</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Planej. de Serviços</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Relação de Óticas</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-file-text-o text-danger"> </i>Parque de Óticas</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#FerramentasMenu" aria-expanded="false" data-toggle="collapse">
              <i class="fa fa-wrench"></i>Ferramentas</a>
            <ul id="FerramentasMenu" class="collapse list-unstyled ">
              <li>
                <a href="#">
                  <i class="fa fa-building text-danger"> </i>Empresas</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-camera text-danger"> </i>Materiais</a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-handshake-o text-danger"> </i>Fornecedores</a>
              </li>
            </ul>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <div class="page">
    <!-- navbar-->
    <header class="header">
      <nav class="navbar">
        <div class="container-fluid container-fluid-topo">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <div class="navbar-header">
              <a id="toggle-btn" href="#" class="menu-btn">
                <i class="fa fa-bars"> </i>
              </a>
              <a href="index.html" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block">
                  <strong class="text-primary">VDLAP</strong>
                </div>
              </a>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

              <li class="nav-item">
                <a href="login.html" class="nav-link logout">
                  <span class="d-none d-sm-inline-block">Sair</span>
                  <i class="fa fa-sign-out"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    @yield('content')



    <!--
<footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Vdlap &copy; 2018</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Todos os direiros reservados <a href="https://bootstrapious.com" class="external"></a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
  </div>
  </div>
  </div>
  </footer>
  -->
  </div>
  <!-- JavaScript files-->
  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/popper.js/dist/umd/popper.min.js">
  </script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
  <script src="./node_modules/jquery.cookie/jquery.cookie.js">
  </script>
  <!-- <script src="node_modules/chart.js/dist/Chart.min.js"></script> -->
  <script src="./node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="./node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- <script src="js/charts-home.js"></script> -->
  <!-- Main File-->
  <script src="./js/front.js"></script>
  <script src="./js/actions.js">
  </script>
</body>

</html>