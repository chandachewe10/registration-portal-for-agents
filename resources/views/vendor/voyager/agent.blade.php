<div class="container">
<h2>  {{Auth::user()->name}}'s Dashboard</h2>

<div class="row">
<div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card  gradient-3">
                    <div class="card-body">
                         <div class="text-center">
                             <h2 class="mt-3">Potential Customers #{{$p_clients }}</h2>
                             <a href="/ecagency/potential-clients" class="ac gradient-4 btn-lg border-0 btn-rounded px-5">Add
                            </a>
                         </div>
                     </div>
                </div>
         </div>
       
                    
        <div class="col-xl-3 col-md-6 mb-4 ">
                <div class="card gradient-3">
                    <div class="card-body">
                         <div class="text-center">
                             <h2 class="mt-3">Profit</h2>
                             <a href="/ecagency/" class="ac gradient-4 btn-lg border-0 btn-rounded px-5">K{{$profit}}
                            </a>
                         </div>
                     </div>
                </div>
         </div>
</div>
<div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  gradient-3">
                    <div class="card-body">
                            <div class="text-center">
                                    <h2 class="mt-3">Rank#{{$position}}</h2>
                                    <a href="/ecagency/sales" class="ac gradient-4 btn-lg border-0 btn-rounded px-5"> View Scoreboard
                                        </a>
                            </div>
                    </div>
                </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
                <div class="card  gradient-3">
                    <div class="card-body">
                            <div class="text-center">
                                    <h2 class="mt-3">Report</h2>
                                    <a href="/ecagency/reports" class="ac gradient-4 btn-lg border-0 btn-rounded px-5" >create Report
                                        </a>
                            </div>
                    </div>
                </div>
        </div>
                    

</div>

</div>
