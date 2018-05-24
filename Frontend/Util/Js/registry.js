//funcion que muestra la parte del formulario de tipo de documento
function showTipoDoc() {
    document.getElementById("divCualTipoDoc").hidden=false;
}

function clearTipoDoc() {
    document.getElementById("divCualTipoDoc").hidden=true;
}

function showProfecional() {
    document.getElementById("divTituloObtenido").hidden=false;
    document.getElementById("divNombreTitulo").hidden=false;
}
function showTecnica() {
    document.getElementById("divTituloObtenido").hidden=true;
    document.getElementById("divNombreTitulo").hidden=false;
}

function showBasica() {
    document.getElementById("divTituloObtenido").hidden=true;
    document.getElementById("divNombreTitulo").hidden=true;
}

function showEstudia() {
    document.getElementById("divQueEstudia").hidden=false;
    document.getElementById("divNombreTituloObtener").hidden=false;
}

function clearEstudia() {
    document.getElementById("divQueEstudia").hidden=true;
    document.getElementById("divNombreTituloObtener").hidden=true;
}

function showTrabaja() {
    document.getElementById("divSectorLaboral").hidden=false;
    document.getElementById("divNegocioPropio").hidden=false;
    document.getElementById("divHaTrabajado").hidden=true;
    clearTiempoDesempleo();
}

function showNoTrabaja() {
    document.getElementById("divSectorLaboral").hidden=true;
    document.getElementById("divNegocioPropio").hidden=true;
    clearFormaTrabajo();
    hideSector();
    document.getElementById("divHaTrabajado").hidden=false;
}

function showOtroSector() {
    document.getElementById("divCualSector").hidden=false;
}
function hideSector() {
    document.getElementById("divCualSector").hidden=true;
}

function showFormaTrabajo() {
    document.getElementById("divFormaTrabajo").hidden=false;
}

function clearFormaTrabajo() {
    document.getElementById("divFormaTrabajo").hidden=true;
    clearTipoEmpresa();
}

function showTipoEmpresa() {
    document.getElementById("divTipoEmpresa").hidden=false;
}

function clearTipoEmpresa() {
    document.getElementById("divTipoEmpresa").hidden=true;
}

function showTiempoDesempleo() {
    document.getElementById("divTiempoDesempleo").hidden=false;
}

function clearTiempoDesempleo() {
    document.getElementById("divTiempoDesempleo").hidden=true;
}

function showUsaTIC() {
    document.getElementById("divUsaTIC").hidden=false;
}

function showInteresTIC() {
    document.getElementById("divInteresTIC").hidden=false;
}
function showCualUso() {
    document.getElementById("divCualUso").hidden=false;
}

function showOtroUso() {
    document.getElementById("divOtroUso").hidden=false;
}

function showTipoInteres() {
    document.getElementById("divTipoInteres").hidden=false;
}

function showCualInteres() {
    document.getElementById("divCualInteres").hidden=false;
}

function showDesinteresTIC() {
    document.getElementById("divDesinteresTIC").hidden=false;
}

function showOtroDesinteres() {
    document.getElementById("divCualDesinteres").hidden=false;

}

function showFormRegistro() {
    document.getElementById("registro").hidden=false;
}

function showQuieneSomos() {
    document.getElementById("quieneSomos").hidden=false;
}