function buscarUsuarios() {
    let opciones ={method:"GET"}
                let parametros = "?controlador=Usuarios&metodo=buscarUsuarios";
                parametros +="&" +new URLSearchParams(new FormData(document.getElementById("formularioBuscar"))).toString();
                fetch("C_Ajax.php"+parametros, opciones)
                .then( res=> {
                    if(res.ok){
                        console.log('respuesta ok')
                        return res.text();
                    }
                })
                .then(vista=>{
                    document.getElementById("capaResultadoBusqueda").innerHTML = vista; 
                })
                .catch(err => {
                    console.log("Error al realizar la peticion", err.message)
                })
}