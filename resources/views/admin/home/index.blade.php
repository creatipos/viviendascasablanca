@extends('admin.layouts.app')

@section('title', 'Main page')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center m-t-lg">
						<p class="navbar-text navbar-right"><span id="auth-button"></span></p>
<!-- DASHBOARD HEADER -->
<main class="container theme-showcase" role="main">
	<div class="page-header">
	<h1>Google Analytics Dashboard</h1>
	<p>Define tus propios gráficos</p>
	</div>

  <div class="row">
	<div class="col-xs-12 panel panel-defailt">
		<div class="panel-body" id="view-selector">
		</div>
	</div>
  </div>
  <div class="row">
	<div class="col-md-12 col-xs-12">
	
	<a class="btn btn-info" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="collapseExample">Segmentos</a>
	
	<div id="filters" class="collapse panel panel-default"><div class="panel-body">
	<div class="col-xs-12 form-inline" >
		
	
			<div class="form-group">
				<label for="medium-selector"><span class="glyphicon glyphicon-filter"></span> Filter By Medium</label>
				<select id="medium-selector" class="segment-selector form-control">
					<option value="">All Mediums</option>
					<option value="ga:medium=~^\((none|not set)\)$">Direct</option>
					<option value="ga:medium==organic">SEO</option>
					<option value="ga:medium==cpc">SEM</option>
					<option value="ga:medium==referral">Referral</option>
					<option value="ga:medium!~\((none|not set)\);ga:medium!~^(organic|cpc|referral)$">Others</option>
				</select>
			</div>
			&nbsp; 
			<div class="form-group">
				<label for="device-selector"><span class="glyphicon glyphicon-filter"></span> Filter By Devices</label>
				<select id="device-selector" class="segment-selector form-control">
					<option value="">All Devices</option>
					<option value="ga:deviceCategory==desktop">Desktop</option>
					<option value="ga:deviceCategory==tablet">Tablet</option>
					<option value="ga:deviceCategory==mobile">Mobile</option>
					<option value="ga:deviceCategory=~(desktop|tablet)">Desktop & Tablet</option>
					<option value="ga:deviceCategory=~(mobile|tablet)">Mobile & Tablet</option>
				</select>
			</div>
	
	</div>
	</div></div>
	</div>
  </div>
<!-- /DASHBOARD HEADER -->

<!-- DASHBOARD CHARTS --> 
	<div id="dashboard" class="row">
	
	
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="panel panel-default ">
		<div class="panel-body">
		<div class="ga-chart xsmall-height "
			title="Sesiones ({percentchange}) {compared}"
			data-type="metric" 
			data-dimensions=""
			data-metrics="ga:sessions"
			data-start-date="(0)-(0)-(-30)"
			data-end-date="(0)-(0)-(-1)"
			data-filter=""
			data-segment=""
			
			data-compared-metric="ga:sessions"
			data-compared-date="(0)-(-1)-(0)"
			data-compared-segment=""
			
			data-colors="#0099C6"
			data-template="{data} <span class='glyphicon glyphicon-user'></span> "
			></div>
		</div>
		</div>
		</div>
	
		<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="panel panel-default ">
		<div class="panel-body">
		<div class="ga-chart xsmall-height " 
			title="Rebote ({diff})"
			data-type="metric" 
			data-dimensions=""
			data-metrics="ga:bounceRate"
			data-start-date="(0)-(0)-(-31)"
			data-end-date="(0)-(0)-(-1)"
			data-filter=""
			data-segment=""
			
			data-compared-metric="ga:sessions"
			data-compared-date="(0)-(-1)-(0)"
			data-compared-segment=""
			
			data-colors="#666"
			data-template="{data}% <span class='glyphicon glyphicon-share-alt'></span>"
			></div>
		</div>
		</div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="panel panel-default ">
		<div class="panel-body">
		<div class="ga-chart xsmall-height " 
			title="Páginas/Sesión"
			data-type="metric" 
			data-dimensions=""
			data-metrics="ga:pageviewsPerSession"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-colors="#666"
			data-template="{data} <span class='glyphicon glyphicon-duplicate'></span>"
			></div>
		</div>
		</div>
		</div>
		
		<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="panel panel-default ">
		<div class="panel-body">
		<div class="ga-chart xsmall-height "
			title="Transacciones"
			data-type="metric" 
			data-dimensions=""
			data-metrics="ga:transactions"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-colors="#DC3912"
			data-template="{data} <span class='glyphicon glyphicon-shopping-cart'></span>"
			></div>
		</div>
		</div>
		</div>
		
	</div><!-- .row -->
	
	
	
	
	
	
	<div class="row">
		<div class="col-md-12 col-xs-12">
		<div class="panel panel-default ">
		<div class="panel-heading">Tendencia del tráfico con controles</div>
		<div class="panel-body">
		<div class="col-md-2 col-xs-12">
			<select class="ga-chart-control form-control" 
				data-queryvar="metrics" 
				data-targetids="trend-chart" >
				<option value="ga:sessions" data-colors="#0099C6">Sesiones</option>
				<option value="ga:transactions" data-colors="#DC3912">Transacciones</option>
			</select>
			<select class="ga-chart-control form-control" 
				data-queryvar="dimensions" 
				data-targetids="trend-chart" >
				<option value="ga:date" >Por Días</option>
				<option value="ga:yearWeek" >Por semanas</option>
			</select>
		</div>
		<div class="col-md-10 col-xs-12">
		<div class="ga-chart small-height" id="trend-chart"
			title="Últimos 30 días"
			data-type="line" 
			data-dimensions="ga:date"
			data-metrics="ga:sessions"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-colors=""
			></div>
		</div>
		</div>
		</div>
		</div>
	</div><!-- .row -->
	
	<div class="row">
		<div class="col-md-4 col-xs-12">
		<div class="panel panel-default">
		<div class="panel-heading">Distribución por medios</div>
		<div class="panel-body">
		<div class="ga-chart"
			title=""
			data-type="donut" 
			data-dimensions="ga:medium"
			data-metrics="ga:sessions"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-colors=""

			></div>	
		</div>
		</div>
		</div>
		
		<div class="col-md-4 col-xs-12">
		<div class="panel panel-default">
		<div class="panel-heading">Distribución por Países</div>
		<div class="panel-body">
		<div class="ga-chart" 
			title=""
			data-type="geo" 
			data-dimensions="ga:country"
			data-metrics="ga:sessions"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-onselect="segment"
			></div>	
		</div>
		</div>
		</div>
		
		<div class="col-md-4 col-xs-12">
		<div class="panel panel-default">
		<div class="panel-heading">Distribución por dispositivos</div>
		<div class="panel-body">
		<div class="ga-chart" 
			title=""
			data-type="column" 
			data-dimensions="ga:deviceCategory"
			data-metrics="ga:sessions,ga:transactions"
			data-start-date="30daysAgo"
			data-end-date="yesterday"
			data-filter=""
			data-segment=""
			data-colors="#DC3912"
			></div>	
		</div>
		</div>
		</div>
	</div><!-- .row -->

	</div><!-- End Dashboard -->
	</main>
<!-- /DASHBOARD CHARTS -->	
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')
    @parent
<!-- YOUR API ID, CREATE YOURS IN GOOGLE APIs CONSOLE -->


@endsection