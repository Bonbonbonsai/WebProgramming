function sumFunc() {
    var num1 = parseInt(document.getElementById('inputVal1').value);
    var num2 = parseInt(document.getElementById('inputVal2').value);
    
    answer = num1 + num2;
    document.getElementById("result").innerHTML = "Result: " + answer;
    
    let historyTagNode = document.createElement("p");
    let newlineTagNode = document.createElement("br");
    historyTagNode.innerHTML = num1 + " + " + num2 + " = " + answer;
    document.body.appendChild(historyTagNode);
    document.body.appendChild(newlineTagNode);
    
    document.getElementById('inputVal1').value = "";
    document.getElementById('inputVal2').value = "";
}
