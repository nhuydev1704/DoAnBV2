<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hệ thống bệnh viện</title>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assets/fonts/fontawesome-pro-5.13.0/fontawesome-pro-5.13.0-web/css/all.min.css">
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
               <h1>Hệ thống quầy thuốc bệnh viện By Nguyễn Như Ý</h1>
               <i class="fal fa-cog"></i>
            </div>
            <div class="a6">
               <div class="a5 color-white">
                        <div class="right-header2-left">
                        <i class="fal fa-globe-stand icon1"></i>
                        <div class="left-text">
                           <h3>Bảng điều khiển</h3>
                           <h6>Trang chủ</h6>
                        </div>   
                           </div>   
                           <div class="right-header2-right">
                              <i class="far fa-home-alt icon2"></i>
                              <span class="l1">Trang chủ</span>
                              <span class="l2">/</span>
                              <span class="l3">Bảng điều khiển</span>
                           </div>
                     </div>
            </div>
            <div class="container-body">
               <div class="right-header2">
                     <div class="grid wide">
                        <div class="row">
                           <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                       require_once('php/dbhelp.php');
                                            $sql1 = "SELECT * FROM Thuoc";
                                            $list1 = executeResult($sql1);
                                            $i1 = count($list1);

                                            echo '<h1>'.$i1.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số thuốc</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                              <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                            $sql2 = "SELECT * FROM NhanVien";
                                            $list2 = executeResult($sql2);
                                            $i2 = count($list2);

                                            echo '<h1>'.$i2.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số nhân viên</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                              <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                            $sql3 = "SELECT * FROM KhoThuoc";
                                            $list3 = executeResult($sql3);
                                            $i3 = count($list3);

                                            echo '<h1>'.$i3.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số kho thuốc</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                              <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                            $sql4 = "SELECT * FROM NhaCungCap";
                                            $list4 = executeResult($sql4);
                                            $i4 = count($list4);

                                            echo '<h1>'.$i4.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số nhà cung cấp</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                              <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                            $sql5 = "SELECT * FROM KhoaDT";
                                            $list5 = executeResult($sql5);
                                            $i5 = count($list5);

                                            echo '<h1>'.$i5.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số khoa điều trị</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                              <div class="col c-3">
                              <div class="img-svg">
                                 <div class="img-header">
                                    <div class="header-top">
                                       <?php 
                                            $sql6 = "SELECT * FROM donhang";
                                            $list6 = executeResult($sql6);
                                            $i6 = count($list6);

                                            echo '<h1>'.$i6.'</h1>';
                                         ?>
                                       <i class="fas fa-sort-up"></i>
                                    </div>
                                    <span>Tổng số hóa đơn</span>
                                 </div>
   
                                 <div class="img-footer" style="background-image: url('assets/img/4.png');background-repeat: repeat-x;">
                                    
                                 </div>
                                 </div>
                              </div>
                        </div>
                     </div>                     
               </div>
               <div class="right-header3">
                  <div class="grid wide">
                        <div class="row">
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="UpdateMedicine()">
                                 <div class="img-svg2-icon">
                                    <i class="fal fa-pills"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Cập nhật thuốc
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="UpdateEmployee()">
                                 <div class="img-svg2-icon">
                                    <i class="far fa-address-book"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Cập nhật nhân viên
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="UpdatePill()">
                                 <div class="img-svg2-icon">
                                    <i class="fa fa-plus-square"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Cập nhật kho thuốc
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="UpdateVendor()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-house-user"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Cập nhật nhà cung cấp
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="UpdateKhoaDT()"> 
                                 <div class="img-svg2-icon">
                                    <i class="fa fa-hospital"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Cập nhật khoa điều trị
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="buy()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-shopping-cart"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Quản lý đặt mua
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="bill()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Quản lý báo giá
                                    
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="quanLyNhap()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-file-upload"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Quản lý nhập thuốc
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="quanLyXuat()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-file-export"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Quản lý xuất thuốc
                                    
                                 </div>
                                 </div>
                           </div>
                           <div class="col l-2-4">
                              <div class="img-svg2" onclick="quanLyHuy()">
                                 <div class="img-svg2-icon">
                                    <i class="fas fa-ban"></i>
                                 </div>
   
                                 <div class="img-svg2-text">
                                    Quản lý hủy thuốc
                                 </div>
                                 </div>
                           </div>

                        </div>
                     </div>
               </div>
            </div>
            <!-- <div class="footer2">
               
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
                  <label class="nav-item bt active">
                  <div class="nav-item1">
                     <i class="fal fa-tachometer-alt-slowest"></i>
                      <span>Trang chủ</span>
                  </div>            
                  </label>
               </a>
               <label for="check" class="nav-item bt" id="click">
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