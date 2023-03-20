 <?php

$username =  $_POST=['username'];
$pass=    $_POST=['pass'];

$submit=  $_POST=['sub'];

$conn= new  mysqli('localhost','root','','web');


if ($conn->connect_error){
echo "حدث خطأ في الاتصال". mysqli_connect_error() ;

}
else{
  $sql = $conn->prepare("INSERT INTO users(username,pass) 
  VALUES (username,pass)");

$sql-> execute();
echo "users successfully";
$sql->close();
$conn->close();

}
// $select_myd=mysqli_select_db("web",$conn);

// if(!$select_myd){
//   echo ("error".mysqli_connect_error());
// }

// if(isset($_POST['sub']))
// {
//   echo $username.'' .$pass;

// echo "تم ادخال البيانات";



?>

<!DOCTYPE html>

<html lang="">
<head>
<title>مكتبة اونلاين</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
 

  
  body{

    background-image: url(images/demo/gallery/31.webp);
    background-size: cover;
    background-attachment: fixed;
  }
</style>


</head>
<body id="top">
  <div class="row">
  <section id="ctdetails" class="hoc clear"> 
      <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong> للتواصل عبر الرقم:</strong>+967717762657</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>للتواصل عبر الايميل:</strong><a href="email=alrashdyasmt578@gmail.com"> alrashdyasmt578@gmail.com</a> </span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> sat. - thu.:</strong> 08.00am - 18.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>زورونا عبر الموقع</strong> Directions to <a href="#">our location</a></span></div>
      </li>
    </ul>
     </section>
</div>
<div class="head">
  <header id="header" class="hc clear">
    
    <div id="logo" class="fl_left"> 
      
      <h1><a href="index.php">مكتبة اونلاين</a></h1>
      </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li class="active"><a href="index.php">الصفحة الرئيسية</a></li>
        <li><a class="drop" href="#">تصفح هنا</a>
          <ul>
            <li><a href="pages/gallery.html">القران الكريم</a></li>
            <li><a href="pages/full-width.html">السيرة النبوية</a></li>
            <li><a href="pages/sidebar-left.html">كتب التاريخ</a></li>
            <li><a href="pages/sidebar-right.html">الشعر العربي</a></li>
            <li><a href="pages/basic-grid.html">قصص وروايات</a></li>
              <li><a href="pages/font-icons.html">كتب المعاجم</a></li>
          </ul>
        </li>
        
        <li><a href="pages/about_us.html">عن المكتبة</a></li>
        <li><a href="#">اعمالنا</a></li>
       
      </ul>
         </nav>
        
  </header></div>
  <div id="pageintro" class="hoc clear"> 
     <article class="art">
      
      <h3 class="heading">المكتبة الالكترونية</h3>
      
      
    </article>
    </div>
 <!-- </div> -->

    <div class="bod">

 <form class="login"> 
  <div>
    <div class="log">
      <center>LOG IN</center>

       <h1 class="log">  اذا تريد  الدخول كعميل سجل اسم المستخدم وكلمة السر من هنا 
    </h1></div>
    <br>
      <form class="" action="index.php" method="GET">
    <br>
    <br>
          
          <input class="input" type="text" name="username" placeholder="Name" id="username"><br><br>
          <input class="input" type="text" name="pass" placeholder="password"id="pass"><br><br>
          <input class="btn" type="submit" value="send" name="sub" id="sub"> <a  gardent href="indexhtml"></button></a>  </form>
    </div>
   </form></div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
     <section id="services">
      <div class="sectiontitle">
        <p class="log">اهلا وسهلا بك في المكتبة  الالكترونية</p>
        <p class="log">تصفح الكتب المناسبة لك من هنا</p>
      </div>
      <ul class="nospace group grid-3">
          <li class="one_third">
              <article><a href="pages/gallery.html">
            
                          <img src="images/demo/gallery/01.jpg" alt="">
                       </a><p class="g">القران الكرريم</p>
                         </article>
            </li>
              <li class="one_third">
               <article>  <a href="pages/full-width.html">   
            
                    <img src="images/demo/inde.jpg" alt="">
                    </a> <p class="g">السيرة النبوية</p> </article>
           </li>
        <li class="one_third">
  
          <article><a href="pages/sidebar-left.html">
                
                 <img src="images/demo/gallery/t.jpg" alt="">
                 <footer><a href="#">More Details &raquo;</a></footer>
                 </a><p class="g">كتب التاريخ</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="pages/sidebar-right.html">
            
            <img src="images/demo/gallery/s.jpg" alt="">
          </a>  <p class="g">الشعر العربي  </p>
           

            </article>
        </li>
        <li class="one_third">
          <article><a href="pages/basic-grid.html">
        
            <img src="images/demo/gallery/q.jpg" alt="">
            <p class="g">قصص وروايات</p>
          </a>
          </article>
        </li>
        <li class="one_third">
          <article><a href="pages/font-icons.html"> 
            <img src="images/demo/gallery/m.png" alt="">
             </a>  
             <p class="g">المعاجم العربية</p>
             </article>
        </li>
      </ul>
    </section>
       <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
  <p class="fl_left">Copyright &copy; alrashdyasmt578@gmail.com - <a href="#"></a></p>
    <p class="fl_right">Template by <a target="_blank" href="#" title="Free Website Templates">OSSAMA ALRASHDY</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
</body>
</html>

