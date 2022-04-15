function checkIfUpperThanThree() {
    let taille = event.target.value.length
    let name = event.target.name
    const div = document.getElementById(name + "Help")
    if(taille < 3) {
        // Récuperer la div
        div.innerHTML = "Vous devez entrer au moins 3 caractères"
        div.style.color = "red"
    } else {
        // Récuperer la div
        div.innerHTML = ""
    }
}

function checkContact() {
    let valeur = event.target.value
    let taille = event.target.value.length
    const div = document.getElementById("contactHelp")
    if(valeur[0] != 6) {
        // Récuperer la div
        div.innerHTML = "Le format de numéro doit commencer par un 6."
        div.style.color = "red"
    } else {
        // Récuperer la div
        div.innerHTML = ""
    }
    if(taille != 9 ) {
        // Récuperer la div
        div.innerHTML = div.innerHTML + " Le format de numéro doit être sur 9 chiffres."
        div.style.color = "red"
    } else {
        // Récuperer la div
        div.innerHTML = div.innerHTML + ""
    }
}