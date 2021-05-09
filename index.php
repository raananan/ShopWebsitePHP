<html>
<head>
    <title>Shopping Project</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">    <script type="text/javascript" src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <iframe id="register_form" src="register.html"  name="cxv"></iframe>
   <header class="container_fluid">
    <div class="container">
       <div id="regdiv">
          <form id="regform">
             <label id="IDLabel">תעודת זהות</label>        
             <input id="nmn" style="height:30px;margin-top:5px" type="text" name="ID">
             <br><br> <br> <br> <br> 
             <input type="submit" onclick="showUser(nmn.value)" value="אישור">
           </form>
       </div>
       
    <div class="burger">
      <i class="fa fa-bars" onclick="showlist()"></i>
    </div>
    <div class="logo"  style="height: 8%">  
       <p id="name" onclick="sign_in()">התחברות</p>
       <span id="myspan">/</span>
       <p1 id="p1" onclick="register()">הרשמה</p1>
       <span id="userlogo" onclick="sign_in()">&#9786;</span>
    </div>
    <div  class="letters">
       <h1 id="HeaderWeb">Shopping Website</h1>
    </div>
    <div class="cart" onclick="showCart(nmn.value)">
        <p id="sum"></p>
       <span  style="font-size:30px;">&#128722;</span>
    </div>
    </div>
    </header>
        <nav id="mynav" class="container_fluid">
           <div class="container">
              <ul>
                  <div class="dropdown">
                    <li onclick="getall(1)">חשמל
                      <div class="drop_content">
                         <a href="#" onclick="showItem(1)">מכונות כביסה</a>
                         <a href="#" onclick="showItem(8)">טלוויזיות</a>
                         <a href="#" onclick="showItem(7)">מקררים</a>
                         <a href="#" onclick="showItem(9)">טלפונים ניידים</a>
                         <a href="#" onclick="showItem(10)">מזגנים</a>
                      </div>
                     </li>
                  </div>
                <div class="dropdown">
                    <li onclick="getall(5)">קוסמטיקה
                      <div class="drop_content">
                       <a href="#" onclick="showItem(22)">איפור</a>
                       <a href="#" onclick="showItem(21)">בשמים</a>
                      </div>
                     </li>
                  </div>
                <div class="dropdown">
                    <li onclick="getall(2)">לבית
                      <div class="drop_content">
                       <a href="#" onclick="showItem(2)">שולחן</a>
                       <a href="#" onclick="showItem(3)">שולחן לסלון</a>
                       <a href="#" onclick="showItem(4)">כסאות</a>
                       <a href="#" onclick="showItem(5)">מדפים</a>
                       <a href="#" onclick="showItem(6)">מראות</a>
                      </div>
                     </li>
                  </div>
                <div class="dropdown">
                    <li onclick="getall(6)">ספורט
                      <div class="drop_content">
                       <a href="#" onclick="showItem(20)">משקפיים</a>
                       <a href="#" onclick="showItem(19)">כדור</a>
                      
                      </div>
                     </li>
                  </div>
                <div class="dropdown">
                    <li onclick="getall(3)">ביגוד
                      <div class="drop_content">
                       <a href="#" onclick="showItem(13)">עניבות</a>
                       <a href="#" onclick="showItem(11)">חולצות</a>
                       <a href="#" onclick="showItem(12)">גרביים</a>
                      </div>
                     </li>
                  </div>
               <div class="dropdown">
                    <li onclick="getall(4)">נעליים
                      <div class="drop_content">
                     
                          <a onclick="showItem(15)">נעליים</a>
                     
                      </div>
                     </li>
                  </div>
              </ul>
           </div>
        </nav>
          
   <div class="strip container_fluid">
       <span id="x_logo" onclick="cencel_sign_in_div()">&#10005;</span>
     <div class="container">
        <img class="mySlides" src="Pics/clothes.webp" height="50%" style="width:100%;">
        <img id="myimg2" class="mySlides" src="Pics/living-room-1835923__340.webp" height="50%" style="width:100%;">
        <img class="mySlides" src="Pics/microwave.webp" height="50%" style="width:100%">
        <img class="mySlides" src="Pics/perfume.jpg" height="50%" style="width:100%">
        <img class="mySlides" src="Pics/shoe.jpg" height="50%" style="width:100%">
        <img class="mySlides" src="Pics/sport.jpg" height="50%" style="width:100%">       
       </div>
    </div>                       
     <div class="container">
       <div id="data">
         </div>
       </div>                  
   <footer class="container_fluid">
     <div class="container">Raanan Heinberg</div>
    </footer>
    <script>
        sum=0;
        function save(clicked_id){ 
            if(document.getElementById("name").innerHTML=="התחברות"){
            alert('בבקשה הרשם למערכת כדי לרכוש');
          }
            else{
            alert(clicked_id+"  "+nmn.value);
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.open("GET","purchase.php?q="+clicked_id+ "&r="+nmn.value,true);
             xmlhttp.send();
             sum++;
             document.getElementById("sum").innerHTML=sum;
            }
        }
        
        function showlist()
        {
            if(document.getElementById("mynav").style.display == "none"){
            document.getElementById("mynav").style.display = "block";
            document.getElementsByClassName("drop_content").style.display="none";
            }
            else{
                document.getElementById("mynav").style.display = "none";
            document.getElementsByClassName("drop_content").style.display="block";
            }
        }
        
        function sign_in(){
            
            document.getElementById("regdiv").style.display = "block";
             document.getElementById("x_logo").style.display = "block";
        }
          function register(){
            
            document.getElementById("register_form").style.display = "block";
             document.getElementById("x_logo").style.display = "block";
        }
        function cencel_sign_in_div(){
            document.getElementById("regdiv").style.display = "none";
            document.getElementById("register_form").style.display = "none";
             document.getElementById("x_logo").style.display = "none";
        }
        
        $(document).ready(function(){
          $("p").mouseover(function(){
          $("p").css("text-decoration", "underline");
        });
          $("p").mouseout(function(){
          $("p").css("text-decoration", "none");
          });
        });
        $(document).ready(function(){
          $("p1").mouseover(function(){
          $("p1").css("text-decoration", "underline");
         });
          $("p1").mouseout(function(){
          $("p1").css("text-decoration", "none");
         });
        });
        
       var myIndex = 0;
       carousel();

       function carousel() {
       var i;
       var x = document.getElementsByClassName("mySlides");
       for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000);
    }
   
               
      function showItem(str) {
       if (str == "") {
        document.getElementById("data").innerHTML = "";
        return;
      }  
       else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
         document.getElementById("data").innerHTML = this.responseText;
        }
      };
        xmlhttp.open("GET","orders.php?q="+str,true);
        xmlhttp.send();
       }
      }
           function showCart(str) {
       if (str == "") {
        alert("יש להכנס למעכת כדי להציג את עגלת הקניות");
        return;
      }  
       else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
         document.getElementById("data").innerHTML = this.responseText;
        }
      };
        xmlhttp.open("GET","mycart.php?q="+str,true);
        xmlhttp.send();
       }
      }
        
       function showUser(str) {
         if (str == "") {
           document.getElementById("data").innerHTML = "";
           return;
         }    
           else {
              var xmlhttp = new XMLHttpRequest();
              xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
              document.getElementById("name").innerHTML = this.responseText;
            }
          };
              xmlhttp.open("GET","getuser.php?q="+str,true);
              xmlhttp.send();
              document.getElementById("p1").style.display="none";
              document.getElementById("myspan").style.display="none";
              document.getElementById("userlogo").style.display="none";
              document.getElementById("regdiv").style.display="none";
              document.getElementById("x_logo").style.display="none";
           }
         }
    function getall(str) {
      if (str == "") {
         document.getElementById("data").innerHTML = "";
         return;
  } 
      else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("data").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getall.php?q="+str,true);
    xmlhttp.send();
  }
}
    getall(1);
</script>

</body>
</html>