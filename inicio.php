<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGUEO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="inicio.css">
</head>
<body>
    <form action="validaracceso.php" method="GET">
    <div class="carta">
        <h2>Acceso al Sistema de Evaluacion Docente</h2>
        <label for="">Ingrese con su cuenta @bue</label>
        <input type="text" name="cuenta" id="" class="form-control">
        <label for="">Rol</label>
        <select name="rol" id="" class="form-select">
            <option value="Docente">Docente</option>
            <option value="Evaluador">Evaluador</option>
            <option value="Administrador">Administrador</option>
        </select>
        <button type="submit">Acceder</button><br>
    </div>
    </form>
</body>
</html>
