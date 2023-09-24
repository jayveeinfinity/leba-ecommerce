<template>
    <Head title="Edit car &sdot; Leba Admin Panel &sdot;" />
    <div class="container-fluid py-4 px-5">
        <div class="mt-10 row">
            <div class="col-lg-6">
                <h4>Make the changes below</h4>
                <p>We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play.</p>
            </div>
            <div class="text-right col-lg-6 d-flex flex-column justify-content-center">
                <button type="button" class="mt-2 mb-0 btn btn-dark ms-lg-auto me-lg-0 me-auto mt-lg-0">
                    Save
                </button>
            </div>
        </div>
        <hr class="horizontal dark">
        <div class="mt-4 row">
            <div class="col-lg-5">
                <div class="card card-plain pe-lg-10">
                    <h5 class="font-weight-semibold">General Information</h5>
                    <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder">Product Information</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label>Name</label>
                                <input class="form-control" type="text" value="Jeep Wrangler" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                <label>Model</label>
                                <input class="form-control" type="text" value="Sahara" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label class="mt-4">Type</label>
                                <select class="form-control">
                                    <option>Sedan</option>
                                    <option>SUV</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label class="mt-4">Price</label>
                                <input class="form-control" type="text" value="$990" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 h-100">
                                <label class="mt-4">Description</label>
                                <p class="text-xs form-text text-muted ms-1 d-inline">
                                    (optional)
                                </p>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 row">
        <div class="col-lg-5">
        <div class="card card-plain pe-lg-10">
        <h5 class="font-weight-semibold">Visual Information</h5>
        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.</p>
        </div>
        </div>
        <div class="col-lg-7">
        <div class="card h-100">
        <div class="card-body">
        <div class="d-flex align-items-center">
        <div class="col-6">
        <h5 class="font-weight-bolder">Product Image</h5>
        </div>
        <div class="col-lg-6 text-end">
        <button class="mb-0 btn btn-white me-2 btn-sm" type="button" name="button">
            <FontAwesomeIcon icon="fa-solid fa-trash" /> Remove
        </button>
        <button class="mb-0 btn btn-dark btn-sm" type="button" name="button">
            <FontAwesomeIcon icon="fa-solid fa-edit" /> Edit
        </button>
        </div>
        </div>
        <div class="row">
            <div class="col-12">
                <img class="mt-3 shadow-lg w-100 border-radius-lg" src="https://www.x-cart.com/wp-content/themes/miniflat/build/assets/automotive/wrangler-red-1.webp" alt="car_image">
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <Footer />
    </div>
</template>

<script setup>
    import AdminHeader from '../../../Shared/Partials/CorporateUI/AdminHeader';
    import Footer from '../../../Shared/Partials/CorporateUI/Footer';
</script>