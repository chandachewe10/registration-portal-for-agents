<div class="container">
<h2 class="dash">  {{Auth::user()->name}}'s Dashboard</h2>

<div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                            <div class="text-center">
                                    <h2 class="mt-3">Total Sales:: {{$sale_total}} </h2>
                                    <a href="/ecagency/sales" class="ac gradient-4 btn-lg border-0 btn-rounded px-5">View Sales
                                        </a>
                            </div>
                    </div>
                </div>
        </div>
                    
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                         <div class="text-center">
                             <h2 class="mt-3">Total Money</h2>
                             <h3 class="ac">K{{$total_profit}}</h3>
                         </div>
                     </div>
                </div>
         </div>
</div>
<div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                            <div class="text-center">
                                    <h2 class="mt-3"> Scoreboard</h2>
                                    <a href="/ecagency/sales" class="ac gradient-4 btn-lg border-0 btn-rounded px-5" > View
                                        </a>
                            </div>
                    </div>
                </div>
        </div>
                    
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                         <div class="text-center">
                             <h2 class="mt-3">Total Customers:: {{$total_customers}}</h2>
                             <a href="/ecagency/customers" class="ac gradient-4 btn-lg border-0 btn-rounded px-5">View All
                            </a>
                         </div>
                     </div>
                </div>
         </div>
</div>
<div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                            <div class="text-center">
                                    <h2 class="mt-3">Check Reports</h2>
                                    <a href="/ecagency/reports" class="ac gradient-4 btn-lg border-0 btn-rounded px-5" > View
                                        </a>
                            </div>
                    </div>
                </div>
        </div>
                    
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card gradient-3">
                    <div class="card-body">
                         <div class="text-center">
                             <h2 class="mt-3">Potential Customers:: {{$total_clients}}</h2>
                             <a href="/ecagency/potential-clients" class="ac gradient-4 btn-lg border-0 btn-rounded px-5">Add
                            </a>
                         </div>
                     </div>
                </div>
         </div>
</div>


</div>
