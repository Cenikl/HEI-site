window.addEventListener("DOMContentLoaded",function(e){
    const nom = document.getElementById("prenom")
    const prenom = document.getElementById("fprenom")
    const email = document.getElementById("mail")
    const tel = document.getElementById("phone")
    const Mvola = document.getElementById("mvola")

    nom.addEventListener("blur",function(e){
        if( nom.value == ""){
        alert("Veuillez remplir le champ nom")}
    })
    prenom.addEventListener("blur",function(e){
        if( prenom.value == ""){
        alert("Veuillez remplir le champ nom de famille")}
    })
    email.addEventListener("blur",function(e){
        if( email.value == ""){
        alert("Veuillez remplir le champ mail");
        email.onfocus()}
    })
    tel.addEventListener("blur",function(e){
        if( tel.value == ""){
        alert("Veuillez remplir le champ téléphone");
        tel.onfocus()}
    })
    Mvola.addEventListener("blur",function(e){
        if( Mvola.value == ""){
        alert("Veuillez remplir le champ référence Mvola");
        Mvola.onfocus()}
    })
})