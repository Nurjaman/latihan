<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>kategori List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
	
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>kategori
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
						<th>No</th>
                        <th>Cate ID</th>
                        <th>Name</th>
                        <th>Desc</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Cate ID</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_id" id="cate_id" class="form-control" placeholder="Kategori ID">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_name" id="cate_name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Desc</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_desc" id="cate_desc" class="form-control" placeholder="Desc">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">ID</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_id_edit" id="cate_id_edit" class="form-control" placeholder="CATEGORI ID" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Name</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_name_edit" id="cate_name_edit" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Desc</label>
                            <div class="col-md-10">
                              <input type="text" name="cate_desc_edit" id="cate_desc_edit" class="form-control" placeholder="Desc">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Categori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="cate_id_delete" id="cate_id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_kategori();	//call function show all kategori
		
		$('#mydata').dataTable();
		 
		//function show all kategori
		function show_kategori(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('kategori/kategori_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
								'<td>'+ ( i + 1 ) + '</td>'+
		                  		'<td>'+data[i].cate_id+'</td>'+
		                        '<td>'+data[i].cate_name+'</td>'+
		                        '<td>'+data[i].cate_desc+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-cate_id="'+data[i].cate_id+'" data-cate_name="'+data[i].cate_name+'" data-cate_desc="'+data[i].cate_desc+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-cate_id="'+data[i].cate_id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save kategori
        $('#btn_save').on('click',function(){
            var cate_id = $('#cate_id').val();
            var cate_name = $('#cate_name').val();
            var cate_desc        = $('#cate_desc').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('kategori/save')?>",
                dataType : "JSON",
                data : {cate_id:cate_id , cate_name:cate_name, cate_desc:cate_desc},
                success: function(data){
                    $('[name="cate_id"]').val("");
                    $('[name="cate_name"]').val("");
                    $('[name="cate_desc"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_kategori();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var cate_id = $(this).data('cate_id');
            var cate_name = $(this).data('cate_name');
            var cate_desc        = $(this).data('cate_desc');
            
            $('#Modal_Edit').modal('show');
            $('[name="cate_id_edit"]').val(cate_id);
            $('[name="cate_name_edit"]').val(cate_name);
            $('[name="cate_desc"]').val(cate_desc);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var cate_id = $('#cate_id_edit').val();
            var cate_name = $('#cate_name_edit').val();
            var cate_desc        = $('#cate_desc_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('kategori/update')?>",
                dataType : "JSON",
                data : {cate_id:cate_id , cate_name:cate_name, cate_desc:cate_desc},
                success: function(data){
                    $('[name="cate_id_edit"]').val("");
                    $('[name="cate_name_edit"]').val("");
                    $('[name="cate_desc_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_kategori();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var cate_id = $(this).data('cate_id');
            
            $('#Modal_Delete').modal('show');
            $('[name="cate_id_delete"]').val(cate_id);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var cate_id = $('#cate_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('kategori/delete')?>",
                dataType : "JSON",
                data : {cate_id:cate_id},
                success: function(data){
                    $('[name="cate_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_kategori();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>