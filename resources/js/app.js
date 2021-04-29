require('./bootstrap');

let category = document.getElementById('category');

category.addEventListener("click", function(e){
    if(document.getElementById('shared').selected){
        document.getElementById('type').style.display="block";
    }
} );
