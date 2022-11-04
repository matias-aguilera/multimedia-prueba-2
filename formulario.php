<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario de noticia</title>

    
  </head>
  <body>
    <h1>Formulario </h1>
    <form action="procesar.php" name="" method="POST" enctype="multipart/form-data">
      <table border="0" align="center">
        <tr>
          <td>
            nombre:
          </td>
          <td>
            <label for="nombre"></label>
            <input type="text" name="nombre"  required  />
          </td>
        </tr>
        <tr>
          <td>
          apellido:
          </td>
          <td>
          <label for="apellido"></label>
            <input type="text" name="apellido"  required  />
          </td>
        </tr>
        <tr>
          <td>
          rut:
          </td>
          <td>
            <label for="rut"></label>
            <input type="text" name="rut"   required />
          </td>
        </tr>
        <tr>
        <td>
          fecha de nacimiento:
          </td>
          <td>
            <label for="fecha naciemiento"></label>
            <input type="date" name="fecha"   />
          </td>
        </tr>
        <tr>
          <td>
            nacionalidad:
          </td>
          <td>
            <label for="nacionalidad"></label>
            <select id="select" name="nacionalidad">
                <option>chilena</option>
                <option>canadiense</option>
                <option>uruguaya</option>
            </select>
          </td>
        </tr>
        <tr>
        <tr>
          <td>
            genero:
          </td>
          <td>
          <label for="genero"></label>
            <select id="select" name="genero">
                <option>hombre</option>
                <option>mujer</option>
                <option>otros</option>
            </select>
          </td>
        </tr>
        <tr>
        <tr>
          <td>
            ciudad de recidencia:
          </td>
          <td>
            <label for="ciudad"></label>
            <input type="text" name="ciudad"  required  />
          </td>
        </tr>
        <tr>
        <tr>
        <td>
          foto:
          </td>
          <td>
            <label for="foto"></label>
            <input type="file" name="foto"   required />
          </td>
        </tr>
       
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center">
            <input
              type="submit"  name="enviar" id="enviar" value="enviar" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>