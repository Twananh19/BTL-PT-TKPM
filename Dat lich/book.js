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