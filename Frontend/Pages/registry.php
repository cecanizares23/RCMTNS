<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RCMTNS</title>


    <link rel="stylesheet" href="../Util/Css/bootstrap.min.css">
</head>
<body>
    <form class="needs-validation" novalidate>
        <div class="form-group">
            <label for="Numero de identificacion">Numero de identificación</label>
            <input type="number" class="form-control" id="NumeroID" placeholder="">
            <div class="invalid-feedback">
                ¡Porfavor pon un numero de identificación valido
            </div>
        </div>
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" class="form-control" id="Nombres" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>
        <div class="form-group">
            <label for="Fecha Nacimiento">Fecha de nacimiento</label>
            <input class="form-control" type="date" id="fechaNacimiento">
            <div class="invalid-feedback">
                ¡Porfavor ingresa una fecha valida!
            </div>
        </div>
        <div class="form-group">
            <label for="Correo">Correo electronico</label>
            <input type="email" class="form-control" id="email" placeholder="nombre@ejemplo.com ">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
            <div class="invalid-feedback">
                ¡Porfavor ingresa un correo valido!
            </div>
        </div>
        <div class="form-group">
            <label for="Telefono">Telefono</label>
            <input class="form-control" type="tel" id="telefono">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
            <div class="invalid-feedback">
                ¡Porfavor ingresa un telefono valido!
            </div>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Estado Civil">¿Actualmente su estado civil es?</label>
            <select class="form-control" id="estadoCivil">
                <option>Soltera</option>
                <option>Unión libre</option>
                <option>Casada</option>
                <option>Divorciada</option>
                <option>Viuda</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Hijos">¿Tiene usted hijos?</label>
            <select class="form-control" id="hijos">
                <option>Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Nivel de estudio">¿Su nivel de estudios es?</label>
            <select class="form-control" id="nivelEstudios">
                <option>Profesional</option>
                <option>Tecnóloga</option>
                <option>Técnica</option>
                <option>Secundaria</option>
                <option>Primaria</option>
                <option>No tiene</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Ultimo Titulo">¿Último título obtenido?</label>
            <select class="form-control" id="ultimoTitulo">
                <option>Pregrado</option>
                <option>Especialista</option>
                <option>Magister</option>
                <option>Doctorado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Nombre titulo">¿Nombre del título obtenido?</label>
            <input type="text" class="form-control" id="nombreTitulo" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente estudia">¿Actualmente estudia?</label>
            <select class="form-control" id="actualmenteEstudia">
                <option>Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Que estudia">¿Que está estudiando?</label>
            <select class="form-control" id="queEstudia">
                <option>Primaria</option>
                <option>Secundaria</option>
                <option>Técnica</option>
                <option>Tecnología</option>
                <option>Pregrado</option>
                <option>Postgrado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Nombre titulo Obtener">¿Nombre del título obtenido a obtener?</label>
            <input type="text" class="form-control" id="nombreTituloObtener" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente trabaja">¿Actualmente trabaja?</label>
            <select class="form-control" id="actualmenteTrabaja">
                <option>Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Sector">¿Cual es el sector en que labora?</label>
            <select class="form-control" id="sectorLaboral">
                <option>Actividades artísticas, de entretenimiento y recreación</option>
                <option>Transporte y almacenamiento</option>
                <option>Información y comunicación</option>
                <option>Actividades de servicio administrativo y de apoyo</option>
                <option>Otras actividades de servicios</option>
                <option>Construcción</option>
                <option>Actividades profesionales, cientificas y tecnicas</option>
                <option>Alojamiento y servicios de comida</option>
                <option>Industrias manufactureras</option>
                <option>Comercio al por mayor y al por menor</option>
                <option>Otro</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Cual Sector">¿Cual?</label>
            <input type="text" class="form-control" id="cualSector" placeholder="">
        </div>

        <div class="form-group">
            <label for="Negocio Propio">¿Es dueña de su propio negocio?</label>
            <select class="form-control" id="negocioPropio">
                <option>Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Forma Trabajo">¿Trabaja de manera?</label>
            <select class="form-control" id="formaTrabajo">
                <option>Formal</option>
                <option>Informal</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Tipo Empresa">¿Tipo de empresa?</label>
            <select class="form-control" id="tipoEmpresa">
                <option>Pública</option>
                <option>Privada</option>
            </select>
        </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="../Util/Js/bootstrap.min.js"></script>
</html>