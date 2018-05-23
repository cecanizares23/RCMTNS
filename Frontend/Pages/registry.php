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
                <option onclick="showProfecional();">Profesional</option>
                <option onclick="showTecnica();">Tecnóloga</option>
                <option onclick="showTecnica();">Técnica</option>
                <option onclick="showBasica();">Secundaria</option>
                <option onclick="showBasica();">Primaria</option>
                <option onclick="showBasica();">No tiene</option>
            </select>
        </div>

        <div class="form-group" id="divTituloObtenido" hidden>
            <label for="Ultimo Titulo">¿Último título obtenido?</label>
            <select class="form-control" id="ultimoTitulo">
                <option>Pregrado</option>
                <option>Especialista</option>
                <option>Magister</option>
                <option>Doctorado</option>
            </select>
        </div>

        <div class="form-group" id="divNombreTitulo" hidden>
            <label for="Nombre titulo">¿Nombre del título obtenido?</label>
            <input type="text" class="form-control" id="nombreTitulo" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente estudia">¿Actualmente estudia?</label>
            <select class="form-control" id="actualmenteEstudia">
                <option onclick="showEstudia();">Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group" id="divQueEstudia" hidden>
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

        <div class="form-group" id="divNombreTituloObtener" hidden>
            <label for="Nombre titulo Obtener">¿Nombre del título obtenido a obtener?</label>
            <input type="text" class="form-control" id="nombreTituloObtener" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente trabaja">¿Actualmente trabaja?</label>
            <select class="form-control" id="actualmenteTrabaja">
                <option onclick="showTrabaja();">Si</option>
                <option onclick="showNoTrabaja();">No</option>
            </select>
        </div>

        <div class="form-group" id="divSectorLaboral" hidden>
            <label for="Sector">¿Cual es el sector en que labora?</label>
            <select class="form-control" id="sectorLaboral">
                <option onclick="hideSector();">Actividades artísticas, de entretenimiento y recreación</option>
                <option onclick="hideSector();">Transporte y almacenamiento</option>
                <option onclick="hideSector();">Información y comunicación</option>
                <option onclick="hideSector();">Actividades de servicio administrativo y de apoyo</option>
                <option onclick="hideSector();">Otras actividades de servicios</option>
                <option onclick="hideSector();">Construcción</option>
                <option onclick="hideSector();">Actividades profesionales, cientificas y tecnicas</option>
                <option onclick="hideSector();">Alojamiento y servicios de comida</option>
                <option onclick="hideSector();">Industrias manufactureras</option>
                <option onclick="hideSector();">Comercio al por mayor y al por menor</option>
                <option onclick="showOtroSector();">Otro</option>
            </select>
        </div>

        <div class="form-group" id="divCualSector" hidden>
            <label for="Cual Sector">¿Cual?</label>
            <input type="text" class="form-control" id="cualSector" placeholder="">
        </div>

        <div class="form-group" id="divNegocioPropio" hidden>
            <label for="Negocio Propio">¿Es dueña de su propio negocio?</label>
            <select class="form-control" id="negocioPropio">
                <option>Si</option>
                <option onclick="showFormaTrabajo();">No</option>
            </select>
        </div>

        <div class="form-group" id="divFormaTrabajo" hidden>
            <label for="Forma Trabajo">¿Trabaja de manera?</label>
            <select class="form-control" id="formaTrabajo">
                <option onclick="showTipoEmpresa();">Formal</option>
                <option>Informal</option>
            </select>
        </div>

        <div class="form-group" id="divTipoEmpresa" hidden>
            <label for="Tipo Empresa">¿Tipo de empresa?</label>
            <select class="form-control" id="tipoEmpresa">
                <option>Pública</option>
                <option>Privada</option>
            </select>
        </div>

        <div class="form-group" id="divHaTrabajado" hidden>
            <label for="ha trabajado">¿Alguna vez ha trabajado?</label>
            <select class="form-control" id="haTrabajado">
                <option onclick="tiempoDesempleo();">Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group" id="divTiempoDesempleo" hidden>
            <label for="Tiempo Desempleo">¿Desde hace cuanto tiempo no trabaja?</label>
            <select class="form-control" id="tiempoDesempleo">
                <option>Menos de 1 año</option>
                <option>De 1 a 5 años</option>
                <option>Mas de 5 años</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Conoce las TIC">¿Conoce qué son las TIC (tecnologías de la información y comunicaciones)?</label>
            <select class="form-control" id="conoceTIC">
                <option onclick="showUsaTIC()">Si</option>
                <option onclick="showInteresTIC()">No</option>
            </select>
        </div>

        <div class="form-group" id="divUsaTIC" hidden>
            <label for="Usalas TIC">¿Hace uso de las TIC?</label>
            <select class="form-control" id="usaTIC">
                <option onclick="showCualUso();">Si</option>
                <option>No</option>
            </select>
        </div>

        <fieldset id="divCualUso" hidden>
            <label for="tipoUso">¿Cual es su uso?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Entretenimiento(fotos videos peliculas musicas juegos)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Redes sociales
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Correo electrónico
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Compras en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Ventas en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Comunicación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Educación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Servicios bancarios
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Pago de servicios públicos (luz,teléfono)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Servicios o trámites en línea (citas médicas, licencias, etc)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input onclick="showOtroUso()" type="checkbox" class="form-check-input">
                    Otro
                </label>
            </div>
        </fieldset>

        <div class="form-group" id="divOtroUso" hidden>
            <label for="Otro Uso">¿Cual?</label>
            <input type="text" class="form-control" id="otroUso" placeholder="">
        </div>

        <div class="form-group" id="divInteresTIC" hidden>
            <label for="Interes TIC">¿estaria intereseda en conocer y  usar las TIC?</label>
            <select class="form-control" id="interesTIC">
                <option onclick="showTipoInteres();">Si</option>
                <option onclick="showDesinteresTIC();">No</option>
            </select>
        </div>

        <fieldset id="divTipoInteres" hidden>
            <label for="tipoInteres">¿En cuales?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Entretenimiento(fotos videos peliculas musicas juegos)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Redes sociales
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Correo electrónico
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Compras en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Ventas en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Comunicación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Educación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Servicios bancarios
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Pago de servicios públicos (luz,teléfono)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Servicios o trámites en línea (citas médicas, licencias, etc)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input onclick="showCualInteres();" type="checkbox" class="form-check-input">
                    Otro
                </label>
            </div>
        </fieldset>
        <div class="form-group" id="divCualInteres" hidden>
            <label for="CualInteres">¿Cual?</label>
            <input type="text" class="form-control" id="cualInteres" placeholder="">
        </div>

        <div class="form-group" id="divDesinteresTIC" hidden>
            <label for="Motivo Desinteres">¿Cuál cree que sería el motivo??</label>
            <select class="form-control" id="desinteresTIC">
                <option>No cuenta con los recursos económicos</option>
                <option>No dispone de tiempo para aprender</option>
                <option>No es de su interés</option>
                <option>No me permiten el uso </option>
                <option>Temor a la tecnología</option>
                <option>No se leer ni escribir</option>
                <option onclick="showOtroDesinteres();">Otro</option>
            </select>
        </div>
        <div class="form-group" id="divCualDesinteres" hidden>
            <label for="CualDesinteres">¿Cual?</label>
            <input type="text" class="form-control" id="cualDesinteres" placeholder="">
        </div>

    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="../Util/Js/bootstrap.min.js"></script>

<script src="../Util/Js/registry.js"></script>
</html>