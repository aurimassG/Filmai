
//-----HEADER-----//
class MyHeader extends HTMLElement {
    connectedCallBack() {
        this.innerHTML = `
    <header>
    <section class="header-main border-bottom bg-white">
    <div class="container-fluid">
       <div class="row p-2 pt-3 pb-3 d-flex align-items-center">

           <div class="col-md-2">
               <img  class="d-none d-md-flex" src="logo.jpg" width="100">
           </div>

           <div class="col-md-8">
                <div class="d-flex form-inputs">
                    <input class="form-control" type="text" placeholder="Search" width="50">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="dropdown">
                    <button class = "btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>   Genres
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Sci-fi</a></li>
                        <li><a class="dropdown-item" href="#">Horror</a></li>
                        <li><a class="dropdown-item" href="#">Comedy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
</section>
</header>
    `
    }
}

customElements.define('my-header', MyHeader)

