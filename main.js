addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("api.php");
    let data = await peticion.text();
    document.querySelector("#res").insertAdjacentHTML("beforeend", data);
    
})