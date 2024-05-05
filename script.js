document.addEventListener("DOMContentLoaded", function () {


    $("#guardarDatos").click(function () {
        guardar();
    });

});


function guardar() {
    let dataVal = {
        nombre: $("#nombrePelicula").val(),
        estreno: $("#estrenoPel").val(),
        director: $("#director").val(),
        estudio: $("#estudio").val()
    };


    let algunCampoVacio = false;

    for (let key in dataVal) {
     
        if (dataVal[key] === "") {
         
            $("#" + key).addClass("is-invalid");
            algunCampoVacio = true;
        }
    }

    if (algunCampoVacio) {
        return;
    }


    console.log(dataVal);

    $.ajax({
        url: './api-rest/create_pelicula.php',
        type: 'POST',
        data: dataVal,
        success: function (response) {
            console.log(response);
            $("#exampleModal").on("hidden")

        },
        error: function (xhr, status) {
            alert('Disculpe, existió un problema');
            console.log(status);
        },
    });
}



$.ajax({

    url: './api-rest/get_all_pelicula.php',
    type: 'GET',

    success: function (response) {
        console.log(response);
        let datos = JSON.parse(response);


        $("#tabla-conteiner tbody").html("");

        for (var i = 0; i < datos.length; i++) {
            var tr = `<tr>
        <td>`+ datos[i].id + `</td>
          <td>`+ datos[i].nombre_pelicula + `</td>
          <td>`+ datos[i].estreno + `</td>
          <td>`+ datos[i].director + `</td>
          <td>`+ datos[i].estudio + `</td>
          <td><div class="btn-group">
                  <button type="button" class="btn btn-warning">Action</button>
                  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="btnEditar">Editar</a></li>
                    <li><a class="dropdown-item" id="btnEliminar">eliminar</a></li>
                  </ul>
                </div></td>
        </tr>`;
            $("#tabla-conteiner").append(tr)
        }
    },


    error: function (xhr, status) {
        alert('Disculpe, existió un problema');
    },

});


