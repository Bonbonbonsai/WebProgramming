var i = 0;
function register() {
    let table = document.querySelector('.historyTable');
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    let studentId = document.getElementById('student-id');
    let firstname = document.getElementById('fname');
    let lastname = document.getElementById('lname');

    cell1.innerHTML = ++i;
    cell2.innerHTML = studentId.value;
    cell3.innerHTML = firstname.value;
    cell4.innerHTML = lastname.value;
}