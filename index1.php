<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý quầy thuốc bệnh viện</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets.css/fonts/fontawesome-free-5.14.0-web/css/all.min.css ">
    <link rel="stylesheet" href="./assets.css/css/main.css">
    <link rel="stylesheet" href="./assets.css/css/base.css">
</head>
<body style="margin:0;">  
    <!-- TODO Block ELEMENT MODIFIER -->
    <div class="app">
        <div class="div1" style="color: white;">
                <span><img class="div1-img" src="data:image/png;base64,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" alt=""></span>
                
                <span style="--i:1;"> Phân </span>
                <span style="--i:2;"> Tích </span>
                <span style="--i:3;"> Thiết </span>
                <span style="--i:4;"> Kế </span>
                <span style="--i:5;"> Hệ </span>
                <span style="--i:6;"> Thống </span>
                <span style="--i:7;"> Quản </span>
                <span style="--i:8;"> Lý </span>
                <span style="--i:9;"> Quầy </span>
                <span style="--i:10;"> Thuốc </span>
                <span style="--i:11;"> Bệnh </span>
                <span style="--i:12;"> Viện </span>
                <span style="--i:13;"> 3 </span>
                <span style="--i:14;"> Vì </span>
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
                            <i class="fa fa-hospital-o" style="font-size:30px;color:#D2691E"></i>
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
        <div id = "madalClick" class="modal animate"> 
            <form id="out-form" class="grid grid__form" method="post" action="index2.php">
                <div class="form-login">
                    <div class="login">
                        <span class="login-title">Thông tin kho thuốc</span>
                        <div class="login-form">
                            <div class="login-makho"><span class = "label" >Mã kho:</span><input type="text" name="makho" id="makho"></div>
                            <div class="login-tenkho"><span class = "label" >Tên kho:</span><input type="text" name="tenkho" id="tenkho">
                            </div>
                        </div>
                    </div>
                    <div class="value">
                        <table>
                           <thead>
                            <tr >
                                <th width = "2%"></th>
                                <!-- <th width = "2%"></th> -->
                                <th>Ma kho</th>
                                <th>Ten Kho</th>
                              </tr>
                           </thead>
                           <tbody  id="table">

                           </tbody >
                           
                            
                          </table>
                    </div>
                </div>
                <div class="box-list">
                    <ul class="form-list">
                        <button class="form-item">Tạo mới</button>
                        <button id="save" class="form-item" onclick="clickSave()">Lưu</button>
                        <button id="setting" class="form-item" onclick="clickSetting()" >Sửa</button>
                        <button class="form-item" onclick="clickDelete()" >Xóa</button>
                        <button class="form-item" onclick="out()">Thoat</button>
                    </ul>
                </div>
            </form>
        </div>
        <div id = "madalClick1" class="modal animate"> 
            <div id="out-form2" class="grid grid__form" method="post" action="index2.php" >
                <div class="form-login">
                    <div class="login">
                        <span class="login-title login-title10">Cập nhập nhân viên</span>
                        <div class="login-form_flex">
                            <div class="login-form">
                                <div class="login-makho "><span class = "label" >Mã NV:</span><input type="text" name="manv" id="manv">
                                </div>
                                <div class="login-tenkho login-all"><span class = "label" >Tên NV:</span><input type="text" name="tennv" id="tennv">
                                </div>
                                <div class="login-tenkho "><span class = "label" >Địa chỉ:</span><input type="text" name="diachi" id="diachi">
                                </div>
                            </div>
                            <div class="login-form">
                                <div class="login-makho "><span class = "label" >Giới tính:</span><input type="text" name="gender" id="gender">
                                </div>
                                <div class="login-tenkho login-all"><span class = "label" >Ngày sinh:</span>
                                    <input type="text" name="date2" id="date2">
                                </div>
                                <div class="login-tenkho "><span class = "label" >Số điện thoại:</span><input type="text" name="phone" id="phone">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-list box-list1">
                         <ul class="form-list form-list1">
                            <button class="form-item1">Tạo mới</button>
                            <button class="form-item1" onclick="clickSave1()">Lưu</button>
                            <button class="form-item1" onclick="clickSetting1()">Sửa</button>
                            <button class="form-item1" onclick="clickDelete1()">Xóa</button>
                            <button class="form-item1" onclick="out1()">Thoat</button>
                        </ul>
                    </div>
                    <div class="value">
                        <table>
                          <thead>
                            <tr>
                                <th></th>
                                <th>Ma NV</th>
                                <th>Tên NV</th>
                                <th>Địa chỉ</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Số điện thoại</th>
                                <tr>
                                  '<td><button onclick= "Edit1('+(array.length - 1)">Sửa</button> </td>'
                                  <td>01</td>
                                  <td>Nguyễn Như Ý</td>
                                  <td>Lào Cai</td>
                                  <td>Nam</td>
                                  <td>17/04/2000</td>
                                  <td>0328849286</td>

                                </tr>
                            </tr>
                          </thead>
                          <tbody  id="table2">

                           </tbody >
                           
                            
                          </table>
                    </div>
                </div>
                
            </div>
        </div>
        <div id = "madalClick2" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <div class="form-login">
                    <div class="login">
                        <span class="login-title">Thông tin khoa</span>
                        <div class="login-form">
                            <div class="login-makho"><span class = "label" >Mã khoa:</span><input type="text" name="makho" id=""></div>
                            <div class="login-tenkho"><span class = "label" >Tên khoa:</span><input type="text" name="tenkho" id="">
                            </div>
                        </div>
                    </div>
                    <div class="value">
                        <table >
                            <tr>
                              <th width = "5%"></th>
                              <th>Mã khoa</th>
                              <th>Tên khoa</th>
                            </tr>
                            <tr>
                              <td></td>
                              <td>001...</td>
                              <td>Khoa nội</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>002...</td>
                              <td>khoa thần kinh</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>003...</td>
                                <td>khoa sản</td>
                              </tr>
                          </table>
                    </div>
                </div>
                <div class="box-list">
                    <ul class="form-list">
                        <button class="form-item">Tạo mới</button>
                        <button class="form-item">Lưu</button>
                        <button class="form-item">Sửa</button>
                        <button class="form-item">Xóa</button>
                        <button class="form-item" onclick="out2()">Thoat</button>
                    </ul>
                </div>
            </div>
        </div>
        <div id = "madalClick3" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <div class="form-login">
                    <div class="login login3">
                        <span class="login-title login-title3">Thông tin nhà cung cấp</span>
                        <div class="login-form login-form3">
                            <div class="login-makho login-ncc"><span class = "label label3" >Mã nhà cung cấp:</span><input type="text" name="mancc" id="">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Tên nhà cung cấp:</span><input type="text" name="tenncc" id="">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label label3" >Địa chỉ:</span><input type="text" name="dcncc" id="">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Số điện thoại:</span><input type="text" name="sdtncc" id="">
                            </div>
                        </div>
                        <div class="box-list box-list3">
                            <ul class="form-list form-list3">
                                <div class="form-item3">
                                    <button class="form-item form-item_item3">Tạo mới</button>
                                     <button class="form-item form-item_item3">Lưu</button>
                                </div>
                                <div class="form-item3">
                                    <button class="form-item form-item_item3">Sửa</button>
                                    <button class="form-item form-item_item3">Xóa</button>
                                </div>
                                <button class="form-item" onclick="out3()">Thoat</button>
                            </ul>
                        </div>
                    </div>
                    <div class="value">
                        <table class="table3">
                            <tr>
                              <th width = "5%"></th>
                              <th>Mã nhà cung cấp</th>
                              <th>Tên nhà cung cấp</th>
                              <th>Địa chỉ</th>
                              <th>Số điện thoại</th>
                            </tr>
                            <tr>
                              <td></td>
                              <td>01..</td>
                              <td>Thảo dược Hoàng Dương</td>
                              <th>Hai Bà Trưng-Hà Nội</th>
                              <th>0907642158</th>
                            </tr>
                            
                          </table>
                    </div>
                </div>
                
            </div>
        </div>
        <div id = "madalClick4" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <div class="form-login">
                    <div class="login login3 login4">
                        <span class="login-title login-title3">Thông tin thuốc</span>
                        <div class="login-form login-form3 login-form4">
                            <div class="login-makho login-ncc"><span class = "label label3" >Mã thuốc:</span><input type="text" name="mancc" id="">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Tên thuốc:</span><input type="text" name="tenncc" id="">
                            </div>
                            <div class="login-makho login-ncc"><span class = "label label3" >Đơn vị tính:</span><input type="text" name="dcncc" id="">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Nhà sản xuất</span>
                                <select name="cars" id="cars" class="">
                                    <option value="maianh">mai anh</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="login-form login-form3 login-form4">
                            <div class="login-makho login-ncc"><span class = "label label3" >Đơn giá:</span><input type="text" name="mancc" id="">
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Ngày sản xuất:</span>
                                <select name="day" id="date" class="">
                                    <option value="11/28/2012">11/28/2012</option>
                                   
                                  </select>
                            </div>
                            <div class="login-makho login-ncc"><span class = "label label3" >Hạn sử dụng:</span>
                                <select name="day" id="date" class="">
                                    <option value="11/28/2012">11/28/2012</option>
                                   
                                </select>
                            </div>
                            <div class="login-tenkho login-ncc"><span class = "label label3" >Số lượng tồn:</span><input type="text" name="sdtncc" id="">
                            </div>
                        </div>
                        <div class="box-list box-list3 box-list4">
                            <ul class="form-list form-list3 form-list4">
                                <div class="form-item3">
                                    <button class="form-item form-item_item3">Tạo mới</button>
                                     <button class="form-item form-item_item3">Lưu</button>
                                </div>
                                <div class="form-item3">
                                    <button class="form-item form-item_item3">Sửa</button>
                                    <button class="form-item form-item_item3">Xóa</button>
                                </div>
                                <button class="form-item" onclick="out4()">Thoat</button>
                            </ul>
                        </div>
                    </div>
                    <div class="value">
                        <table class="table3">
                            <tr>
                              <th width = "5%"></th>
                              <th>Mã thuốc</th>
                              <th>Tên thuốc</th> 
                              <th>Đơn giá</th>
                              <th>Ngày sản xuất</th>
                              <th>Hạn sử dụng</th>
                              <th>Nhà sản xuất</th>
                              <th>Số lượng tồn</th>   

                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            
                          </table>
                    </div>
                </div>
                
            </div>
        </div>   
        <div id = "madalClick5" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <span class="login-title login-title3 login-title5">Thông tin phiếu đặt mua</span>
                <span class="login-title login-title3 login-title55">Thông tin thuốc đặt mua</span>
                <div class="manage">
                    <div class="manage-top">
                        <div class="manage-top_left">
                            
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span><input type="text" name="mancc" id="">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày mua:</span>
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
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Nhà cung cấp</span>
                                            <select name="cars" id="cars" class="">
                                                <option value="maianh">01</option>
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
                                        <button class="form-item5" onclick="out5()">Thoat</button>
                                    </ul>
                                </div>
                           
                             
                             
                        </div>
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <tr>
                                      <th width = "5%"></th>
                                      <th>Số phiếu mua</th>
                                      <th>Ngày mua</th> 
                                      <th>Mã nhân viên</th>
                                      <th>Mã nhà cung cấp</th>  
        
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>1</td>
                                      <td>27/12/2000</td>
                                      <td>001</td>
                                      <td>01</td>

                                    </tr>
                                    
                                  </table>
                            </div>
                           
                        </div>
                    </div>
                    <div class="manage-top manage-bottom">
                        <div class="manage-top_left">
                            
                            <div class="manage-top_left-form">
                                <div class="login-form login-form5" >
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu mua:</span><input type="text" name="mancc" id="">
                                    </div>
                                    <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                        <select name="cars" id="cars" class="">
                                            <option value="maianh">11/28/2012</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số lượng:</span>
                                        <input type="text" name="mancc" id="">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="box-list5">
                                <ul class="form-list5">
                                    <li class="form-item5">Tạo mới</li>
                                    <li class="form-item5">Lưu</li>
                                    <li class="form-item5">Sửa</li>
                                    <li class="form-item5">Xóa</li>
                                    <li class="form-item5" onclick="out5()">Thoat</li>
                                </ul>
                            </div>
                       
                         
                         
                    </div>
                    <div class="manage-top_right">
                        <div class="value">
                            <table class="table5">
                                <tr>
                                  <th width = "5%"></th>
                                  <th>Số phiếu mua</th>
                                  <th>Mã thuốc</th> 
                                  <th>Số lượng</th>  
    
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>1</td>
                                  <td>27/12/2000</td>
                                  <td>001</td>
                                </tr>
                                
                              </table>
                        </div>
                       
                    </div>
                    </div>

                </div>
            </div>
        </div>
        <div id = "madalClick6" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <span class="login-title login-title3 login-title5">Thông tin bảng báo giá</span>
                <span class="login-title login-title3 login-title55">Thông tin thuốc báo giá</span>
                <div class="manage">
                    <div class="manage-top">
                        <div class="manage-top_left">
                            
                                <div class="manage-top_left-form">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu báo giá:</span><input type="text" name="mancc" id="">
                                        </div>
                                        <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày báo giá:</span>
                                            <select name="cars" id="cars" class="">
                                                <option value="maianh">11/28/2012</option>
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
                                        <button class="form-item5" onclick="out6()">Thoat</button>
                                    </ul>
                                </div>
                           
                             
                             
                        </div>
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <tr>
                                      <th width = "5%"></th>
                                      <th>Số phiếu báo giá</th>
                                      <th>Ngày báo giá</th> 
                                      <th>Mã nhà cung cấp</th>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>1</td>
                                      <td>27/12/2000</td>
                                      <td>001</td>
                                    </tr>
                                    
                                  </table>
                            </div>
                           
                        </div>
                    </div>
                    <div class="manage-top manage-bottom">
                        <div class="manage-top_left">
                            
                            <div class="manage-top_left-form">
                                <div class="login-form login-form5" >
                                    <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu báo giá:</span><input type="text" name="mancc" id="">
                                    </div>
                                    <div class="login-tenkho login-ncc"><span class = "label label5" >Mã thuốc:</span>
                                        <select name="cars" id="cars" class="">
                                            <option value="maianh">11/28/2012</option>
                                            <option value="saab">Saab</option>
                                            <option value="mercedes">Mercedes</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="box-list5">
                                <ul class="form-list5">
                                    <li class="form-item5">Tạo mới</li>
                                    <li class="form-item5">Lưu</li>
                                    <li class="form-item5">Sửa</li>
                                    <li class="form-item5">Xóa</li>
                                    <li class="form-item5" onclick="out6()">Thoat</li>
                                </ul>
                            </div>
                       
                         
                         
                    </div>
                    <div class="manage-top_right">
                        <div class="value">
                            <table class="table5">
                                <tr>
                                  <th width = "5%"></th>
                                  <th>Số phiếu báo giá</th>
                                  <th>Mã thuốc</th>    
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>1</td>
                                  <td>001</td>
                                </tr>
                                
                              </table>
                        </div>
                       
                    </div>
                    </div>

                </div>   
            </div>
        </div>
        <div id = "madalClick7" class="modal animate"> 
            <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                <span class="login-title login-title3 login-title6">Thông tin phiếu nhập</span>
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
                                        <button class="form-item5" onclick="out7()">Thoat</button>
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
                                    <button class="form-item5" onclick="out7()">Thoat</button>
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
        <div id = "madalClick8" class="modal animate">  
                <div id="out-form" class="grid grid__form" method="post" action="index2.php">
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
                                            <button class="form-item5" onclick="out8()">Thoat</button>
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
                                        <button class="form-item5" onclick="out8()">Thoat</button>
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
        <div id = "madalClick9" class="modal animate"> 
               <div id="out-form" class="grid grid__form" method="post" action="index2.php">
                    <span class="login-title login-title3 login-title6 login-title89">Thông tin thuốc hủy</span>
                    <span class="login-title login-title3 login-title56 login-title9">Chi tiết thuốc</span>
                    <div class="manage">
                        <div class="manage-top">
                            <div class="manage-top_left manage-top_left9">
                                
                                    <div class="manage-top_left-form">
                                        <div class="login-form login-form5" >
                                            <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu BB:</span><input type="text" name="mancc" id="">
                                            </div>
                                            <div class="login-tenkho login-ncc"><span class = "label label5" >Ngày BB:</span>
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
                                            
                                           
                                        </div>
                                    </div>
                                    <div class="box-list5">
                                        <ul class="form-list5">
                                            <button class="form-item5">Tạo mới</button>
                                            <button class="form-item5">Lưu</button>
                                            <button class="form-item5">Sửa</button>
                                            <button class="form-item5">Xóa</button>
                                            <button class="form-item5" onclick="out9()">Thoat</button>
                                        </ul>
                                    </div>
                               
                                 
                                 
                            </div>
                            <div class="manage-top_right">
                                <div class="value">
                                    <table class="table5">
                                        <tr>
                                          <th width = "5%"></th>
                                          <th>Số phiếu BB</th>
                                          <th>Ngày BB</th> 
                                          <th>Mã nhân viên</th>
                                          <th>Mã kho</th>

                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td>1</td>
                                          <td>27/12/2000</td>
                                          <td>001</td>
                                          <td>1</td>
                                        </tr>
                                        
                                      </table>
                                </div>
                               
                            </div>
                        </div>
                        <div class="manage-top manage-bottom">
                            <div class="manage-top_left manage-top_left9">
                                
                                <div class="manage-top_left-form ">
                                    <div class="login-form login-form5" >
                                        <div class="login-makho login-ncc"><span class = "label label5" >Số phiếu BB:</span><input type="text" name="mancc" id="">
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
                                        <button class="form-item5" onclick="out9()">Thoat</button>
                                    </ul>
                                </div>
                           
                             
                             
                        </div>
                        <div class="manage-top_right">
                            <div class="value">
                                <table class="table5">
                                    <tr>
                                      <th width = "5%"></th>
                                      <th>Số phiếu BB</th>
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


        
    </div>
    <script src="./assets.css/js/value.js"></script>
    <script src="./assets.css/js/value2.js"></script>
    <script src="main.js"></script>
</body>
</html>