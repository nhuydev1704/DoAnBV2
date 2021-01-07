function UpdatePill() {
    window.open("./php/KhoPill.php", "_self");
}

function UpdateEmployee() {
    window.open("./php/Employee.php", "_self");
}

function UpdateKhoaDT() {
    window.open("./php/KhoaDT.php", "_self")
}

function UpdateVendor() {
    window.open("./php/NhaCC.php", "_self")
}

function UpdateMedicine() {
    window.open("./php/Pill.php", "_self")

}

function buy() {
    window.open("./php/QLDatMua.php", "_self")

}

function bill() {
    window.open("./php/QLBaoGia.php", "_self")

}

function quanLyNhap() {
    window.open("./php/QLNhapThuoc.php", "_self")

}

function quanLyXuat() {
    window.open("./php/QLXuatThuoc.php", "_self")
}

function quanLyHuy() {
    window.open("./php/QLHuyThuoc.php", "_self")
}
// TODO: OUT
// function out() {
//     document.getElementById('madalClick').style.visibility = 'hidden';
//     document.getElementById('madalClick').style.display = 'none';
// }
function out() {
    window.open("../index2.php", "_self")
}

function out2() {
    document.getElementById('madalClick2').style.visibility = 'hidden';
    document.getElementById('madalClick2').style.display = 'none';
}

function out3() {
    document.getElementById('madalClick3').style.visibility = 'hidden';
    document.getElementById('madalClick3').style.display = 'none';
}

function out4() {
    document.getElementById('madalClick4').style.visibility = 'hidden';
    document.getElementById('madalClick4').style.display = 'none';
}

function out5() {
    document.getElementById('madalClick5').style.visibility = 'hidden';
    document.getElementById('madalClick5').style.display = 'none';
}

function out6() {
    document.getElementById('madalClick6').style.visibility = 'hidden';
    document.getElementById('madalClick6').style.display = 'none';
}

function out7() {
    document.getElementById('madalClick7').style.visibility = 'hidden';
    document.getElementById('madalClick7').style.display = 'none';
}

function out8() {
    document.getElementById('madalClick8').style.visibility = 'hidden';
    document.getElementById('madalClick8').style.display = 'none';
}

function out9() {
    document.getElementById('madalClick9').style.visibility = 'hidden';
    document.getElementById('madalClick9').style.display = 'none';
}

function New() {
    window.open("Employee.php", "_self")
}

function New2() {
    window.open("KhoPill.php", "_self")
}

function New3() {
    window.open("KhoaDT.php", "_self")
}

function New4() {
    window.open("NhaCC.php", "_self")
}

function New5() {
    window.open("Pill.php", "_self")
}

function New6() {
    window.open("QLDatMua.php", "_self")
}

function New7() {
    window.open("QLBaoGia.php", "_self")
}


function New8() {
    window.open("QLBaoGia.php", "_self")
}

function New9() {
    window.open("QLNhapThuoc.php", "_self")
}

function New10() {
    window.open("QLXuatThuoc.php", "_self")
}


function New11() {
    window.open("QLHuyThuoc.php", "_self")
}


// active 
// Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("bt");


// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");

    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    
  
  });
}


// ///
// ///
// function myFunction() {
//   document.getElementById("myDropdown").classList.toggle("show");
// }

// // Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {
//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }