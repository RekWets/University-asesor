function downloadPdf() {
  // Obtener el tamaño del lienzo del gráfico
  var canvas = document.getElementById("myChart");
  var reportPageWidth = canvas.width;
  var reportPageHeight = canvas.height;

  // Crear un nuevo lienzo para el PDF
  var pdfCanvas = document.createElement('canvas');
  pdfCanvas.width = reportPageWidth;
  pdfCanvas.height = reportPageHeight;
  var pdfctx = pdfCanvas.getContext('2d');

  // Establecer el fondo del lienzo del PDF como transparente
  pdfctx.fillStyle = '#FFFFFF'; // Color blanco

  pdfctx.fillRect(0, 0, reportPageWidth, reportPageHeight);

  // Dibujar el gráfico en el lienzo del PDF
  pdfctx.drawImage(canvas, 0, 0, reportPageWidth, reportPageHeight);

  // Crear un nuevo objeto jsPDF
  var pdf = new jsPDF('l', 'pt', [reportPageWidth, reportPageHeight]);

  // Agregar el lienzo del PDF como una imagen al documento PDF
  pdf.addImage(pdfCanvas.toDataURL('image/jpeg', 1.0), 'JPEG', 0, 0, reportPageWidth, reportPageHeight);

  // Descargar el PDF
  pdf.save('grafica.pdf');
}




function elementchange(elementId, action) {
  const value = document.getElementById(elementId).value;
  action(value);
  label();
}
function label() {
  const selectedIndex = ver.selectedIndex;
  const selectedOption = ver.options[selectedIndex];
  const selectedText = selectedOption.textContent;
  myChart.data.datasets[0].label = selectedText;
  myChart.update();

}
["trayecto", "pnf", "UC", "desde", "hasta", "ver"].forEach(elementId => {
  document.getElementById(elementId).addEventListener("change", () => {
    handleInputChange(),
    getData(),
      elementchange(elementId, {
        trayecto: () => { },
        pnf: () => { },
        // trimestre: () => { },
        UC: () => { },
        desde: () => { },
        hasta: () => { },
        ver: label,
      }[elementId]);
  });
});
function getData() {
  const trayecto = document.getElementById("trayecto").value;
  const PNF = document.getElementById("pnf").value;
  // const trimestre = document.getElementById("trimestre").value;
  const unidad_curricular = document.getElementById("UC").value;
  const desde = document.getElementById("desde").value;
  const hasta = document.getElementById("hasta").value;
  const INfo = document.getElementById("ver").value;
  let url = "/php/uptt-project/?route=Statsinfo&method=info";
  let formData = new FormData();
  formData.append('trayecto', trayecto);
  formData.append('pnf', PNF);
  // formData.append('trimestre', trimestre);
  formData.append('UC', unidad_curricular);
  formData.append('desde', desde);
  formData.append('hasta', hasta);
  formData.append('ver', INfo);
  fetch(url, {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {


      
      const filtro = {
        PNF,
        trayecto,
        unidad_curricular,
      }
      let filteredData;
      let filtereditem;
      
      if  (INfo === "1") {
        filteredData = data.Asistencias;
        filtereditem ="Asistencias";
        const filteredByFechas = filteredData.filter((item) => {
          return Object.keys(filtro).every((key) => {
            return filtro[key] === item[key];
          }) &&
            (new Date(item.fecha) >= new Date(desde) && new Date(item.fecha) <= new Date(hasta));
        });
  
        sortAscending = true;
        const fechas = filteredByFechas.map(item => item.fecha).sort((a, b) => {
          const dateA = new Date(a);
          const dateB = new Date(b);
          if (sortAscending) {
            return dateA - dateB;
          } else {
            return dateB - dateA;
          }
        });
        const info = filteredByFechas.map(item => item[filtereditem]);
        myChart.config.data.labels = fechas;
        myChart.data.datasets[0].data = info;
        myChart.update();
      } else if (INfo === "2") {
        filteredData = data.Evolucion;
        console.log(data.Evolucion)
        filtereditem = "evolucion_matricula";
        const filteredByFechas = filteredData.filter((item) => {
          return Object.keys(filtro).every((key) => {
            return filtro[key] === item[key];
          }) &&
            (new Date(item.fecha) >= new Date(desde) && new Date(item.fecha) <= new Date(hasta));
        });

  const sumByTrimestre = {};

  filteredByFechas.forEach(item => {
    const month = new Date(item.fecha).getMonth();
    const trimestre = Math.floor(month / 3); 
    if (!sumByTrimestre[trimestre]) {
      sumByTrimestre[trimestre] = 0;
    }
    sumByTrimestre[trimestre] += parseInt(item[filtereditem]);
  });


  const trimestres = ["Trimestre 1", "Trimestre 2", "Trimestre 3", "Trimestre 4"];
  const info = trimestres.map((trimestre, index) => sumByTrimestre[index] || 0); 

  myChart.config.data.labels = trimestres;
  myChart.data.datasets[0].data = info;
  myChart.update();
      }else if (INfo === "3") {
        filteredData = data.Rendimiento;
        console.log(data.Rendimiento);
        filtereditem = "rendimiento_academico";
              
        const filteredByFechas = filteredData.filter((item) => {
            // Verificamos si los datos cumplen con los filtros seleccionados
            return Object.keys(filtro).every((key) => {
                return filtro[key] === item[key];
            }) && (new Date(item.fecha) >= new Date(desde) && new Date(item.fecha) <= new Date(hasta));
        });
    
        const sumByTrimestre = {};
const countByTrimestre = {}; // Contador para el número de elementos en cada trimestre

filteredByFechas.forEach(item => {
    const date = new Date(item.fecha);
    const year = date.getFullYear();
    const month = date.getUTCMonth();
    const trimestre = Math.floor(month / 3) + 1; // Trimestre calculado
    const trimestreLabel = `${year} - Trimestre ${trimestre}`;

    // Inicializamos el sumador y contador del trimestre si no existen
    if (!sumByTrimestre[trimestreLabel]) {
        sumByTrimestre[trimestreLabel] = 0;
        countByTrimestre[trimestreLabel] = 0;
    }
    // Sumamos el rendimiento al trimestre correspondiente
    sumByTrimestre[trimestreLabel] += parseInt(item[filtereditem]);
    countByTrimestre[trimestreLabel]++;
});

// Calculamos el promedio por trimestre y lo asignamos a info
const promedioByTrimestre = {};
for (const trimestreLabel in sumByTrimestre) {
    promedioByTrimestre[trimestreLabel] = sumByTrimestre[trimestreLabel] / countByTrimestre[trimestreLabel];
}

// Creamos las etiquetas de trimestre para la gráfica
const trimestres = Object.keys(promedioByTrimestre).sort(); // Ordenamos las etiquetas por año y trimestre
const info = trimestres.map(trimestreLabel => promedioByTrimestre[trimestreLabel] || 0); 

// Actualizamos la configuración de la gráfica con los datos
myChart.config.data.labels = trimestres;
myChart.data.datasets[0].data = info;
myChart.update();

        
        
      }}).catch(error => {
      console.error("Error", error);
    });
}


const config = {
  type: 'line',
  data: {
    labels: [],
    datasets: [{
      label: [],
      data: [],
      borderColor: 'rgba(20, 50, 141, 1)',
      pointBackgroundColor: 'rgba(20, 50, 141, 1)',
      pointBorderColor: 'rgba(20, 50, 141, 1)',
      pointRadius: 5,
      pointHoverRadius: 10,
      pointHitRadius: 50,
      borderWidth: 1,
    }],
  },
  options: {
    responsive: true,
    title: {
    },
    plugins: {
      tooltip: {
        mode: 'index',
        intersect: false
      },
      legend: {
        display: false,
      }
    },
    scales: {
      x: {
        ticks: {
          beginAtZero: true
        }
      }
    }
  }
};

var ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, config);

function handleInputChange() {
  const infoSelect = document.getElementById("ver");
  const desdeInput = document.getElementById("desde");
  const hastaInput = document.getElementById("hasta");


  const infoSelected = infoSelect.value;

  if (infoSelected === "1") {
        desdeInput.type = "date";
        hastaInput.type = "date";
    } else {
        desdeInput.type = "month";
        hastaInput.type = "month";
    }
}




function actualizarUC() {
  const trayectoSeleccionado = document.getElementById("trayecto").value;
  const ucSelect = document.getElementById("UC");
  ucSelect.innerHTML = ""; // Limpiar opciones anteriores

  fetch("?route=Statsinfo&method=info") // Realizar solicitud AJAX para obtener datos JSON
      .then(response => response.json())
      .then(data => {
          const trayectoData = data.Materias[trayectoSeleccionado]; // Obtener datos de trayecto seleccionado

          // Verificar si hay datos para el trayecto seleccionado
          if (trayectoData && trayectoData.length > 0) {
              trayectoData.forEach(trayecto => {
                  const option = document.createElement("option");
                  option.value = trayecto.unidad_curricular_id;
                  option.textContent = trayecto.descripcion;
                  ucSelect.appendChild(option);
              });
          } else {
              console.error(`No se encontraron datos para el trayecto seleccionado (${trayectoSeleccionado})`);
          }
      })
      .catch(error => {
          console.error("Error al obtener los datos:", error);
      });
}

  document.getElementById('trayecto').addEventListener("change", () => {
    actualizarUC();
});
actualizarUC();