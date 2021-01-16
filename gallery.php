<?php
session_start();
require_once 'header1.php'; //davam do kazdeho noveho suboru
require_once 'includes/galleryAction.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Images used in articles</title>


</head>
<body>
<br /><br />
<div class="container-sm">
    <h3 style=" font-family: 'Neutraface 2 Display Medium';font-size: 50px"  align="center">Images used in articles</h3>
    <br />
    <div align="right">
        <button type="button" name="add" id="add" class="btn btn-success">Add</button>
    </div>
    <br />
    <div id="image_data">

    </div>
</div>
</body>
</html>

<div id="imageModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Add Image</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="image_form" method="post" enctype="multipart/form-data">
                    <p><label></label>
                        <input type="file" name="image" id="image" /></p><br />
                    <input type="hidden" name="action" id="action" value="insert" />
                    <input type="hidden" name="image_id" id="image_id" />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn  btn-default" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        fetch_data();

        function fetch_data()
        {
            var action = "fetch";
            $.ajax({
                url:"includes/galleryAction.inc.php",
                method:"POST",
                data:{action:action},
                success:function(data)
                {
                    $('#image_data').html(data);
                }
            })
        }
        $('#add').click(function(){
            $('#imageModal').modal('show');
            $('#image_form')[0].reset();
            $('.modal-title').text("Add Image");
            $('#image_id').val('');
            $('#action').val('insert');
            $('#insert').val("Insert");
        });
        $('#image_form').submit(function(event){
            event.preventDefault();
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert("Invalid Image File");
                    $('#image').val('');
                    return false;
                }
                else
                {
                    $.ajax({
                        url:"includes/galleryAction.inc.php",
                        method:"POST",
                        data:new FormData(this),
                        contentType:false,
                        processData:false,
                        success:function(data)
                        {
                            alert(data);
                            fetch_data();
                            $('#image_form')[0].reset();
                            $('#imageModal').modal('hide');
                        }
                    });
                }
            }
        });
        $(document).on('click', '.update', function(){
            $('#image_id').val($(this).attr("id"));
            $('#action').val("update");
            $('.modal-title').text("Update Image");
            $('#insert').val("Update");
            $('#imageModal').modal("show");
        });
        $(document).on('click', '.delete', function(){
            var image_id = $(this).attr("id");
            var action = "delete";
            if(confirm("Are you sure you want to remove this image from database?"))
            {
                $.ajax({
                    url:"includes/galleryAction.inc.php",
                    method:"POST",
                    data:{image_id:image_id, action:action},
                    success:function(data)
                    {
                        alert(data);
                        fetch_data();
                    }
                })
            }
            else
            {
                return false;
            }
        });
    });
</script>


