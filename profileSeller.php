<?php
$pageTitle = 'Profile';
include "init.php";
?>


    <div class="container p-3">

        <div class="row shadow rounded p-3 m-5 text-lg-start text-md-center text-sm-center border-start border-5 border-success">
            <div class="col-lg-3 m-auto">
                <h1 class="card-title">UserName</h1>
            </div>
            <div class="col-lg-7 m-auto">
                <div class="m-2">
                    <h4 class="d-inline-block">Email: </h4>
                    <a href="mailto:a.m.hamza156@gmail.com" class="mb-2 link-dark fa-1x "><h5
                                class="text-muted d-inline-block">
                            a.m.hamza156@gmail.com
                        </h5></a>
                </div>
                <div class="m-2">
                    <h4 class="d-inline-block">Mobile: </h4>
                    <h5 class="mb-2 text-muted d-inline-block ">0123456789</h5>
                </div>
                <div class="m-2">
                    <h4 class="d-inline-block">Join date: </h4>
                    <h5 class=" mb-2 text-muted d-inline-block">11-22-2022</h5>
                </div>
            </div>
            <div class="col-lg-2 m-auto">
                <a href="#" class="link-dark"><i class="bi bi-pencil fa-3x"></i></a>
            </div>
        </div>


        <!------------------------------------------------>
        <!--   Dashboard   -->
        <!------------------------------------------------>
        <div class="row justify-content-around m-3">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-4">Total likes</h4>
                        <div class="row flex-row flex-nowrap justify-content-evenly">
                            <div style="width: fit-content">
                                <i class="bi bi-hand-thumbs-up fa-4x"></i>
                                <i class="bi bi-hand-thumbs-down fa-4x"></i>
                            </div>
                            <div class="text-end" style="width: fit-content">
                                <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                                <p class="text-muted mb-1 text-center">Review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-4">Total likes</h4>
                        <div class="row flex-row flex-nowrap justify-content-evenly">
                            <div style="width: fit-content">
                                <i class="bi bi-hand-thumbs-up fa-4x"></i>
                            </div>
                            <div class="text-end" style="width: fit-content">
                                <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                                <p class="text-muted mb-1 text-center">Like</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-4">Total dislikes</h4>
                        <div class="row flex-row flex-nowrap justify-content-evenly">
                            <div style="width: fit-content">
                                <i class="bi bi-hand-thumbs-down fa-4x"></i>
                            </div>
                            <div class="text-end" style="width: fit-content">
                                <h2 class="fw-normal pt-2 mb-1"> 256 </h2>
                                <p class="text-muted mb-1 text-center">Dislike</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------------------------------>
        <!--   For sale   -->
        <!------------------------------------------------>
        <div class="row justify-content-around" id="forSale">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="#forSale" class="btn btn-success m-2 rounded-pill btn-lg">For sale</a>
                <a href="#sold" class="btn btn-success m-2 rounded-pill btn-lg">Sold</a>
                <a href="#deleted" class="btn btn-success m-2 rounded-pill btn-lg">Deleted</a>
            </div>
            <div class="jumbotron jumbotron-fluid m-3">
                <div class="container">
                    <h1 class="display-4">For sale</h1>
                    <hr class="my-4">

                    <p class="lead">List of all items that are offered for sale.</p>
                </div>
            </div>
            <div class="col-sm-12">
                <section class="row flex-row flex-nowrap p-3 overflow-auto profile_scroll rounded position-static">

                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 m-0" style="position: sticky; right: 0;">
                        <a href="add_item.php" class="link-dark">
                            <div class="card m-md-auto shadow" style="width: 18rem;">
                                <div class="m-auto">
                                    <i class="bi bi-plus-circle fa-9x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Item</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </div>


        <!------------------------------------------------>
        <!--   Sold   -->
        <!------------------------------------------------>
        <div class="row justify-content-around" id="sold">
            <div class="jumbotron jumbotron-fluid m-3">
                <div class="container">
                    <h1 class="display-4">Sold</h1>
                    <hr class="my-4">
                    <p class="lead">List of all Sold items.</p>
                </div>
            </div>
            <div class="col-sm-12">
                <section class="row flex-row flex-nowrap p-3 overflow-auto profile_scroll rounded position-static">

                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 m-0" style="position: sticky; right: 0;">
                        <a href="add_item.php" class="link-dark">
                            <div class="card m-md-auto shadow" style="width: 18rem;">
                                <div class="m-auto">
                                    <i class="bi bi-plus-circle fa-9x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Item</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </div>


        <!------------------------------------------------>
        <!--   Deleted   -->
        <!------------------------------------------------>
        <div class="row justify-content-around" id="deleted">
            <div class="col-sm-12">
                <div class="jumbotron jumbotron-fluid m-3">
                    <div class="container">
                        <h1 class="display-4">Deleted</h1>
                        <hr class="my-4">
                        <p class="lead">List of all deleted items.</p>
                    </div>
                </div>
                <section class="row flex-row flex-nowrap p-3 overflow-auto profile_scroll rounded position-static">

                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-0">
                        <div class="card m-md-auto shadow" style="width: 18rem;">
                            <a href="#" class="btn btn-danger rounded-pill position-absolute"
                               style="width: fit-content; top: 0;right: 0">
                                <span class="badge">0</span></a>
                            <img src="<?php echo $imgs . "Login-img.png" ?>" class="card-img-top" alt="Item">
                            <div class="card-body">
                                <h5 class="card-title">Item Name</h5>
                                <h6 class="card-title">Category</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <h4 class="card-title">$30</h4>
                                <div class="card-body">
                                    <a href="#" class="btn btn-success">Go 1</a>
                                    <a href="#" class="btn btn-danger">Go 2</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 m-0" style="position: sticky; right: 0;">
                        <a href="add_item.php" class="link-dark">
                            <div class="card m-md-auto shadow" style="width: 18rem;">
                                <div class="m-auto">
                                    <i class="bi bi-plus-circle fa-9x"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Item</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        </div>

    </div>
<?php include $tpl . "footer.php" ?>