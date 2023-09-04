<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="stylesheet.css" />
  </head>
  <body>
    <!-- Enlaces de reediricionamiento :D -->
    <div class="nav">
      <a class="navAnchor" href="index.html">Índice</a>
      <a class="navAnchor" href="formulario.php">Formulario</a>
    </div>
    <main>
      <h1>Formulario:</h1>
      <h2>Proporcione sus datos a continuacion:</h2>
      <form action="store.php" method="post">
        <fieldset>
          <legend>Nombre:</legend>
          <label for="nombreForm">Proporcione su nombre:</label>
          <input
            type="text"
            id="nombreForm"
            name="nombreIng"
            placeholder="Ingrese su nombre..."
            required
          />
        </fieldset>
        <fieldset>
          <legend>Correo:</legend>
          <label for="correoForm">Proporcione su correo:</label>
          <input
            type="email"
            id="correoForm"
            name="correoIng"
            placeholder="Ingrese su correo..."
            required
          />
        </fieldset>
        <fieldset>
          <legend>Genero:</legend>
          <input
            type="radio"
            id="generoHombreForm"
            name="generoIng"
            value="hombre"
            checked
          />
          <label for="generoHombreForm">Hombre</label>
          <input
            type="radio"
            id="generoMujerForm"
            name="generoIng"
            value="mujer"
          />
          <label for="generoMujerForm">Mujer</label>
          <input
            type="radio"
            id="generoOtroForm"
            name="generoIng"
            value="otro"
          />
          <label for="generoOtroForm">Otro</label>
        </fieldset>
        <fieldset>
          <legend>Contraseña:</legend>
          <label for="contraseniaForm">Proporcione su contraseña:</label>
          <input
            type="password"
            id="contraseniaForm"
            name="passwordIng"
            required
          />
        </fieldset>
        <fieldset>
          <legend>Comentarios:</legend>
          <label for="comentariosForm">Proporcione sus comentarios:</label>
          <textarea id="comentariosForm" name="comentariosIng"></textarea>
        </fieldset>
        <fieldset>
          <legend>Ciudad:</legend>
          <label for="ciudadForm">Seleccione su ciudad:</label>
          <select id="ciudadForm" name="ciudadIng" form="formularioIndex">
            <option value="guadalajara">Guadalajara</option>
            <option value="zapopan">Zapopan</option>
            <option value="tonalá">Tonalá</option>
            <option value="otro">Otro</option>
          </select>
        </fieldset>
        <fieldset>
          <legend>¿Me contratarías?</legend>
          <label for="contratacionForm">Estoy interesado en contratarte</label>
          <input
            type="checkbox"
            id="contratacionForm"
            name="respuestaIng"
            form="formularioIndex"
          />
        </fieldset>
        <button type="submit">Submit</button>
      </form>
      
      <?php
        echo "<h2>Usuarios registrados en el sitio web:</h2>";
        require ('conexion.php');
        $sql = "SELECT * FROM usuario";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "<ul>";
        foreach($stmt->fetchAll() as $row){
          echo "<li>" . $row['id'] . " - " . $row['nombre'] . " - " . $row['correo'] . "</li>";  
        }
        echo "</ul>";
      ?>

    </main>
    <div class="footer">
      <section>
        <h3>Contáctame en...</h3>
        <p>
          Enviar <a href="mailto:sebastian.esqueda@alumnos.udg.mx">correo</a>
        </p>
      </section>
    </div>
  </body>
</html>
