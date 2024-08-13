@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4">
    <!-- Dashboard Content -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-1" style="height: 0.2rem;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">68</h4>
                        <span class="card-text ps-2">New Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/1.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- 2 --}}
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-1" style="height: 0.2rem;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">16</h4>
                        <span class="card-text ps-2">Pending Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/2.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 3 --}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-dark" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">26</h4>
                        <span class="card-text ps-2">Approved Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/3.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 4 --}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-4" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">68</h4>
                        <span class="card-text ps-2">Shipment Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/4.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 5 --}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-5" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">68</h4>
                        <span class="card-text ps-2">Delivered Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/5.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 6 --}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-6" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">8</h4>
                        <span class="card-text ps-2">Return Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/6.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 7 --}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-7" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">628</h4>
                        <span class="card-text ps-2">Cancel Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/7.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         {{-- 8--}}
         <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-8" style="height: 2px;"></div> <!-- Top color bar -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 me-2">68</h4>
                        <span class="card-text ps-2">All Order</span>
                    </div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="images/png/8.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat cards as needed -->
    </div>
    {{-- QWuote --}}
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-9" style="height: 1px;"></div>
                <div class="card-body"> <div class="card-text fs-5">Quote Request</div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">12 Items</p>
                            <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                        </div> <div class="ms-auto">
                            <img src="images/png/9.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Card 2 -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-header bg-10" style="height: 1px;"></div>
                        <div class="card-body"> <div class="card-text fs-5">Approved Quote</div>
                            <div class="d-flex mt-1">
                                <div class="flex-grow-1">
                                    <p class="mb-1">16 Items</p>
                                    <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                                </div> <div class="ms-auto">
                                    <img src="images/png/10.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        <!-- Card 3 -->
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-header bg-11" style="height: 1px;"></div>
                        <div class="card-body"> <div class="card-text fs-5">Failed Quote</div>
                            <div class="d-flex mt-1">
                                <div class="flex-grow-1">
                                    <p class="mb-1">32 Items</p>
                                    <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                                </div> <div class="ms-auto">
                                    <img src="images/png/12.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    <div class="row">
         <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-lg h-100">
                        <div class="card-header bg-12" style="height: 1px;"></div>
                        <div class="card-body"> <div class="card-text fs-5">Manufacture Order</div>
                            <div class="d-flex mt-1">
                                <div class="flex-grow-1">
                                    <p class="mb-1">62 Items</p>
                                    <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                                </div> <div class="ms-auto">
                                    <img src="images/png/13.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- Card 5 -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-13" style="height: 1px;"></div>
                <div class="card-body"> <div class="card-text fs-5">Approved Manufacture</div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">52 Items</p>
                            <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                        </div> <div class="ms-auto">
                            <img src="images/png/14.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>        <!-- Card 6 -->
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-header bg-14" style="height: 1px;"></div>
                <div class="card-body"> <div class="card-text fs-5">Manufacture To Purchase</div>
                    <div class="d-flex mt-1">
                        <div class="flex-grow-1">
                            <p class="mb-1">2 Items</p>
                            <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                        </div> <div class="ms-auto">
                            <img src="images/png/15.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
                   <div class="card shadow-lg h-100">
                       <div class="card-header bg-15" style="height: 1px;"></div>
                       <div class="card-body"> <div class="card-text fs-5">Purchase Order</div>
                           <div class="d-flex mt-1">
                               <div class="flex-grow-1">
                                   <p class="mb-1">62 Items</p>
                                   <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                               </div> <div class="ms-auto">
                                   <img src="images/png/16.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
                       <!-- Card 5 -->
       <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
           <div class="card shadow-lg h-100">
               <div class="card-header bg-16" style="height: 1px;"></div>
               <div class="card-body"> <div class="card-text fs-5">Purchase Approved </div>
                   <div class="d-flex mt-1">
                       <div class="flex-grow-1">
                           <p class="mb-1">52 Items</p>
                           <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                       </div> <div class="ms-auto">
                           <img src="images/png/17.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                       </div>
                   </div>
               </div>
           </div>
       </div>        <!-- Card 6 -->
       <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
           <div class="card shadow-lg h-100">
               <div class="card-header bg-17" style="height: 1px;"></div>
               <div class="card-body"> <div class="card-text fs-5"> Purchase Request</div>
                   <div class="d-flex mt-1">
                       <div class="flex-grow-1">
                           <p class="mb-1">2 Items</p>
                           <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                       </div> <div class="ms-auto">
                           <img src="images/png/18.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
               <div class="card shadow-lg h-100">
                   <div class="card-header bg-18" style="height: 1px;"></div>
                   <div class="card-body"> <div class="card-text fs-5">Low Stock Products</div>
                       <div class="d-flex mt-1">
                           <div class="flex-grow-1">
                               <p class="mb-1">62 Items</p>
                               <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                           </div> <div class="ms-auto">
                               <img src="images/png/19.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
                   <!-- Card 5 -->
     <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
       <div class="card shadow-lg h-100">
           <div class="card-header bg-19" style="height: 1px;"></div>
           <div class="card-body"> <div class="card-text fs-5">Top Selling Projects </div>
               <div class="d-flex mt-1">
                   <div class="flex-grow-1">
                       <p class="mb-1">52 Items</p>
                       <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                   </div> <div class="ms-auto">
                       <img src="images/png/20.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                   </div>
               </div>
           </div>
       </div>
   </div>        <!-- Card 6 -->
     <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4">
       <div class="card shadow-lg h-100">
           <div class="card-header bg-20" style="height: 1px;"></div>
           <div class="card-body"> <div class="card-text fs-5"> Available Stock</div>
               <div class="d-flex mt-1">
                   <div class="flex-grow-1">
                       <p class="mb-1">2 Items</p>
                       <a href="#" class="text-muted">More info <i class="fas fa-info-circle"></i></a>
                   </div> <div class="ms-auto">
                       <img src="images/png/21.png" alt="Quote Icon" class="img-fluid" style="width: 50px; height: 50px;">
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="row">
    <!-- Card 1: Accounts -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
         <div class="fs-5 mb-3">Accounts</div><div class="card h-100">

            <div class="card-body">
                <h5 class="card-title">Balance</h5>
                <p class="mb-1">Cash : <span class="float-end">213450</span></p>
                <p class="mb-1">Bank AC : <span class="float-end">321324</span></p>
            </div>
            <div class="card-footer text-white bg-dark">
                <span>In Total : <span class="float-end">45600</span></span>
            </div>
        </div>
    </div>

    <!-- Card 2: To Pay -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
        <div class="fs-5 mb-3">To Pay</div> <div class="card h-100">

            <div class="card-body">
                <h5 class="card-title">Balance</h5>
                <p class="mb-1">Manufacturer : <span class="float-end">32324</span></p>
                <p class="mb-1">Customer : <span class="float-end">213450</span></p>
                <p class="mb-1">Today Debit : <span class="float-end">321324</span></p>
            </div>
            <div class="card-footer text-white bg-dark">
                <span>To Pay : <span class="float-end">5600</span></span>
            </div>
        </div>
    </div>

    <!-- Card 3: To Receive -->
    <div class="col-12 col-sm-6 col-md-4 mb-4">
         <div class="fs-5 mb-3">To Receive</div> <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title">Balance</h5>
                <p class="mb-1">Manufacturer : <span class="float-end">32324</span></p>
                <p class="mb-1">Customer : <span class="float-end">213450</span></p>
                <p class="mb-1">Today Received : <span class="float-end">321324</span></p>
            </div>
            <div class="card-footer text-white bg-dark">
                <span>To Receive : <span class="float-end">125600</span></span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12"><div class=" text-center bg-light pt-4 fs-5 pb-3">
                    <strong>Emergency Notice</strong>
                </div>
            <div class="card">

                <div class="card-body">
                    <ol class="mb-0">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
