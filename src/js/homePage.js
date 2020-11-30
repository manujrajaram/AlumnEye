console.log("HOme Page")


document.getElementById("post-button-a").addEventListener('click',updateQuestion);

function updateQuestion(){
    var xhr = new XMLHttpRequest();
    
    xhr.open('GET', 'homePage2.php', true);
 

 xhr.onload = function(){
    if(this.status == 200){
       console.log("Hi therekfjasoifjasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasasas")
      var users = JSON.parse(this.responseText);
      console.log(users);
    }
 }
    xhr.send();
}