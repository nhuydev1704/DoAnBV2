<?php 
    require_once ('php/dbhelp.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý quầy thuốc bệnh viện</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.14.0-web/css/all.min.css ">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
</head>
<body style="margin:0; overflow: hidden;">  

    <!-- TODO Block ELEMENT MODIFIER -->
    <div class="app">
        <div class="div1" style="color: white;">
                <span><img class="div1-img" src="./assets/img/logo.png" alt=""></span>
                
                <span> Phân </span>
                <span> Tích </span>
                <span> Thiết </span>
                <span> Kế </span>
                <span> Hệ </span>
                <span> Thống </span>
                <span> Quản </span>
                <span> Lý </span>
                <span> Quầy </span>
                <span> Thuốc </span>
                <span> Bệnh </span>
                <span> Viện </span>
        </div>
        <div class="nhom8">NGUYỄN NHƯ Ý</div>

        <div class="grid">
            <div class="picture">
                <div class="picture__selection">
                    <ul class="pill-list">
                        <li class="pill-item" onclick="UpdatePill()">
                            <i class="fa fa-plus-square" style="font-size:30px;color:red;"></i>
                        </br>
                            <span class="pill-text">Update kho thuốc</span>
                        </li>
                        <li class="pill-item" onclick="UpdateEmployee()">
                            <i class="far fa-address-book" style="font-size:30px;color:#EEAD0E"></i>
                        </br>
                            <span class="pill-text">Update nhân viên</span>

                        </li>
                        <li class="pill-item" onclick="UpdateKhoaDT()">
                            <i class="fa fa-hospital" style="font-size:30px;color:#D2691E"></i>
                        </br>
                            <span class="pill-text">Update khoa điều trị</span>
                            
                        </li>
                        <li class="pill-item" onclick="UpdateVendor()">
                            <i class="fas fa-house-user" style="font-size:30px;color:Sienna"></i>
                        </br>
                            <span class="pill-text">Update nhà cung cấp</span>

                        </li>
                        <li class="pill-item" onclick="UpdateMedicine()">
                            <i class="fas fa-pills" style="font-size:30px;color:red;"></i>
                        </br>
                            <span class="pill-text">Update thuốc</span>

                        </li>
                    </ul>

                    <ul class="pill-list pill-list2">
                        <li class="pill-item" onclick="buy()">
                         <i class="fas fa-shopping-cart" style="font-size:30px;color:#0000CC"></i>
                        </br>
                            <span class="pill-text">Quản lý đặt mua</span>
                        </li>
                        <li class="pill-item" onclick="bill()">
                            <i class="fas fa-dollar-sign" style="font-size:30px;color:#66FF33"></i>
                        </br>
                            <span class="pill-text">Quản lý báo giá</span>

                        </li>
                        <li class="pill-item" onclick="quanLyNhap()">
                            <i class="fas fa-file-upload" style="font-size:30px;color:#00CC00"></i>
                        </br>
                            <span class="pill-text">Quản lý nhập thuốc</span>

                        </li>
                        <li class="pill-item" onclick="quanLyXuat()">
                            <i class="fas fa-file-export" style="font-size:30px;color:#00CC99"></i>
                        </br>
                            <span class="pill-text">Quản lý xuất thuốc</span>

                        </li>
                        <li class="pill-item" onclick="quanLyHuy()">
                            <i class="fas fa-ban" style="font-size:30px;color:#FF66FF"></i>
                        </br>
                            <span class="pill-text">Quản lý hủy thuốc</span>

                        </li>
                    </ul>
                    <!-- <div class="picture__selection-btn">
                        <div class="selection-btn">
                            <div class="btn btn-patient">
                                <a href="./patient.html">Đăng Nhập</a>
                            </div>
                            <div class="btn btn-doctor">
                                <a href="./doctor.html">Đăng Ký</a>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
        <div class="div2"></div>
        
        
     
        
        <!-- <div id = "madalClick8" class="modal animate"> 
                <div id="out-form" class="grid grid__form" method="post" action="php/index2.php">
                    <span class="login-title login-title3 login-title6">Thông tin phiếu xuất</span>
                    <span class="login-title login-title3 login-title56">Chi tiết thuốc</span>
                    <div class="manage">
                        <div class="manage-top">
                            <div class="manage-top_left">
                                
                                    <div class="manage-top_left-form">
                                        <div class="login-form login-form5" >
                                            <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu:</span><input type="text" name="mancc" id="">
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày:</span>
                                                <select name="cars" id="cars" class="">
                                                    <option value="maianh">11/28/2012</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Mã nhân viên:</span>
                                                <select name="cars" id="cars" class="">
                                                    <option value="maianh">001</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Mã kho:</span>
                                                <select name="cars" id="cars" class="">
                                                    <option value="maianh">001</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Mã khoa:</span>
                                                <select name="cars" id="cars" class="">
                                                    <option value="maianh">001</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Mã nhà cung cấp:</span>
                                                <select name="cars" id="cars" class="">
                                                    <option value="maianh">001</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="box-list5">
                                        <ul class="form-list5">
                                            <button class="form-item5">Tạo mới</button>
                                            <button class="form-item5">Lưu</button>
                                            <button class="form-item5">Sửa</button>
                                            <button class="form-item5">Xóa</button>
                                            <li class="form-item5" onclick="out8()">Thoat</li>
                                        </ul>
                                    </div>
                               
                                 
                                 
                            </div>
                            <div class="manage-top_right">
                                <div class="value">
                                    <table class="table5">
                                        <tr>
                                          <th width = "5%"></th>
                                          <th>Số phiếu</th>
                                          <th>Ngày</th> 
                                          <th>Mã nhân viên</th>
                                          <th>Mã kho</th>
                                          <th>Mã khoa</th>
                                          <th>Mã nhà cung cấp</th>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td>1</td>
                                          <td>27/12/2000</td>
                                          <td>001</td>
                                          <td>1</td>
                                          <td>1</td>
                                          <td>1</td>
                                        </tr>
                                        
                                      </table>
                                </div>
                               
                            </div>
                        </div>
                        <div class="manage-top manage-bottom">
                            <div class="manage-top_left">
                                
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu:</span><input type="text" name="mancc" id="">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                            <select name="cars" id="cars" class="">
                                                <option value="maianh">11/28/2012</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
                                        </div>
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số lượng:</span><input type="text" name="mancc" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-list5">
                                    <ul class="form-list5">
                                        <button class="form-item5">Tạo mới</button>
                                        <button class="form-item5">Lưu</button>
                                        <button class="form-item5">Sửa</button>
                                        <button class="form-item5">Xóa</button>
                                        <li class="form-item5" onclick="out8()">Thoat</li>
                                    </ul>
                                </div>
                           
                             
                             
                        </div>
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <tr>
                                      <th width = "5%"></th>
                                      <th>Số phiếu</th>
                                      <th>Mã thuốc</th> 
                                      <th>Số lượng</th>    
                                         
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>1</td>
                                      <td>001</td>
                                      <td>1</td>
                                    </tr>
                                    
                                  </table>
                            </div>
                           
                        </div>
                        </div>
    
                    </div>   
                </div>
            
        </div>
         -->
    </div>
    <script src="main.js"></script>
</body>
</html>