@extends('layouts.main')
@section('content')
<div id="sidebar" class="sidebar collapsed">
    <!-- Nav tabs -->
    <div class="sidebar-tabs">
        <ul role="tablist">
            <li><a href="#home" role="tab"><i class="fas fa-bars"></i></a></li>
            <li><a href="#book" role="tab"><i class="fas fa-book"></i></a></li>
            <li><a href="#settings" role="tab"><i class="fas fa-cog"></i></a></li>
        </ul>
    </div>
    <!-- Tab panes -->
    <div class="sidebar-content">
        <div class="sidebar-pane" id="home">
            <h1 class="sidebar-header"><span id="sidebarTitle">{{ __('Please click on the point on the map') }}</span><span class="sidebar-close"><i class="fas fa-caret-left"></i></span></h1>
            <div id="sidebarContent">{{ __('Please click on the point on the map') }}</div>
            <div class="btn-group-vertical" role="group" style="width: 100%;">
                <a href="https://forms.gle/XAPs8U5eu56dHsTJ9" target="_blank" class="btn btn-primary btn-lg btn-block">{{ __('Friends from the pharmacy can click here for additional information') }}</a>
                <a href="https://github.com/henryleeworld/laravel-taiwan-mask-stocks-at-national-health-insurance-contracted-pharmacies-map/issues" target="_blank" class="btn btn-primary btn-lg btn-block">{{ __('Site issue feedback') }}</a>
            </div>
        </div>
        <div class="sidebar-pane" id="book">
            <h1 class="sidebar-header"><span id="weekTitle">{{ __('Description') }}</span><span class="sidebar-close"><i class="fas fa-caret-left"></i></span></h1>
            <div>
                {{ __('Illustration description:') }}
                <ul>
                    <li><span style="color:#ccc">▲</span>{{ __(': There is currently no information and it is impossible to determine the stock situation') }}</li>
                    <li><span style="color:#48c774">▲</span>{{ __(': Adult masks > 100 and children\'s masks > 25') }}</li>
                    <li><span style="color:#ffdd57">▲</span>{{ __(': Adult masks > 40 and children\'s masks > 10') }}</li>
                    <li><span style="color:#fc82b1">▲</span>{{ __(': Adult masks > 20 and children\'s masks > 5') }}</li>
                    <li><span style="color:#f00">▲</span>{{ __(': Adult masks') }}
                        <=2 0 {{ __('or children\'s masks') }} <=5 </li>
                            <li>{{ __('Blue dot: your current location (need to agree to site permission)') }}</li>
                </ul>
                {{ __('Notice:') }}
                <ul>
                    <li>{{ __('Some pharmacies use the method of taking numbers to facilitate people to purchase masks because they cannot display the number of numbers taken. If you see the remaining quantity, please call the pharmacy first') }}</li>
                    <li>{{ __('Masks must be obtained following regulations promulgated by the government') }}</li>
                    <li>{{ __('The stock quantity is for reference only, the actual stock is still subject to the on-site of individual units') }}</li>
                    <li>{{ __('Real-name masks 2.0 and 3.0 will come to a perfect end after the 44th round. If you still need to buy real-name masks, please feel free! After the 44th round, the sales channel will return to the 1.0 physical channel, and 58 rural health clinics will continue to sell in community pharmacies and special pharmacies without health insurance') }}</li>
                    <li><a href="https://www.nhi.gov.tw/Content_List.aspx?n=395F52D193F3B5C7&topn=787128DAD5F71B1A" target="_blank">{{ __('Instructions from the National Health Insurance Administration') }}</a></li>
                </ul>
                <img src="images/policy.jpg" style="width: 400px;" />
            </div>
        </div>
        <div class="sidebar-pane" id="settings">
            <h1 class="sidebar-header"><span id="weekTitle">{{ __('Settings') }}</span><span class="sidebar-close"><i class="fas fa-caret-left"></i></span></h1>
            <div>
                <a href="#" class="btn btn-primary btn-lg btn-block mt-3" id="btn-geolocation">{{ __('Return to current location') }}</a>
                <p>
                    <hr />
                </p>
                <div class="card">
                    <h5 class="card-title">{{ __('Search') }}</h5>
                    <div class="mb-3">
                        <label for="findPoint">{{ __('Name or number') }}</label>
                        <input type="text" id="findPoint" name="findPoint" class="form-control"></input>
                    </div>
                </div>
                <p>
                    <hr />
                </p>
                <div class="card">
                    <h5 class="card-title">{{ __('Administrative district filtering') }}</h5>
                    <div class="form-group">
                        <label for="selectCounty">{{ __('County') }}</label>
                        <select id="selectCounty" name="selectCounty" class="form-control form-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="selectTown">{{ __('Town') }}</label>
                        <select id="selectTown" name="selectTown" class="form-control form-select"></select>
                    </div>
                    <div class="mb-3">
                        <label for="selectCunli">{{ __('Village') }}</label>
                        <select id="selectCunli" name="selectCunli" class="form-control form-select"></select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection