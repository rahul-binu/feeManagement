<style>
    .card{
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    #lockIcon {
        color: blue;
        font-size: 45px;
        padding-bottom: 10em;
        text-shadow: 1px 1px 3px black;
    }
</style>

<section class="">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-10 col-lg-4 col-sm-10">
                <h3 class="text-center mb-3 text-primary">NSS College RajaKumari</h3>
                <div class="card shadow-2-strong" >
                    <div class="card-body  text-center">

                        <div class="form-outline">
                            <h3 class="">Staff log in</h3>
                        </div>
                        <div class="">
                        <i class="bi bi-person-circle p-5" id="lockIcon"></i>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" id="-2" class="form-control form-control-lg"
                                placeholder="Email adress or phone number" />
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="-2" class="form-control form-control-lg"
                                placeholder="Password" />
                        </div>


                        <button class="btn btn-primary btn-lg w-100 mb-2" type="submit">Login</button>
                        <span class=""><a href="<?=base_url()?>usersController/registration" class="text-decoration-none ">Create a Account</a></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>