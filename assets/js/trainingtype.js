function showIndividual() {
    document.getElementById("individualPrices").style.display = "";
    document.getElementById("individualPricesBtn").classList.add("clickedbtn");
    document.getElementById("groupPrices").style.display = "none";
    document.getElementById("groupPricesBtn").classList.remove("clickedbtn");

}

function showGroup() {
    document.getElementById("groupPrices").style.display = "";
    document.getElementById("groupPricesBtn").classList.add("clickedbtn");
    document.getElementById("individualPrices").style.display = "none";
    document.getElementById("individualPricesBtn").classList.remove("clickedbtn");
}


