@extends("layouts.admin-master")
@section('title')
	@parent
	:: {{ Lang::get('general.login') }}
@stop
@section("content")
	
	<div id="page-wrapper" style="min-height: 316px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative;"><svg height="347" version="1.1" width="701" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.75px;"><desc>Created with RaphaÃ«l 2.1.2</desc><defs/><text style="text-anchor: end; font: 12px sans-serif;" x="50.16666793823242" y="314.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M62.66666793823242,314.5H676" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="50.16666793823242" y="242.125" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M62.66666793823242,242.125H676" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="50.16666793823242" y="169.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M62.66666793823242,169.75H676" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="50.16666793823242" y="97.375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M62.66666793823242,97.375H676" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="50.16666793823242" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M62.66666793823242,25H676" stroke-width="0.5"/><text style="text-anchor: middle; font: 12px sans-serif;" x="562.7486880649452" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="290.72195580525795" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2011</tspan></text><path style="fill-opacity: 1;" fill="#7cb47c" stroke="none" d="M62.66666793823242,263.22955C79.80031514420074,257.92205,114.06760955613737,246.90666953284259,131.2012567621057,241.99955C148.34266728805858,237.09020703284259,182.6254883399644,230.681312565445,199.76689886591728,223.9637C216.72975303222483,217.316062565445,250.6554613648399,190.52211638377443,267.61831553114746,188.53855C284.3870866978405,186.57767888377444,317.92462903122663,206.74328936340737,334.6934001979197,208.18595C351.827047403888,209.66000186340736,386.09434181582463,199.22373489807475,403.22798902179295,200.2054C420.36939954774584,201.18750989807475,454.6522205996517,233.4668280104712,471.7936311256046,216.04104999999998C488.7564852919121,198.7967905104712,522.6821936245271,69.9371499198901,539.6450477908347,61.52524999999997C556.6001386371577,53.117199919890105,590.5103203298037,136.42715227738555,607.4654111761266,148.76125C624.5990583820949,161.22523977738555,658.8663527940316,157.7285125,675.9999999999999,160.7176L675.9999999999999,314.5L62.66666793823242,314.5Z" fill-opacity="1"/><path style="" fill="none" stroke="#4da74d" d="M62.66666793823242,263.22955C79.80031514420074,257.92205,114.06760955613737,246.90666953284259,131.2012567621057,241.99955C148.34266728805858,237.09020703284259,182.6254883399644,230.681312565445,199.76689886591728,223.9637C216.72975303222483,217.316062565445,250.6554613648399,190.52211638377443,267.61831553114746,188.53855C284.3870866978405,186.57767888377444,317.92462903122663,206.74328936340737,334.6934001979197,208.18595C351.827047403888,209.66000186340736,386.09434181582463,199.22373489807475,403.22798902179295,200.2054C420.36939954774584,201.18750989807475,454.6522205996517,233.4668280104712,471.7936311256046,216.04104999999998C488.7564852919121,198.7967905104712,522.6821936245271,69.9371499198901,539.6450477908347,61.52524999999997C556.6001386371577,53.117199919890105,590.5103203298037,136.42715227738555,607.4654111761266,148.76125C624.5990583820949,161.22523977738555,658.8663527940316,157.7285125,675.9999999999999,160.7176" stroke-width="3"/><circle cx="62.66666793823242" cy="263.22955" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="131.2012567621057" cy="241.99955" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="199.76689886591728" cy="223.9637" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="267.61831553114746" cy="188.53855" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="334.6934001979197" cy="208.18595" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="403.22798902179295" cy="200.2054" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="471.7936311256046" cy="216.04104999999998" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="539.6450477908347" cy="61.52524999999997" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="607.4654111761266" cy="148.76125" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><circle cx="675.9999999999999" cy="160.7176" r="2" fill="#4da74d" stroke="#ffffff" style="" stroke-width="1"/><path style="fill-opacity: 1;" fill="#a7b3bc" stroke="none" d="M62.66666793823242,288.7731C79.80031514420074,282.968625,114.06760955613737,270.6383921432616,131.2012567621057,265.5552C148.34266728805858,260.4697046432616,182.6254883399644,250.87754999999999,199.76689886591728,248.09834999999998C216.72975303222483,245.3481,250.6554613648399,245.6733099971231,267.61831553114746,243.4374C284.3870866978405,241.22707249712312,317.92462903122663,233.41470272498282,334.6934001979197,230.3134C351.827047403888,227.14461522498283,386.09434181582463,218.2255985305776,403.22798902179295,218.35705000000002C420.36939954774584,218.48856103057759,454.6522205996517,244.796837434555,471.7936311256046,231.36525C488.7564852919121,218.07357493455498,522.6821936245271,119.34502843900205,539.6450477908347,111.464C556.6001386371577,103.58657843900205,590.5103203298037,160.05792107720336,607.4654111761266,168.33145C624.5990583820949,176.69210857720336,658.8663527940316,175.58342499999998,675.9999999999999,178.00074999999998L675.9999999999999,314.5L62.66666793823242,314.5Z" fill-opacity="1"/><path style="" fill="none" stroke="#7a92a3" d="M62.66666793823242,288.7731C79.80031514420074,282.968625,114.06760955613737,270.6383921432616,131.2012567621057,265.5552C148.34266728805858,260.4697046432616,182.6254883399644,250.87754999999999,199.76689886591728,248.09834999999998C216.72975303222483,245.3481,250.6554613648399,245.6733099971231,267.61831553114746,243.4374C284.3870866978405,241.22707249712312,317.92462903122663,233.41470272498282,334.6934001979197,230.3134C351.827047403888,227.14461522498283,386.09434181582463,218.2255985305776,403.22798902179295,218.35705000000002C420.36939954774584,218.48856103057759,454.6522205996517,244.796837434555,471.7936311256046,231.36525C488.7564852919121,218.07357493455498,522.6821936245271,119.34502843900205,539.6450477908347,111.464C556.6001386371577,103.58657843900205,590.5103203298037,160.05792107720336,607.4654111761266,168.33145C624.5990583820949,176.69210857720336,658.8663527940316,175.58342499999998,675.9999999999999,178.00074999999998" stroke-width="3"/><circle cx="62.66666793823242" cy="288.7731" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="131.2012567621057" cy="265.5552" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="199.76689886591728" cy="248.09834999999998" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="267.61831553114746" cy="243.4374" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="334.6934001979197" cy="230.3134" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="403.22798902179295" cy="218.35705000000002" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="471.7936311256046" cy="231.36525" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="539.6450477908347" cy="111.464" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="607.4654111761266" cy="168.33145" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><circle cx="675.9999999999999" cy="178.00074999999998" r="2" fill="#7a92a3" stroke="#ffffff" style="" stroke-width="1"/><path style="fill-opacity: 1;" fill="#2577b5" stroke="none" d="M62.66666793823242,288.7731C79.80031514420074,288.5029,114.06760955613737,290.40092385617214,131.2012567621057,287.6923C148.34266728805858,284.98244885617214,182.6254883399644,268.29842722513087,199.76689886591728,267.0992C216.72975303222483,265.9124647251309,250.6554613648399,280.4510854718067,267.61831553114746,278.14845C284.3870866978405,275.8721604718067,317.92462903122663,251.05428841309825,334.6934001979197,248.7835C351.827047403888,246.46330091309824,386.09434181582463,257.384606200453,403.22798902179295,259.7845C420.36939954774584,262.18548120045295,454.6522205996517,279.38875287958115,471.7936311256046,267.98699999999997C488.7564852919121,256.7040153795811,522.6821936245271,176.1242385872053,539.6450477908347,169.04555C556.6001386371577,161.9701010872053,590.5103203298037,203.4017037235254,607.4654111761266,211.37045C624.5990583820949,219.4231162235254,658.8663527940316,227.6910125,675.9999999999999,233.13119999999998L675.9999999999999,314.5L62.66666793823242,314.5Z" fill-opacity="1"/><path style="" fill="none" stroke="#0b62a4" d="M62.66666793823242,288.7731C79.80031514420074,288.5029,114.06760955613737,290.40092385617214,131.2012567621057,287.6923C148.34266728805858,284.98244885617214,182.6254883399644,268.29842722513087,199.76689886591728,267.0992C216.72975303222483,265.9124647251309,250.6554613648399,280.4510854718067,267.61831553114746,278.14845C284.3870866978405,275.8721604718067,317.92462903122663,251.05428841309825,334.6934001979197,248.7835C351.827047403888,246.46330091309824,386.09434181582463,257.384606200453,403.22798902179295,259.7845C420.36939954774584,262.18548120045295,454.6522205996517,279.38875287958115,471.7936311256046,267.98699999999997C488.7564852919121,256.7040153795811,522.6821936245271,176.1242385872053,539.6450477908347,169.04555C556.6001386371577,161.9701010872053,590.5103203298037,203.4017037235254,607.4654111761266,211.37045C624.5990583820949,219.4231162235254,658.8663527940316,227.6910125,675.9999999999999,233.13119999999998" stroke-width="3"/><circle cx="62.66666793823242" cy="288.7731" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="131.2012567621057" cy="287.6923" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="199.76689886591728" cy="267.0992" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="267.61831553114746" cy="278.14845" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="334.6934001979197" cy="248.7835" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="403.22798902179295" cy="259.7845" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="471.7936311256046" cy="267.98699999999997" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="539.6450477908347" cy="169.04555" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="607.4654111761266" cy="211.37045" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/><circle cx="675.9999999999999" cy="233.13119999999998" r="2" fill="#0b62a4" stroke="#ffffff" style="" stroke-width="1"/></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul role="menu" class="dropdown-menu pull-right">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart" style="position: relative;"><svg height="347" version="1.1" width="457" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.549988px; top: -0.5px;"><desc>Created with RaphaÃ«l 2.1.2</desc><defs/><text style="text-anchor: end; font: 12px sans-serif;" x="33.5" y="314.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M46,314.5H432" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="33.5" y="242.125" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">25</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M46,242.125H432" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="33.5" y="169.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">50</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M46,169.75H432" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="33.5" y="97.375" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">75</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M46,97.375H432" stroke-width="0.5"/><text style="text-anchor: end; font: 12px sans-serif;" x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4">100</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M46,25H432" stroke-width="0.5"/><text style="text-anchor: middle; font: 12px sans-serif;" x="404.42857142857144" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2012</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="294.1428571428571" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2010</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="183.85714285714286" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2008</tspan></text><text style="text-anchor: middle; font: 12px sans-serif;" x="73.57142857142857" y="327" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,6.25)"><tspan dy="4">2006</tspan></text><rect x="52.89285714285714" y="25" width="19.17857142857143" height="289.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="75.07142857142857" y="53.94999999999999" width="19.17857142857143" height="260.55" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="108.03571428571428" y="97.375" width="19.17857142857143" height="217.125" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="130.21428571428572" y="126.32499999999999" width="19.17857142857143" height="188.175" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="163.17857142857142" y="169.75" width="19.17857142857143" height="144.75" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="185.35714285714283" y="198.7" width="19.17857142857143" height="115.80000000000001" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="218.32142857142858" y="97.375" width="19.17857142857143" height="217.125" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="240.5" y="126.32499999999999" width="19.17857142857143" height="188.175" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="273.4642857142857" y="169.75" width="19.17857142857143" height="144.75" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="295.64285714285717" y="198.7" width="19.17857142857143" height="115.80000000000001" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="328.6071428571429" y="97.375" width="19.17857142857143" height="217.125" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="350.78571428571433" y="126.32499999999999" width="19.17857142857143" height="188.175" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="383.75000000000006" y="25" width="19.17857142857143" height="289.5" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/><rect x="405.9285714285715" y="53.94999999999999" width="19.17857142857143" height="260.55" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" style="fill-opacity: 1;" fill-opacity="1"/></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle" type="button">
                                                    <i class="fa fa-gear"></i>  <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="#">Action</a>
                                                    </li>
                                                    <li><a href="#">Another action</a>
                                                    </li>
                                                    <li><a href="#">Something else here</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a class="btn btn-default btn-block" href="#">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="panel-body">
                            <div id="morris-donut-chart"><svg height="347" version="1.1" width="319" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.666626px; top: -0.75px;"><desc>Created with RaphaÃ«l 2.1.2</desc><defs/><path style="opacity: 0;" fill="none" stroke="#0b62a4" d="M159.5,275.6666666666667A99.66666666666667,99.66666666666667,0,0,0,253.6681290975732,208.6467135667165" stroke-width="2" opacity="0"/><path style="" fill="#0b62a4" stroke="#ffffff" d="M159.5,278.6666666666667A102.66666666666667,102.66666666666667,0,0,0,256.50262127776773,209.62939056370797L296.02804001270226,223.33227535508897A144.5,144.5,0,0,1,159.5,320.5Z" stroke-width="3"/><path style="opacity: 1;" fill="none" stroke="#3980b5" d="M253.6681290975732,208.6467135667165A99.66666666666667,99.66666666666667,0,0,0,70.09933662699727,131.9436062198517" stroke-width="2" opacity="1"/><path style="" fill="#3980b5" stroke="#ffffff" d="M256.50262127776773,209.62939056370797A102.66666666666667,102.66666666666667,0,0,0,67.40834675958247,130.61749403248933L25.3990049404959,109.91540932977752A149.5,149.5,0,0,1,300.75219364635984,224.97007035007476Z" stroke-width="3"/><path style="opacity: 0;" fill="none" stroke="#679dc6" d="M70.09933662699727,131.9436062198517A99.66666666666667,99.66666666666667,0,0,0,159.4686887937342,275.66666174831386" stroke-width="2" opacity="0"/><path style="" fill="#679dc6" stroke="#ffffff" d="M67.40834675958247,130.61749403248933A102.66666666666667,102.66666666666667,0,0,0,159.4677463159536,278.6666616002698L159.45460398690224,320.49999286921087A144.5,144.5,0,0,1,29.88398805285391,112.12559630871472Z" stroke-width="3"/><text style="text-anchor: middle; font: 800 15px &quot;Arial&quot;;" x="159.5" y="166" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="15px" font-weight="800" transform="matrix(1.7751,0,0,1.7751,-123.623,-135.4428)" stroke-width="0.5633593402977373"><tspan dy="5.25">In-Store Sales</tspan></text><text style="text-anchor: middle; font: 14px &quot;Arial&quot;;" x="159.5" y="186" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" font-size="14px" transform="matrix(2.0764,0,0,2.0764,-171.684,-191.5972)" stroke-width="0.4816053511705686"><tspan dy="5">30</tspan></text></svg></div>
                            <a class="btn btn-default btn-block" href="#">View Details</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/55C1E7/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/FA6F57/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/55C1E7/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img class="img-circle" alt="User Avatar" src="http://placehold.it/50/FA6F57/fff">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input type="text" placeholder="Type your message here..." class="form-control input-sm" id="btn-input">
                                <span class="input-group-btn">
                                    <button id="btn-chat" class="btn btn-warning btn-sm">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
@stop

