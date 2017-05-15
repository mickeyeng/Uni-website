
<div class="container">
	<div class="form-box">
		<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        </div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 id="heading"><strong>Welcome to UEL IT Services</strong></h1>
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
				<ul class="dropdown trigger5 tile orange">
					<h2 class="dropdown-title">Choose your option</h2>
					<li class="dropdown-list list5">jQuery Plugins</li>
					<li class="dropdown-list list5">Google.com</li>
					<li class="dropdown-list list5">Youtube.com</li>
					<li class="dropdown-list list5"><a href="http://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a>.com</li>
				</ul>
			</div>

			
		</div>
	</div>
	<div class="container">
<div class="add-next-page">
		<button type="button" class=" add-btn btn btn-success btn-xs">Add <span class="glyphicon glyphicon-plus"></span></button>
	<ul class="pagination pagination pages">
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
  </ul>
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