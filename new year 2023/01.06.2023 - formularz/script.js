function check()
{
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let wiek = document.getElementById('wiek').value;
    let email = document.getElementById('email').value;


    console.log(imie, nazwisko, wiek, email);

    if (imie == '' || nazwisko == '' || wiek == '' || email == '')
    {
        alert("usupełnij wszystkie okna");  
        return 0;              
    }
    else (imie != '' && nazwisko != '' && wiek != '' && email != '')
    {
        alert("wysłano formularz");
        return 0; 
    }

}