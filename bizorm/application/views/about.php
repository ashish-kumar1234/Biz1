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
<form method="post" enctype="multipart/form-data"  action ="<?php echo base_url().'admin_controller/insert_about';?>">
    <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Start Time</legend>
        <div class="row pt-5">
         
            <div class="col-md-6">
                

                
                
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Description:</label>
                    <input type="text" class="form-control" id="text" name="description" >
                  </div>
                
            </div>
           
           
           
            
    
        </div>

    </fieldset>
    </div>

  <!-- 1 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 1</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 1:</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title1">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" name="sub_description1">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for=" ">Icon 1:</label>
                <input type="text" class="form-control" id="image1" name="icon1">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 2 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 2</legend>
    <div class="row pt-5">
     
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle2">Sub-Title 2:</label>
                <input type="text" class="form-control" id="subTitle2" placeholder="Enter sub-title" name="sub_title2">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription2">Sub-Description 2:</label>
                <input type="text" class="form-control" id="subDescription2" placeholder="Enter sub-description" name="sub_description2">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Icon 2:</label>
                <input type="text" class="form-control" id="icon2" name="icon2">
              </div>
        </div>
    </fieldset>
</div>


  <!-- 3 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 3</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle3">Sub-Title  3:</label>
                <input type="text" class="form-control" id="subTitle3" placeholder="Enter sub-title" name="sub_title3">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription3">Sub-Description 3:</label>
                <input type="text" class="form-control" id="subDescription3" placeholder="Enter sub-description" name="sub_description3">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="icon3">Icon 3:</label>
                <input type="text" class="form-control" id="icon3" name="icon3">
              </div>

        </div>

    </fieldset>
</div>


  <!-- 4 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 4</legend>
    <div class="row pt-5">
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle4">Sub-Title 4:</label>
                <input type="text" class="form-control" id="subTitle4" placeholder="Enter sub-title" name="sub_title4">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription4">Sub-Description 4:</label>
                <input type="text" class="form-control" id="subDescription4" placeholder="Enter sub-description" name="sub_description4">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Icon4 4:</label>
                <input type="text" class="form-control" id="" name="icon4">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 5 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 5</legend>
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
                <label for=" ">Icon 5:</label>
                <input type="text" class="form-control" id="image1" name="icon5">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 6 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About bizorm Box 6</legend>
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
                <label for=" ">Icon 6:</label>
                <input type="text" class="form-control" id=" " name="icon6">
              </div>

        </div>
        <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Showcase About Heading </legend>
        <div class="row pt-5">
         
            <div class="col-md-6">
                
                <div class="form-group">
                    <label for="name">Title 1:</label>
                    <input type="text" class="form-control" id="title1" name="title1" >
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Description 1:</label>
                    <input type="text" class="form-control" id="description1" name="description1">
                  </div>
                
            </div>
           
           
           
            
    
        </div>
        <div class="row pt-5">
         
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Image :</label>
                    <input type="file" class="form-control" id="name" name="image">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="btnutl">Add Button Url:</label>
                    <input type="text" class="form-control" id="text" name="url">
                  </div>
                
            </div>
           
           
           
            
    
        </div>

    </fieldset>
    </div>

    <!-- Showcase  add title and description-->

    <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Showcase Heding</legend>
        <div class="row pt-5">
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subTitle1">Sub-Title 2:</label>
                    <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title7">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subDescription1">Sub-Description 1:</label>
                    <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" name="sub_description7">
                  </div>
                
            </div>
       
    
        </fieldset>
    </div>

    

  <!-- 1 start -->   
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About Showcase icon 1</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 1:</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title8">
              </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description">
              </div>
            
        </div> -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Icon 7:</label>
                <input type="text" class="form-control" id="image1" name="icon7">
              </div>

        </div>

    </fieldset>
</div>


  

  <!-- 2 start -->   
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About Showcase icon 2</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 2:</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title9">
              </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description">
              </div>
            
        </div> -->
        <div class="col-md-6">
            <div class="form-group">
                <label for=" ">Icon 8:</label>
                <input type="text" class="form-control" id="icon8" name="icon8">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 3 start -->   
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About Showcase icon 3</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 3:</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title10">
              </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description">
              </div>
            
        </div> -->
        <div class="col-md-6">
            <div class="form-group">
                <label for=" ">Icon 9:</label>
                <input type="text" class="form-control" id="icon9" name="icon9">
              </div>

        </div>

    </fieldset>
</div>



  <!-- 4 start -->   
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About Showcase icon 4</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 4:</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title11">
              </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description">
              </div>
            
        </div> -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="icon10">Icon 10:</label>
                <input type="text" class="form-control" id="icon10"  name="icon10">
              </div>

        </div>
       
    </fieldset>
</div>



  <!-- 5 start -->   
   
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">About : Bizorm's special features.</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title :</label>
                <input type="text" class="form-control" id="subTitle1" placeholder="Enter sub-title" name="sub_title12">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" name="sub_description8">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image2">Backgroud Image :</label>
                <input type="file" class="form-control" id="image2" name="image2">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image1">Btn Url LEARN MORE
                </label>
                <input type="text" class="form-control" id="url" placeholder="Button url Learn More" name="url2">
              </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="image3">Image :</label>
                <input type="file" class="form-control" id="image3" name="image3
                
                ">
              </div>

        </div>
    </fieldset>
    </fieldset>
    <button type="submit" class="btn btn-primary ">Submit</button>
</div>

</form>



</body>
</html>
