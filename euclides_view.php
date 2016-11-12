<html>
<head>
    <script type="text/javascript" src="vis/dist/vis.js"></script>
    <link href="vis/dist/vis.css" rel="stylesheet" type="text/css" />
    <link href="css/custom_style.css" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <style type="text/css">
        #mynetwork {
            width: 600px;
            height: 400px;
            border: 1px solid lightgray;
            margin: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Matemática Discreta</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Grafos <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Algoritmo de Euclides</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container col-md-6">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Algoritmo de Euclides</h3>
              </div>
              <div class="panel-body">
                <form method="POST" action="euclides.php" id="calcular_euclides" class="form-horizontal" target="container">
                    <fieldset>
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Primer número</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="num1" name="num1" placeholder="Numero 1">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Segundo número</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="num2" name="num2" placeholder="Numero 2">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Calcular</button>
                          </div>
                        </div>
                    </fieldset>
                </form>
              </div>
            </div>
        </div>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" name="container"></iframe>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>