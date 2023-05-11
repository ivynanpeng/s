var xmlHTTp = new XMLHttpRequest();

var numberofColumns = 4;

var htmlCode = "";

var response;


$(document).ready(function(){
    var send ="scripts/hook.php"
    xmlHTTp.open("GET",send,true);
    xmlHTTp.send(null);
    xmlHTTp.onreadystatechange = function(){
        if (xmlHTTp.readyState == 4){
           
            response=xmlHTTp.responseText.split("~");

    
            for (var i=0;i<response.length;i++){
               
                htmlCode += '<a href="gallery_images/'+ response[i] + '">';
                htmlCode += '<img class="card-img-top img-thumbnail" src = "gallery_images/' + response[i] + '"/>';
                htmlCode += '</a>';
               
            }
            document.getElementById('gallery_coke').innerHTML = htmlCode;
            document.getElementById('gallery_sprite').innerHTML = htmlCode;
            document.getElementById('gallery_pepper').innerHTML = htmlCode;
        }
    }
});