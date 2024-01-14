function fetchJsonFile() {
    let file = 'questionAnswerData.json';
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
    const questionArray = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10'];
    for (var i = 0; i < questionArray.length; i++) {
        let question = document.getElementById(questionArray[i]);
        let questionText = '';
        questionText += ((i+1) + ') ' + data[i].question) + '<br>';

        for (const key in data[i].answers) {
            if (key !== 'correct') {
                const answerId = key + '-' + (i + 1);
                const labelId = 'l' + (i * 3 + parseInt(key));

                questionText += `<input type="radio" id="${answerId}" name="cq${i + 1}">
                <label for="${answerId}">${data[i].answers[key]}</label><br>`;
            }
        }
        question.innerHTML = questionText;
    }
}

fetchJsonFile();