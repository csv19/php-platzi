document.addEventListener("DOMContentLoaded", function () {
  //acordion
  const acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }

  const items = document.querySelectorAll(".item");
  const imageDisplay = document.getElementById("image-display");

  // Imagen por defecto
  const defaultImage = "http://localhost/guirmabot/public/src/fondo.webp";

  // Cambiar la imagen cuando el mouse pasa sobre un <li>
  items.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      const newImage = item.getAttribute("data-img");
      imageDisplay.style.opacity = 0; // Comienza el cambio con una opacidad 0
      setTimeout(() => {
        imageDisplay.src = newImage; // Cambia la imagen
        imageDisplay.style.opacity = 1; // Vuelve la opacidad a 1 de forma suave
      }, 500); // El tiempo de espera coincide con la duración de la transición
    });

    // Restaurar la imagen por defecto cuando el mouse sale
    item.addEventListener("mouseleave", function () {
      imageDisplay.style.opacity = 0; // Baja la opacidad para el efecto de transición
      setTimeout(() => {
        imageDisplay.src = defaultImage; // Restaura la imagen por defecto
        imageDisplay.style.opacity = 1; // Vuelve a poner la opacidad en 1
      }, 500); // Mantiene la transición suave
    });
  });

  // Obtén las referencias al input y al div
  const searchInput = document.getElementById("searchInput");
  const selectSearch = document.getElementById("searchSelect");

  // Agrega un evento de click al input
  searchInput.addEventListener("click", function () {
    // Verifica si el div tiene la clase 'none'
    if (selectSearch.classList.contains("hidden")) {
      // Si la tiene, la cambiamos a 'block'
      selectSearch.classList.remove("hidden");
      selectSearch.classList.add("block");
    } else {
      // Si no tiene la clase 'none', la cambiamos a 'none'
      selectSearch.classList.remove("block");
      selectSearch.classList.add("hidden");
    }
  });
});

// Función para la máquina de escribir
function escribirYBorrarEnPlaceholder(textos) {
  let iTexto = 0; // Índice para el array de textos
  let input = document.getElementById("searchInput"); // Obtiene el campo de entrada

  function escribirYBorrar(texto) {
    let arr = texto.split(""); // Divide el texto en un arreglo de caracteres
    let i = 0; // Inicializa el contador

    let intervaloEscritura = setInterval(function () {
      if (i === arr.length) {
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

function cuentaRegresiva(id, fechaObjetivo) {
  const fechaActual = new Date();
  const diferencia = fechaObjetivo - fechaActual;

  const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
  const horas = Math.floor(
    (diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
  const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

  document.getElementById(id).innerHTML = `
      ${dias} días, ${horas} hrs, ${minutos} min ${segundos} seg 
    `;

  setTimeout(() => cuentaRegresiva(id, fechaObjetivo), 1000); // Actualizar cada segundo
}

window.onload = function () {
  const fechaObjetivo1 = new Date("2024-12-24T00:00:00");
  const fechaObjetivo2 = new Date("2024-12-24T00:00:00");

  cuentaRegresiva("contador1", fechaObjetivo1);
  cuentaRegresiva("contador2", fechaObjetivo2);
};
