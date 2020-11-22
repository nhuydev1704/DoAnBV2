


// save.onclick = clickSave ;
var array = [];


function clickSave1() {
    var manv = document.getElementById('manv').value;
    var tennv = document.getElementById('tennv').value;
    var diachi = document.getElementById('diachi').value;
    var gender = document.getElementById('gender').value;
    var ngaysinh = document.getElementById('date2').value;
    var phone = document.getElementById('phone').value;
    var nhanVien = {
        'manv': manv,
        'tennv': tennv,  
        'diachi': diachi,
        'gender': gender,   
        'ngaysinh': ngaysinh,
        'phone': phone   
    }
    
    if (inDex == -1) {
         addItem1(nhanVien)  
    } else {
        array[inDex] = nhanVien;
        inDex = -1;
        displayALL1()
    }
}

function clickSetting1() {
    var manv = document.getElementById('manv').value;
    var tennv = document.getElementById('tennv').value;
    var diachi = document.getElementById('diachi').value;
    var gender = document.getElementById('gender').value;
    var ngaysinh = document.getElementById('date2').value;
    var phone = document.getElementById('phone').value;
    var nhanVien = {
        'manv': manv,
        'tennv': tennv,  
        'diachi': diachi,
        'gender': gender,   
        'ngaysinh': ngaysinh,
        'phone': phone   
    }
    
    if (inDex == -1) {
         addItem1(nhanVien)  
    } else {
        array[inDex] = nhanVien;
        inDex = -1;
        displayALL1()
    }
}


function displayALL1() {
    table2.innerHTML = "";
    for(i = 0; i< array.length;i++) {
        var nhanVien = array[i];
        table2.innerHTML += '<tr>' +
        '<td><button onclick= "Edit1('+i+ 
        ')">Sửa</button> </td>'+
        '<td><button  onclick= "deletePill('+(i)+ 
                ')">Xóa</button> </td>'+
        '<td>' +nhanVien. manv + '</td>'+
        '<td>' + nhanVien.tennv + '</td>'+
        '<td>' +nhanVien. diachi + '</td>'+
        '<td>' + nhanVien.gender + '</td>'+
        '<td>' +nhanVien. ngaysinh + '</td>'+
        '<td>' + nhanVien.phone + '</td>'+
        '</tr>'
        console.log(array.length)
        document.getElementById('manv').value = "";
        document.getElementById('tennv').value = "";
        document.getElementById('diachi').value = "";
        document.getElementById('gender').value = "";
        document.getElementById('date2').value = "";
        document.getElementById('phone').value = "";  
        console.log(nhanVien)
    }
}

function clickDelete1() {
    var manv = document.getElementById('manv').value;
    var tennv = document.getElementById('tennv').value;
    var diachi = document.getElementById('diachi').value;
    var gender = document.getElementById('gender').value;
    var ngaysinh = document.getElementById('date2').value;
    var phone = document.getElementById('phone').value;
    var nhanVien = {
        'manv': manv,
        'tennv': tennv,  
        'diachi': diachi,
        'gender': gender,   
        'ngaysinh': ngaysinh,
        'phone': phone   
    }
    if (inDex == -1) {
        deletePill() 
   } else {
       array[inDex] = nhanVien;
       inDex = -1;
       Edit1()
   }
  
}

var inDex = -1;
function deletePill(i) {
    var a = [];
    inDex = i;
    var nhanVien = array[i];
    a.push(nhanVien);

    a.splice(i,1)
    console.log(a)
}

function addItem1(nhanVien) {
    
    array.push(nhanVien);
    console.log(nhanVien);
    table2.innerHTML += '<tr>' +
        '<td><button onclick= "Edit1('+(array.length - 1)+ 
        ')">Sửa</button> </td>'+
        '<td><button  onclick= "deletePill('+(array.length - 1)+ 
                ')">Xóa</button> </td>'+
        '<td>' +nhanVien. manv + '</td>'+
        '<td>' + nhanVien.tennv + '</td>'+
        '<td>' +nhanVien. diachi + '</td>'+
        '<td>' + nhanVien.gender + '</td>'+
        '<td>' +nhanVien. ngaysinh + '</td>'+
        '<td>' + nhanVien.phone + '</td>'+
        '</tr>'
    console.log(array.length)
    document.getElementById('manv').value = "";
    document.getElementById('tennv').value = "";
    document.getElementById('diachi').value = "";
    document.getElementById('gender').value = "";
    document.getElementById('date2').value = "";
    document.getElementById('phone').value = "";
}

var inDex = -1;
function Edit1(i) {
    inDex = i;
    var nhanVien = array[i];
    document.getElementById('manv').value = nhanVien.manv;
    document.getElementById('tennv').value = nhanVien.tennv;
    document.getElementById('diachi').value = nhanVien.diachi;
    document.getElementById('gender').value = nhanVien.gender;
    document.getElementById('date2').value = nhanVien.ngaysinh;
    document.getElementById('phone').value = nhanVien.phone
}