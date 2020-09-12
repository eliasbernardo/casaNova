window.onload = function() {
    categorias(holaMundo);
  };
  
  function holaMundo(response){
      let data=JSON.parse(response);
      data.forEach(resp=>{
        const div=document.getElementById('container');
        div.style.backgroundColor = "red";
        let element=document.createElement('h1');
        let otroElemento=document.createElement('p');
        otroElemento.innerHTML="hola Mundo parrafo";
        element.className="etiqueta";
        element.innerText=resp;
        div.appendChild(element);
        div.appendChild(otroElemento);
      });
  }
  let imagenes=['imagen1','imagen2','imagen3','imagen4','imagen5','imagen6'];

  let galeria = [];
  function init(){

        galeria = imagenes.sort(function() {return (Math.random()-0.5)});;

        for(let i=0;i<10;i++){
            const div=document.getElementById('container');
            let element=document.createElement('img');
            element.src=`./img/${publicacion[i].imagen}.jpg`;
            element.className='imagen';
            div.appendChild(element);
        }   
        
    }
    
    function categorias(callback){
        //127.0.0.9/jokes/categorias
            let url='https://api.chucknorris.io/jokes/categories';
            
            let xhr = new XMLHttpRequest();
            

            
            xhr.open('GET',url , true);
              xhr.responseType = 'text';
              xhr.onreadystatechange = function () {
                  if (xhr.status == 200 && xhr.readyState == 4) {
                      callback(xhr.responseText);
                  }
              };
              xhr.send();
        }
    


      
      

    
  