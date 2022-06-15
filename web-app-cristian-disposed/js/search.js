let films = [];

$(document).ready(function(){
    $.ajax({
        url:"./php/get_films.php",
        method:"GET",
        success:function(response){            
            let arr = JSON.parse(response);
            
            arr.forEach(element => {
                films.push(new Film(...element));
                appendChildFilmCard(films.at(-1));
            });
        }
    })
});

$("#search_input").on("input",function(){
    $("#carousel").hide();
    $("#cards-container").show();
    $("#cards-container").empty();
    var search = $("#search_input").val();

    films.forEach(element => {
        if(element.title.toLowerCase().includes(search.toLowerCase())){
            appendChildFilmCard(element);
        }        
    });
})

$("#search_input").focusout(function(){
    $("#carousel").show();
})

function appendChildFilmCard(f){    

    var cardDiv = document.createElement("div");
    cardDiv.classList = "container-fluid col-4 mt-2 mb-2 p-2 col-lg-4 d-flex align-items-stretch film-card";
    cardDiv.style = "width: 18rem;";

    var cardImg = document.createElement("img");
    cardImg.src = "./carousel-photos/img2.jpg";//+Math.floor(Math.random()*5+1)+".jpg";
    cardImg.classList = "card-img-top";
    
    var cardBody = document.createElement("div");
    cardBody.classList = "card-body";

    var cardh5 =document.createElement("h5");
    cardh5.textContent = f.title;

    var cardPDesc = document.createElement("p");
    cardPDesc.textContent = f.description;
    
    var cardPYear = document.createElement("p");
    cardPYear.textContent = f.releaseYear;

    cardBody.appendChild(cardh5);
    cardBody.appendChild(cardPDesc);
    cardBody.appendChild(cardPYear);

    cardDiv.appendChild(cardImg);
    cardDiv.appendChild(cardBody);

    $("#cards-container").append(cardDiv);
}