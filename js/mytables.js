const url = window.location.href;
const URLT = url.replace('/index.html', '/uploads');
console.log(URLT);

async function getData(){
            
    const url = `${URLT}/campers`;
    fetch(url)
    .then(response => response.json())
    .then(data => {
        // Hacer algo con los datos recibidos
        console.log(data);
    })
    .catch(error => {
    console.error('Error:', error);
    });

}


export default{
    getData,
}