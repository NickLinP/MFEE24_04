<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 導覽列 head -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>

    <!-- 導覽列 -->
    <link type="text/css" rel="stylesheet" href="css/demo.css" />
    <link type="text/css" rel="stylesheet" href="../dist/mmenu.css" />
    <link type="text/css" rel="stylesheet" href="artist.css" />

    
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
    <link type="text/css" rel="stylesheet" href="./searchstyle.css" />
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

<!-- Back to top button -->
<a id="button"></a>




    <!-- 導覽列 body -->

    <div id="page">

        <br>
        <div id="search-menu">
            <div class="wrapper">
                <form id="form" action="#" method=""><input id="popup-search" type="text" name="u"
                        placeholder="Type here to search" /><button id="popup-search-button" type="submit"
                        name="search"><i class="fas fa-search"></i></button></form>
            </div>
        </div>

        <!-- 導覽列 -->
        <div id="header">

            <a href="#menu"><span></span></a>

            <img class="logo" src="img/LOGO.png" alt="" width="100vh">

            <embed class="icon" src="img/facebook.svg" width="40vh" />

            <i class="fas fa-search icontwo" id="search-icon"></i>

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
    </div>

    <!-- mmenu scripts -->
    <script src="./js/mmenu.js"></script>
    <script src="./js/HeaderAndFooter.js"></script>
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

    <!-- --頁尾-- -->
    
<div id="content" class="mt-5">
    <!-- Head Start -->
    <div class="ahead">
        <div class="container d-grid gap-5">
          <div class="row givePadding">
            <div class="aheadL col-sm-10 col-md-10">
              <h5>當季展覽</h5>
              <h3 class="edesc">Life・經典｜</h3>
              <h3 class="topic">奈良美智特展</h3>
              <h5 id="date">2022.01.01 - 2022.02.01</h5>
            </div>
            <div class="aheadR col-sm-2 col-md-2 ">
              <h5>Exhibition</h5>
              <h5>個人展覽</h5>
            </div>
          </div>
        </div>
        <img src="img/aba.jpeg" class="aheadPic">
      </div>
      <!-- Text Start -->
      <div class="atext givePadding">
        <div class="container ">
          <div class="row d-grid gap-5">
            <div class="atextTopic">
              <h3 class="edesc">Life・經典</h3>
              <h4 class="topic">奈良美智特展</h4>
            </div>
            <div class="atextContent">
              <h5 id="content1">
                《奈良美智特展（YOSHITOMO NARA）》，將於 2022 年 01月 01 日至 02月 28 日在定義空間登場，首波曝光的展出作品，是去年在東京森美術館展覽的新作「月光小姐（Miss Moonlight）」。不同於大家熟悉的搖滾女孩，有著邪惡與純真並存的意象，近年奈良美智創作聚焦在作品角色寧靜的精神意象，延續了每個人心中孩童般的純真與身體性，也喚起觀眾心靈深處穿梭於社會現實與想像世界的感性。隨著這次展出，參觀者能一探新作品所傳達的寧靜，在甜美而憂鬱的「月光小姐（Miss Moonlight）」和精選作品的陪伴下，用療癒開展 2021。</h5>
                <br>
                <br>
                <h5 id="content2">
                日本最具影響力的當代藝術家——奈良美智，能在 311 十週年之際，首度在台灣舉辦特展，更加展現台日之間深厚的情誼，也看出奈良美智對於世界關懷的用心之深、堅持之力。
              </h5>
            </div>
            <div class="atextPlace">
              <h4>展覽日期 |2020.01.01(Mon) - 2020.02.01(Tue)</h4>
              <h4>展覽地點 | 台北市中山區中山路一段1號</h4>
            </div>
          </div>
        </div>
      </div>
      <!--  Author Start -->
      <div class="aauthor givePadding">
        <div class="container">
          <div class="row">
            <img class="aauthorPic me-auto col-md-6" src="img/aaa.jpeg">
            <div class="aauthorInfo col-md-6">
              <div class="Text">
                <h4 class="aaTopic" id="author" style="font-weight: bolder;">奈良美智 YOSHITOMO NARA (1959)</h4>
                <br>
                <h5 id="adesc" class="aaText">1959年生於青森縣弘前市。畢業於日本愛知縣立藝術大學，曾赴德國杜塞道夫藝術學院留學，為日本當代藝術代表藝術家之一。</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- carousel Start -->
      <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carousels" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item  active">
            <img src="img/apa1.jpeg" class="carimg1 d-block w-100">
          </div>
          <div class="carousel-item ">
            <img src="img/apa2.jpeg" class="carimg2 d-block w-100">
          </div>
          <div class="carousel-item ">
            <img src="img/apa3.jpeg" class="carimg3 d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
        
      </div>
      
    </section>
    <br>
    <div class="container " style="text-align:center">
    <input type ="button" class=" btn btn-dark mx-3 mb-4" onclick="history.back()" value="回到上一頁"></input> 
    </div>
    

    <!-- 資訊欄 -->

    <br>
    <hr>
   



    <div class="row mt-4">
        <div class="col-6">

            <span class="float-md-end mb-3 ms-md-3">

                <h3 class="me-3 fw-bold">定義空間</h3>
                <p class="me-3">
                    12:00pm - 06:00pm<br>
                    禮拜一公休
                    <br><br>
                    104台北市中山區<br>
                    林森北路107巷10號
                </p>

            </span>


        </div>


        <div class="col-6 border-start  border-4 ">

            <input type="button" onclick="project(this)" class="button btn btn-dark mx-4 mb-4" value="網路商店"><br>

            <p class="mx-4">
                tel 02-2537782<br>
                service@veneu.tw</p>

            <a class="facebook" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></i></a>

        </div>
    </div>


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
                            <a href="#">咖啡輕食</a>
                            <a href="#">網路商店</a>
                            <a href="#">交通資訊</a>
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



</body>

</html>

