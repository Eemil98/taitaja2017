

<div class="col-xs-12">

	<div class="row">
		<h1 class="text-center text-blue">Seuranta</h1>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<canvas id="canvas"></canvas>
			<script>
				var ctx = document.getElementById('canvas');
				var myChart = new Chart(ctx, {
				    type: 'bar',
				    data: {
				        labels: ["Nopeusjuoksu", "Kestävyyslajit", "Hypyt", "Heitot"],
				        datasets: [{
				            label: 'Minun viimeinen tulokseni',
				            data: <?php include "xhr/newest.php"; ?>,
				            backgroundColor: [
				                'rgba(0, 94, 168, 0.75)',
				                'rgba(0, 94, 168, 0.75)',
				                'rgba(0, 94, 168, 0.75)',
				                'rgba(0, 94, 168, 0.75)'
				            ],
				            borderColor: [
				                'rgba(0,94,168,1)',
				                'rgba(0,94,168,1)',
				                'rgba(0,94,168,1)',
				                'rgba(0,94,168,1)'
				            ],
				            borderWidth: 1
				        }/*,
				        {
				            label: 'Keskiarvo tuloksista',
				            data: [15, 10, 17, 12],
				            backgroundColor: [
				                'rgba(0, 143, 203, 0.75)',
				                'rgba(0, 143, 203, 0.75)',
				                'rgba(0, 143, 203, 0.75)',
				                'rgba(0, 143, 203, 0.75)'
				            ],
				            borderColor: [
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)'
				            ],
				            borderWidth: 1
				        }/**/]
				    },
				    options: {
				        scales: {
				            yAxes: [{
				                ticks: {
				                    beginAtZero:true
				                }
				            }]
				        }
				    }
				});
			</script>
		</div>

		<div class="col-sm-6">
			<canvas id="canvas2"></canvas>
			<script>
				var ctx = document.getElementById('canvas2');
				var myChart = new Chart(ctx, {
				    type: 'line',
				    data: {
				        labels: ["Nyt", "1kk", "3kk", "6kk"],
				        datasets: [{
				            label: 'Minun viimeisimmät tulokseni',
				            data: [25, 24, 19, 15],
				            backgroundColor: [
				                'rgba(0,143,203,0.1)',
				                'rgba(0,143,203,0.1)',
				                'rgba(0,143,203,0.1)',
				                'rgba(0,143,203,0.1)'
				            ],
				            borderColor: [
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)',
				                'rgba(0,143,203,1)'
				            ],
				            borderWidth: 1
				        }]
				    },
				    options: {
				        scales: {
				            yAxes: [{
				                ticks: {
				                    beginAtZero:true
				                }
				            }]
				        }
				    }
				});
			</script>
		</div>
	</div>

</div>
