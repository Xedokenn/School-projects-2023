function oblicz() {
    var bok_1 = parseInt(document.getElementById("a").value);
    var bok_2 = parseInt(document.getElementById("b").value);
    var bok_3 = parseInt(document.getElementById("c").value);

    var p = parseInt();
    var pole = parseInt();
    var valid = ((bok_1+bok_2)>bok_3)&&((bok_2+bok_3)>bok_1)&&((bok_3+bok_1)>bok_2);

    if (valid) {
        p = (bok_1+bok_2+bok_3)/2;
        pole = Math.sqrt(p*(p-bok_1)*(p-bok_2)*(p-bok_3));

        document.getElementById("wynik").innerHTML = pole;                
      }else{
        console.log("not valid triangle");
      }
    
}