<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/font-awesome.min.css">
</head>

<body>
<div class="nav">
   <a><i class="fa fa-bars"> EgiptTrains-قطارات مصر</i></a>
</div>

<?php
include "createAll.php";

 $page = (isset($_GET['page']))? $_GET['page'] : "index.php";

 if($page == "index.php")
 {
?>
    <!-- Start Form Page -->

  <div class="cont" align="center">

  	<form action="?page=result.php" method="POST" >
  	     <input type="text" name="t1" id ="t1" placeholder="...محطة المغادره" autocomplete="off">
         <div class="before" id="before"></div>
         <div class="lis" id="lis">
          <ul class="ul1" id="ul1">
            <li>القاهرة</li>
            <li>اسيوط</li>
            <li>اسوان</li>
            <li>قنا</li>
            <li>سوهاج</li>
            <li>طما</li>
            <li>نجع حمادي</li>
            <li>منقباد</li>
            <li>منفلوط</li>
            <li>القوصيه</li>
            <li>ديروط</li>
            <li>ديرمواس</li>
            <li>ملوي</li>
            <li>ابوقرقاص</li>
            <li>ابوتشت</li>
            <li>سمالوت</li>
            <li>المنيا</li>
            <li>العياط</li>
            <li>الوسطى</li>
            <li>الجيزه</li>
            <li>البدرشيد</li>
            <li>رمسيس</li>
            <li>القليوبيه</li>
            <li>الاسكندرية</li>
            <li>الأقصر</li>
            <li>القراشية</li>
            <li>القصاصين</li>
            <li>طهطا</li>
            <li>بني مزار</li>
            <li>الفشن</li>
            <li>ابوقرقاص</li>
            <li>ببا</li>
            <li>بني سويف</li>
            <li>مطاي</li>
            <li>مغاغا</li>
            <li>المنشأه</li>
          </ul>
         </div>
  	     <input type="text" name="t2" id ="t2" placeholder="...محطة الوصول" autocomplete="off">  
         <div class="before" id="before2"></div>
         <div class="lis" id="lis2" scroll="scroll">
           <ul class="ul1" id="ul2">
            <li>القاهرة</li>
            <li>اسيوط</li>
            <li>اسوان</li>
            <li>قنا</li>
            <li>سوهاج</li>
            <li>طما</li>
            <li>نجع حمادي</li>
            <li>منقباد</li>
            <li>منفلوط</li>
            <li>القوصيه</li>
            <li>ديروط</li>
            <li>ديرمواس</li>
            <li>ملوي</li>
            <li>ابوقرقاص</li>
            <li>ابوتشت</li>
            <li>سمالوت</li>
            <li>المنيا</li>
            <li>العياط</li>
            <li>الوسطى</li>
            <li>الجيزه</li>
            <li>البدرشيد</li>
            <li>رمسيس</li>
            <li>القليوبيه</li>
            <li>الاسكندرية</li>
            <li>الأقصر</li>
            <li>القراشية</li>
            <li>القصاصين</li>
            <li>طهطا</li>
            <li>بني مزار</li>
            <li>الفشن</li>
            <li>ابوقرقاص</li>
            <li>ببا</li>
            <li>بني سويف</li>
            <li>المنشأه</li>
            <li>مطاي</li>
            <li>مغاغا</li>
          </ul>
        </div>
        <i class="fa fa-bars fspecial" id="showall"></i>
  	    <input type="text" name="t3" id ="t3" disbled placeholder="...الدرجة المطلوبة" autocomplete="off">
        <div id="vip" onblur="this.style.display = 'none'; ">
          <ul>
            <li dir="rtl">عرض جميع الدرجات <input type="radio" name="degree" value="عرض جميع الدرجات" id="r5"></li>
            <hr>
            <li dir="ltr">VIP <input type="radio" name="degree" value="VIP" id="r1"></li><hr>
            <li >مكيف<input type="radio" name="degree" value="مكيف" id="r2"></li><hr>
            <li >نوم<input type="radio" name="degree" value="نوم" id="r3"></li><hr>
            <li ><input type="radio" name="degree" value="اولى وثانية مكيفة" id="r4"> اولى وثانية مكيفة</li><hr>
            <li dir="rtl">أكس بريس بعربيات مطوره(ركاب)ء<input type="radio" value="أكسبريس بعربيات مطوره(ركاب)ء" name="degree" id="r4"></li>
          </ul>
        </div>
        
        <input type="submit" name="submit" id ="submit" value="عرض القطارات">
  	</form>
  </div>

  <!-- End Form Page -->
  <?php
}
else // if page == result
{
  /* Recive Data From the Form by POST Method */

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $leaving = $_POST['t1'];
    $arriving = $_POST['t2'];
    $degree = $_POST['t3'];
    //$indd = $db->ind;
    $rows = $db->getAll("SELECT * FROM train WHERE degree = ? AND leavingStation =? AND arrivingStation = ?",array($degree,$leaving,$arriving));
    $allDegs = $db->getAll("SELECT * FROM train WHERE leavingStation =? AND arrivingStation = ?",array($leaving,$arriving));
      ?>
      <div class="cont">
        <?php
 /**************************** if select specific degree ***************************************/
       
        if($degree !== "عرض جميع الدرجات" && $degree !== '')
        {
           if($leaving == $arriving && $arriving !== '')
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>من فضلك راجع ادخال بياناتك فهذه نفس المحطة</h2>
                  </div></div>";
                  header("refresh:4;url='?page=index.php'");
            }
            else if(empty($leaving) || empty($arriving) || empty($degree))
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لم يتم تحديد البيانات بشكل جيد</h2>
                  </div></div>";
                  header("refresh:4;url='?page=index.php'");
            }
          else if(! empty($rows))
          {

            if(empty($leaving) || empty($arriving) || empty($degree))
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لم يتم تحديد البيانات بشكل جيد</h2>
                  </div></div>";
                  header("refresh:4;url='?page=index.php'");
            }
          
            else
            {
                echo "<div class='headCont'>
                      <div class='headd'><h2>
                       من $leaving الي  $arriving يوجد ".count($rows) ." قطار </h2>
                      </div></div>";
              ?>
              <div class="table-responsive">
                <table class="table main-table table-bordered" cellspacing="3px">
                  <tr>
                    <td> الدرجة  <i class="fa fa-tag"></i></td>
                    <td> السرعة  <i class="fa fa-compass"></i></td>
                    <td> المدة  <i class="fa fa-safari"></i></td>
                    <td> وصول  <i class="fa fa-clock-o"></i></td>
                    <td> قيام  <i class="fa fa-clock-o"></i></td>
                    <td> #قطار  <i class="fa fa-train"></i></td>
                  </tr>
                  <?php 
                    foreach ($rows as $row) {
                      echo "<tr>
                            <td>".$row['degree']."</td>
                            <td>".$row['speed']."</td>
                            <td>".$row['period']."</td>
                            <td>".$row['arrivingTime']."</td>
                            <td>".$row['leavingTime']."</td>
                            <td>".$row['name']."</td>
                           </tr>";
                         }
                }
              ?>
            </table>
         </div>
      </div>
      <?php 
      }else {echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لا يوجد قطارات بهذه الدرجة <p>ولكن سيضاف قطار تلقائيا بهذه المواصفات الان</p></h2>
                  </div></div>";

                  // insert data dynamically if not exist for these stations by the specific degree.

                       if($degree == "VIP") $speed = "180 كم/س";
                  else if($degree == "أكسبريس بعربيات مطوره(ركاب)ء") $speed = "100 كم/س";
                  else if($degree == "اولى وثانية مكيفة") $speed = "130 كم/س";
                  else if($degree == "نوم") $speed = "200 كم/س";
                  else if($degree == "مكيف") $speed = "1650 كم/س";
                  $q="INSERT INTO train(name,speed,degree,leavingStation,arrivingStation,leavingTime,arrivingTime,period)
                    VALUES(?,?,?,?,?,?,?,?)";
                  $db->add_Rem_updat_Row($q,array("Lhk896",$speed,$degree,$leaving,$arriving,"10:30 م","1:00ص","2.5 س"));
                    //$indd++;
                  header("refresh:4;url='?page=index.php'");
                }
  } 
  /**************************** if select show All degrees ***************************************/

  else
  {
    if(! empty($allDegs)  ){

            if(empty($leaving) || empty($arriving) || $degree == '')
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لم يتم تحديد البيانات بشكل جيد</h2>
                  </div></div>";
                  header("refresh:4;url='?page=index.php'");
            }
            else if($leaving == $arriving)
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>من فضلك راجع ادخال بياناتك فهذه نفس المحطة</h2>
                  </div></div>";
                  header("refresh:4;url='?page=index.php'");
            }
            else
            {
                echo "<div class='headCont'>
                      <div class='headd'><h2>
                       من $leaving الي  $arriving يوجد ".count($allDegs) ." قطار بمختلف درجاتها </h2>
                      </div></div>";
              ?>
              <div class="table-responsive">
                <table class="table main-table table-bordered" cellspacing="3px">
                  <tr>
                    <td> الدرجة  <i class="fa fa-tag"></i></td>
                    <td> السرعة  <i class="fa fa-compass"></i></td>
                    <td> المدة  <i class="fa fa-safari"></i></td>
                    <td> وصول  <i class="fa fa-clock-o"></i></td>
                    <td> قيام  <i class="fa fa-clock-o"></i></td>
                    <td> #قطار  <i class="fa fa-train"></i></td>
                  </tr>
                  <?php 
                    foreach ($allDegs as $allDeg) {
                      echo "<tr>
                            <td>".$allDeg['degree']."</td>
                            <td>".$allDeg['speed']."</td>
                            <td>".$allDeg['period']."</td>
                            <td>".$allDeg['arrivingTime']."</td>
                            <td>".$allDeg['leavingTime']."</td>
                            <td>".$allDeg['name']."</td>
                           </tr>";
                         }
                }
              ?>
            </table>
         </div>
      </div>
      <?php 
      }else {
        if(empty($leaving) || empty($arriving) || $degree == '')
            {
              echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لم يتم تحديد البيانات بشكل جيد</h2>
                  </div></div>";
                  header("refresh:3;url='?page=index.php'");
            }
            else
                { echo "<div class='headCont'>
                  <div class='headd'>
                  <h2>لا يوجد قطارات </h2>
                  </div></div>";
                  header("refresh:2;url='?page=index.php'");
                }
            }
  }           

  }
}
  ?>

<script src="main.js"></script>
</body>

</html>