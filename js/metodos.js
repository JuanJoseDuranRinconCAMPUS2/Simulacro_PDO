const url = window.location.href;
const URLT = url.replace('/index.html', '/uploads');

import mytables from "./mytables.js";

async function getData(option){   
    const url = `${URLT}/${option}`;
    fetch(url)
    .then(response => response.json())
    .then(data => {
        mytables.IntroTables(option, data);
    })
    .catch(error => {
    console.error('Error:', error);
    });
}
async function postData(option, data) {
    const url = `${URLT}/${option}`;
    fetch(url, {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
    })
    .then(response => response)
    .then(result => {
      clearContent();
      getData(option);
    })
    .catch(error => {
    console.error('Error:', error);
    });
}
async function putData(option, data){
    const url = `${URLT}/${option}`;
    fetch(url, {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
      .then(response => response.json())
      .then(result => {
        console.log(result);
      })
      .catch(error => {
        console.error('Error:', error);
      });
}
async function deteleData(option, id) {
    const url = `${URLT}/${option}`;
    fetch(url, {
    method: 'DELETE',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(id),
    })
    .then(response => response)
    .then(result => {
    console.log("data eliminada");
    })
    .catch(error => {
    console.error('Error:', error);
    });
}
async function getID(option, select){   
  const url = `${URLT}/${option}`;
  fetch(url)
  .then(response => response.json())
  .then(data => {
    const ids = [];
    const firstItem = data[0];
    const idProperty = Object.keys(firstItem)[0];
    data.forEach(item => {
        if (item.hasOwnProperty(idProperty)) {
          ids.push(item[idProperty]);
        }
      });
    ids.forEach(id => {
      select.insertAdjacentHTML('beforeend', `<option value="${id}">${id}</option>`);
    });
  }
  )
  .catch(error => {
  console.error('Error:', error);
  });
}
function clearContent() {
    const mainElement = document.querySelector('.content');
    if (mainElement) {
      mainElement.innerHTML = '';
    }
}
export default{
    getData,
    postData,
    putData,
    deteleData,
    getID,
    clearContent
}