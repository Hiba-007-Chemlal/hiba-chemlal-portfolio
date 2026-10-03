function confirmerSuppression(){
    return confirm("Voulez-vous vraiment supprimer cet article ?");
}

function plus() {
    document.getElementById("qte").value++;
}

function moins() {
    let qte = document.getElementById("qte");

    if (qte.value > 1) {
        qte.value--;
    }
}