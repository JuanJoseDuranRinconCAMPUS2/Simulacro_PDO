export default{
    showDarshBoard(){
        const ws = new Worker("./components/wsMyDashboard.js", {type: "module"});
        let id = [];
        let count = 0;
        ws.postMessage({module:"displayDash", }) 
        id = [".content"]
        ws.addEventListener("message", (e)=>{
            let doc = new DOMParser().parseFromString(e.data, "text/html");
            document.querySelector(id[count]).append(...doc.body.children);
            (id.length-1==0) ? ws.terminate(): count++;
        });
    }
}