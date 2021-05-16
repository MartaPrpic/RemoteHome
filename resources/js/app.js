require('./bootstrap');

let category = document.getElementById('category');
if(category){
    category.addEventListener("click", function(e){
        if(document.getElementById('shared').selected){
            document.getElementById('type').style.display="block";
        }
    } );
}


let categories = document.getElementById('categories');
if(categories){
    let oglasi = Array.from(document.getElementsByName('oglas'));
    let categoryCheck = Array.from(document.getElementsByName('categoryCheck'));

    categoryCheck.forEach(function(check){
        check.addEventListener('click', funkcija)
    });
    
    function funkcija(){
        oglasi.forEach(oglas => oglas.style.display = "block");
        let dinamicList= [];
        categoryCheck.forEach(check => {
            console.log(check.checked);
            if(check.checked == true){
                oglasi.forEach(oglas =>{
                    console.log(oglas.id, check.value);
                    oglas.style.display = "none";
                    if(oglas.id == check.value | oglas.firstElementChild.id == check.value){
                        dinamicList.push(oglas);
                    }
                });
            }
        })
        dinamicList.forEach(match => match.style.display = "block");
        console.log(dinamicList);
    }
}


