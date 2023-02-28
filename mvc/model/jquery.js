
//FUNCION PARA CREAR EL TABLERO
function crearTabla(json) {
  let perchaTabla = document.createDocumentFragment();
  let tabla = document.createElement("table");
  /* let columna = 0; */
  let tr;
  let arrayPos = 0;
  for (let c = 0; c < 32; c++) {
    tr = document.createElement("tr");
    for (let f = 0; f < 32; f++) {
      //ELEMENTOS HTML PARA DESPLEGAR EN EL INDEX
      let color = json[arrayPos][2];
      let td = document.createElement("td");
      let inputColor = document.createElement("input");
      inputColor.setAttribute("type", "color");
      inputColor.value = color;
      inputColor.name = `${c} ${f}`;

      $(document).on("ready", function () {
        $(inputColor).change(function () {
          var url = "index.php";
          $.ajax({
            type: "POST",
            url: url,
            data: {
              color: inputColor.value,
              x: inputColor.name.split(" ")[0],
              y: inputColor.name.split(" ")[1],
            },
            success: function (data) {
            },
          });
        });
      });

      //HACEMOS APEND DEL INPUT A LA TABLA
      td.append(inputColor);
      tr.append(td);
      tabla.append(tr);
      arrayPos += 32;
    }
    arrayPos += -32 * 32;
    arrayPos++;
  }

  //AÑADIMOS LA TABLA AL CONTENEDOR DE LA TABLA
  perchaTabla.append(tabla);
  let div = document.getElementById("tablaCont").append(perchaTabla);
}


//Refrescar tablon
const interval = setInterval(crearTabla(jArray), 5000);
//crearTabla(jArray);
