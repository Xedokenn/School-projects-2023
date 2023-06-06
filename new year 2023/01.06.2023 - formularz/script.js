function check()
{
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let wiek = document.getElementById('wiek').value;
    let email = document.getElementById('email').value;

    console.log(imie, nazwisko, wiek, email);

    if (imie == '' || nazwisko == '' || wiek == '' || email == '' || !email.includes("@"))
    {
        alert("usupełnij wszystkie okna");  
        return 0;              
    }
    else if (imie.length < 2 || nazwisko.length < 2 || wiek < 18 || !email.includes("@"))
    {
        alert("nie spełniasz wymagań");  
        return 0; 
    }
    else
    {
        alert("wysłano formularz");
        return 0; 
    }
}