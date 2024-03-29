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
      <form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/insert_blogs';?>">
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
        <legend class="scheduler-border">Latest Blogs 1</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 1:</label>
                <input type="file" class="form-control" id="image" name="image">
              </div>

        </div>
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
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url1" name="url1">
              </div>
            
        </div>
        

    </fieldset>
  
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 2</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 2:</label>
                <input type="file" class="form-control" id="image1" name="image1">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 2:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title2" name="sub_title2">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 2:</label>
                <input type="text" class="form-control" id="subDescription2" placeholder="Enter sub-description" id="sub_description2" name="sub_description2">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url2" name="url2">
              </div>
            
        </div>
    </fieldset>
  
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 3</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 3:</label>
                <input type="file" class="form-control" id="image2" name="image2">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 3:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title3" name="sub_title3">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 3:</label>
                <input type="text" class="form-control" id="subDescription3" placeholder="Enter sub-description" id="sub_description3" name="sub_description3">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url3" name="url3">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 4</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 4:</label>
                <input type="file" class="form-control" id="image3" name="image3">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 4:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title4" name="sub_title4">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 4:</label>
                <input type="text" class="form-control" id="subDescription3" placeholder="Enter sub-description" id="sub_description4" name="sub_description4">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription4" placeholder="Enter sub-description" id="url4" name="url4">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 5</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 5:</label>
                <input type="file" class="form-control" id="image4" name="image4">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 5:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title5" name="sub_title5">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 5:</label>
                <input type="text" class="form-control" id="subDescription5" placeholder="Enter sub-description" id="sub_description5" name="sub_description5">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url5" name="url5">
              </div>
            
        </div>
    </fieldset>

    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 6</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 6:</label>
                <input type="file" class="form-control" id="image5" name="image5">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 6:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title6" name="sub_title6">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 6:</label>
                <input type="text" class="form-control" id="subDescription6" placeholder="Enter sub-description" id="sub_description6" name="sub_description6">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url6" name="url6">
              </div>
            
        </div>

    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 7</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">Image 7:</label>
                <input type="file" class="form-control" id="image6" name="image6">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 7:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title7" name="sub_title7">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 7:</label>
                <input type="text" class="form-control" id="subDescription7" placeholder="Enter sub-description" id="sub_description7" name="sub_description7">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Read More </label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url7" name="url7">
              </div>
            
        </div>

    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">Latest Blogs 8</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="">All Posts</label>
                <input type="text" class="form-control" id="url8" name="url8">
              </div>

        </div>
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
