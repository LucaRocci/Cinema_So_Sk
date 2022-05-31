$.ajax({
    url:"./php/get_carousel_photos.php",
    method:"GET",
    success: function(response){
        if(response == null){
            return;
        }

        const arr = response.split(";");
        arr.pop();
        var first = true;

        arr.map((value) =>{
            $(".carousel-inner").append(
                "<div class='carousel-item'> <img src='./carousel-photos/"+value+"' class='d-block w-100'></div>"
            );
            if(first){
                $(".carousel-item").addClass("active");
                first = false;
            }                
        });        
    }
})