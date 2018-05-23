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
            <label for="Tipo Documento">Tipo de documento</label>
            <select class="form-control" name="tipoDoc" id="tioDoc" required>
                <option onclick="clearTipoDoc();">Cedula</option>
                <option onclick="clearTipoDoc();">Tarjeta de identidad</option>
                <option onclick="showTipoDoc();">Otro</option>
            </select>
        </div>

        <div class="form-group" id="divCualTipoDoc" hidden>
            <label for="CualInteres">¿Cual?</label>
            <input type="text" class="form-control" name="cualTipoDoc" id="cualTipoDoc" placeholder="" required>
        </div>


        <div class="form-group">
            <label for="Numero de identificacion">Numero de identificación</label>
            <input type="number" class="form-control" name="numeroID" id="numeroID" placeholder="" required>
            <div class="invalid-feedback">
                ¡Porfavor pon un numero de identificación valido
            </div>
        </div>
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="" required>
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="" required>
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>
        <div class="form-group">
            <label for="Fecha Nacimiento">Fecha de nacimiento</label>
            <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" required>
            <div class="invalid-feedback">
                ¡Porfavor ingresa una fecha valida!
            </div>
        </div>
        <div class="form-group">
            <label for="Correo">Correo electronico</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com " required>
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
            <div class="invalid-feedback">
                ¡Porfavor ingresa un correo valido!
            </div>
        </div>
        <div class="form-group">
            <label for="Telefono">Telefono</label>
            <input class="form-control" type="tel" name="telefono" id="telefono" required>
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
            <div class="invalid-feedback">
                ¡Porfavor ingresa un telefono valido!
            </div>
        </div>
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="" required>
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Estado Civil">¿Actualmente su estado civil es?</label>
            <select class="form-control" name="estadoCivil" id="estadoCivil" required>
                <option>Soltera</option>
                <option>Unión libre</option>
                <option>Casada</option>
                <option>Divorciada</option>
                <option>Viuda</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Hijos">¿Tiene usted hijos?</label>
            <select class="form-control" name="hijos" id="hijos" required>
                <option>Si</option>
                <option>No</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Nivel de estudio">¿Su nivel de estudios es?</label>
            <select class="form-control" name="nivelEstudios" id="nivelEstudios" required>
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
            <select class="form-control" name="ultimoTitulo" id="ultimoTitulo">
                <option>Pregrado</option>
                <option>Especialista</option>
                <option>Magister</option>
                <option>Doctorado</option>
            </select>
        </div>

        <div class="form-group" id="divNombreTitulo" hidden>
            <label for="Nombre titulo">¿Nombre del título obtenido?</label>
            <input type="text" class="form-control" name="nombreTitulo" id="nombreTitulo" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente estudia">¿Actualmente estudia?</label>
            <select class="form-control" name="actualmenteEstudia" id="actualmenteEstudia" required>
                <option onclick="showEstudia();">Si</option>
                <option onclick="clearEstudia();">No</option>
            </select>
        </div>

        <div class="form-group" id="divQueEstudia" hidden>
            <label for="Que estudia">¿Que está estudiando?</label>
            <select class="form-control" name="queEstudia" id="queEstudia">
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
            <input type="text" class="form-control" name="nombreTituloObtener" id="nombreTituloObtener" placeholder="">
            <div class="valid-feedback">
                ¡Perfecto!
            </div>
        </div>

        <div class="form-group">
            <label for="Actualmente trabaja">¿Actualmente trabaja?</label>
            <select class="form-control" name="actualmenteTrabaja" id="actualmenteTrabaja" required>
                <option onclick="showTrabaja();">Si</option>
                <option onclick="showNoTrabaja();">No</option>
            </select>
        </div>

        <div class="form-group" id="divSectorLaboral" hidden>
            <label for="Sector">¿Cual es el sector en que labora?</label>
            <select class="form-control"  name="sectorLaboral" id="sectorLaboral">
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
            <input type="text" class="form-control" name="cualSector" id="cualSector" placeholder="">
        </div>

        <div class="form-group" id="divNegocioPropio" hidden>
            <label for="Negocio Propio">¿Es dueña de su propio negocio?</label>
            <select class="form-control" name="negocioPropio" id="negocioPropio">
                <option onclick="clearFormaTrabajo();">Si</option>
                <option onclick="showFormaTrabajo();">No</option>
            </select>
        </div>

        <div class="form-group" id="divFormaTrabajo" hidden>
            <label for="Forma Trabajo">¿Trabaja de manera?</label>
            <select class="form-control" name="formaTrabajo" id="formaTrabajo">
                <option onclick="showTipoEmpresa();">Formal</option>
                <option onclick="clearTipoEmpresa();">Informal</option>
            </select>
        </div>

        <div class="form-group" id="divTipoEmpresa" hidden>
            <label for="Tipo Empresa">¿Tipo de empresa?</label>
            <select class="form-control" name="tipoEmpresa" id="tipoEmpresa">
                <option>Pública</option>
                <option>Privada</option>
            </select>
        </div>

        <div class="form-group" id="divHaTrabajado" hidden>
            <label for="ha trabajado">¿Alguna vez ha trabajado?</label>
            <select class="form-control" name="haTrabajado" id="haTrabajado">
                <option onclick="showTiempoDesempleo();">Si</option>
                <option onclick="clearTiempoDesempleo();">No</option>
            </select>
        </div>

        <div class="form-group" id="divTiempoDesempleo" hidden>
            <label for="Tiempo Desempleo">¿Desde hace cuanto tiempo no trabaja?</label>
            <select class="form-control" name="tiempoDesempleo" id="tiempoDesempleo">
                <option>Menos de 1 año</option>
                <option>De 1 a 5 años</option>
                <option>Mas de 5 años</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Conoce las TIC">¿Conoce qué son las TIC (tecnologías de la información y comunicaciones)?</label>
            <select class="form-control" name="conoceTIC" id="conoceTIC" required>
                <option onclick="showUsaTIC()">Si</option>
                <option onclick="showInteresTIC()">No</option>
            </select>
        </div>

        <div class="form-group" id="divUsaTIC" hidden>
            <label for="Usalas TIC">¿Hace uso de las TIC?</label>
            <select class="form-control" name="usaTIC" id="usaTIC">
                <option onclick="showCualUso();">Si</option>
                <option>No</option>
            </select>
        </div>

        <fieldset id="divCualUso" hidden>
            <label for="tipoUso">¿Cual es su uso?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="entretenimientoUso" id="entretenimientoUso" class="form-check-input">
                    Entretenimiento(fotos videos peliculas musicas juegos)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="redesUso" id="redesUso">
                    Redes sociales
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="correoUso" id="correoUso">
                    Correo electrónico
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="comprasUso" id="comprasUso">
                    Compras en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="ventasUso" id="ventasUso">
                    Ventas en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="comunicaionUso" id="comunicaionUso">
                    Comunicación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="educacionUso" id="educacionUso">
                    Educación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="bancoUso" id="bancoUso">
                    Servicios bancarios
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="serviciosPublicosUso" id="serviciosPublicosUso">
                    Pago de servicios públicos (luz,teléfono)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="tramitesUso" id="tramitesUso">
                    Servicios o trámites en línea (citas médicas, licencias, etc)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input onclick="showOtroUso()"  type="checkbox" class="form-check-input">
                    Otro
                </label>
            </div>
        </fieldset>

        <div class="form-group" id="divOtroUso" hidden>
            <label for="Otro Uso">¿Cual?</label>
            <input type="text" class="form-control" name="otroUso" id="otroUso" placeholder="">
        </div>

        <div class="form-group" id="divInteresTIC" hidden>
            <label for="Interes TIC">¿estaria intereseda en conocer y  usar las TIC?</label>
            <select class="form-control" name="interesTIC" id="interesTIC">
                <option onclick="showTipoInteres();">Si</option>
                <option onclick="showDesinteresTIC();">No</option>
            </select>
        </div>

        <fieldset id="divTipoInteres" hidden>
            <label for="tipoInteres">¿En cuales?</label>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="entretenimientoInteres" id="entretenimientoInteres">
                    Entretenimiento(fotos videos peliculas musicas juegos)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="redesInteres" id="redesInteres" >
                    Redes sociales
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="correoInteres" id="correoInteres">
                    Correo electrónico
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="comprasInteres" id="comprasInteres">
                    Compras en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="ventasInteres" id="ventasInteres">
                    Ventas en internet
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="comunicacionInteres" id="comunicacionInteres">
                    Comunicación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="educacionInteres" id="educacionInteres">
                    Educación
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="bancoInteres" id="bancoInteres">
                    Servicios bancarios
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="serviciosPublicosInteres" id="serviciosPublicosInteres">
                    Pago de servicios públicos (luz,teléfono)
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"  name="tramitesInteres" id="tramitesInteres">
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
            <select class="form-control" name="desinteresTIC" id="desinteresTIC" >
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
            <input type="text" class="form-control" name="cualDesinteres" id="cualDesinteres" placeholder="">
        </div>

    </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
<script src="../Util/Js/bootstrap.min.js"></script>

<script src="../Util/Js/registry.js"></script>
</html>