// filter array 
let filterarray =[];

// gallery card array

let galleryarray = [
    {
        id:1,
        name : "nuwaraeliya",
        src: "./img/nuwara-eliya.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:2,
        name : "badulla",
        src: "./img/hotel2.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:3,
        name : "ragala",
        src: "./img/wild6.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:4,
        name : "monaragala",
        src: "./img/wild7.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:5,
        name : "alla",
        src: "./img/wild5.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:6,
        name : "dabulla",
        src: "./img/wild3.jpg",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    // {
    //     id:7,
    //     name : "dabulla",
    //     src: "./images/watch3.jpg",
    //     desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    // },
    // {
    //     id:8,
    //     name : "anuradapura",
    //     src: "./images/watch3.jpg",
    //     desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    // },
    // {
    //     id:9,
    //     name : "polonnaruwa",
    //     src: "./images/watch3.jpg",
    //     desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    // }
   ];



showgallery(galleryarray);


// create function to show card


function showgallery(curarra){
   document.getElementById("card").innerText = "";
   for(var i=0;i<curarra.length;i++){
       document.getElementById("card").innerHTML += `
        <div class="col-md-4 mt-3" >
           <div class="card p-3 ps-5 pe-5">
               <h4 class="text-capitalize text-center">${curarra[i].name}</h4>

          <img src="${curarra[i].src}" width="100%" height="320px"/>
          <p class="mt-2">${curarra[i].desc}</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Go Somewhere
</button>
          </div>
          </div>
       `
   }

}

// For Live Searching Product

document.getElementById("myinput").addEventListener("keyup",function(){
    let text = document.getElementById("myinput").value;

    filterarray= galleryarray.filter(function(a){
        if(a.name.includes(text)){
            return a.name;
           }

   });
   if(this.value==""){
       showgallery(galleryarray);
   }
   else{
       if(filterarray == ""){
           document.getElementById("para").style.display = 'block'
           document.getElementById("card").innerHTML = ""; 
       }
       else{

           showgallery(filterarray);
           document.getElementById("para").style.display = 'none'
       }
   }

});


