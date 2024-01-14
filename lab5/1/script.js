function fetchJsonFile() {
    let file = 'employees.json';
    let request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            var jsonData = JSON.parse(request.responseText);
            dataDisplay(jsonData);
            console.log(jsonData);
        }
    };
    request.open('GET', file, true);
    request.send();
}

function dataDisplay(data) {
    let text = '';
    for (let i = 0; i < data.length; i++) {
        text += data[i].ID + ' '+ '<b>' + data[i].FirstName + ' ' + data[i].LastName + '</b>' 
        + ' (' + data[i].Gender + ') is a ' + data[i].Position + ', ' + data[i].Address;
        text += '</br>';
    }
    document.getElementById("out").innerHTML = text;
}

fetchJsonFile();