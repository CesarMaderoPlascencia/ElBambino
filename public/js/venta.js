function calcularPiezas() {

    // Cargas
    //Carga de 7
    var inputValorSiete = parseFloat(document.getElementById("carga_siete").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_carga_siete").textContent = inputValorSiete * 28;
    document.getElementById("valor_carga_siete").textContent = (inputValorSiete * 28) * 5;

    //Carga de 10
    var inputValorSiete = parseFloat(document.getElementById("carga_diez").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_carga_diez").textContent = inputValorSiete * 20;
    document.getElementById("valor_carga_diez").textContent = (inputValorSiete * 20) * 7;

    //Carga de 15
    var inputValorSiete = parseFloat(document.getElementById("carga_quince").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_carga_quince").textContent = inputValorSiete * 14;
    document.getElementById("valor_carga_quince").textContent = (inputValorSiete * 14) * 11;

    var valor_carga_siete = parseInt(document.getElementById("valor_carga_siete").textContent);
    var valor_carga_diez = parseInt(document.getElementById("valor_carga_diez").textContent);
    var valor_carga_quince = parseInt(document.getElementById("valor_carga_quince").textContent);
    var suma_carga = valor_carga_siete + valor_carga_diez + valor_carga_quince;

    // Descargas
    //Descarga de 7
    var inputValorSiete = parseFloat(document.getElementById("descarga_siete").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_descarga_siete").textContent = inputValorSiete * 28;
    document.getElementById("valor_descarga_siete").textContent = (inputValorSiete * 28) * 5;

    //Descarga de 10
    var inputValorSiete = parseFloat(document.getElementById("descarga_diez").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_descarga_diez").textContent = inputValorSiete * 20;
    document.getElementById("valor_descarga_diez").textContent = (inputValorSiete * 20) * 7;

    //Descarga de 15
    var inputValorSiete = parseFloat(document.getElementById("descarga_quince").value);
    if (inputValorSiete === '' || isNaN(parseFloat(inputValorSiete))) {
        inputValorSiete = 0;
    } else {
        inputValorSiete = parseFloat(inputValorSiete);
    }
    document.getElementById("piezas_descarga_quince").textContent = inputValorSiete * 14;
    document.getElementById("valor_descarga_quince").textContent = (inputValorSiete * 14) * 11;

    var valor_descarga_siete = parseInt(document.getElementById("valor_descarga_siete").textContent);
    var valor_descarga_diez = parseInt(document.getElementById("valor_descarga_diez").textContent);
    var valor_descarga_quince = parseInt(document.getElementById("valor_descarga_quince").textContent);
    var suma_descarga = valor_descarga_siete + valor_descarga_diez + valor_descarga_quince;

    //Valor TOTAL!
    document.getElementById("valor_total").textContent = (suma_carga) - (suma_descarga);
}