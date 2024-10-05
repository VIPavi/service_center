<div id="gallery">
    <div class="container py-4">
        <div class="row">
            <h1 class="fw-bolder text-light text-center pb-4">Gallery</h1>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                <img src="/gas-stove-repair.jpg" class="w-100" height="200" alt="banner-gas" onclick="fullView(event,this.src)">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                <img src="/hob-1.jpg" class="w-100" height="200" alt="hob1" onclick="fullView(event,this.src)">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
                <img src="/chiimney-hob.jpg" class="w-100" height="200" alt="chimney" onclick="fullView(event,this.src)">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                <img src="/banner-gas-stove-4.jpg" class="w-100" height="200" alt="chimney" onclick="fullView(event,this.src)">
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                <img src="/banner-gas-stove-5.jpg" class="w-100" height="200" alt="chimney" onclick="fullView(event,this.src)">
            </div>
        </div>
        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="w-100">
                        <div class="text-end bg-white btn_parent rounded-5 border-2 p-1 pb-0 border-dark">
                            <button type="button" class="btn-close" id="closeModal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body py-0">
                        <div id="image-full-view">
                            <img id="image-view">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>