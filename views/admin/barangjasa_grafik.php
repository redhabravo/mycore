<div class="content-wrapper">
 <!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Barang Jasa
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li>Barang Jasa</li>
			<li class="active">Grafik</li>
		</ol>
	</section>

	<section class="content">

		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">Grafik</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">


											<script src="<?php echo base_url() ?>vendor/nnnick/chartjs/dist/Chart.bundle.js"></script>
											<script src="<?php echo base_url() ?>vendor/nnnick/chartjs/samples/utils.js"></script>

											<div id="container" style="width: 100%;">
												<canvas id="canvas"></canvas>
											</div>

					<button id="randomizeData">Randomize Data</button>
					<!-- <button id="addDataset">Add Dataset</button>
					<button id="removeDataset">Remove Dataset</button>
					<button id="addData">Add Data</button>
					<button id="removeData">Remove Data</button> -->

					<script>
						var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
						var color = Chart.helpers.color;
						var barChartData = {
							labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
							datasets: [{
								label: 'Paket Masuk',
								backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
								borderColor: window.chartColors.blue,
								borderWidth: 1,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								]
							}, {
								label: 'Paket Tayang',
								backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
								borderColor: window.chartColors.green,
								borderWidth: 1,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								]
							}, {
								label: 'Paket SP',
								backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
								borderColor: window.chartColors.yellow,
								borderWidth: 1,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								]
							}, {
								label: 'Paket Batal',
								backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
								borderColor: window.chartColors.red,
								borderWidth: 1,
								data: [
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor(),
									randomScalingFactor()
								]
							}]

						};

						window.onload = function() {
							var ctx = document.getElementById('canvas').getContext('2d');
							window.myBar = new Chart(ctx, {
								type: 'bar',
								data: barChartData,
								options: {
									responsive: true,
									legend: {
										position: 'top',
									},
									title: {
										display: true,
										// text: 'Chart.js Bar Chart'
									},
								}
							});

						};

						document.getElementById('randomizeData').addEventListener('click', function() {
							var zero = Math.random() < 0.2 ? true : false;
							barChartData.datasets.forEach(function(dataset) {
								dataset.data = dataset.data.map(function() {
									return zero ? 0.0 : randomScalingFactor();
								});

							});
							window.myBar.update();
						});

						var colorNames = Object.keys(window.chartColors);
						document.getElementById('addDataset').addEventListener('click', function() {
							var colorName = colorNames[barChartData.datasets.length % colorNames.length];
							var dsColor = window.chartColors[colorName];
							var newDataset = {
								label: 'Dataset ' + (barChartData.datasets.length + 1),
								backgroundColor: color(dsColor).alpha(0.5).rgbString(),
								borderColor: dsColor,
								borderWidth: 1,
								data: []
							};

							for (var index = 0; index < barChartData.labels.length; ++index) {
								newDataset.data.push(randomScalingFactor());
							}

							barChartData.datasets.push(newDataset);
							window.myBar.update();
						});

						document.getElementById('addData').addEventListener('click', function() {
							if (barChartData.datasets.length > 0) {
								var month = MONTHS[barChartData.labels.length % MONTHS.length];
								barChartData.labels.push(month);

								for (var index = 0; index < barChartData.datasets.length; ++index) {
									// window.myBar.addData(randomScalingFactor(), index);
									barChartData.datasets[index].data.push(randomScalingFactor());
								}

								window.myBar.update();
							}
						});

						document.getElementById('removeDataset').addEventListener('click', function() {
							barChartData.datasets.pop();
							window.myBar.update();
						});

						document.getElementById('removeData').addEventListener('click', function() {
							barChartData.labels.splice(-1, 1); // remove the label first

							barChartData.datasets.forEach(function(dataset) {
								dataset.data.pop();
							});

							window.myBar.update();
						});
					</script>

			</div>
		</div>

	</section>

</div>