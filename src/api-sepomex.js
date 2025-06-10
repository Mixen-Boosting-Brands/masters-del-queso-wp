document.addEventListener("DOMContentLoaded", () => {
  const cpInput = document.getElementById("cp");
  const estadoSelect = document.querySelector('select[name="estado"]');
  const municipioInput = document.getElementById("municipio");
  const coloniaSelect = document.querySelector('select[name="colonia"]');

  cpInput.addEventListener("blur", () => {
    // Solo números, eliminamos cualquier otro caracter
    const cp = cpInput.value.replace(/\D/g, "");

    if (cp.length >= 5) {
      // mínimo 5 dígitos
      fetch(`https://sepomex.icalialabs.com/api/v1/zip_codes/${cp}`)
        .then((response) => response.json())
        .then((data) => {
          if (data.zip_code) {
            // Autopopular Estado
            estadoSelect.innerHTML = `<option value="${data.zip_code.d_estado}">${data.zip_code.d_estado}</option>`;

            // Autopopular Municipio
            municipioInput.value = data.zip_code.d_mnpio;

            // Autopopular Colonias
            coloniaSelect.innerHTML = `<option value="">Selecciona...</option>`;
            data.zip_code.asentamientos.forEach((colonia) => {
              const option = document.createElement("option");
              option.value = colonia.d_asenta;
              option.textContent = colonia.d_asenta;
              coloniaSelect.appendChild(option);
            });
          } else {
            estadoSelect.innerHTML = `<option value="">No encontrado</option>`;
            municipioInput.value = "";
            coloniaSelect.innerHTML = `<option value="">Sin resultados</option>`;
          }
        })
        .catch((error) => {
          console.error("Error consultando CP:", error);
        });
    } else {
      // Opcional: limpiar campos si CP no es válido
      estadoSelect.innerHTML = `<option value="">Introduce un código postal válido</option>`;
      municipioInput.value = "";
      coloniaSelect.innerHTML = `<option value="">Sin resultados</option>`;
    }
  });
});
