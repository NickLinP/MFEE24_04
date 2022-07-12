<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>

    <!-- 導覽列 -->
    <link type="text/css" rel="stylesheet" href="css/demo.css" />
    <link type="text/css" rel="stylesheet" href="css/loading.css" />
    <link type="text/css" rel="stylesheet" href="../dist/mmenu.css" />
    <link type="text/css" rel="stylesheet" href="./buttonn.css" />

    
    <!-- icon -->
    <link rel="icon" href="img/Sogbu Restaurant Logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
        
    <link rel="stylesheet" href="./css/carousel.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- <link rel="stylesheet" href="styles.css" /> -->
    
    <!-- 導覽列 nclude mmenu files -->
    <link type="text/css" rel="stylesheet" href="./mmenu/demo.css" />
    <link type="text/css" rel="stylesheet" href="./dist/mmenu.css" />
    <!-- mmenu scripts -->
    <script src="./dist/mmenu.js"></script>
    
    <!-- 輪播圖 -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic" rel="stylesheet" />

   

<!-- 
    <script>
        (function (d) {
            var config = {
                kitId: 'wfy1sxb',
                scriptTimeout: 3000,
                async: true
            },
                h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
        })(document);
    </script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />




</head>

<body>

<!-- 
    場地格局設置滿版 
    多設計一個scroll down button?
-->


<div id="frontpage">
        <div id="page">
            <br>
            <div id="search-menu">
              <div class="wrapper">
                  <!-- <form id="form" action="#" method=""><input id="popup-search" 
                    type="text" name="u" placeholder="Type here to search" /> -->
                    
                   
    <form action="search.php" method="POST">
    <input type="text" name ="search" placeholder="Search">

                    <button id="popup-search-button" type="submit"  name="submit-search">
                    <i class="fas fa-search"></i></button></form>
              </div>
              </div>
         
<!-- 搜尋用 -->
        
<div class="article-container " id="frontpage" style="display: none">
    <?php
        $sql = "SELECT * FROM article";
        $result = mysqli_query($conn,$sql);
        $queryResults = mysqli_num_rows($result);

        if( $queryResults > 0){
            while ($row = mysqli_fetch_assoc($result)){
                echo "<div class='article-box'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                    <p>".$row['a_date']."</p>
                    <p>".$row['a_author']."</p>
                </div>";

            }
        }

        ?>
</div>


            <!-- 導覽列 -->
            <div id="header">
             
                <a href="#menu"><span></span></a>

               <img class="logo" src="img/LOGO.png" alt="" width="100vh">
          
                <embed class="icon" src="img/facebook.svg" width="40vh"/>
                
              <i class="fas fa-search icontwo" id="search-icon" ></i>

        </div>
        </div>

       

        <nav id="menu"> 
            <ul>
                <li><a href="index.php">首頁</a></li>
                <li><a href="#/">展場介紹</a></li>
                <li><a href="#/">展場申請</a></li>
                <li><a href="#/">詳細展覽</a></li>
                <li><a href="#/">咖啡輕食</a></li>
                <li><a href="#/">網路商店</a></li>
                <li><a href="#/">交通資訊</a></li>
            </ul>
        </nav>

        
        <!-- mmenu scripts -->
        <script src="../dist/mmenu.js"></script>
        <script>
            document.addEventListener(
                "DOMContentLoaded", () => {
                    new Mmenu("#menu", {
                        "offCanvas": {
                            "position": "right"
                        },
                        "theme": "light"
                    });
                }
            );
        </script>
      
      </div>

     

        <!-- 內文 -->

        <!-- 輪播圖 -->
        <div class="content">
        <div class="mt-5 mb-5 ">
        <main class="main-content">
            <section class="slideshow">
              <div class="slideshow-inner">
                <div class="slides">
                  <div class="slide is-active ">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">當期展覽<br>
                          
                        </div>
                        <div class="text">
                          <p>紅林 x 朋 丁pon ding x Hotel SHE</p>
                        </div> 
                        <a href="#" class="btn">
                          <span class="btn-inner">Learn More</span>
                        </a>
                      </div>
                    </div>
                    <div class="image-container"> 
                      <img src="img/展覽01.jpg" alt="" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">展場介紹</div>
                        <div class="text">
                          <p>構築展現自己真實一面的工作室</p>
                        </div> 
                        <a href="#" class="btn">
                          <span class="btn-inner">Learn More</span>
                        </a>
                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/展覽02.png" alt="" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">網路商店</div>
                        <div class="text">
                          <p>在家也能建立風格美學場域</p>
                        </div> 
                        <a href="#" class="btn">
                          <span class="btn-inner">Learn More</span>
                        </a>
                      </div>
                    </div>
                    <div class="image-container">
                      <img src="img/展覽03.jpg" alt="" class="image" />
                    </div>
                  </div>
                  <div class="slide">
                    <div class="slide-content">
                      <div class="caption">
                        <div class="title">咖啡輕食</div>
                        <div class="text">
                          <p>在美的領域中滿足味蕾</p>
                        </div> 
                        <a href="#" class="btn">
                          <span class="btn-inner">Learn More</span>
                        </a>
                      </div>
                    </div>
                    <div class="image-container"> 
                      <img src="img/展覽04.jpg" alt="" class="image" />
                    </div>
                  </div>
                </div>
                <div class="pagination">
                  <div class="item is-active"> 
                    <span class="icon">1</span>
                  </div>
                  <div class="item">
                    <span class="icon">2</span>
                  </div>
                  <div class="item">
                    <span class="icon">3</span>
                  </div>
                  <div class="item">
                    <span class="icon">4</span>
                  </div>
                </div>
                <div class="arrows">
                  <div class="arrow prev">
                    <span class="svg svg-arrow-left">
                      <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                      <span class="alt sr-only"></span>
                    </span>
                  </div>
                  <div class="arrow next">
                    <span class="svg svg-arrow-right">
                      <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                      <span class="alt sr-only"></span>
                    </span>
                  </div>
                </div>
              </div> 
            </section>
          </main>
          <br><br><br><br>
        </div>
        </div>
          </div>
        <!-- google地圖 -->

<div id="content reveal">
  <!--    <div class="container"> -->
  
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-6 ">
  <span class="">
     
    <h3 class="mb-4 nowrap fw-bold">定義空間<br>Def Space</h3>
    <p class="">
      Studio Lab<br>
      個人展覽 / 學生成發 / 攝影會 / 講座 / 市集<br>
      辦公空間 / 工作坊 / 各式活動<br>
      <br>
      Café<br>
      咖啡飲料 / 輕食 / 甜點 
    <br></p>
  </span>
  
  </div>
  <div class="col-md-6 ">
    <!-- <img  src="img/LOGO.png" alt="" width="100vh"> -->
  
  <p class="">
    
    <!-- A collaborative platform for art, <br>books and pop-up events.…and a coffee bar.<br> -->
    A place that combines exhibition and café,<br>
    Provide people with a artistic space.<br>
<br>
    一處結合展覽文化與飲食享受，<br>以藝文氣息在都市鬧區提供人們<br>一個呼吸的空檔。
  <br></p>
  
  <img class="mt-3" src="img/LOGO.png" alt="" width="120vh">
  </div>
  </div>
  </div>

        <!-- 展覽圖 -->
        <br><br><br><br>
        <div class="container reveal">
            <div class="row h-100 justify-content-center row-cols-1 row-cols-sm-1 row-cols-md-3 g-5">
              <div class="justify-content-center col-sm-7 col-md-6 col-lg-3">

               
                  <div class=" card text-center h-100 shadow-0 ">
                    <a href="#">
                    <img src="img/p5.jpeg" class="card-img-top"
                        alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <p class="fw-bold d-flex justify-content-center card-title">當季展覽</p>
                        <h5 class=" d-flex justify-content-center mt-5 card-text ">
                          覆寫真實 - 臺灣當代攝影中的檔案與認同
                        </h5>
                        <p class="d-flex justify-content-center card-text">
                            <small class="text-muted">220409 - 220703</small>
                        </p>
                        <!-- <input type="button" onclick="project(this)"
                            class="mx-4 mt-4 button btn btn-default " value="了解更多"> -->
                            
                            <div class="card-footer">
                              <small class="text-muted ">| A展區 |</small>
                            </div>
                    </div>
                </div>
            </div></a>
            
                <div class="justify-content-center col-sm-7 col-md-6 col-lg-3">
                    <div class=" card text-center h-100 shadow-0 ">
                      <a href="#">
                        <img src="img/p3.jpeg" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <p class="fw-bold d-flex justify-content-center card-title">當季展覽</p>
                            <h5 style ="word-break: break-all;" class=" d-flex justify-content-center mt-5 card-text ">
                              島嶼溯遊－『台灣計劃』三十年回顧展
                            </h5>
                            <p class="d-flex justify-content-center card-text">
                                <small class="text-muted">220326 - 220626</small>
                            </p>
                            <!-- <input type="button" onclick="project(this)"
                                class="mx-4 mt-4 button btn btn-default " value="了解更多"> -->
                                
                                <div class="card-footer">
                                  <small class="text-muted ">| B展區 |</small>
                                </div>
                        </div>
                    </div>
                </div></a>

                <div class="justify-content-center col-sm-7 col-md-6 col-lg-3">
                  <div class=" card text-center h-100 shadow-0 ">
                    <a href="#">
                      <img src="img/p10.jpeg" class="card-img-top"
                          alt="Hollywood Sign on The Hill" />
                      <div class="card-body">
                          <p class="fw-bold d-flex justify-content-center card-title">常設展覽</p>
                          <h5 class=" d-flex justify-content-center mt-5 card-text ">
                            跨‧交‧通
                              | 「大阪商船株式會社臺北支店」攝影展
                          </h5>
                          <p class="d-flex justify-content-center card-text">
                              <small class="text-muted">210325</small>
                          </p>
                          <!-- <input type="button" onclick="project(this)"
                              class="mx-4 mt-4 button btn btn-default " value="了解更多"> -->
                              
                              <div class="card-footer">
                                <small class="text-muted ">| C展區 |</small>
                              </div>
                      </div>
                  </div>
              </div></a>

                  <div class="justify-content-center col-sm-7 col-md-6 col-lg-3">
                    <div class=" card text-center h-100 shadow-0 ">
                      <a href="#">
                        <img src="img/p1.jpeg" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <p class="fw-bold d-flex justify-content-center card-title">當季展覽</p>
                            <h5 class=" d-flex justify-content-center mt-5 card-text ">
                              揭幕 - 尋探立陶宛攝影中的認同
                            </h5>
                            <p class="d-flex justify-content-center card-text">
                                <small class="text-muted">220501-220531</small>
                            </p>
                            <!-- <input type="button" onclick="project(this)"
                                class="mx-4 mt-4 button btn btn-default " value="了解更多"> -->
                                
                                <div class="card-footer">
                                  <small class="text-muted ">| A展區 |</small>
                                </div>
                        </div>
                    </div>
                </div></a>
            </div>
            

 <!-- 場地格局 -->
<br><br><br>
</div>
<div class="container-fluid reveal ">
<div class="row">
<div class="col-md-8">
<!-- Background image -->
<div
style="
background-image: url('img/展覽05.jpg');
height: 42vh;
width: 100%;
background-size: cover;
background-position: center right;
background-repeat: no-repeat;
-webkit-background-size: cover;
-moz-background-size: cover;
"
></div>
<!-- Background image -->
</div>
<div class="col-md-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="fw-bold">場地租借</h1>
        </div>
        <div class="col-lg-12">
            <h4>A展區｜功能活動區</h4>
            <h4>B展區｜工作空間</h4>
            <h4>C展區｜展覽空間</h4>
            <!-- <input type="button" onclick="project(this)" class="button  mealbtn btn btn-dark mt-1"
                              value="預約場勘"> -->
    <button class="learn-more">
    <span class="circle" aria-hidden="true">
    <span class="icon arrow"></span>
    </span>
    <span class="button-text">了解更多</span>
  </button>
        </div>

</div>
</div>
</div>

<!-- google地圖 -->

<div id="content reveal">
<!--    <div class="container"> -->
<br><br><br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 ">
<span class="float-md-end mb-3 ms-md-3">
  <img src="img/螢幕擷取畫面 (43).png" class="img-fluid" alt="Wild Landscape" />
</span>

</div>
<div class="col-md-6 border-start  border-4">
  
<h2 class="ms-3 nowrap fw-bold">定義空間</h2>
<p class="ms-3">12:00pm - 06:00pm<br>
禮拜一公休
<br><br>
104台北市中山區<br>
林森北路107巷10號<br>

tel 02-2537782<br>
service@veneu.tw
<br></p>

<a class="ms-3" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></i></a>
</div>
</div>
</div>

<!-- 資訊欄 -->

<br>
<hr>
<br>

<div class="row">
<div class="col-6">
  
<span class="float-md-end mb-3 ms-md-3">

<h3 class="me-3 fw-bold">定義空間</h3>
<p class="me-3">
12:00pm - 06:00pm<br>
禮拜一公休
<br><br>
104台北市中山區<br>
林森北路107巷10號</p>

</span>


</div>


<div class="col-6 border-start  border-4 ">

<input type="button" onclick="project(this)" class="button btn btn-dark mx-4 mb-4"
value="網路商店"><br>

<p class="mx-4">
tel 02-2537782<br>
service@veneu.tw</p>

<a class ="facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></i></a>

</div>
</div>
</div>
</div>

<!-- loading頁 -->
<div id="loading"></div>


            <!-- 頁尾 -->
            <footer>
                <div class="mt-4 footer row justify-content-center">
 
                    <div class="col-md-12 text-center">
                        <div class="container">
                        <p class="menu">
                            <a href="#">展場介紹</a>
                            <a href="#">展場申請</a>
                            <a href="#">展覽介紹</a>
                            <a href="#"><img src="img/LOGO.png" alt="LOGO" width="70vh"></a>
                            <a  href="#">咖啡輕食</a>
                            <a href="#">網路商店</a>
                            <a  href="#">交通資訊</a>
                        </p>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright">Copyright ©2022</p>
                    </div>
                </div>
        </div>
        </footer>
        </div>
        </div>
        

        <!-- loading page -->

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- MDB -->
          <!-- Custom scripts -->
        <script src="jquery-1.9.1.min.js"></script>
        <script src="TweenLite.min.js"></script>
        <script src="EasePack.min.js"></script>
        <script src="CSSPlugin.min.js"></script>
        <script src="main.js"></script>
      
        <!-- 輪播圖 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
        
          <script type="text/javascript" src="./javascript.js"></script>


  <!-- loading page        -->
  <script>
  function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 500);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('page', true);
    show('loading', false);
});

</script>

    </body>

</body>

</html>