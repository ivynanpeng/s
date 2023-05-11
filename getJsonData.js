$(document).ready(function(){

    $.getJSON('./model/data.json',function(jsonObj){
        console.log(jsonObj);

        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title +'</h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle +'</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description +'</p>');

        $('#title_coke').html('<h2>' + jsonObj.pageTextData[1].title +'</h2>');
        $('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[1].subTitle +'</h3>');
        $('#description_coke').html('<p>' + jsonObj.pageTextData[1].description +'</p>');

        $('#title_sprite').html('<h2>' + jsonObj.pageTextData[2].title +'</h2>');
        $('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[2].subTitle +'</h3>');
        $('#description_sprite').html('<p>' + jsonObj.pageTextData[2].description +'</p>');



        $('#title_pepper').html('<h2>' + jsonObj.pageTextData[3].title +'</h2>');
        $('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[3].subTitle +'</h3>');
        $('#description_pepper').html('<p>' + jsonObj.pageTextData[3].description +'</p>');

        $('#x3dModelTitle_coke').html('<h1 class="card-title">' + jsonObj.pageTextData[4].x3dModelTitle +'</h1>');
        $('#method_coke').html('<p class="card-text">' + jsonObj.pageTextData[4].x3dCreationMethod +'</p>');
        $('#3dtitle_coke').html('<h2 class="card-title">' + jsonObj.pageTextData[4].title +'</h2>');
        $('#3dsubtitle_coke').html('<h3>' + jsonObj.pageTextData[4].subTitle +'</h3>');
        $('#3ddescription_coke').html('<p>' + jsonObj.pageTextData[4].description +'</p>');

        $('#x3dModelTitle_pepper').html('<h1 class="card-title">' + jsonObj.pageTextData[5].x3dModelTitle +'</h1>');
        $('#method_pepper').html('<p  class="card-text" >' + jsonObj.pageTextData[5].x3dCreationMethod +'</p>');
        $('#3dtitle_pepper').html('<h2 class="card-title">' + jsonObj.pageTextData[5].title +'</h2>');
        $('#3dsubtitle_pepper').html('<h3>' + jsonObj.pageTextData[5].subTitle +'</h3>');
        $('#3ddescription_pepper').html('<p>' + jsonObj.pageTextData[5].description +'</p>');

        $('#x3dModelTitle_sprite').html('<h1 class="card-title">' + jsonObj.pageTextData[6].x3dModelTitle +'</h1>');
        $('#method_sprite').html('<p class="card-text">' + jsonObj.pageTextData[6].x3dCreationMethod +'</p>');
        $('#3dtitle_sprite').html('<h2 class="card-title">' + jsonObj.pageTextData[6].title +'</h2>');
        $('#3dsubtitle_sprite').html('<h3>' + jsonObj.pageTextData[6].subTitle +'</h3>');
        $('#3ddescription_sprite').html('<p>' + jsonObj.pageTextData[6].description +'</p>');


    });
});