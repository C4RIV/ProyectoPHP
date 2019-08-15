<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles_registrer.css">
    <title>Registro</title>
</head>

<body background="img/egipto.jpg">
  <div class="row">
    <nav class="navbar navbar-light bg-light" style="background-color: #424040!important;">
      <a class="navbar-brand"> <img src="img/logo.png" width="250px;" height="30"> </a>
    </nav>
  </div>
  <br>
    <div class="container" id="advanced-search-form">
        <h2>Registro Avanzado</h2>
        <form>
            <div class="form-group">
                <label for="first-name">Primer Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre" id="first-name">
            </div>
            <div class="form-group">
                <label for="last-name">Primer Apellido</label>
                <input type="text" class="form-control" placeholder="Primer Apellido" id="last-name">
            </div>
            <div class="form-group">
                <label for="country">Segundo Apellido</label>
                <input type="text" class="form-control" placeholder="Segundo Apellido" id="country">
            </div>
            <div class="form-group">
                <label for="number">Numero de Contacto</label>
                <input type="text" class="form-control" placeholder="Numero de Contacto" id="number">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email">
            </div>
            <div class="form-group">
                <label for="category">Area</label>
                <input type="text" class="form-control" placeholder="Area a Laborar" id="category">
            </div>
            <div class="form-group">
                <label for="education">Rol</label>
                <input type="text" class="form-control" placeholder="Especifique Función" id="education">
            </div>
            <div class="form-group">
                <label>Género</label>
                <div class="radio">
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Mascculino</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Femenino</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Otro</label>
                </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-ok">
            </span> Registrar </button>
        </form>
    </div>
    <br>
    <br>
    <br>
</body>

</html>
