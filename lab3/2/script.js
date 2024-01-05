function clockCycle() {
    if (document.getElementById("image1").src == "http://10.0.15.21/lab/lab3/images/1.png") {
        document.getElementById("image1").src = "http://10.0.15.21/lab/lab3/images/3.png";
        document.getElementById("image2").src = "http://10.0.15.21/lab/lab3/images/1.png";
        document.getElementById("image3").src = "http://10.0.15.21/lab/lab3/images/4.png";
        document.getElementById("image4").src = "http://10.0.15.21/lab/lab3/images/2.png";
    }
    else if (document.getElementById("image1").src == "http://10.0.15.21/lab/lab3/images/3.png") {
        document.getElementById("image1").src = "http://10.0.15.21/lab/lab3/images/4.png";
        document.getElementById("image2").src = "http://10.0.15.21/lab/lab3/images/3.png";
        document.getElementById("image3").src = "http://10.0.15.21/lab/lab3/images/2.png";
        document.getElementById("image4").src = "http://10.0.15.21/lab/lab3/images/1.png";
    }
    else if (document.getElementById("image1").src == "http://10.0.15.21/lab/lab3/images/4.png") {
        document.getElementById("image1").src = "http://10.0.15.21/lab/lab3/images/2.png";
        document.getElementById("image2").src = "http://10.0.15.21/lab/lab3/images/4.png";
        document.getElementById("image3").src = "http://10.0.15.21/lab/lab3/images/1.png";
        document.getElementById("image4").src = "http://10.0.15.21/lab/lab3/images/3.png";
    }
    else if (document.getElementById("image1").src == "http://10.0.15.21/lab/lab3/images/2.png") {
        document.getElementById("image1").src = "http://10.0.15.21/lab/lab3/images/1.png";
        document.getElementById("image2").src = "http://10.0.15.21/lab/lab3/images/2.png";
        document.getElementById("image3").src = "http://10.0.15.21/lab/lab3/images/3.png";
        document.getElementById("image4").src = "http://10.0.15.21/lab/lab3/images/4.png";
    }
}