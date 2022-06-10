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
    cardDiv.classList = "container-fluid col-4 bg-primary mt-2 mb-2 p-2";
    cardDiv.style = "width: 18rem;";

    var cardImg = document.createElement("img");
    cardImg.src = "./carousel-photos/img"+Math.floor(Math.random()*5+1)+".jpg";
    cardImg.classList = "card-img-top";
    
    var cardBody = document.createElement("div");
    cardBody.classList = "card-body";

    var cardh5 =document.createElement("h5");
    cardh5.textContent = f.title;

    var cardP = document.createElement("p");
    cardP.textContent = f.description;
    
    var ul = document.createElement("ul");
    ul.classList = "list-group list-group-flush";

    var li1 = document.createElement("li");
    li1.classList = "list-group-item";
    li1.textContent = f.genre;
    
    var li2 = document.createElement("li");
    li1.classList = "list-group-item";
    li1.textContent =f.releaseYear;

    ul.appendChild(li1);
    ul.appendChild(li2);

    cardBody.appendChild(cardh5);
    cardBody.appendChild(cardP);

    cardDiv.appendChild(cardImg);
    cardDiv.appendChild(cardBody);
    cardDiv.appendChild(ul);

    $("#cards-container").append(cardDiv);
}