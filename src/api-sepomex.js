document.addEventListener("DOMContentLoaded", () => {
  const cpInput = document.getElementById("cp");
  const estadoSelect = document.querySelector('select[name="estado"]');
  const municipioInput = document.getElementById("municipio");
  const coloniaSelect = document.querySelector('select[name="colonia"]');

  cpInput.addEventListener("blur", () => {
    const cp = cpInput.value.trim();
    if (cp.length === 5) {
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
    }
  });
});
