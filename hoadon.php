<?php 
    require_once('php/dbhelp.php');
 ?>
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
   </head>
   <body>
      <div class="full">
         <div class="left1">
            
         </div>
         <div class="right1 color">
            <div class="right-header color-white">
               <i class="fal fa-table"></i>
               <h1>Danh sách hóa đơn</h1>

               <i class="fal fa-cog"></i>
            </div>
            <div class="a6">
               <div class="a5 color-white">
                        <div class="right-header2-left">
                        <i class="fab fa-product-hunt icon1"></i>
                        <div class="left-text">
                           <h3>Hóa đơn</h3>
                           <h6>Danh sách</h6>
                        </div>   
                           </div>   
                           <div class="right-header2-right">
                              <i class="fal fa-calendar-minus icon2"></i>
                              <span class="l1">Danh sách</span>
                              <span class="l2">/</span>
                              <span class="l3">Hóa đơn</span>
                           </div>
                     </div>
            </div>
            <div class="container-body">
               <div class="right-header2">
                     <div class="grid wide">
                        <div class="row">
                           
                           
                           <table class="table table-danger table-hover" >
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên Người Đặt</th>
                                        <th>Số Điện Thoại</th>
                                        <th>Địa Chỉ</th>
                                        <th>Ghi Chú</th>
                                        <th>Giá Tiền</th>
                                        <th>Ngày mua</th>
                                      
                                    </tr>
                               </thead>
                                <tbody>
                                    
                            <?php 
                            //Lay danh muc tu db
                            $limit = 10;
                            $page = 1;
                            if(isset($_GET['page'])){
                            $page = $_GET['page'];
                        }

                            if ($page <= 0) {
                                $page = 1;
                            }
                            $firstIndex = ($page - 1) * $limit;
                                    if (isset($_GET['timkiem']) && $_GET['timkiem'] != '') {
                                        $sql = "SELECT * FROM donhang WHERE name LIKE '%".$_GET['timkiem']."%'";    
                                    }
                                     else {
                                        $sql = 'SELECT * FROM donhang WHERE 1 LIMIT '.$firstIndex.','.$limit;
                                    }
                                        $classList1 = executeResult($sql);
                                        $sql = 'SELECT count(id) as total FROM donhang';
                                        $countResult = executeSingleResult($sql);
                                        $count = $countResult['total'];
                                        $number = ceil($count/$limit);
                                        foreach ($classList1 as $class1) {
                                            echo '<tr>
                                                <td>'.(++$firstIndex).'</td>
                                                <td>'.$class1['name'].'</td>
                                                <td>'.$class1['phone'].'</td>
                                                <td>'.$class1['address'].'</td>
                                                <td>'.$class1['note'].'</td>
                                                <td>'.$class1['total'].'</td>
                                                <td>'.$class1['created_time'].'</td>
                                                
                                            </tr>
                                        ';

                                        }

                                    ?>
                                    </tbody>                            

                                    </table>
                           
                              
                        </div>
                        <nav aria-label="Page navigation example" class ="">
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
            <marquee class="footer" style="bottom: -47%;">
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
               <label for="check" class="nav-item bt " >
                  <div class="nav-item1">
                     <i class="fal fa-shopping-cart"></i>
                     <span>Giỏ hàng</span>   
                  </div>
                  <input type="checkbox" id="check" hidden>
                  <i class="fal fa-angle-right t"></i>
                  <hr>

                  <div class="drop" id="dr">
                     <div class="drop1">
                        <span><a href="muathuoc.php">
                           Mua thuốc
                        </a></span>
                        <span><a href="cart.php">Xem giỏ hàng</a></span>        
                                
                     </div>
                  </div>
               </label>
               <label class="nav-item bt active">
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