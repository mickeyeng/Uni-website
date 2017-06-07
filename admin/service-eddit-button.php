<?php include "../includes/header.php";
include "../includes/navbar-dash.inc.php";
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
           <br>
            <br>
            <h1  id="heading"><strong>Add new field</strong></h1>
            <hr id="hr_main">

         
            
              
                    
            <div class="container">
    <div class="row">
        <div class="control-group" id="fields"> 
        <br>
        <label class="control-label" for="field1" for="service_type" class="col-sm-2 control-label">Service Heading</label>
    





            
            <div class="controls"> 
                <form class="form-horizontal" method="post" role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                        <input class="form-control" name="fields[]" type="text" placeholder="Field name" />
                        <span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </form>
            <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
            </div>
        </div>
    </div>
</div>


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

        var controlForm = $('.controls form:first'),
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