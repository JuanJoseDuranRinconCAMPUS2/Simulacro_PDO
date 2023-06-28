export let wsMyTables= {
    displayIntro(p1){
        return`
        <div id="contenedor">
            <h1 class="title"><i class='bx bxs-lemon bx-spin'></i>${p1}</h1>
            <ul class="breadcrumbs">
                <li><a>Home</a></li>
                <li class="divider">/</li>
                <li><a class="active">${p1}</a></li>
            </ul>
            <div class="data">
                <div class="content-data">
                    <div class="head">
                        <h3>Tabla De Datos(${p1})</h3>
                    </div>
                    <!-- conteido -->
                    <div id="contenedorTabla">
                        <table id="TablaDatos">
                        <thead>
                            <tr id="Thead">
                                <th> ¡Borrar! </th>
                                <th> ¡Actualizar! </th>
                            </tr>
                        </thead>
                        <tbody id="Tbody">
                        </tbody>
                    </div>
                </table>
                </div>
            
            </div>
        </div>
        <section class="modal ">
            <div class="modal__container">
            <img src="https://cdn.dribbble.com/users/592004/screenshots/2953817/___.gif" class="modal__img">
            <h2 class="modal__paragraph">Data Eliminada correctamente!</h2>
            <p class="modal__paragraph">La fila seleccionada a sido borrada
            exitosamente.</p>
            <button class="modal__close">Cerrar Modal</button>
            </div>
        </section>

        `
    },
    displayContentTB(p1){
        return`
        
        `;
    }
}

self.addEventListener("message", (e)=>{
    postMessage(wsMyTables[`${e.data.module}`](e.data.data));
})