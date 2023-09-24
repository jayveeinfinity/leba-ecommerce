<template>
    <Head title="Orders &sdot; Leba Admin Panel &sdot;" />
    <div class="container-fluid py-4 px-5">
        <div class="mt-7 row">
            <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pb-0">
                <div class="d-sm-flex align-items-center">
                    <div>
                    <h6 class="font-weight-semibold text-lg mb-0">Order list (3)</h6>
                    <p class="text-sm">See information about all orders</p>
                    </div>
                    <div class="ms-auto d-flex">
                    <button type="button" class="btn btn-sm btn-white me-2">
                        <FontAwesomeIcon icon="fa-solid fa-file-export" /> Export
                    </button>
                    <!-- <a href="/admin/cars/create" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                        <span class="btn-inner--icon me-1">
                        <FontAwesomeIcon icon="fa-solid fa-plus" />
                        </span>
                        <span class="btn-inner--text">Add car</span>
                    </a> -->
                    </div>
                </div>
                </div>
                <div class="card-body px-0 py-0">
                <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                    <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" name="btn-check-status" :id="'btn-all'" autocomplete="off" checked @click="applyType(search, 'All')"  :value="'All'">
                    <label class="btn btn-white px-3 mb-0" :for="'btn-all'">All</label>
                    <input type="radio" class="btn-check" name="btn-check-status" :id="'btn-active'" autocomplete="off" @click="applyType(search, 'Active')" :value="'Active'">
                    <label class="btn btn-white px-3 mb-0" :for="'btn-active'">Active</label>
                    <input type="radio" class="btn-check" name="btn-check-status" :id="'btn-inactive'" autocomplete="off" @click="applyType(search, 'Inactive')"  :value="'Inactive'">
                    <label class="btn btn-white px-3 mb-0" :for="'btn-inactive'">Inactive</label>
                    </div>
                    <div class="input-group w-sm-25 ms-auto">
                    <span class="input-group-text text-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search" v-model="search">
                    </div>
                </div>
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead class="bg-gray-100">
                            <tr>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7">#</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Date</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7">Status</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Customer</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Product</th>
                            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr v-for="user in users.data" :key="user.user_id"> -->
                            <tr>
                                <!-- <td class="align-middle">
                                    <div class="d-flex px-2">
                                        <div class="avatar rounded-circle me-1 bg-gradient-primary">
                                        <span>{{ "J".toUpperCase() }}</span>
                                        </div>
                                        <div class="avatar rounded-circle bg-gray-100 me-1 my-2">
                                            <img src="https://www.x-cart.com/wp-content/themes/miniflat/build/assets/automotive/wrangler-red-1.webp" class="w-80" alt="car">
                                        </div>
                                        <div class="my-auto">
                                            <div class="px-2">
                                                <p class="text-dark fw-bold text-sm mb-0"><a href="/admin/cars/1" class="text-primary">Jeep Wrangler</a></p>
                                                <p class="text-secondary text-sm mb-0">Sahara</p>
                                            </div>
                                        </div>
                                    </div>
                                </td> -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-xs font-weight-bold ms-2">#10421</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button disabled="" class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <FontAwesomeIcon icon="fa-solid fa-check" />
                                        </button>
                                        <span>Paid</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/team-2.jpg" class="avatar avatar-xs rounded-circle me-2" alt="user image">
                                        <span>Orlando Imieto</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">Jeep Wrangler Sahara</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$89,53</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-xs font-weight-bold ms-2">#10422</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 10:53 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button disabled="" class="mb-0 btn btn-icon-only btn-rounded btn-outline-danger me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <FontAwesomeIcon icon="fa-solid fa-times" />
                                        </button>
                                        <span>Canceled</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/team-1.jpg" class="avatar avatar-xs rounded-circle me-2" alt="user image">
                                        <span>Alice Murinho</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">Honda Civic Type RS Turbo</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$112,50</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 text-xs font-weight-bold ms-2">#10423</p>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <span class="my-2 text-xs">1 Nov, 11:13 AM</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <button disabled="" class="mb-0 btn btn-icon-only btn-rounded btn-outline-dark me-2 btn-sm d-flex align-items-center justify-content-center">
                                            <FontAwesomeIcon icon="fa-solid fa-arrow-rotate-left" />
                                        </button>
                                        <span>Refunded</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs rounded-circle me-1 bg-gradient-primary">
                                            <span>{{ "M".toUpperCase() }}</span>
                                        </div>
                                        <span>Michael Mirra</span>
                                    </div>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">Toyota Supra</span>
                                </td>
                                <td class="text-xs font-weight-bold">
                                    <span class="my-2 text-xs">$500,50</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <Pagination :links="users.links" :prevLink="users.prev_page_url" :nextLink="users.next_page_url" :lastPage="users.last_page"/> -->
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

    const props = defineProps ({
        users: Object,
        search: {
            type: String,
            default: null
        }
    });

    const applyType = (search, type) => {

    }
</script>