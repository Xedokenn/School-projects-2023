function math(){
  let i = Math.random()*(10 - 1 ) + 1;
  let x = Math.floor(i);
  return x;
}

function getvalues() {
  var input1 = document.getElementById("input1").value;
  var input2 = document.getElementById("input2").value;
  kurczak(input1, input2);
}

var lista = [];

for(let i = 0; i < 100; i++) {
  lista.push(math());
}
console.log(lista);

var lista2 = [];

function kurczak(input1, input2){
  lista2[0] = lista[0];
  for (let i = 1; i < lista.length; i++){
    lista2[i] = lista2[i-1] + lista[i];
    var gt1 = input1 - 1;
    var gt2 = input2 - 1;
    var ag1 = gt1 - 1;
    var ag2 = gt2 - 1;
    var q = 0;

    
    if(input1 > input2){
      if(ag2 < 0 ){
        q = lista2[gt1] - 0;
      } else {
      q = lista2[gt1] - lista2[ag2];
      }

    } else {
      if(ag1 < 0){
        q = lista2[gt2] - 0;
      } else{
      q = lista2[gt2] - lista2[ag1];
      }
    }
  }
    
    console.log(lista2);
    document.getElementById('number').innerHTML = q;
}