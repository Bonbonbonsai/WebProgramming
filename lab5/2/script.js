function fetchJsonFile() {
    let file = 'person.json';
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
    text += data[0].firstName + ' ' + data[0].lastName + ', ' + data[0].gender.type + ' '
    + data[0].age + ' years old.' + '<br>';

    text += data[0].address.streetAddress + ' ' + data[0].address.city + ' ' + data[0].address.state + '<br>';

    text += data[0].address.postalCode + '<br>';

    text += data[0].phoneNumber[0].type + ' : ' + data[0].phoneNumber[0].number + '<br>';

    text += data[0].phoneNumber[1].type + ' : ' + data[0].phoneNumber[1].number;

    document.getElementById('output').innerHTML = text;
}

fetchJsonFile();