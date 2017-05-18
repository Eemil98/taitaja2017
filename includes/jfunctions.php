function createPileChart(canvas, arr){
	var ctx = document.getElementById(canvas);
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Nopeusjuoksu", "Kestävyyslajit", "Hypyt", "Heitot"],
			datasets: [{
				label: 'Minun tulokseni',
				data: arr[0],
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
				data: [0,0,0,0],
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
		}
	);
}

function save(array){
	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){
			console.log(xhr.responseText);
		}
	}

	console.log(arr);
	xhr.open("POST", "xhr/save.php", true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("data=" + JSON.stringify(arr));
}

function getCalculations(arr){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){
			console.log(xhr.responseText);

			if(!IsJsonString(xhr.responseText)){
				alert("Täytitkö ainakin yhden joka lajialueesta?");
			}else{
				var data = JSON.parse(xhr.responseText);

				console.log(data);
				createPileChart("canvas",data);
				document.getElementById("tasoitusluku").innerHTML = (-1 * (data[0][0] + data[0][1] + data[0][2] + data[0][3])) / 100 + 41;

				saveable["data"] = data[0];
				save(saveable);
			}
		}
	};
	console.log(arr);
	xhr.open("GET", "xhr/calculator.php?data=" + JSON.stringify(arr), true);
	xhr.send();

}

function toggleClick(index){
	$("#" + index + "_dropdown").toggle();
}

function calculateClick(){
	
	var data = [
		[
		],[],[],[]
	];

	for(var i = 0; i < 12; i++){
		console.log(isNaN(parseFloat(document.getElementById("input" + (i + 1)).value)));
		if(isNaN(parseFloat(document.getElementById("input" + (i + 1)).value))){
			data[0][i] = 0;
		}else{
			data[0][i] = parseFloat(document.getElementById("input" + (i + 1)).value);
		}
	}
	for(var i = 0; i < 6; i++){
		if(isNaN(parseFloat(document.getElementById("input" + (i + 13)).value))){
			data[1][i] = 0;
		}else{
			data[1][i] = parseFloat(document.getElementById("input" + (i + 13)).value);
		}
	}
	for(var i = 0; i < 4; i++){
		if(isNaN(parseFloat(document.getElementById("input" + (i + 19)).value))){
			data[2][i] = 0;
		}else{
			data[2][i] = parseFloat(document.getElementById("input" + (i + 19)).value);
		}
	}
	for(var i = 0; i < 5; i++){
		if(isNaN(parseFloat(document.getElementById("input" + (i + 23)).value))){
			data[3][i] = 0;
		}else{
			data[3][i] = parseFloat(document.getElementById("input" + (i + 23)).value);
		}
	}

	getCalculations(data);
}

function IsJsonString(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}