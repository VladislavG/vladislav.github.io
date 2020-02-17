
<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style>
  
  body
  {


    overflow:hidden;
    background:#291d1d url("bodybg.jpg") center top no-repeat;
    background-size:auto;
    margin:0 auto;
  }
  
  .content
  {
    display:block;
    width:1200px;
    min-width:320px;
    min-height:100vh;
    margin:0 auto;

  }
  
  #oblaka-block
  {
  display:block;
  width:1200px;
  height:70px;
  margin:0 auto;
  }
  
  #oblako
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-30px;
    margin-left:-200px;
    background:url("oblako.png") left top;
    background-size:cover;

  }
  
  #oblako2
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-37px;
    margin-left:-230px;
    background:url("oblako.png") left top;
    background-size:cover;
  }
  
  #oblako3
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-30px;
    margin-left:-170px;
    background:url("oblako.png") left top;
    background-size:cover;
  }
  
  
  
  #oblako4
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-30px;
    margin-left:-220px;
    background:url("oblako.png") left top;
    background-size:cover;

  }
  
  #oblako5
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-37px;
    margin-left:-180px;
    background:url("oblako.png") left top;
    background-size:cover;
  }
  
  #oblako6
  {
    display:inline-block;
    position:relative;
    widtH:100px;
    height:100px;
    top:-30px;
    margin-left:-100px;
    background:url("oblako.png") left top;
    background-size:cover;
  }
  
  #velo{
    display:block;
    position: relative;
    width:100px;
    height:100px;
    display:block;
    
    margin-right:-400px;
    float:right;
    margin-top:170px;
    margin-bottom:0;
    background:url("velo.png") no-repeat;
    background-size:cover;
    cursor:pointer;
  }
  
  
  #carred{
    display:block;
    position: relative;
    width:400px;
    height:150px;
    display:block;
    
    margin-left:-50px;
    
    margin-top:260px;
    background:url("car.png") no-repeat;
    background-size:cover;
    cursor:pointer;
  }
  

  
  
    #carwhite{
    position: relative;
    width:330px;
    height:120px;
    display:block;
    float:left;
    margin-left:0px;
    margin-top:200px;
    background:url("car2.png") no-repeat;
    background-size:cover;
    cursor:pointer;
  }
  

  
  
  #musor
  {
    display:block;
    position:relative;
    width:30px;
    height:30px;
    background:url("musor.png");
    background-size:contain;
    margin-left:-400px;
    top:240px;
    animation-name: rotation;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
  }


@keyframes rotation {
    0% {
        transform:rotate(0deg);
    }
    100% {
        transform:rotate(360deg);
    }
}
 
    #button-block
    {
        display:block;
        width:1200px;
        height:100px;
        margin: 40px auto;
        
    }
    
    .column
    {
        display:block;
        width:600px;
        floaT:left;
    }
    
    .column .title
    {
        display:block;
        width:200px;
        margin:20px auto 0;
        font:21px arial;
        color:#fff;
        text-align:center;
        background:#23b197;
        padding:13px;
        border-radius:30px;
    }
    
    #scorered
    {
        display:block;
        width:600px;
        height:10px;
        text-align:center;
        font:24px arial;
        color:#111;
    }
    
    #scorewhite
    {
        display:block;
        width:600px;
        height:10px;
        text-align:center;
        font:24px arial;
        color:#111;
    }

    
    .upravlenie
    {
        display:block;
        width:1200px;
        height:25px;
        padding:12px;
        text-align:center;
        font:21px arial;
        color:#222;
        margin-top:60px;
    }
    
   
    
  </style>
</head>


<body >




<div class="content">

   <div id="oblaka-block">
   <div id="oblako"></div> <!-- Блок облака 1 -->
   <div id="oblako2"></div> <!-- Блок облака 2 -->
   <div id="oblako3"></div> <!-- Блок облака 3 -->
   <div id="oblako4"></div> <!-- Блок облака 1 -->
   <div id="oblako5"></div> <!-- Блок облака 2 -->
   <div id="oblako6"></div> <!-- Блок облака 3 -->
   </div>
   <div id="velo" onmouseenter="helloman();"></div>
   <div id="musor"></div>
   
   <div id="carwhite" onmouseenter="clacson();"></div> <!-- Белая машина -->
   <div id="carred" onmouseenter="clacson();"></div> <!-- Красная машина -->
   
  
  
  <!-- Блок кнопок -->
  <div id="button-block">
  <div class="upravlenie">
  Управление: белая машина клавиша Z | серая машина клавиша &#8594;
  </div>
  <div class="column">
  <span class="title">Кабриолет</span>
  <p id="scorewhite">Очков - 0</p>
  </div>
  
  <div class="column">
  <span class="title">Lancer X</span>
  <p id="scorered">Очков - 0</p>
  </div>
  
  </div>
  
</div>



  <script>
  
       var sum = 0;
       var sums = 0;
       
       var num = 0;
       var nums = 0;
       
       var pobedawhite = 0;
       var pobedared = 0;
       
       addEventListener("keyup", function(event) 
       {
        
       if (event.keyCode == 90)
       {
       sum = num+5;
       num = sum;
       document.getElementById("carred").style.left = num +"px";
       
       
       if(sum == 850 )
       {
       document.getElementById("carred").style.left = 0;
       document.getElementById("carwhite").style.left = 0;
       pobedared = pobedared + 1;
       scorered.innerHTML = "Очков - "+pobedared;
       
       sum = 0;
       sums = 0;
       num = 0;
       nums = 0;
       }
       }
  });
  
  
   addEventListener("keyup", function(event) {
      if (event.keyCode == 39)
      {
      sums = nums+5;
      nums= sums;
      
       document.getElementById("carwhite").style.left = nums +"px";
       
       if(sums == 850 )
       {
       document.getElementById("carwhite").style.left = 0;
       document.getElementById("carred").style.left = 0;
       pobedawhite = pobedawhite + 1;
       scorewhite.innerHTML = "Очков - "+pobedawhite;
       
       sum = 0;
       sums = 0;
       num = 0;
       nums = 0;
       }
       }
  });
  
  
       
       var bb = setInterval(oblako, 60);
       var bbb = setInterval(musor, 30);
       var bbbb = setInterval(velo, 30);
       
       
       
       
       
      var nummusor = 0;
      function musor()
      {
        nummusor = nummusor+1;
        document.getElementById("musor").style.left = nummusor +"px";
        
        if(nummusor > 2000)
        {
        document.getElementById("musor").style.left = -400 +"px";    
        nummusor = 0;
        }
        
      }
  
      var oblako1 = 0;
      var oblako2 = 0;
      var oblako3 = 0;
      var oblako4 = 0;
      var oblako5 = 0;
      var oblako6 = 0;
      function oblako()
      {
        oblako1 = oblako1+1;
        oblako2 = oblako2+1.3;
        oblako3 = oblako3+1.8;
        oblako4 = oblako4+1.2;
        oblako5 = oblako5+1.5;
        oblako6 = oblako6+1.7;
        document.getElementById("oblako").style.left = oblako1 +"px";
        document.getElementById("oblako2").style.left = oblako2 +"px";
        document.getElementById("oblako3").style.left = oblako3 +"px";
        document.getElementById("oblako4").style.left = oblako4 +"px";
        document.getElementById("oblako5").style.left = oblako5 +"px";
        document.getElementById("oblako6").style.left = oblako6 +"px";
        
        if(oblako1 > 1200)
        {
        document.getElementById("oblako").style.left = -300 +"px";
        document.getElementById("oblako2").style.left = -300 +"px";
        document.getElementById("oblako3").style.left = -300 +"px";
        document.getElementById("oblako4").style.left = -300 +"px";
        document.getElementById("oblako5").style.left = -300 +"px";
        document.getElementById("oblako6").style.left = -300 +"px"; 
        oblako1 = 0;
        oblako2 = 0;
        oblako3 = 0;
        oblako4 = 0;
        oblako5 = 0;
        oblako6 = 0;   
        }
        
        
      }
      
     
    
    var velo = 0;
      function velo()
      {
        velo = velo+5;
        document.getElementById("velo").style.right = velo +"px";
        
        if(velo > 2000)
        {
        document.getElementById("velo").style.right = -100 +"px";    
        velo = 0;
        }
        
      }
    
    
   
    function clacson()
    {
        var audio = new Audio('clacson.mp3');
        audio.play();
        
        
        var audio = new Audio('peregazovka.mp3');
        audio.play();
        
    }
    
    
    function helloman()
    {
        var audio = new Audio('hello.mp3');
        audio.play();
    }
    
    
 
    
    

  </script>



</body>

</html>





