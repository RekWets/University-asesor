document.getElementById('inputFile').addEventListener('change', function(event) {
    var tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
    while (tableBody.firstChild) {
        tableBody.removeChild(tableBody.firstChild);
    }
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var data = new Uint8Array(e.target.result);
        var workbook = XLSX.read(data, { type: 'array' });
        var sheet_name_list = workbook.SheetNames;
        var jsonData = XLSX.utils.sheet_to_json(workbook.Sheets[sheet_name_list[0]]);
        var cod_asignatura = jsonData[5].__EMPTY_4;
        var unidad_curricular = jsonData[5].__EMPTY_11;
        var cedula_docente = jsonData[6].__EMPTY_9;
        var nombre_docente = jsonData[6].__EMPTY_4;
        var periodo = jsonData[3].__EMPTY_11;
        document.getElementById("cod").value=cod_asignatura;
        document.getElementById("docente").value=cedula_docente;
        document.getElementById("periodo").value=periodo;
        document.getElementById("nombre").value=nombre_docente;
        document.getElementById("uc").value=unidad_curricular;
        var start = 10;
        var end = 59;
        var filteredData = jsonData.slice(start,end + 1);
        var tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
        var seenValues = new Set();

        filteredData.forEach(function(rowData) {
            if (rowData['__EMPTY_2'] && !seenValues.has(rowData['__EMPTY_2'])) {
                seenValues.add(rowData['__EMPTY_2']);
                var row = document.createElement('tr');
                // CEDULA ESTUDIANTE
                var cell1 = document.createElement('td');
                cell1.textContent = rowData.__EMPTY_2;
                row.appendChild(cell1);
                // NOMBRE
                var cell2 = document.createElement('td');
                cell2.textContent = rowData.__EMPTY_3;
                row.appendChild(cell2);
                // Celda para la columna __EMPTY_16
                var cell6 = document.createElement('td');
                cell6.textContent = rowData.__EMPTY_16;
                row.appendChild(cell6);
                // NOTA FINAL 
                tableBody.appendChild(row);
            }
        });
        const rows = tableBody.querySelectorAll('tr');
        for (const row of rows) {
          const gradeCell = row.children[2]; // Assuming grade is in the third cell
          const grade = parseInt(gradeCell.textContent, 10);
          gradeCell.style.color = grade > 12 ? 'blue' : 'red';
        }
      };
    reader.readAsArrayBuffer(file);
});

document.getElementById('sendData').addEventListener('click', function() {
    swal.fire({
        title: '¿Desea Enviar Las notas?',
        text: "Advertencia: Esto reemplazara las notas si ya fueron enviadas anteriormente.",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#008000',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar.',
        confirmButtonText: 'Enviar.',
        allowEscapeKey:true,
        allowEnterKey:false,
        position:'center',
    }).then((result)=> {
        if (result.isConfirmed){
    var tableRows = document.getElementById('dataTable').querySelectorAll('tbody tr');
    var dataToSend = [];
    tableRows.forEach(function(row) {
        var rowData = {
        COD:  document.getElementById("cod").value,
        docente: document.getElementById("docente").value,
        PERIODO: document.getElementById("periodo").value,
        UC:  document.getElementById("uc").value,
        };
        row.querySelectorAll('td').forEach(function(cell, index) {
            var columnHeader = document.querySelector('thead tr').querySelectorAll('th')[index].textContent;
            rowData[columnHeader] = cell.textContent;
        });
        dataToSend.push(rowData);
    });

    var rowsSent = dataToSend.length;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '?route=evaluacion&method=upload', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {

                alert('Se enviaron ' + rowsSent + ' filas correctamente');
    
                window.location.reload(2000);
            } else {
                alert('Error al enviar datos a MySQL');
            }
        }
    };
    xhr.send(JSON.stringify(dataToSend));
    
}
});
});
