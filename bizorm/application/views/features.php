<?php 
$this->load->view('admin/sidebar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="container">
      <form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/insert_features';?>">
      <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Start Time</legend>
        <div class="row pt-5">
         
            <div class="col-md-6">
                

                
                
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Description:</label>
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                
            </div>
           
           
           
            
    
        </div>

    </fieldset>
    </div>

  <!-- 1 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 1</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 1:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title1" name="sub_title1">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="sub_description1" name="sub_description1">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Icon 1:</label>
                <input type="text" class="form-control" id="image1" name="icon1">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 2 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 2</legend>
    <div class="row pt-5">
     
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle2">Sub-Title 2:</label>
                <input type="text" class="form-control"  placeholder="Enter sub-title"  id="sub_title2" name="sub_title2">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription2">Sub-Description 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="sub_description2" name="sub_description2">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image2">Icon 2:</label>
                <input type="text" class="form-contro2" id="image2" name="icon2">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 3 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 3</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle3">Sub-Title  3:</label>
                <input type="text" class="form-control"  placeholder="Enter sub-title" id="sub_title3" name="sub_title3">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription3">Sub-Description 3:</label>
                <input type="text" class="form-control" placeholder="Enter sub-description" id="sub_description3"  name="sub_description3">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image3">Icon 3:</label>
                <input type="text" class="form-control" id="image3" name="icon3">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 4 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 4</legend>
    <div class="row pt-5">
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle4">Sub-Title 4:</label>
                <input type="text" class="form-control"  placeholder="Enter sub-title" id="sub_title4" name="sub_title4">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription4">Sub-Description 4:</label>
                <input type="text" class="form-control" placeholder="Enter sub-description"  id="sub_description4" name="sub_description4">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image4">Icon 4:</label>
                <input type="text" class="form-contro4" id="image4" name="icon4">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 5 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 5</legend>
    <div class="row pt-5">
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle5">Sub-Title 5:</label>
                <input type="text" class="form-control" id="subTitle5" placeholder="Enter sub-title" name="sub_title5">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription5">Sub-Description 5:</label>
                <input type="text" class="form-control" id="subDescription5" placeholder="Enter sub-description" name="sub_description5">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image5">Icon 5:</label>
                <input type="text" class="form-control" id="image1" name="icon5">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 6 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features Box 6</legend>
    <div class="row pt-5">
      
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle6">Sub-Title 6:</label>
                <input type="text" class="form-control" id="subTitle6" placeholder="Enter sub-title" name="sub_title6">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription6">Sub-Description 6:</label>
                <input type="text" class="form-control" id="subDescription6" placeholder="Enter sub-description" name="sub_description6">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image6">Icon 6:</label>
                <input type="text" class="form-control" id="image6" name="icon6">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 7 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Amazing Features : Center Image </legend>
    <div class="row pt-5">
        <div class="col-md-6">
            <div class="form-group">
                <label for="image6">Image :</label>
                <input type="file" class="form-control" id="image7" image7>
              </div>

        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle6">Sub-Title 1:</label>
                <input type="text" class="form-control" id="subTitle6" placeholder="Enter sub-title">
              </div>
        </div>
        <div class="col-md-6"6
            <div class="form-group">
                <label for="subDescription6">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription6" placeholder="Enter sub-description">
              </div>
            
        </div> -->

    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
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
