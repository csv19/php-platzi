// Obtén las referencias al input y al div
const inputSearch = document.getElementById("searchInput");
const selectSearch = document.getElementById("searchSelect");
console.log(inputSearch);

// // Agrega un evento de click al input
inputSearch.addEventListener("click", function () {
  // Verifica si el div tiene la clase 'none'
  if (div.classList.contains("hidden")) {
    // Si la tiene, la cambiamos a 'block'
    div.classList.remove("hidden");
    div.classList.add("block");
  } else {
    // Si no tiene la clase 'none', la cambiamos a 'none'
    div.classList.remove("block");
    div.classList.add("hidden");
  }
});

function escribirYBorrarEnPlaceholder(textos) {
  let iTexto = 0; // Índice para el array de textos
  let input = document.getElementById("searchInput"); // Obtiene el campo de entrada

  function escribirYBorrar(texto) {
    let arr = texto.split(""); // Divide el texto en un arreglo de caracteres
    let i = 0; // Inicializa el contador

    let intervaloEscritura = setInterval(function () {
      if (i == arr.length) {
        // Cuando ya se hayan agregado todos los caracteres
        clearInterval(intervaloEscritura); // Detiene el intervalo de escritura
        setTimeout(function () {
          // Espera un momento antes de borrar el texto
          borrarTexto();
        }, 500); // Espera 1 segundo antes de borrar
      } else {
        input.placeholder += arr[i]; // Agrega el carácter al placeholder del input
        i++;
      }
    }, 200); // Intervalo de 200 milisegundos para escribir

    // Función para borrar el texto del placeholder
    function borrarTexto() {
      let textoActual = input.placeholder; // Obtiene el texto actual del placeholder
      let longitud = textoActual.length;

      let intervaloBorrado = setInterval(function () {
        if (longitud > 0) {
          input.placeholder = textoActual.substring(0, longitud - 1); // Borra el último carácter
          longitud--;
        } else {
          clearInterval(intervaloBorrado); // Detiene el intervalo de borrado
          setTimeout(function () {
            // Después de borrar, pasa al siguiente texto
            iTexto++;
            if (iTexto < textos.length) {
              escribirYBorrar(textos[iTexto]); // Llama nuevamente a la función con el siguiente texto
            } else {
              // Si ya no hay más textos, reinicia el ciclo desde el primero
              iTexto = 0;
              escribirYBorrar(textos[iTexto]); // Llama nuevamente al primer texto
            }
          }, 200); // Espera medio segundo antes de escribir el siguiente texto
        }
      }, 100); // Intervalo de 100 milisegundos para borrar
    }
  }

  // Inicia el ciclo con el primer texto
  escribirYBorrar(textos[iTexto]);
}

// Array de textos que quieres mostrar
let textos = ["Inteligencia Artificial", "Programación", "Base de Datos"];

// Llamada a la función para comenzar el ciclo
escribirYBorrarEnPlaceholder(textos);
