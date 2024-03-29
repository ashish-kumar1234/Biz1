<?php 
$this->load->view('admin/sidebar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
      <form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/update/'.$edit->id;?>">
            <div class="row">
                <div class="col-md-6">
                    <label>Title</label>   
                    <input type="text" class="form-control" name="title"  value="<?php echo $edit->title;?>"> <!-- Added required attribute -->
                </div>
                <div class="col-md-6">
                    <label>Description</label>   
                    <input type="text" class="form-control" name="description" value="<?php echo $edit->description;?>" >  
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Image</label>  
                     <input type="hidden" class="form-control" name="existing_image"  value="<?php echo $edit->image;?>">  
                    <input type="file" class="form-control" name="image" >   
                </div>
                <div class="col-md-6">
                    <label>Url</label>   
                    <input type="text" class="form-control" name="url"  value="<?php echo $edit->url;?>">  
                </div>
            </div> 
        <br>
        <div class="text-left"> <!-- Center the button -->
            <button type="submit" class="btn btn-primary" name="save">Save</button>  
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
$this->load->view('admin/footer');
?>
