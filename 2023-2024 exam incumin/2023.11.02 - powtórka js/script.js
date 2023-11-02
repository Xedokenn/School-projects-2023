function f(color) {

    var fontsize = document.getElementById("procent").value;
    var fonttype = document.getElementById("styl").value;

    document.getElementById("wynik").style.fontSize = String(fontsize)+"%";
    document.getElementById("wynik").style.fontStyle = String(fonttype);
    document.getElementById("wynik").style.color = color;

}  

function podziel() {
    const text = document.getElementById("napis").value.split(" ");
    var output = "";
    for (var i = 0; i < text.length; i++) {
        output += text[i] + "<br>";
    }
    document.getElementById("wynik").innerHTML = output;
}

function palindrom() {
    let str = document.getElementById("napis").value;
    let reversed = str.split("").toReversed().join("");
    console.log(str);
    console.log(reversed);
    if (str == reversed) {
        document.getElementById("wynik").innerHTML = "tak, to jest palindrom";
    } else {
        document.getElementById("wynik").innerHTML = "nie, to nie jest palindrom";
    }
    
}

function random() {
    let string = "abcdefghijklmnopqrstuvwxyz";
    let output = "";

    for (let i=0; i < 8; i++) {
        output += string[Math.floor(Math.random()*20)];
        console.log(output);
    }
    document.getElementById("wynik").value = output;
}