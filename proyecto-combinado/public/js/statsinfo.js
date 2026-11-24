
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
["trayecto", "pnf", "trimestre", "UC", "desde", "hasta", "ver"].forEach(elementId => {
  document.getElementById(elementId).addEventListener("change", () => {
    handleInputChange(),
    getData(),
      elementchange(elementId, {
        trayecto: () => { },
        pnf: () => { },
        trimestre: () => { },
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
  const trimestre = document.getElementById("trimestre").value;
  const unidad_curricular = document.getElementById("UC").value;
  const desde = document.getElementById("desde").value;
  const hasta = document.getElementById("hasta").value;
  const INfo = document.getElementById("ver").value;
  let url = "/php/uptt-project/?route=Statsinfo&method=info";
  let formData = new FormData();
  formData.append('trayecto', trayecto);
  formData.append('pnf', PNF);
  formData.append('trimestre', trimestre);
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
        trimestre,
        unidad_curricular,
      };
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
        filtereditem = "evolucion_matricula";
  const filteredByFechas = filteredData.filter((item) => {
    return (new Date(item.fecha) >= new Date(desde) && new Date(item.fecha) <= new Date(hasta));
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
      } else if (INfo === "3") {
        filteredData = data.Rendimiento;
        filtereditem ="rendimiento_academico";
              
  const filteredByFechas = filteredData.filter((item) => {
    return (new Date(item.fecha) >= new Date(desde) && new Date(item.fecha) <= new Date(hasta));
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
      }}).catch(error => {
      console.error("Error", error);
    });
}

const bgColor = {
  id: 'bgColor',
  beforeDraw: (chart, steps, options) => {
    const { ctx, chartArea } = chart;
    ctx.save();
    ctx.fillStyle = 'rgba(255, 255, 255, 1)'; // Set background color to white here
    ctx.fillRect(chartArea.left, chartArea.top, chartArea.right - chartArea.left, chartArea.bottom - chartArea.top);
    ctx.restore();
  }
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
    interaction: {
      intersect: false,
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
        },
      }],
    }, 
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
function donwloadpdf(){
  var canvas = document.getElementById("myChart");
  const canvasImage = canvas.toDataURL('image/jpeg',1.0);
  console.log(canvasImage);
  let pdf = new jsPDF('landscape');
  pdf.setFontSize(16);
  pdf.addImage(canvasImage,'PNG',15,15,280,150);
  pdf.save('grafica.pdf');
}