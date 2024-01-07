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

    if (id_card.length !== 13) {
        alert('กรุณากรอกหมายเลขบัตรประชาชนให้ครบ 13 หลัก ! ! !');
        return false;
    }
    else if (tname == "0") {
        alert('กรุณาเลือกคำนำหน้านาม ! ! !');
        return false;
    }
    else if (!(fname.length >= 2 && fname.length <= 20)) {
        alert('กรุณากรอกชื่อที่มีตัวอักษรความยาวระหว่าง 2-20 ตัวอักษร ! ! !');
        return false;
    }
    else if (!(lname.length >= 2 && lname.length <= 30)) {
        alert('กรุณากรอกนามสกุลที่มีตัวอักษรความยาวระหว่าง 2-30 ตัวอักษร ! ! !');
        return false;
    }
    else if (address < 15) {
        alert('กรุณากรอกที่อยู่ที่มีตัวอักษรความยาวไม่ต่ำกว่า 15 ตัวอักษร ! ! !');
        return false;
    }
    else if (subDis < 2) {
        alert('กรุณากรอกตำบล/แขวงที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
        return false;
    }
    else if (dis < 2) {
        alert('กรุณากรอกอำเภอ/เขตที่มีตัวอักษรความยาวไม่ต่ำกว่า 2 ตัวอักษร ! ! !');
        return false;
    }
    else if (province == "0") {
        alert('กรุณาเลือกจังหวัด ! ! !');
        return false;
    }
    else if (postal.length !== 5) {
        alert('กรุณากรอกรหัสไปรษณีย์ให้ครบ 13 หลัก ! ! !');
        return false;
    }

    return true;
}
