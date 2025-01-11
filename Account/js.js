function meow(){
    const p = document.querySelectorAll('p');
    const span= document.querySelectorAll('span');
    const label=document.querySelectorAll('label')
    const option=document.querySelectorAll('option')
    

    p.forEach(p => {
        p.textContent = 'meow meow';
    })
    span.forEach(span => {
        span.textContent = 'meow meow';
    })
    label.forEach(label => {
        label.textContent = 'meow meow';
    })
    option.forEach(option => {
        option.textContent = 'meow meow';
    })
    
}

function load(){
    document.getElementById('load').style.display='block';
}

function unload(){
    document.getElementById('load').style.display='none';
}
window.onload = function() {
    var statu = "signed"; // Biến trạng thái
    updateSignStatus();

    function updateSignStatus() {
        if (statu === "signed") {
            document.getElementById('sign_or_not1').innerHTML = "<b>TÀI KHOẢN</b>";
            document.getElementById('sign_or_not2').innerHTML = "Tài khoản";
        }
    }
};

function enableEdit(n) { 
    let inputField = document.getElementsByClassName('info-input')[n]; 
    document.getElementsByClassName('edit')[n].style.display="none";
    document.getElementsByClassName('unedit')[n].style.display="block";
    if(n==4){
        AddressEdit();
        return;
    }
    inputField.readOnly = false; 
    inputField.focus(); // Đặt con trỏ vào ô nhập liệu 
    
    if(n==1){
        var options = inputField.options;
        for(var i=0;i<options.length;i++){
            options[i].style.display="block";
        }
    }

}

function unableEdit(n){
    let inputField = document.getElementsByClassName('info-input')[n]; 
    document.getElementsByClassName('edit')[n].style.display="block";
    document.getElementsByClassName('unedit')[n].style.display="none";  
    if(n==4){
        AddressDone(inputField);
        return;
    }
    inputField.readOnly = true; 
    inputField.focus(); // Đặt con trỏ vào ô nhập liệu   
    
    if(n==1){
        var options = inputField.options;
        for(var i=0;i<options.length;i++){
            options[i].style.display="none";
        }
    }
    let selected=inputField.value;
    alert("User choiced: "+selected);
}
function AddressEdit(){
    let value = document.getElementById('address_user').value;
    let parts = value.split('-');
    let province = document.getElementById('province-select'); 
    let district = document.getElementById('district-select'); 
    let ward = document.getElementById('ward-select'); 

    let options = province.options;
    alert(parts[2]);
    alert(parts[1]);
    alert(parts[0]);
    for (let i = 0; i < options.length; i++) { 
        if (options[i].value === parts[2]) { 
            options[i].selected = true; 
            break; 
        } 
    }
    options = district.options; 
    for (let i = 0; i < options.length; i++) { 
        if (options[i].value === parts[1]) { 
            options[i].selected = true; 
            break; 
        } 
    }
    options = ward.options; 
    for (let i = 0; i < options.length; i++) { 
        if (options[i].value === parts[0]) { 
            options[i].selected = true; 
            break; 
        } 
    }
    document.getElementsByClassName('addres_edit')[0].style.display="flex";
}
function AddressDone(id){
    chance_width(id);
    let province = document.getElementById('province-select').options[document.getElementById('province-select').selectedIndex].textContent;
    let district = document.getElementById('district-select').options[document.getElementById('district-select').selectedIndex].textContent;
    let ward = document.getElementById('ward-select').options[document.getElementById('ward-select').selectedIndex].textContent;
    let address_user = ward+" - "+district+" - "+province;
    alert(address_user);
    document.getElementById('address_user').value= address_user;
    document.getElementsByClassName('addres_edit')[0].style.display="none";
    
}
function chance_width(id){
    id.style.width ="auto"; 
    id.style.width =(id.scrollWidth+4)+"px"; 
}