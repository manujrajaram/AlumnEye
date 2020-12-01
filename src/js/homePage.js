console.log("HOme Page")


// document.getElementById("post-button-a").addEventListener('click',updateQuestion);

console.log("WHy is this happening")

function updateQuestion(){
    var xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'http://localhost/AlumnEye/src/php/homePage2.php', true);
 

 xhr.onload = function(){
    console.log("Inside onload function")
    if(this.status == 200){
      console.log("Inside 200")
      var posty = JSON.parse(this.responseText);
      for (var i in posty){
         output=   
         "<div class='post-view'><div class='post-view-question'>" +posty[i].post +"</div></div>";

          

        document.getElementById("post-post").innerHTML+=output;
      }
    }
 }
    xhr.send();
}

updateQuestion();
