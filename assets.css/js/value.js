
    var save = document.getElementById('save');
    var setting = document.getElementById('setting');
    var table = document.getElementById('table');
    var makhos = document.getElementById('makho').value;
    var tenkhos = document.getElementById('tenkho').value;
    var makhos = document.getElementById('makho').value;
    var tenkhos = document.getElementById('tenkho').value;
    // save.onclick = clickSave ;
    var array = [];
    function clickSave() {
        var makhos = document.getElementById('makho').value;
        var tenkhos = document.getElementById('tenkho').value;
        var makhos = document.getElementById('makho').value;
        var tenkhos = document.getElementById('tenkho').value;
        var khoThuoc = {
            'makho': makhos,
            'tenkho': tenkhos   
        }
        
        if (inDex == -1) {
             addItem(khoThuoc)  
        } else {
            array[inDex] = khoThuoc;
            inDex = -1;
            displayALL()
        }
    }

    function clickSetting() {
        var makhos = document.getElementById('makho').value;
        var tenkhos = document.getElementById('tenkho').value;
        var makhos = document.getElementById('makho').value;
        var tenkhos = document.getElementById('tenkho').value;
        var khoThuoc = {
            'makho': makhos,
            'tenkho': tenkhos   
        }
        
        if (inDex == -1) {
             addItem(khoThuoc)  
        } else {
            array[inDex] = khoThuoc;
            inDex = -1;
            displayALL()
        }
    }


    function displayALL() {
        table.innerHTML = "";
        for(i = 0; i< array.length;i++) {
            var khoThuoc = array[i];
            table.innerHTML += '<tr>' +
            '<td><button onclick= "Edit('+i+ 
            ')">Sửa</button> </td>'+
            // '<td><button  onclick= "deletePill('+(i)+ 
            //         ')">Xóa</button> </td>'+
            '<td>' +khoThuoc. makho + '</td>'+
            '<td>' + khoThuoc.tenkho + '</td>'+
            '</tr>'
            console.log(array.length)
            document.getElementById('makho').value  = '' ;
            document.getElementById('tenkho').value = '' ;     
        }
    }

    function clickDelete() {
        // for(var i = 0; i < array.length; i++){
        //     console.log(array.length)
        //     if (array.length-1 == id) { // nếu là sinh viên cần xóa
        //         array.splice(i, 1); // thì xóa
        //         console.log(array)
        //     }
        // }
        table.innerHTML = "";

    }


    function addItem(khoThuoc) {
        
        array.push(khoThuoc);
        console.log(khoThuoc);
        table.innerHTML += '<tr>' +
                    '<td><button  onclick= "Edit('+(array.length - 1)+ 
                    ')">Sửa</button> </td>'+
                    // '<td><button  onclick= "deletePill('+(array.length - 1)+ 
                    // ')">Xóa</button> </td>'+
                    '<td>' +khoThuoc. makho + '</td>'+
                    '<td>' + khoThuoc.tenkho + '</td>'+
                    '</tr>'
        console.log(array.length)
        document.getElementById('makho').value  = '' ;
        document.getElementById('tenkho').value = '' ;     
    }

    var inDex = -1;
    function Edit(i) {
        inDex = i;
        var khothuoc = array[i];
        document.getElementById('makho').value = khothuoc.makho;
        document.getElementById('tenkho').value = khothuoc.tenkho;
    }
    



