function changeLanguage() {
    let fname = document.getElementById('labelFname');
    let lname = document.getElementById('labelLname');
    let country = document.getElementById('labelCountry');
    let select = document.getElementsByTagName('option');
    let engCountryList = ['select a country', 'Thailand', 'Vietnam', 'Laos', 'Malaysia', 
    'Singapore', 'Philippines', 'Myanmar', 'Cambodia', 'Brunei', 'Indonesia'];
    let thaiCountryList = ['เลือกประเทศ', 'ไทย', 'เวียดนาม', 'ลาว', 'มาเลเซีย', 'สิงคโปร์',
    'ฟิลิปปินส์', 'พม่า', 'กัมพูชา', 'บรูไน', 'อินโนนิเซีย'];
    let button = document.getElementById('labelBtn');
    
    if (select[0].innerHTML === 'เลือกประเทศ') {
        fname.innerHTML = 'First Name :';
        lname.innerHTML = 'Last Name :';
        country.innerHTML = 'Country :';
        for (var i = 0; i < engCountryList.length; i++) {
            select[i].innerHTML = engCountryList[i];
        }
        button.value = 'Change to Thai';
    }
    else {
        fname.innerHTML = 'ชื่อ :';
        lname.innerHTML = 'นามสกุล :';
        country.innerHTML = 'ประเทศ :';
        for (var i = 0; i < thaiCountryList.length; i++) {
            select[i].innerHTML = thaiCountryList[i];
        }
        button.value = 'เปลี่ยนเป็นอังกฤษ';
    }
}