<?php 
$this->load->view('admin/sidebar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}
  </style>
</head>
<body>
<form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/insert_footer';?>">

    <!-- footer  -->

    <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Footer</legend>
        <div class="row pt-5">
         
            <div class="col-md-6">
                
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" id="name" name="title">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Description:</label>
                    <input type="text" class="form-control" id="text" name="description" >
                  </div>
                
            </div>
           
           
           
            
    
        </div>
        <div class="row pt-5">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Facebook Icon :</label>
                    <input type="text" class="form-control" id="name" name="icon1">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="btnutl">Facebook  Url:</label>
                    <input type="text" class="form-control" id="text" name="url1">
                  </div>
                
            </div>
        </div>
        <div class="row pt-5">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Linkedin Icon :</label>
                    <input type="text" class="form-control" id="name" name="icon2">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="btnutl">Linkedin  Url:</label>
                    <input type="text" class="form-control" id="text" name="url2">
                  </div>
                
            </div>
        </div>
        <div class="row pt-5">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Twitter Icon :</label>
                    <input type="text" class="form-control" id="name" name="icon3">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="btnutl">Twitter  Url:</label>
                    <input type="text" class="form-control" id="text" name="url3">
                  </div>
                
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </fieldset>
    </div>


</body>
</html>
<?php 
$this->load->view('admin/footer');
?>