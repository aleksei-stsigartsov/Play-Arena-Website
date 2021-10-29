function showBasketball() {
    document.getElementById("basketballPrices").style.display = "";
    document.getElementById("basketballPricesBtn").classList.add("clickedbtn");
    document.getElementById("volleyballPrices").style.display = "none";
    document.getElementById("volleyballPricesBtn").classList.remove("clickedbtn");
    document.getElementById("footballPrices").style.display = "none";
    document.getElementById("footballPricesBtn").classList.remove("clickedbtn");
}

function showVolleyball() {
    document.getElementById("volleyballPrices").style.display = "";
    document.getElementById("volleyballPricesBtn").classList.add("clickedbtn");
    document.getElementById("basketballPrices").style.display = "none";
    document.getElementById("basketballPricesBtn").classList.remove("clickedbtn");
    document.getElementById("footballPrices").style.display = "none";
    document.getElementById("footballPricesBtn").classList.remove("clickedbtn");
}

function showFootball() {
    document.getElementById("footballPrices").style.display = "";
    document.getElementById("footballPricesBtn").classList.add("clickedbtn");
    document.getElementById("volleyballPrices").style.display = "none";
    document.getElementById("volleyballPricesBtn").classList.remove("clickedbtn");
    document.getElementById("basketballPrices").style.display = "none";
    document.getElementById("basketballPricesBtn").classList.remove("clickedbtn");
}