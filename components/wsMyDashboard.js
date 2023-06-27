export let wsMyDashboard = {
    displayDash(p1){
        
        return`
            <div id="contenedor">
                <h1 class="title">Dashboard</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Dashboard</a></li>
                </ul>
                <div class="info-data">
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>1500</h2>
                                <p>Traffic</p>
                            </div>
                            <i class='bx bx-trending-up icon' ></i>
                        </div>
                        <span class="progress" data-value="40%"></span>
                        <span class="label">40%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>234</h2>
                                <p>Sales</p>
                            </div>
                            <i class='bx bx-trending-down icon down' ></i>
                        </div>
                        <span class="progress" data-value="60%"></span>
                        <span class="label">60%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>465</h2>
                                <p>Pageviews</p>
                            </div>
                            <i class='bx bx-trending-up icon' ></i>
                        </div>
                        <span class="progress" data-value="30%"></span>
                        <span class="label">30%</span>
                    </div>
                    <div class="card">
                        <div class="head">
                            <div>
                                <h2>235</h2>
                                <p>Visitors</p>
                            </div>
                            <i class='bx bx-trending-up icon' ></i>
                        </div>
                        <span class="progress" data-value="80%"></span>
                        <span class="label">80%</span>
                    </div>
                </div>
                <div class="data">
                    <div class="content-data">
                        <div class="head">
                            <h3>Sales Report</h3>
                        </div>
                        <!-- conteido -->
                        <h1>Hola Mundo</h1>
                    </div>
                
                </div>
            </div>
        `
    }
}

self.addEventListener("message", (e)=>{
    postMessage(wsMyDashboard[`${e.data.module}`](e.data.data));
})