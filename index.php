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
                    <a class="navbar-brand" href="index.php">Matemática Discreta</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="graphs">Grafos <span class="sr-only">(current)</span></a></li>
                        <li><a href="#" class="euclides">Algoritmo de Euclides</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="panel">
            <div class="graphs-form">
                <div class="col-md-6 well bs-component" id="mynetwork"></div>

                <form class="form-horizontal col-md-6 well bs-component" style="margin: 20px;" method="POST" action="create_nodes.php" id="create_nodes">
                    <fieldset>
                        <legend>Grafos</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Vértices:</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="vertices" id="vertices" value="{v1, v2, v3, v4, v5, v6, v7}" style="width: 450px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Aristas:</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="aristas" name="aristas" value="{(v1,v2),(v1,v7),(v2,v3),(v2,v4),(v3,v7),(v3,v4),(v3,v6),(v4,v5),(v5,v6)}" style="width: 450px;"><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary" id="btnActualizar">Actualizar Grafo</button>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="preguntas-container" style="display:none;">
                        <legend>Grados</legend>
                        <div class="grades-container">
                            
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="container col-md-6 euclides-form" style="display:none;">
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
                <div class="panel panel-success container-results" style="display:none;">
                  <div class="panel-heading">
                    <h3 class="panel-title">Resultado</h3>
                  </div>
                  <div class="panel-body">
                    <p class="euclides-results"></p>
                  </div>
                </div>
            </div>
        </div>

<script src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#create_nodes').submit(function() {
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data) {
                    // console.log(data);
                    var dato = jQuery.parseJSON(data);
                    // console.log(dato);
                    $('.preguntas-container').show('slow');
                    $('.grades-container').html(dato[2]);
                    // getGrades(dato[2]);
                    // create an array with nodes
                    var nodes = new vis.DataSet(dato[0]);

                    // create an array with edges
                    var data = dato[1];

                    var edges = new vis.DataSet(data);

                    // create a network
                    var container = document.getElementById('mynetwork');

                    // provide the data in the vis format
                    var data = {
                        nodes: nodes,
                        edges: edges
                    };
                    var options = {};

                    // initialize your network!
                    var network = new vis.Network(container, data, options);
                }   
            })
            return false;
        });

        $('#calcular_euclides').submit(function() {
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data) {
                    $('.container-results').show('slow');
                    $('.euclides-results').html(data);
                }   
            })
            return false;
        });

        $('.graphs').click(function () {
            $('.graphs-form').show('slow');
            $('.euclides-form').hide('slow');
        });

        $('.euclides').click(function () {
            $('.euclides-form').show('slow');
            $('.graphs-form').hide('slow');
        });
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>