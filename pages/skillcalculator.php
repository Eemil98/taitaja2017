
<h1 class="text-center" style="margin-bottom: 25px;">
	Tasolaskin
</h1>
<div class="row" style="margin-top: 25px;">

	<div class="col-lg-4 col-sm-6">
		<div class="row" style="margin-top: 25px;">
			<div class="col-xs-12">

				<form class="form-horizontal">
					<!-- inputs starts -->
					<!-- pikajuoksut -->
					<div class="col-xs-12 underline" onclick="toggleClick('pikajuoksut')"><h4 class="text-center">Pikajuoksut <!--<span class="glyphicon glyphicon-menu-down"></span>--></h4></div>
					<div id="pikajuoksut_dropdown"  style="display: none;">
						<div class="form-group">
							<label class="control-label col-sm-4" >40m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input1" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >60m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input2" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >80m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input3" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >100m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input4" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >150m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input5" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >200m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input6" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >300m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input7" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >400m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input8" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >60maj:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input9" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >80maj:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input10" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >100maj:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input11" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >200maj:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input12" placeholder="ss.ms">
							</div>
						</div>
					</div>

					<!-- kestävyyslajit -->
					<div class="col-xs-12 underline" onclick="toggleClick('kestavyys')"><h4 class="text-center">Kestävyyslajit <!--<span class="glyphicon glyphicon-menu-down"></span>--></h4></div>
					<div id="kestavyys_dropdown" style="display: none;">
						<div class="form-group">
							<label class="control-label col-sm-4" >600m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input13" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >800m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input14" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >1000m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input15" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >1500m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input16" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >2000m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input17" placeholder="ss.ms">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >3000m:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input18" placeholder="ss.ms">
							</div>
						</div>
					</div>

					<!-- hypyt -->
					<div class="col-xs-12 underline" onclick="toggleClick('hypyt')"><h4 class="text-center">Hypyt <!--<span class="glyphicon glyphicon-menu-down"></span>--></h4></div>
					<div id="hypyt_dropdown" style="display: none;">
						<div class="form-group">
							<label class="control-label col-sm-4" >Korkeus:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input19" placeholder="cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Seiväs:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input20" placeholder="cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Pituus:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input21" placeholder="cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >kolmiloikka:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input22" placeholder="cm">
							</div>
						</div>
					</div>
				</form>

					<!-- heitot -->
					<div class="col-xs-12 underline" onclick="toggleClick('heitot')"><h4 class="text-center">Heitot <!--<span class="glyphicon glyphicon-menu-down"></span>--></h4></div>
					<div id="heitot_dropdown" style="display: none;">
						<div class="form-group">
							<label class="control-label col-sm-4" >Kuula:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input23" placeholder="m.cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Kiekko:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input24" placeholder="m.cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Moukari:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input25" placeholder="m.cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Keihäs:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input26" placeholder="m.cm">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Pallo:</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="input27" placeholder="m.cm">
							</div>
						</div>
					</div>
				</form>
				<button class="btn btn-default" onclick="calculateClick()">Laske</button>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-sm-6">
		<h2 class="text-center">Nykyinen tasosi: <span id="tasoitusluku">0</span></h2>
		<canvas id="canvas" style="min-height: 300px;"></canvas>


		<script src="includes/functions.js"></script>
		<script>




			var saveable = {
				data: [],
				tasoitusluku: 0,
				saveable: 0, 
				userid: <?php
					if(isset($_SESSION["userid"])){
						echo $_SESSION["userid"];
					}else{
						echo 0;
					}
					?>
			};

			var arr = [0,0,0,0];
			createPileChart("canvas", arr);

			//getCalculations([[0,8.1],[0,0,210.24],[0,325],[9.92,2]]);

			<?php 
			//include "includes/functions.js"; 
			?>

		</script>

	</div>
</div>


