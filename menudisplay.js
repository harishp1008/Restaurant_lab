  
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
        myFunction2(this);
        myFunction3(this);
        myFunction4(this);
        myFunction5(this);
        myFunction6(this);
    }
};
xhttp.open("GET", "starter.xml", true);
xhttp.send();

function myFunction(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Starters</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('food');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";


    

    }
    document.getElementById("Starter").innerHTML = table;
}

function myFunction2(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Soups</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('soup');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";


    

    }
    document.getElementById("soup").innerHTML = table;
}
function myFunction3(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Main Courses</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('maincourse');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";



    

    }
    document.getElementById("maincourse").innerHTML = table;
}
function myFunction4(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Non-vegies</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('nonveg');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";



    

    }
    document.getElementById("nonveg").innerHTML = table;
}

function myFunction5(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Mocktails</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('Mocktail');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";



    

    }
    document.getElementById("Mocktail").innerHTML = table;
}
function myFunction6(xml) {
    var x, i, xmlDoc, txt;
    xmlDoc = xml.responseXML;
    table = "<tr><th style='font-weight:900;'>Deserts</th><th style='font-weight:900;'>Customer rating</span></th><th style='font-weight:900;'>Price</th></tr>";
    x = xmlDoc.getElementsByTagName('Desert');
   
    for (i = 0 ; i <x.length; i++) {
       table += "<tr><td>" + 
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("Rating")[0].childNodes[0].nodeValue +
    "<span class='fa fa-star checked'></td><td>"+
    x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue+
     "</td></tr>";



    

    }
    document.getElementById("Desert").innerHTML = table;
}
