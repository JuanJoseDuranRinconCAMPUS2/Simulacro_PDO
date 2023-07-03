

import metodos from "./metodos.js"

async function boardsClick(){
    const tablesPromesa = new Promise((resolve, reject) => {
      const selectorBoards = document.querySelectorAll(".boards");
      if (selectorBoards) {
        resolve(selectorBoards);
       
      } else {
        reject(new Error("El elemento #selectorBoards no se encontró en el DOM"));
      }
    });
    tablesPromesa.then((selectorBoards) => {
      selectorBoards.forEach(option => option.addEventListener("click", (event) => {
        const optionId = event.currentTarget.id;
        metodos.clearContent();
        metodos.getData(optionId);
    }));
      
  }).catch((error) => {
      console.error(error);
  });
}
async function DeleteClick(optionLink){
  const tablesDelete = new Promise((resolve, reject) => {
    const selectorDelete= document.querySelectorAll(".DELETE");
    if (selectorDelete) {
      resolve(selectorDelete);
     
    } else {
      reject(new Error("El elemento #DELETE no se encontró en el DOM"));
    }
  });
  tablesDelete.then((selectorDelete) => {
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelector('.modal__close');
    selectorDelete.forEach(option => option.addEventListener("click", (event) => {
      const optionId = event.currentTarget.id;
      const DeleteID = {"id": optionId}
      var fila = option.parentNode.parentNode;
      fila.parentNode.removeChild(fila)
+     metodos.deteleData(optionLink, DeleteID);
      modal.classList.add('modal--show');
      
    }));
    closeModal.addEventListener('click', (e)=>{
      e.preventDefault();
      modal.classList.remove('modal--show');
    });
  }).catch((error) => {
      console.error(error);
  });
}
async function Theader(data) {
  const theaderPromesa = new Promise((resolve, reject) => {
    const Thead = document.querySelector("#Thead");
    if (Thead) {
      resolve(Thead);
     
    } else {
      reject(new Error("El elemento #Thead no se encontró en el DOM"));
    }
  });
  theaderPromesa.then((Thead) => {
    for (var column in data[0]) {
      Thead.innerHTML += "<th>" + column + "</th>";
    }
  }).catch((error) => {
      console.error(error);
  });
}
async function Tbody(data, option) {
  const tbodyPromesa = new Promise((resolve, reject) => {
    const Tbody= document.querySelector("#Tbody");
    if (Tbody) {
      resolve(Tbody);
     
    } else {
      reject(new Error("El elemento #Tbody no se encontró en el DOM"));
    }
  });
  tbodyPromesa.then((Tbody) => {
    for (var i = 0; i < data.length; i++) {
      var tr = document.createElement("tr");
      tr.insertAdjacentHTML('beforeend', `
        <td>
          <button class="DELETE" id="${data[i][Object.keys(data[i])[0]]}"> Borrar!</button>
        </td>
        <td>
          <button class="PUT" id="${data[i][Object.keys(data[i])[0]]}"> Editar!</button>
        </td>
      `);
      for (var column in data[i]) {
          var td = document.createElement("td");
          td.innerText = data[i][column];
          tr.appendChild(td);
      }
      Tbody.appendChild(tr)
    };
    /* controlador boton delete y update*/
    DeleteClick(option);
    putClick(option);
  }).catch((error) => {
      console.error(error);
  });
}
function FormSelect(option) {
  const formPUT = new Promise((resolve, reject) => {
    const form_put= document.querySelector("#FormPut");
    if (form_put) {
      resolve(form_put);
     
    } else {
      reject(new Error("El elemento #FormPut no se encontró en el DOM"));
    }
  });
  formPUT.then(() => {
    generateOptions();
  }).catch((error) => {
      console.error(error);
  });
}
function generateOptions(){
  const selects = document.querySelectorAll('select');
  selects.forEach(async (select) => {
    const selectName = select.name;
    const options = selectName.replace('id_', '');
    metodos.getID(options, select);
  });
}
function IntroForm(data, option) {
  const wsForm = new Promise((resolve) => {
    const ws = new Worker("./components/wsMyTables.js", {type: "module"});
    let id = [];
    let count = 0;
    ws.postMessage({module: option, data: option});
    ws.postMessage({module: option, data: option});
    id = ["#FormPost", "#FormPut"];
    ws.addEventListener("message", (e)=>{
      let doc = new DOMParser().parseFromString(e.data, "text/html");
      document.querySelector(id[count]).append(...doc.body.children);
      (id.length-1==0) ? ws.terminate(): count++;
    });
    resolve();   
});
wsForm.then(() => {
  setTimeout(() => {
    FormSelect(option);
  }, 100);
}).catch((error) => {
  console.error(error);
});
}
async function buttonPOST(option){
  const postPromesa = new Promise((resolve, reject) => {
    const buttonP = document.querySelector(".Post");
    if (buttonP) {
      resolve(buttonP);
     
    } else {
      reject(new Error("El elemento #selectorBoards no se encontró en el DOM"));
    }
  });
  postPromesa.then((buttonP) => {
    const modal = document.querySelector('.modalPost');
    const formPost = document.querySelector("#FormPost");
    formPost.addEventListener("submit", (e)=>{
      e.preventDefault(); 
      let df = Object.fromEntries(new FormData(e.target));
      metodos.postData(option, df);
      formPost.reset();
    });
    buttonP.addEventListener("click", (event) => {
      modal.classList.add('modal--show');
    }); 
    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        e.preventDefault();
        modal.classList.remove('modal--show');
      }
    });
}).catch((error) => {
    console.error(error);
});
}
async function putClick(optionLink){
  const tablesPut = new Promise((resolve, reject) => {
    const selectorPUT= document.querySelectorAll(".PUT");
    if (selectorPUT) {
      resolve(selectorPUT);
     
    } else {
      reject(new Error("El elemento #DELETE no se encontró en el DOM"));
    }
  });
  tablesPut.then((selectorPUT) => {
    let data;
    const formPut = document.querySelector("#FormPut");
    const modal = document.querySelector('.modalPut');
    selectorPUT.forEach(option => option.addEventListener("click", (event) => {
      const optionId = event.currentTarget.id;
      data = {"id": optionId}
      modal.classList.add('modal--show');
    }));
    sendPut(data, optionLink, formPut);
    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        modal.classList.remove('modal--show');
      }
    });
  }).catch((error) => {
      console.error(error);
  });
}
function sendPut(data, option, formPut) {
  formPut.addEventListener("submit", (e)=>{
    e.preventDefault(); 
    console.log(data);
    let df = Object.fromEntries(new FormData(e.target));
    console.log(df);
    formPut.reset();
  });
}
function IntroTables(option, data) {
  const wsIntro = new Promise((resolve) => {
      const ws = new Worker("./components/wsMyTables.js", {type: "module"});
      let id = [];
      let count = 0;
      ws.postMessage({module:"displayIntro", data: option}) 
      id = [".content"];
      ws.addEventListener("message", (e)=>{
        let doc = new DOMParser().parseFromString(e.data, "text/html");
        document.querySelector(id[count]).append(...doc.body.children);
        (id.length-1==0) ? ws.terminate(): count++;
      });
      resolve();   
  });
  wsIntro.then(() => {
    setTimeout(() => {
      Theader(data);
      Tbody(data, option);
      IntroForm(data, option);
      buttonPOST(option);
    }, 100);
  }).catch((error) => {
    console.error(error);
  });  
}
export default{
    boardsClick,
    IntroTables
}

// const modal = document.querySelector('.modalPut');
//     const closeModal = document.querySelector('.modal__close');
//     selectorDelete.forEach(option => option.addEventListener("click", (event) => {
//       const optionId = event.currentTarget.id;
//       const DeleteID = {"id": optionId}
//       var fila = option.parentNode.parentNode;
//       fila.parentNode.removeChild(fila)
//       modal.classList.add('modal--show');
      
//     }));
//     closeModal.addEventListener('click', (e)=>{
//       e.preventDefault();
//       modal.classList.remove('modal--show');
//     });