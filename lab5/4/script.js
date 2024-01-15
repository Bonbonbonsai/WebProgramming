function validateForm() {
    let id_card = document.getElementById('id-card').value;
    let title_name = document.getElementById('title-name').value;
    let fname = document.getElementById('first-name').value;
    let lname = document.getElementById('last-name').value;
    let address = document.getElementById('address').value;
    let subDis = document.getElementById('sub-district').value;
    let dis = document.getElementById('district').value;
    let province = document.getElementById('province').value;
    let postal = document.getElementById('postal').value;

    const form = [];

    if (id_card.length !== 13) {
        form.push('กรุณากรอกหมายเลขบัตรประชาชนให้ครบ 13 หลัก ! ! !');
    }
    if (title_name == "0") {
        form.push('กรุณาเลือกคำนำหน้านาม ! ! !');
    }
    if (!(fname.length >= 2 && fname.length <= 20)) {
        form.push('กรุณากรอกชื่อที่มีตัวอักษรความยาวระหว่าง 2-20 ตัวอักษร ! ! !');
    }
    if (!(lname.length >= 2 && lname.length <= 30)) {
        form.push('กรุณากรอกนามสกุลที่มีตัวอักษรความยาวระหว่าง 2-30 ตัวอักษร ! ! !');
    }
    if (address.length < 15) {
        form.push('กรุณากรอกที่อยู่ที่มีตัวอักษรความยาวไม่ต่ำกว่า 15 ตัวอักษร ! ! !');
    }
    if (subDis.length < 2) {
        form.push('กรุณากรอกตำบล/แขวงที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
    }
    if (dis.length < 2) {
        form.push('กรุณากรอกอำเภอ/เขตที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
    }
    if (province == "0") {
        form.push('กรุณาเลือกจังหวัด ! ! !');
    }
    if (postal.length !== 5) {
        form.push('กรุณากรอกรหัสไปรษณีย์ให้ครบ 13 หลัก ! ! !');
    }

    if (form.length == 0) {
        localStorage.setItem('userIDCard', id_card);
        localStorage.setItem('userTitleName', title_name);
        localStorage.setItem('userFirstName', fname);
        localStorage.setItem('userLastName', lname);
        localStorage.setItem('userAddress', address);
        localStorage.setItem('userSubDistrict', subDis);
        localStorage.setItem('userDistrict', dis);
        localStorage.setItem('userProvince', province);
        localStorage.setItem('userPostal', postal);
        alert('successfully submitted');
    } else {
        alert(form.join('\n'));
        return false;
    }
}

function loadData() {
    let userIDCard = localStorage.getItem('userIDCard');
    let userTitleName = localStorage.getItem('userTitleName');
    let userFirstName = localStorage.getItem('userFirstName');
    let userLastName = localStorage.getItem('userLastName');
    let userAddress = localStorage.getItem('userAddress');
    let userSubDistrict = localStorage.getItem('userSubDistrict');
    let userDistrict = localStorage.getItem('userDistrict');
    let userProvince = localStorage.getItem('userProvince');
    let userPostal = localStorage.getItem('userPostal');

    let tableRow = document.createElement('tr');
    tableRow.innerHTML = `
    <td>${userIDCard}</td>
    <td>${userTitleName} ${userFirstName} ${userLastName}</td>
    <td>${userAddress}</td>
    <td>${userSubDistrict}</td>
    <td>${userDistrict}</td>
    <td>${userProvince}</td>
    <td>${userPostal}</td>
    `;
    
    let insertRow = document.getElementById('table101');
    insertRow.appendChild(tableRow);
}
