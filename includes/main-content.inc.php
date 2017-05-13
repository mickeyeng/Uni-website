<?php
{session_start();}
?>
<div class="container">
	<div id="form-box">
		<form class=" form-inline">
			<div class="input-group">
				<input type="text" class="form-control search-query" placeholder="Search..." style="
				width: 500px;
				" /> <span class="input-group-btn">
					<button type="submit" class="btn btn-primary"> Search</button>
				</span>
			</div>
		</form>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><strong>Welcome to UEL IT Services</strong></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<ul class="dropdown trigger tile purple">
					<h2 class="dropdown-title">Choose your option</h2>
			
					<li class="dropdown-list list">jQuery Plugins</li>
					<li class="dropdown-list list">Google.com</li>
					<li class="dropdown-list list">Youtube.com</li>
					<li class="dropdown-list list"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger1 tile red">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list1">jQuery Plugins</li>
					<li class="dropdown-list list1">Google.com</li>
					<li class="dropdown-list list1">Youtube.com</li>
					<li class="dropdown-list list1"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger2 tile orange">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list2">jQuery Plugins</li>
					<li class="dropdown-list list2">Google.com</li>
					<li class="dropdown-list list2">Youtube.com</li>
					<li class="dropdown-list list2"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger3 tile green">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list3">jQuery Plugins</li>
					<li class="dropdown-list list3">Google.com</li>
					<li class="dropdown-list list3">Youtube.com</li>
					<li class="dropdown-list list3"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger4 tile blue">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list4">jQuery Plugins</li>
					<li class="dropdown-list list4">Google.com</li>
					<li class="dropdown-list list4">Youtube.com</li>
					<li class="dropdown-list list4"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger5 tile blue">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list5">jQuery Plugins</li>
					<li class="dropdown-list list5">Google.com</li>
					<li class="dropdown-list list5">Youtube.com</li>
					<li class="dropdown-list list5"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>

			
		</div>
	</div>
</div>

<script>
var trigger = '.trigger';
var trigger1 = '.trigger1';
var trigger2 = '.trigger2';
var trigger3 = '.trigger3';
var trigger4 = '.trigger4';
var trigger5 = '.trigger5';
var list = '.list';
var list1 = '.list1';
var list2 = '.list2';
var list3 = '.list3';
var list4 = '.list4';
var list5 = '.list5';

function toggleIt() {
$(list).slideToggle(200, 'linear');
}

function toggleIt1() {
$(list1).slideToggle(200, 'linear');
}

function toggleIt2() {
$(list2).slideToggle(200, 'linear');
}

function toggleIt3() {
$(list3).slideToggle(200, 'linear');
}

function toggleIt4() {
$(list4).slideToggle(200, 'linear');
}

function toggleIt5() {
$(list5).slideToggle(200, 'linear');
}

$(trigger).on('click', function () {
toggleIt();
});


$(trigger1).on('click', function () {
toggleIt1();
});

$(trigger2).on('click', function () {
toggleIt2();
});

$(trigger3).on('click', function () {
toggleIt3();
});

$(trigger4).on('click', function () {
toggleIt4();
});

$(trigger5).on('click', function () {
toggleIt5();
});
</script>