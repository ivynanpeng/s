<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-
to-fit=no">
    <!-- Bootstrap CSS -->
  
    <link rel='stylesheet' type='text/css' href='css/x3dom.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    
    
     <title>Coca Cola 3D App template</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
  
     <script type="text/javascript">
      var counter =0;
       function swap(selected){
            document.getElementById('home').style.display='none';
            document.getElementById('coke').style.display='none';
            document.getElementById('sprite').style.display='none';
            document.getElementById('pepper').style.display='none';
            document.getElementById(selected).style.display='block';
            }
      function changelook(){
        counter += 1;
        switch (counter){
          case 1:
            document.getElementById('theme').style.backgroundColor='#770000';
            document.getElementById('theme').style.color='red';
            document.getElementById('header').style.backgroundColor='#770000';
            document.getElementById('footer').style.backgroundColor='#770000';
            break;
          case 2:
            document.getElementById('theme').style.backgroundColor='#2aad44';
            document.getElementById('header').style.backgroundColor='#190ae4';
            document.getElementById('footer').style.backgroundColor='#190ae4';
            document.getElementById('theme').style.color='grey';
            break;
          case 3:
            counter=0;
            document.getElementById('theme').style.backgroundColor='#59016e';
            document.getElementById('header').style.backgroundColor='#76001f';
            document.getElementById('footer').style.backgroundColor='#76001f';
            document.getElementById('theme').style.color='black';
            break;
      }
    }
    function changeback(){
            document.getElementById('theme').style.backgroundColor='rgb(255, 255, 255)';
            document.getElementById('theme').style.color='black';
            document.getElementById('header').style.backgroundColor='#760003';
            document.getElementById('footer').style.backgroundColor='#760003';
    }
   
    function animatemodel(){
      if(document.getElementById('model__Line002-TIMER').getAttribute('enabled')!='true')
          document.getElementById('model__Line002-TIMER').setAttribute('enabled','true');
      else
          document.getElementById('model__Line002-TIMER').setAttribute('enabled','false');

    
    
    }
    


    function stop(){
      if(document.getElementById('modela__Cylinder001-TIMER').getAttribute('enabled')=='true')
          document.getElementById('modela__Cylinder001-TIMER').setAttribute('enabled','false');
          document.getElementById('modela__Cylinder002-TIMER').setAttribute('enabled','false');
    

    }
    function stops(){
      if(document.getElementById('modelb__cameraback-TIMER').getAttribute('enabled')=='true'){
          document.getElementById('modelb__cameraback-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder006-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder003-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder004-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder005-TIMER').setAttribute('enabled','false');
        }
    

    }
    

    function animatemodels(){
      if(document.getElementById('modelb__cameraback-TIMER').getAttribute('enabled')!='true'){
          document.getElementById('modelb__cameraback-TIMER').setAttribute('enabled','true');
          document.getElementById('modelb__Cylinder006-TIMER').setAttribute('enabled','true');
          document.getElementById('modelb__Cylinder003-TIMER').setAttribute('enabled','true');
          document.getElementById('modelb__Cylinder004-TIMER').setAttribute('enabled','true');
          document.getElementById('modelb__Cylinder005-TIMER').setAttribute('enabled','true');
        }
      else
      {
          document.getElementById('modelb__cameraback-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder006-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder003-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder004-TIMER').setAttribute('enabled','false');
          document.getElementById('modelb__Cylinder005-TIMER').setAttribute('enabled','false');
        }
    
    
    }
    
    function animatemodeld(){
      if(document.getElementById('modela__Cylinder001-TIMER').getAttribute('enabled')!='true'){
          document.getElementById('modela__Cylinder001-TIMER').setAttribute('enabled','true');
          document.getElementById('modela__Cylinder002-TIMER').setAttribute('enabled','true');
        }
      else{
         document.getElementById('modela__Cylinder001-TIMER').setAttribute('enabled','false');
          document.getElementById('modela__Cylinder002-TIMER').setAttribute('enabled','false');

      }

    }


    function stop(){
      if(document.getElementById('model__Line002-TIMER').getAttribute('enabled')=='true')
          document.getElementById('model__Line002-TIMER').setAttribute('enabled','false');
      else
          document.getElementById('model__Line002-TIMER').setAttribute('enabled','false');
    

    }
    function stopd(){
      if(document.getElementById('modela__Cylinder001-TIMER').getAttribute('enabled')=='true')
          document.getElementById('modela__Cylinder001-TIMER').setAttribute('enabled','false');
          document.getElementById('modela__Cylinder002-TIMER').setAttribute('enabled','false');
    

    }
    function front(){
     
          document.getElementById('model__camerafront').setAttribute('bind','true');
  
    }
    function frontd(){
     
        document.getElementById('modela__camerafront').setAttribute('bind','true');

    }
    function fronts(){
     
     document.getElementById('modelb__camerafront').setAttribute('bind','true');

    }
    function backs(){
        
        document.getElementById('modelb__cameraback').setAttribute('bind','true');

    }
    function back(){
     
     document.getElementById('model__cameraback').setAttribute('bind','true');
    }
    function left(){
     
     document.getElementById('model__cameraleft').setAttribute('bind','true');
    }
    function right(){
     
     document.getElementById('model__cameraright').setAttribute('bind','true');
    }

   
    function light(){
     
      if(document.getElementById('model__NavInfo001').getAttribute('headlight')!='true')
          document.getElementById('model__NavInfo001').setAttribute('headlight','true');
      else
          document.getElementById('model__NavInfo001').setAttribute('headlight','false');


     
    }

    function lightd(){
     
     if(document.getElementById('modela__NavInfo001').getAttribute('headlight')!='true')
          document.getElementById('modela__NavInfo001').setAttribute('headlight','true');
     else
         document.getElementById('modela__NavInfo001').setAttribute('headlight','false');
   }

   function lights(){
     
    if(document.getElementById('modelb__NavInfo001').getAttribute('headlight')!='true')
           document.getElementById('modelb__NavInfo001').setAttribute('headlight','true');
      else
          document.getElementById('modelb__NavInfo001').setAttribute('headlight','false');

   }
    

    function w()
    {
      var e = document.getElementById('modela');
      e.runtime.togglePoints(true);
     
     
   
   
    }


     </script>
     
</head>
<body id="theme">
<nav id="header" class="navbar navbar-expand-sm  navbar_coca_cola">
  <!-- Brand -->
  <div class="logo">
    <a class="navbar-brand" href="#">
    <h1>1</h1>
    <h1>oca</h1>
    <h2>Cola</h2>
    <h3>Journey</h3>
    <p>Refreshing the world, one story at a time</p>
    </a>
    </div>

  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse ">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link " href="javascript:swap('home')">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:swap('more')">More</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"href="#" data-toggle="dropdown">Drinks</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:swap('coke')">Coca cola</a>
          <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
          <a class="dropdown-item" href="javascript:swap('pepper')">Dr pepper</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-toggle="modal"href="#" data-target="#myModal">Contact</a>
        <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">3D App Contact Details</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
               Ivy Peng , Email: np330@sussex.ac.uk
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
      </li>



    <li class="nav-item">
      <a class="nav-link"   data-toggle="popover" data-trigger="hover"
          data-placement="bottom" data-content="Restyle webpage"href="javascript:changelook()">Restyle</a> 
     </li>
     <li class="nav-item">
         <a class="btn "href="javascript:changeback()">Reset</a>
     </li>
    </ul>
  </div>
</nav>




<div id='home'  class="container main_contents">
    <div class="row">
      <div class="col-sm-12">
      <div id="main_3d_image">
        <div id="main_text" class="col-xs-12 col-sm-4">
        <div id="title_home"></div>
        <div id="subTitle_home"></div>
        <div id="description_home"></div>
        </div> 
      </div>
    </div>
  </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <a data-src="assets/images/renderimages/coca_cola.jpg" data-fancybox="coke" data-caption="My 3D Coke Can Render" class="thumbnail">
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/coca_cola.jpg" alt="Coca Cola"></a>
          <div class="card-body">
            <div id="title_coke"></div>
            <div id="subTitle_coke"></div>
            <div id="description_coke"></div>
              <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
            <a data-src="assets/images/renderimages/sprite.jpg" data-fancybox="sprite" data-caption="My 3D Sprite Bottle Render" class="thumbnail">
              <img class="card-img-top img-fluid img-thumbnail" src="assets/images/sprite.jpg" alt="Sprite"></a>
            <div class="card-body">
              <div id="title_sprite"></div>
              <div id="subTitle_sprite"></div>
              <div id="description_sprite"></div>
              <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary">Find out more...</a>
            </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <a data-src="assets/images/renderimages/drpepper.jpg" data-fancybox="pepper" data-caption="My 3D Dr Pepper Cup Render" class="thumbnail">
            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/dr_pepper.jpg" alt="Dr Peper"></a>
          <div class="card-body">
            <div id="title_pepper"></div>
            <div id="subTitle_pepper"></div>
            <div id="description_pepper"></div>

            <a href="https://www.coca-cola.co.uk/brands/dr-pepper" class="btn btn-primary">Find out more...</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sprite"  style="display: none;">
    <div class="container main_contents container-fluid">
        <div class="row">
          <div class="col-sm-10">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('sprite')">Sprite</a>
    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('pepper')">Dr Pepper</a>
    
                  </li>
                
                  </ul>
              </div>
              
               
    
    
    
                <div class="card-body">
                  <div id="x3dModelTitle_sprite"></div>
                   <div class="model3D">
                    
                    <x3d>
                      <scene>
                        <inline  nameSpaceName="modelb"   mapDEFToId="true" onclick="animatemodels();" url="assets/sprite/export/sprite_b.x3d"></inline>
                      </scene>
    
                    </x3d>
    
                   </div> 
                   <div id="method_sprite"></div>
                   <h3> Click the model to shake it</h3>
                   
              </div>
            </div> 
          </div>
        
                
          
       

        <div class="col-sm-2">
            <div class="card text-left btng">
            <?php echo "</br>"; ?>
            <h2>Button</h2>
            <?php echo "</br>"; ?>
                  <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="animatemodels();">Start</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stops();">Stop</a>
                  <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="backs();">Front</a>
                 <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="fronts();">Side</a>
                 <a href="#"  class="btn btn-outline-dark  btn-responsive camera-front" onclick="lights();">Headlight</a>
                 <a href="#" class="btn btn-outline-dark btn-responsive disabled camera-front" >Off</a>         
                      </div>
                    </div>
                    </div> 
          </div>
        <div class="container main_contents container-fluid">
        <div class="col-sm-12">
            <div class="card text-left">
                    <div class="card-header">
                      3D Image Gallery
                    </div>
                  <div class="gallery col-sm-12 btn-group ">
                  <a data-src="assets/images/gallery_images/<?php echo $is1;?>.jpg" data-fancybox="sprite_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $is1;?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $is2;?>.jpg" data-fancybox="sprite_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $is2;?>.jpg'>
                    </a>
                    <a data-src="assets/images/gallery_images/<?php echo $is3;?>.jpg" data-fancybox="sprite_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $is3; ?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $is4;?>.jpg" data-fancybox="sprite_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $is4; ?>.jpg'>
                  </a>
                </div>
                    
                    <p class="card-text"> 3D images rendered in 3ds Max 2023</p>
                        
                      </div>
                    </div>
  </div>
        <div class="container main_contents container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="3dtitle_sprite"></div>
                <div id="3dsubtitle_sprite"></div>
                <div id="3ddescription_sprite"></div>
                  
                    <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary">Find out more...</a>
                </div>
    
            </div>
          </div>
        </div>
    </div>
    </div>
    
    <div id="coke" style="display: none;">
    <div class="container main_contents container-fluid">
        <div class="row">
          <div class="col-sm-10">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('sprite')">Sprite</a>
    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('pepper')">Dr Pepper</a>
    
                  </li>
                  
                  </ul>
              </div>
              
               
    
    
    
                <div class="card-body">

                  <div id="x3dModelTitle_coke"></div>
                   <div class="model3D">
                    <x3d>
                      <scene>
                        <inline  nameSpaceName="model" mapDEFToId="true" onclick="animatemodel();" url="assets/coke/export/coke_animation2.x3d"></inline>
                      
                      
                      </scene>
    
                    </x3d>
    
                   </div> 
                   <div id="method_coke"></div>
                
                 
            
             
              </div>
            </div> 
          </div>
          
   
          
          
          
          <div class="col-sm-2">
            <div class="card text-left btng">
            <?php echo "</br>"; ?>
            <h2>Button</h2>
            <?php echo "</br>"; ?>
                    
                   <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="animatemodel();">Start</a>
                   <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stop();">Stop</a>
                   <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="front();">Front</a>
                   <a href="#" class="btn btn-outline-dark  btn-responsive camera-front" onclick="back();">Side</a>
                   <a href="#"  class="btn btn-outline-dark btn-responsive camera-front"onclick="light();">Headlight</a>
                  
                
                   <a href="#" class="btn btn-outline-dark btn-responsive disabled camera-front" >Off</a>
                        
                      </div>
                    </div>
                    </div> 
          </div>

        <div class="container main_contents container-fluid">
        <div class="col-sm-14">
            <div class="card text-left">
                    <div class="card-header">
                      3D Image Gallery
                    </div>
                  <div class="gallery col-sm-12 btn-group ">
                  <a data-src="assets/images/gallery_images/<?php echo $ic1;?>.jpg" data-fancybox="coke_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $ic1;?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $ic2;?>.jpg" data-fancybox="coke_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $ic2;?>.jpg'>
                    </a>
                    <a data-src="assets/images/gallery_images/<?php echo $ic3;?>.jpg" data-fancybox="coke_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $ic3; ?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $ic4;?>.jpg" data-fancybox="coke_gallery" data-caption="My 3D Coke Can Render" class="thumbnail" >
                    <img class="card-img-top img-thumbnail"  src='assets/images/gallery_images/<?php echo $ic4; ?>.jpg'>
                  </a> 
                </div>
                    
                    <p class="card-text"> 3D images rendered in 3ds Max 2023</p>
                        
                      </div>
                    </div>
  </div>
        <div class="container main_contents container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="3dtitle_coke"></div>
                <div id="3dsubtitle_coke"></div>
                <div id="3ddescription_coke"></div>

                <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary">Find out more...</a>
              </div>
    
            </div>
          </div>
        </div>
    </div>
    </div>
    
  <div id="pepper" style="display: none;">
    <div class="container main_contents container-fluid">
        <div class="row">
          <div class="col-sm-10">
            <div class="card text-left">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('coke')">Coke</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('sprite')">Sprite</a>
    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:swap('pepper')">Dr Pepper</a>
    
                  </li>
                 
                  </ul>
              </div>
              
                <div class="card-body">
                  <div id="x3dModelTitle_pepper"></div>
                   <div class="model3D">
                    <x3d>
                      <scene>
                        <inline nameSpaceName="modela" mapDEFToId="true"   onclick="animatemodeld();" url="assets/drpepper/export/dr+pepper_an.x3d"></inline>
                      </scene>
    
                    </x3d>
    
                   </div> 
                   <div id="method_pepper"></div>
                


              </div>
            </div> 
          </div>
    
    
    
    
          <div class="col-sm-2">
            <div class="card text-left btng">
            <?php echo "</br>"; ?>
            <h2>Button</h2>
            <?php echo "</br>"; ?>
                    
            <a href="#" class="btn btn-outline-dark btn-responsive camera-front" onclick="animatemodeld();">Start</a>
                    <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopd();">Stop</a>
                  <a href="#" class="btn btn-outline-dark btn-responsive camera-front" onclick="frontd();">Front</a>
                 <a href="#" class="btn btn-outline-dark btn-responsive camera-front" onclick="sided();">Side</a>
                  <a href="#"  class="btn btn-outline-dark btn-responsive camera-front" onclick="lightd();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive disabled camera-front" >Off</a>
                        
                      </div>
                    </div>
                    </div> 
          </div>
      <div class="container main_contents container-fluid">
        <div class="col-sm-12">
            <div class="card text-left">
                    <div class="card-header">
                      3D Image Gallery
                    </div>
                  <div class="gallery col-sm-12 btn-group ">
                  <a data-src="assets/images/gallery_images/<?php echo $id1;?>.jpg" data-fancybox="pepper_gallery" data-caption="My 3D Dr Pepper Render" class="thumbnail" >
                    <img class=" img-thumbnail"  src='assets/images/gallery_images/<?php echo $id1;?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $id2;?>.jpg" data-fancybox="pepper_gallery" data-caption="My 3D Dr Pepper Render" class="thumbnail" >
                    <img class="img-thumbnail"  src='assets/images/gallery_images/<?php echo $id2;?>.jpg'>
                    </a>
                    <a data-src="assets/images/gallery_images/<?php echo $id3;?>.jpg" data-fancybox="pepper_gallery" data-caption="My 3D Dr Pepper Render" class="thumbnail" >
                    <img class="card-img-left img-thumbnail"  src='assets/images/gallery_images/<?php echo $id3; ?>.jpg'>
                  </a>
                  <a data-src="assets/images/gallery_images/<?php echo $id4;?>.jpg" data-fancybox="pepper_gallery" data-caption="My 3D Dr Pepper  Render"  class="thumbnail">
                    <img class=" img-thumbnail"  src='assets/images/gallery_images/<?php echo $id4; ?>.jpg'>
                  </a>  
                </div>
                    
                    <p class="card-text"> 3D images rendered in 3ds Max 2023</p>
                        
                      </div>
                    </div>
  </div>
      <div class="container main_contents container-fluid">
       
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div id="3dtitle_pepper"></div>
                <div id="3dsubtitle_pepper"></div>
                <div id="3ddescription_pepper"></div>
      
                  <a href="https://www.coca-cola.co.uk/brands/dr-pepper" class="btn btn-primary">Find out more...</a>
                </div>
    
            </div>
          </div>
        </div>
    </div>
    </div>
    
    









<div id='more'   style="display: none;">
  <h1>
            Statement of Originality <h1>
            <p>These web pages are submitted as part requirement for the degree of Computing for business and management at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged". 
  </p>
  <a href="http://users.sussex.ac.uk/~np330/IvyPeng_web3D/IvyPeng_web3D/index.php/apiGetData">Reference</a>
  </div>





  <br>
<nav id="footer" class="navbar navbar-expand-sm footer">
  <div class="container">
  <div class="navbar-text float-left copyright">
  <p><span class="align-baseline">&copy Ivy Peng 2023 Web 3D
  Applications </span> </p>
  
  </div>
  <div class="navbar-text social">
      <a href="#"><i class="fa fa-github-square fa-2x fa-pull-
      right"></i></a>
      <a href="#"><i class="fa fa-google-plus-square fa-2x fa-
      pull-right"></i></a>
      <a href="#"><i class="fa fa-twitter-square fa-2x fa-
      pull-right"></i></a>
      <a href="#"><i class="fa fa-facebook-square fa-2x fa-
      pull-right"></i></a>
   </div>
  </div>
</nav>


  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type='text/javascript' src='js/x3dom.js'></script>
  <script type='text/javascript' src='js/custom.js'></script>
  <script type='text/javascript' src='js/gallery_generator.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script  src='js/getJsonData.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script  src='js/bootstrap.min.js'></script>

  <script>
    Fancybox.bind('[data-fancybox="coke"]', {
      //
    }); 
    Fancybox.bind('[data-fancybox="sprite"]', {
      //
    }); 
    Fancybox.bind('[data-fancybox="pepper"]', {
      //
    });    
    Fancybox.bind('[data-fancybox="coke_gallery"]', {
      //
    }); 
    Fancybox.bind('[data-fancybox="sprite_gallery"]', {
      //
    }); 
    Fancybox.bind('[data-fancybox="pepper_gallery"]', {
      //
    }); 
    
    $(document).ready(function(){
      $('[data-toggle="popover"]').popover();   
    });

  </script>

</body>
</html>