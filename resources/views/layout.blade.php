<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>{{Config::get('app.name')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body class="Site ">
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">{{Config::get('app.name')}}</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active ">
                <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
              </li>
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Справочники</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="/objects">Объекты</a>
                    <a class="dropdown-item" href="#">Свойства</a>
                    <a class="dropdown-item" href="#">Пользователи</a>
                </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Поиск" autofocus="true">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
    </nav>

  <main class="Site-content bg-faded">    
  
  <div class="text-right"><form class="form-group">
  <label class="mr-sm-2" for="inlineFormCustomSelect">Вид:</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    <option value="scheme" selected>Схема</option>
    <option value="table">Таблица</option>
  </select>
</form></div>

      <!-- Карточка объекта 1 -->   
      <div class="card m-2 w-25 float-left">
        <div class="card-header">
          <h5 class="card-title mb-0">{Название объекта}</h5>
        </div>

      <div id="accordionOne" role="tablist" aria-multiselectable="true" class="card-block p-0">
        <div class="card rounded-0 rounded-bottom">
          <div class="card-header" role="tab" id="headingOne">
            <h6 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                {Название свойства #1}
              </a>
            </h6>
          </div>

          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block p-1 text-right">
              {Значение свойства #1}
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Карточка объекта 2 -->   
      <div class="card m-2 w-25 float-left">
        <div class="card-header">
          <h5 class="card-title mb-0">{Название объекта}</h5>
        </div>

        <div id="accordionTwo" role="tablist" aria-multiselectable="true" class="card-block p-0">
          <div class="card rounded-0 rounded-bottom">
            <div class="card-header" role="tab" id="headingTwo">
              <h6 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   {Название свойства #2}
                </a>
              </h6>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block p-1 text-right">
                 {Значение свойства #2}
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Карточка объекта 2 -->   
      <div class="card m-2 w-25 float-left">
        <div class="card-header">
          <h5 class="card-title mb-0">{Название объекта}</h5>
        </div>

        <div id="accordionTwo" role="tablist" aria-multiselectable="true" class="card-block p-0">
          
          <div class="card rounded-0 rounded-bottom">
            <div class="card-header" role="tab" id="headingThree">
              <h6 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    {Название свойства #3}
                </a>
              </h6>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block p-1 text-right">
                 {Значение свойства #3}
              </div>
            </div>
          </div>
        </div>
      </div>


    </main><!-- /.container -->
    <footer class="bg-inverse text-white p-2 text-center">
      Кемерово 2017
    </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>