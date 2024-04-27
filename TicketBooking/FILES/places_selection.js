

visitingPlaces = [
    {
        placeName:"Goa",
        nextPageLink:"days_select.html"

    },
    {
        placeName:"Kerala",
        nextPageLink:"days_select.html"
    },
    {
        placeName:"Madhya Pradesh",
        nextPageLink:"days_select.html"

    },
    {
        placeName:"Karnataka",
        nextPageLink:"days_select.html"
    }

];

let places_holding = document.getElementById("mainCard");

function createCards(state){

    let handlingContainer = document.createElement("div");
    handlingContainer.classList.add("statesCardHandler");

    let imgCard = document.createElement("div");
    imgCard.classList.add("statesCard");

    let anchorEl = document.createElement("a");
    anchorEl.href = nextPageLink;

    let spanEl = document.createElement("span");
    spanEl.textContent = state;

    anchorEl.appendChild(spanEl);
    handlingContainer.appendChild(imgCard);
    handlingContainer.appendChild(anchorEl);
    
    places_holding.appendChild(handlingContainer);

}


for(let state of visitingPlaces){
    createCards(state);
}