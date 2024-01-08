function validateForm() {
    let id_card = document.getElementById('id-card').value;
    let tname = document.getElementById('title-name').value;
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
    if (tname == "0") {
        form.push('กรุณาเลือกคำนำหน้านาม ! ! !');
    }
    if (!(fname.length >= 2 && fname.length <= 20)) {
        form.push('กรุณากรอกชื่อที่มีตัวอักษรความยาวระหว่าง 2-20 ตัวอักษร ! ! !');
    }
    if (!(lname.length >= 2 && lname.length <= 30)) {
        form.push('กรุณากรอกนามสกุลที่มีตัวอักษรความยาวระหว่าง 2-30 ตัวอักษร ! ! !');
    }
    if (address < 15) {
        form.push('กรุณากรอกที่อยู่ที่มีตัวอักษรความยาวไม่ต่ำกว่า 15 ตัวอักษร ! ! !');
    }
    if (subDis < 2) {
        form.push('กรุณากรอกตำบล/แขวงที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
    }
    if (dis < 2) {
        form.push('กรุณากรอกอำเภอ/เขตที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
    }
    if (province == "0") {
        form.push('กรุณาเลือกจังหวัด ! ! !');
    }
    if (postal.length !== 5) {
        form.push('กรุณากรอกรหัสไปรษณีย์ให้ครบ 13 หลัก ! ! !');
    }

    if (form.length == 0) {
        return true;
    } else {
        alert(form.join('\n'));
        return false;
    }

}
