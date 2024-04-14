console.log(document.getElementById("form_product-add"));

document.getElementById("form_product-add").onsubmit = function(event) {
    console.log('eeee');
    event.preventDefault();
    let data = new FormData(event.target);
    
    fetch('task1/api/add.php', {
        method: 'POST',
        body: data
    })
    .then(res => res.json())
    .catch(err => console.log(err))
    .then(data => {
        console.log(data);
        if(data.status === 'ok') {
            alert('Успешное добавление');
        }
    } );
}