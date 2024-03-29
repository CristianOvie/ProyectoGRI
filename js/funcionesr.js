function limpiar(){
    document.formu.reset();
    document.formu.name.focus();
}
function validar(){
    var form = document.formu;
    if(form.name.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe digitar el nombre'
         });
         form.name.value="";
         form.name.focus();
         return false;
    }
    if(form.pass.value==0){
        Swal.fire({
            icon:'error',
            title:'ERROR!!',
            text : 'Debe digitar la contraseña'
         });
         form.pass.value="";
         form.pass.focus();
         return false;
    }
    form.submit();
}
function validarform() {
    var valor = document.getElementById("fre").value;
    if (valor <= 30) {
        alert("Si la frecuencia es menor a 30, no se debe hacer medición.");
    } else {
        // Aquí puedes mostrar otro mensaje o realizar alguna otra acción si el valor es mayor a 30
    }
}

function validarf(){
    var form = document.formu;
    form.submit();
}
//funcion eliminar
function eliminar(url){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
         window.location=url;
        }
      })
}