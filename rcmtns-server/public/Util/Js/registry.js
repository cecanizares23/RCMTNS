
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
    document.getElementById("divInteresTIC").hidden=true;
    hideTipoInteres();
    hideCualInteres();
    hideDesinteresTIC();
    hideOtroDesinteres();
}

function showInteresTIC() {
    document.getElementById("divInteresTIC").hidden=false;
    document.getElementById("divUsaTIC").hidden=true;
    hiddenCualUso();
    hiddenOtroUso();
}
function showCualUso() {
    document.getElementById("divCualUso").hidden=false;
}
function hiddenCualUso() {
    document.getElementById("divCualUso").hidden=true;
}

function showOtroUso() {
    document.getElementById("divOtroUso").hidden=false;
}
function hiddenOtroUso() {
    document.getElementById("divOtroUso").hidden=true;
}

function showTipoInteres() {
    document.getElementById("divTipoInteres").hidden=false;
}
function hideTipoInteres() {
    document.getElementById("divTipoInteres").hidden=true;
}

function showCualInteres() {
    document.getElementById("divCualInteres").hidden=false;
}
function hideCualInteres() {
    document.getElementById("divCualInteres").hidden=true;
}

function showDesinteresTIC() {
    document.getElementById("divDesinteresTIC").hidden=false;
    hideCualInteres();
}
function hideDesinteresTIC() {
    document.getElementById("divDesinteresTIC").hidden=true;
}

function showOtroDesinteres() {
    document.getElementById("divCualDesinteres").hidden=false;
}
function hideOtroDesinteres() {
    document.getElementById("divCualDesinteres").hidden=true;
}

function showFormRegistro() {
    window.location.hash = "registro";
    document.getElementById("registro").hidden=false;
}

function showQuieneSomos() {
    window.location.hash = "quieneSomos";
    document.getElementById("quieneSomos").hidden=false;
}

function showFormLogin() {
    document.getElementById("login").hidden=false;
}