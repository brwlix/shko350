<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <style>
        .pcolor {
    width: 100%;
    height: 40px;
    background-color: red;
    border-radius: 20px;
    box-shadow: 0 0 5px #ccc;
    margin: 5%;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.pcode {
    width: 40%;
    height: 40px;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 0 0 5px #ccc;
    float: right;
    text-align: center;
    padding: 10px;
    margin-left: auto;
    margin-right: auto;
}

.palet {
    padding: 5%;
    border-radius: 20px;
    background-color: #fff;
    box-shadow: 0 0 5px #ccc;

}

.userProfileSmall {
    width: 100%;
}

.userphotoCricle {
    width: 25px;
    height: 25px;
    border-radius: 50%;
}

.username {
    padding: 10%;
    margin-left: 15%;
}

.imgU {
    width: 100%;
    border-radius: 50%;
}

.LikeDiv {
    width: 100%;
}

.Liked {
    width: 40%;
    padding-left: 10px;
}

.imglike {
    width: 25px;
    height: 25px;
    margin-left: auto;
    margin-right: auto;
}

.likenum {
    margin-left: 10%;
    padding: 1%;
}

.publikdate {
    text-align: right;
    width: 100%;
    padding-right: 3%;
}

#myInput{
    border: none;
    width: 100%;
    height:100%;
    text-align: center;
    background-color: #fff;
    color: #000;
    font-weight: bold;
}

#myInput:focus, input:focus{
    outline: none;
}

.codColor{
    margin-left: auto;
    margin-right: auto;
}
    </style>
 
</head>
<body>
   
 


  


   

        
   







<section class="bg-light pt-5 pb-5 shadow-sm">
    <div class="container">
       
        <div class="row">
            <!--Item One -->
            <?PHP
  $a = 0;
while($a <10){
    echo'
    <div class="col-lg-4 mb-3 align-items-stretch ">
    

    <div class="palet">
    <div class="userProfileSmall">
    <div class="userphotoCricle d-flex">

    <img src="./img/goc.jpg" alt="" class="imgU">
    <h6 class="username">shko.shwan</h6>
                
    </div> 
    </div>
    <div class="pcolor ">
    <div class="pcode d-flex" id="copycolor"    >
    <input type="text" id="myInput"  value="#3T4E5G">
    <img id="myImg1" src="./img/copy.png" alt="" class="imglike like_cont1" onclick="myfub()" >
  
    
    </div>


   
    </div>



    <div class="pcolor"><div class="pcode"><h6>#3T4E5G</h6></div></div>
    <div class="pcolor"><div class="pcode"><h6>#3T4E5G</h6></div></div>
    <div class="pcolor"><div class="pcode"><h6>#3T4E5G</h6></div></div>
   
    <div class="LikeDiv d-flex">

    <div class="Liked d-flex">

    <a class="like-anchor like-action" id="anchor" href="#">
  <img id="myImg" src="./img/likeblack.png" alt="" class="imglike like_cont"  >
</a> 

<strong class="likecount likenum">0</strong> 

    </div> 


    <div class="publikdate">
    <h6 class="">yastrday</h6>

    </div>
              
    </div> 

            </div>
            </div>

    
    ';

    $a++;

}
  
  ?>
    
          
          
        </div>
    </div>
</section>



</body>
</html>