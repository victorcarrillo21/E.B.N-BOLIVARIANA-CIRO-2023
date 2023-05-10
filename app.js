

const select_all = document.querySelectorAll('.select_representante')

select_all.forEach(select=>{
    select.addEventListener('change' , ()=>{
        id_select=select.id
        value_select=select.value
  
       let data = {id_select:id_select,value_select:value_select}
        
       fetch('http://localhost/E.B.N%20BOLIVARIANA%20CIRO%202023%20//basedata/mysql.php', {
        method: 'POST',
        body: JSON.stringify(data),
        headers: {'Content-Type': 'application/json'}
        })
        .then(function(response) {
        return response.json();
        })
        .then(function(data) {
       /* data.forEach(function(ciudad) {
        var option = document.createElement("option");
        option.value = ciudad.id_ciudad;
        option.text = ciudad.ciudad;
        // aquí puedes agregar el option a un select o a cualquier otro elemento HTML
        select_ciudad.disabled=false
        select_ciudad.appendChild(option)
        });*/
        })
        .catch(function(error) {
        console.error(error);
        });
       
    })
    
})


