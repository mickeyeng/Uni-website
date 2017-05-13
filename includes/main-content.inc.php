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
				<ul class="dropdown trigger tile red">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list">jQuery Plugins</li>
					<li class="dropdown-list list">Google.com</li>
					<li class="dropdown-list list">Youtube.com</li>
					<li class="dropdown-list list"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger tile orange">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list">jQuery Plugins</li>
					<li class="dropdown-list list">Google.com</li>
					<li class="dropdown-list list">Youtube.com</li>
					<li class="dropdown-list list"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger tile green">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list">jQuery Plugins</li>
					<li class="dropdown-list list">Google.com</li>
					<li class="dropdown-list list">Youtube.com</li>
					<li class="dropdown-list list"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>
			<div class="col-sm-4">
				<ul class="dropdown trigger tile blue">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list">jQuery Plugins</li>
					<li class="dropdown-list list">Google.com</li>
					<li class="dropdown-list list">Youtube.com</li>
					<li class="dropdown-list list"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>

			
		</div>
	</div>
</div>

<script>
var trigger = '.trigger';
var list = '.list';
function toggleIt() {
$(list).slideToggle(200, 'linear');
}
$(trigger).on('click', function () {
toggleIt();
});
</script>