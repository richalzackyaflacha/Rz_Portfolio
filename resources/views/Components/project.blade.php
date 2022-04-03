{{-- Project Section --}}
<div id="project" class="project-section">
    {{-- Title Section --}}
    <div class="header" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="line"></div>

        <div class="logo">
            <h3>My Project</h3>
        </div>

        <div class="box"></div>
    </div>

    {{-- Card Project --}}
    <div class="portfolio-project">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 g-4">
            <div class="col" data-aos="flip-up" data-aos-duration="1500">
                <div class="card">
                    <div class="card-img">
                        <img class="myImg" src="{{ asset('img/project/project1.png') }}" alt="Rz Portfolio">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Rz Portfolio</h4>
                        <p class="card-text">This is my main portfolio project. made using HTML, CSS & JavaScript, took 5 days to make this and 2 days to perfect.</p>
                    </div>
                    <div class="card-button">
                        <a href="https://rz-portfolio.herokuapp.com/" target="_blank"><button class="btn-d">Demo</button></a>
                        <a href="https://github.com/richalzackyaflacha/Rz_Portfolio" target="_blank"><button class="btn-g">Git Hub</button></a>
                    </div>
                </div>
            </div>

            <div class="col" data-aos="flip-up" data-aos-duration="1500">
                <div class="card">
                    <div class="card-img">
                        <img class="myImg" src="{{ asset('img/project/project2.png') }}" alt="Rz Cafe">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Rz Cafe</h4>
                        <p class="card-text">This is an ordering and payment (cashier) project. Made using the Laravel framework and I have recently updated it.</p>
                    </div>
                    <div class="card-button">
                        <a href="" target="_blank"><button class="btn-d">Demo</button></a>
                        <a href="" target="_blank"><button class="btn-g">Git Hub</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<div class="modal">
    <span class="close"><i class="fa-solid fa-xmark"></i></span>
    <img class="modal-content">
</div>
