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
    <form method="post" enctype="multipart/form-data"  action ="<?php echo base_url().'admin_controller/insert_banner';?>">

        <br>
         <div class="text-right"> <!-- Center the button -->
          <a href="<?php echo base_url().'homeview'; ?>" class="btn btn-secondary">View</a>
      </div>
      <div class="row">
            <div class="col-md-6">
                <label>Title </label>  
                <input type="text" class="form-control" name="title"  >  
            </div>
            <div class="col-md-6">
                <label>Title 1</label>   
                <input type="text" class="form-control" name="title1" >  
            </div>
</div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Title 2</label>  
                <input type="text" class="form-control" name="title2"  >  
            </div>
            <div class="col-md-4">
                <label>Description</label>   
                <input type="text" class="form-control" name="description" >  
            </div>
        <br>
            <div class="col-md-4">
                <label>Image</label>   
                <input type="file" class="form-control" name="image">  
            </div>
</div>
        <div class="row">
            <div class="col-md-4">
                <label>Url</label>   
                <input type="text" class="form-control" name="url"  >  
            </div>
        </div> 
        <br>
        <div class="text-left"> <!-- Center the button -->
            <button class="btn btn-primary" name="save">Save</button>
            <!-- Home view button -->
          
        </div>
    </form> <!-- Moved the closing form tag here -->
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
$this->load->view('admin/footer');
?>
