<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1>Add service field</h1>
            <hr>

         
            <div class="form1">
                <form  class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="service_name" class="col-sm-2 control-label">Field name</label>
                        <div class="col-sm-10">
                            <input name="fields[]" type="text" class="form-control" id="name"
                                   placeholder="Please enter a field name" value="">
                        </div>
                    </div>
              
                    
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="button" value="Add field" class="btn-add btn btn-primary">
                     
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <!--                             Will be used to display an alert to the user-->
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.form1 form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

</script>