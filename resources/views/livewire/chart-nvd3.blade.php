@extends('layouts.app')

@section('styles')

        <!-- NVD3 CHART CSS -->
        <link href="{{ asset('assets/plugins/charts-nvd3/nv.d3.css') }}" rel="stylesheet" />

@endsection

@section('content')

					<!-- PAGE-HEADER -->
					<div class="page-header">
						<div>
							<h1 class="page-title">Nvd3-Charts</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Nvd3-Charts</li>
							</ol>
						</div>
						<div class="ms-auto pageheader-btn">
							<a href="#" class="btn btn-primary btn-icon text-white me-2">
								<span>
									<i class="fe fe-plus"></i>
								</span> Add Account
							</a>
							<a href="#" class="btn btn-success btn-icon text-white">
								<span>
									<i class="fe fe-log-in"></i>
								</span> Export
							</a>
						</div>
					</div>
					<!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Bar Chart With Multiple colors</h3>
								</div>
								<div class="card-body">
									<div id="nvd3-chart1" class="h-400"> <svg></svg></div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Bar Chart</h3>
								</div>
								<div class="card-body">
									<svg id="nvd3-chart2" class="h-400"></svg>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Line Chart With Zooming Options</h3>
								</div>
								<div class="card-body">
									<div id="chartZoom">
										<a class="btn btn-outline-secondary btn-sm" id="zoomIn">+</a> <a  class="btn btn-outline-secondary btn-sm" id="zoomOut">-</a>
									</div>
									<div id="nvd3-chart3" class="with-transitions h-400"><svg></svg></div>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-1 CLOSED -->

@endsection('content')

@section('scripts')

        <!-- NVD3-CHARTS JS -->
        <script src="{{ asset('assets/plugins/charts-nvd3/d3.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/charts-nvd3/nv.d3.js') }}"></script>
		<script src="{{ asset('assets/plugins/charts-nvd3/stream_layers.js') }}"></script>
		<script src="{{ asset('assets/js/nvd3.js') }}"></script>

@endsection
