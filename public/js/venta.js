function calcularPiezas() {

    // Cargas
    //Carga de 7
    var valor = parseFloat(document.getElementById("carga_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_carga_siete").textContent = valor * 28;
    document.getElementById("valor_carga_siete").textContent = (valor * 28) * 5;

    //Carga de 10
    var valor = parseFloat(document.getElementById("carga_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_carga_diez").textContent = valor * 20;
    document.getElementById("valor_carga_diez").textContent = (valor * 20) * 7;

    //Carga de 15
    var valor = parseFloat(document.getElementById("carga_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_carga_quince").textContent = valor * 14;
    document.getElementById("valor_carga_quince").textContent = (valor * 14) * 11;

    var valor_carga_siete = parseInt(document.getElementById("valor_carga_siete").textContent);
    var valor_carga_diez = parseInt(document.getElementById("valor_carga_diez").textContent);
    var valor_carga_quince = parseInt(document.getElementById("valor_carga_quince").textContent);
    var suma_carga = valor_carga_siete + valor_carga_diez + valor_carga_quince;

    // Descargas
    //Descarga de 7
    var valor = parseFloat(document.getElementById("descarga_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_descarga_siete").textContent = valor * 28;
    document.getElementById("valor_descarga_siete").textContent = (valor * 28) * 5;

    //Descarga de 10
    var valor = parseFloat(document.getElementById("descarga_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_descarga_diez").textContent = valor * 20;
    document.getElementById("valor_descarga_diez").textContent = (valor * 20) * 7;

    //Descarga de 15
    var valor = parseFloat(document.getElementById("descarga_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_descarga_quince").textContent = valor * 14;
    document.getElementById("valor_descarga_quince").textContent = (valor * 14) * 11;

    var valor_descarga_siete = parseInt(document.getElementById("valor_descarga_siete").textContent);
    var valor_descarga_diez = parseInt(document.getElementById("valor_descarga_diez").textContent);
    var valor_descarga_quince = parseInt(document.getElementById("valor_descarga_quince").textContent);
    var suma_descarga = valor_descarga_siete + valor_descarga_diez + valor_descarga_quince;

    // Bajas
    //Bajas de 7
    var valor = parseFloat(document.getElementById("baja_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_baja_siete").textContent = valor * 28;
    document.getElementById("valor_baja_siete").textContent = (valor * 28) * 5;

    //Bajas de 10
    var valor = parseFloat(document.getElementById("baja_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_baja_diez").textContent = valor * 20;
    document.getElementById("valor_baja_diez").textContent = (valor * 20) * 7;

    //Bajas de 15
    var valor = parseFloat(document.getElementById("baja_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_baja_quince").textContent = valor * 14;
    document.getElementById("valor_baja_quince").textContent = (valor * 14) * 11;

    var valor_baja_siete = parseInt(document.getElementById("valor_baja_siete").textContent);
    var valor_baja_diez = parseInt(document.getElementById("valor_baja_diez").textContent);
    var valor_baja_quince = parseInt(document.getElementById("valor_baja_quince").textContent);
    var suma_baja = valor_baja_siete + valor_baja_diez + valor_baja_quince;

    // Altas
    //Altas de 7
    var valor = parseFloat(document.getElementById("alta_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_alta_siete").textContent = valor * 28;
    document.getElementById("valor_alta_siete").textContent = (valor * 28) * 5;

    //Altas de 10
    var valor = parseFloat(document.getElementById("alta_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_alta_diez").textContent = valor * 20;
    document.getElementById("valor_alta_diez").textContent = (valor * 20) * 7;

    //Altas de 15
    var valor = parseFloat(document.getElementById("alta_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("piezas_alta_quince").textContent = valor * 14;
    document.getElementById("valor_alta_quince").textContent = (valor * 14) * 11;

    var valor_alta_siete = parseInt(document.getElementById("valor_alta_siete").textContent);
    var valor_alta_diez = parseInt(document.getElementById("valor_alta_diez").textContent);
    var valor_alta_quince = parseInt(document.getElementById("valor_alta_quince").textContent);
    var suma_alta = valor_alta_siete + valor_alta_diez + valor_alta_quince;

    // Piezas Extra
    //Piezas Extra de 7
    var valor = parseFloat(document.getElementById("extra_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_extra_siete").textContent = valor  * 5;

    //Piezas Extra de 10
    var valor = parseFloat(document.getElementById("extra_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_extra_diez").textContent = valor * 7;

    //Piezas Extra de 15
    var valor = parseFloat(document.getElementById("extra_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_extra_quince").textContent = valor * 11;

    var valor = parseFloat(document.getElementById("valor_extra_dinero").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        var valor_extra_dinero = 0;
    } else {
        var valor_extra_dinero = parseFloat(valor);
    }

    var valor_extra_siete = parseInt(document.getElementById("valor_extra_siete").textContent);
    var valor_extra_diez = parseInt(document.getElementById("valor_extra_diez").textContent);
    var valor_extra_quince = parseInt(document.getElementById("valor_extra_quince").textContent);
    var suma_extra = valor_extra_siete + valor_extra_diez + valor_extra_quince + valor_extra_dinero;
    
    // Chilaquiles
    //Chilaquil de 7
    var valor = parseFloat(document.getElementById("chilaquil_siete").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_chilaquil_siete").textContent = valor  * 5;

    //Chilaquil de 10
    var valor = parseFloat(document.getElementById("chilaquil_diez").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_chilaquil_diez").textContent = valor * 7;

    //Chilaquil de 15
    var valor = parseFloat(document.getElementById("chilaquil_quince").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        valor = 0;
    } else {
        valor = parseFloat(valor);
    }
    document.getElementById("valor_chilaquil_quince").textContent = valor * 11;

    var valor = parseFloat(document.getElementById("valor_chilaquil_dinero").value);
    if (valor === '' || isNaN(parseFloat(valor))) {
        var valor_chilaquil_dinero = 0;
    } else {
        var valor_chilaquil_dinero = parseFloat(valor);
    }

    var valor_chilaquil_siete = parseInt(document.getElementById("valor_chilaquil_siete").textContent);
    var valor_chilaquil_diez = parseInt(document.getElementById("valor_chilaquil_diez").textContent);
    var valor_chilaquil_quince = parseInt(document.getElementById("valor_chilaquil_quince").textContent);
    var suma_chilaquil = valor_chilaquil_siete + valor_chilaquil_diez + valor_chilaquil_quince + valor_chilaquil_dinero;

    //Valor TOTAL!
    document.getElementById("valor_total").textContent = (suma_carga + suma_baja + suma_extra) - (suma_descarga + suma_alta);
}