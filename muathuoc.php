<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hệ thống bệnh viện</title>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/fonts/fontawesome-pro-5.13.0/fontawesome-pro-5.13.0-web/css/all.min.css">
      <link rel="stylesheet" href="assets/bootstrap-4.5.3-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/grid.css">
      <link rel="stylesheet" href="assets/css/base.css">
      <link rel="stylesheet" href="assets/css/new.css">
      <style>
         .nhuy {
            position: absolute;
             left: 50%;
             transform: translateX(-50%);
             display: flex;
         }
      </style> 
   </head>
   <body>
      <div class="full">
         <div class="left1">
            
         </div>
         <div class="right1 color">
            <div class="right-header color-white">
               <i class="fal fa-table"></i>
               <h1>Danh mục sản phẩm</h1>

               <i class="fal fa-cog"></i>
            </div>
            <div class="a6">
               <div class="a5 color-white">
                        <div class="right-header2-left">
                        <i class="fab fa-product-hunt icon1"></i>
                        <div class="left-text">
                           <h3>Sản phẩm</h3>
                           <h6>Danh mục</h6>
                        </div>   
                     <form class="md-form active-pink active-pink-2 mb-3 mt-0 nhuy" action="" method="GET" class="form-timkiem">
                           <input class="form-control" type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm" aria-label="Search" >
                           <button class="btn btn-outline-warning" style="min-width: 52px;
    height: 24.5px;border: 1px solid #ffc107">Tìm</button>
                     </form>
                     
                           </div>   
                           <div class="right-header2-right">
                              <i class="fal fa-calendar-minus icon2"></i>
                              <span class="l1">Danh mục</span>
                              <span class="l2">/</span>
                              <span class="l3">Sản phẩm</span>
                           </div>
                     </div>
            </div>
            <div class="container-body">
               <div class="right-header2">
                     <div class="grid wide">
                        <div class="row">
                           <!-- <div class="col c-3">
                              <div class="img-muahang">
                                 <div class="img-muahang2">
                                    <img src="assets/img/background.jpg" alt="">
                                 </div>
                                 <span class="t1">Tên thuốc:</span>
                                 <span class="t2">Nhà sản xuất:</span>
                                 <span class="t3">Giá/donvitinh</span>
                                 '<button  class="button">
                                          <span class="button-text">Thêm vào giỏ hàng</span>
                                 </button>'; 
                              </div>   
                           </div> -->
                           <?php 
                            require_once('php/dbhelp.php');
                            //Lay danh muc tu db
                            $limit = 8;
                            $page = 1;
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }

                            if ($page <= 0) {
                                $page = 1;
                            }
                            $firstIndex = ($page - 1) * $limit;
                                    if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
                                        $sql = "SELECT * FROM Thuoc WHERE TenThuoc LIKE '%".$_GET['timkiem']."%'";    
                                    }
                                     else {
                                        $sql = 'SELECT * FROM Thuoc WHERE 1 LIMIT '.$firstIndex.','.$limit;
                                    }
                                        $classList1 = executeResult($sql);
                                        $sql = 'SELECT count(id) as total FROM Thuoc';
                                        $countResult = executeSingleResult($sql);
                                        $count = $countResult['total'];
                                        $number = ceil($count/$limit);
                                        foreach ($classList1 as $class1) {
                                  echo          '<div class="col c-3">';
                                   echo             '<div class="img-muahang">';
                                    echo               '<div class="img-muahang2">';
                                    echo                  '<img class = "photo" src="php/photo/'.$class1["Anh"].'">';
                                    echo               '</div>';

                                    echo               '<span class="t1">Tên thuốc:'.$class1["TenThuoc"].'</span>';
                                    echo               '<span class="t2">Nhà sản xuất:'.$class1['NhaSanXuat'].'</span>';
                                    echo               '<span class="t3">';
                                    echo number_format($class1['DonGia'], 0, ",", ".") . ' VNĐ';
                                    echo '/';
                                    echo $class1['DonViTinh'];
                                    echo '</span>';
                                    echo               '<button  class="button" onclick=\'window.open("detail.php?MaThuoc='.$class1['MaThuoc'].'")\'>';
                                    echo                        '<span class="button-text">Thêm vào giỏ hàng</span>';
                                    echo               '</button>'; 
                                    echo            '</div>';   
                                    echo         '</div>';

                                        }

                                    ?>
                           
                           
                           
                              
                        </div>
                        <nav aria-label="Page navigation example" class ="pagination--absolute">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <?php 
                                    for ($i=0; $i < $number; $i++) { 
                                        if ($page == ($i +1)) {
                                        echo '<li class="page-item active1"><a class="page-link" href="#">'.($i+1).'</a></li>';
                                            
                                        }else {

                                        echo '<li class="page-item"><a class="page-link" href="?page= '.($i+1).'">'.($i+1).'</a></li>';
                                        }
                                    }
                                 ?>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                     </div>                     
               </div>
               
            </div>
           <!--  <div class="footer2">
               
            </div> -->
            <marquee class="footer">
               <span>Copyright © 2020-2021 NGUYỄN NHƯ Ý</span>
               <i class="fas fa-heart"></i>
            </marquee>
         </div>
         <!-- navbar -->
         <nav class="nav1">
            <div class="nav-info">
               <span>NHƯ Ý</span>
               <div class="nav-info__online">
                  <i class="fas fa-circle"></i>
                  <span>Trực tuyến</span>
               </div>
            </div>
            <ul class="nav-list" id="myDIV">
               <a href="index2.php">
                  <label class="nav-item bt">
                  <div class="nav-item1">
                     <i class="fal fa-tachometer-alt-slowest"></i>
                      <span>Trang chủ</span>
                  </div>            
                  </label>
               </a>
               <label for="check" class="nav-item bt active" >
                  <div class="nav-item1">
                     <i class="fal fa-shopping-cart"></i>
                     <span>Giỏ hàng</span>   
                  </div>
                  <input type="checkbox" id="check" hidden>
                  <i class="fal fa-angle-right t"></i>
                  <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span><a href="#">
                           Mua thuốc
                        </a></span>
                        <span><a href="cart.php">Xem giỏ hàng</a></span>        
                                
                     </div>
                  </div>
               </label>
               <label class="nav-item bt">
                  <div class="nav-item1">
                     <i class="fal fa-file-invoice-dollar"></i>
                     <span>Hóa đơn</span>
                  </div>
                  <input type="checkbox" id="check" hidden>

                  <i class="fal fa-angle-right t"></i>
                   <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span><a href="hoadon.php">Xem hóa đơn</a></span>              
                     </div>
                  </div>
               </label>
               <label class="nav-item bt">
                  <div class="nav-item1">
                     <i class="fal fa-tablets"></i>
                     <span>Dược phẩm</span>
                  </div>   
                  <input type="checkbox" id="check" hidden>

                  <i class="fal fa-angle-right t"></i>
                   <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span onclick="UpdateMedicine()">Cập nhật thuốc</span>
                        
                     </div>
                  </div>

               </label>
               <label class="nav-item bt">
                   <div class="nav-item1">
                      <i class="far fa-user-ninja"></i>
                     <span>Nhân viên</span>
                   </div>  
                  <input type="checkbox" id="check" hidden>

                  <i class="fal fa-angle-right t"></i>
                   <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span onclick="UpdateEmployee()">Thêm nhân viên</span>
                        <span onclick="UpdateEmployee()">Tra cứu thông tin</span>         
                     </div>
                  </div>

               </label>
               <label class="nav-item bt">
                  <div class="nav-item1">
                     <i class="fal fa-clinic-medical"></i>
                     <span>Nhà cung cấp</span>
                  </div>   
                  <input type="checkbox" id="check" hidden>
                  <i class="fal fa-angle-right t"></i>
                   <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span onclick="UpdateVendor()">Thêm nhà cung cấp</span>
                        <span onclick="UpdateVendor()">Tra cứu thông tin</span>       
                     </div>
                  </div>

               </label>
            </ul>   
         </nav>
      </div>
      <script src="main.js"></script>
   </body>
</html>