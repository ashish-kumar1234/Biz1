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
      <form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/update_pricing/'.$edit->id;?>">
      <div class="container">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Start Time</legend>
        <div class="row pt-5">
         
            <div class="col-md-6">
                

                
                
                <div class="form-group">
                    <label for="">Title:</label>
                    <input type="text" class="form-control" id="title" name="title"  value="<?php echo $edit->title;?>">
                  </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $edit->description;?>">
                  </div>
                
            </div>
           
           
           
            
    
        </div>

    </fieldset>
    </div>

  <!-- 1 start -->
  <div class="container">
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 1</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Image 6</label>
                <input type="file" class="form-control" placeholder="Enter sub-title" id="image6" name="image6" value="<?php echo $edit->image6;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Download 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url1" name="url1" value="<?php echo $edit->url1;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 2</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Image 7</label>
                <input type="file" class="form-control" placeholder="Enter sub-title" id="image7" name="image7" value="<?php echo $edit->image7;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Download 2:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url2" name="url2" value="<?php echo $edit->url2;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 3</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Image 8</label>
                <input type="file" class="form-control" placeholder="Enter sub-title" id="image8" name="image8" value="<?php echo $edit->image8;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Sub-Title 3:</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="sub_title3" name="sub_title3" value="<?php echo $edit->sub_title3;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Sub-Description 3:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="sub_description3" name="sub_description3" value="<?php echo $edit->sub_description3;?>">
              </div>
            
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Price 3:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="price3" name="price3" value="<?php echo $edit->price3;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Download 3:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="url3" name="url3" value="<?php echo $edit->url3;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 4</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Image</label>
                <input type="file" class="form-control" placeholder="Enter sub-title" id="image1" name="image1" value="<?php echo $edit->image1;?>">
              </div>
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 5</legend>
    <div class="row pt-5">
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="subTitle1">Title 4</label>
                <input type="text" class="form-control" placeholder="Enter sub-title" id="title4" name="title4" value="<?php echo $edit->title4;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">description 4:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="description4" name="description4" value="<?php echo $edit->description4;?>">
              </div>
            
        </div>
       
     
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 6</legend>
    <div class="row pt-5">
        
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="icon1" name="icon1" value="<?php echo $edit->icon1;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Get Now 1:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="get_now1" name="get_now1" value="<?php echo $edit->get_now1;?>">
              </div>
            
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">App Store:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="app_store" name="app_store" value="<?php echo $edit->app_store;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 7</legend>
    <div class="row pt-5">
        
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 2:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="icon2" name="icon2" value="<?php echo $edit->icon2;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Get Now 2:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="get_now2" name="get_now2" value="<?php echo $edit->get_now2;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Play Store:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="play_store" name="play_store" value="<?php echo $edit->play_store;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 8</legend>
    <div class="row pt-5">
        
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 3:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="icon3" name="icon3" value="<?php echo $edit->icon3;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Get Now 3:</label>
                <input type="text" class="form-control" id="subDescription1" placeholder="Enter sub-description" id="get_now3" name="get_now3"value="<?php echo $edit->get_now3;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Microsoft Store:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="microsoft_store1" name="microsoft_store1" value="<?php echo $edit->microsoft_store1;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
    <legend class="scheduler-border">PRICING PACKAGES 9</legend>
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Image 2</label>
                <input type="file" class="form-control"   placeholder="Enter sub-description" id="image2" name="image2" value="<?php echo $edit->image2;?>">
              </div>
            
        </div>
        </fieldset>


    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 10</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 4:</label> 
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="icon4" name="icon4" value="<?php echo $edit->icon4;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">percentage 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="percent1" name="percent1" value="<?php echo $edit->percent1;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Product 1</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="product1" name="product1" value="<?php echo $edit->product1;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 11</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 4:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="icon5" name="icon5" value="<?php echo $edit->icon5;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">percentage 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="percent2" name="percent2" value="<?php echo $edit->percent2;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Product 2</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="product2" name="product2" value="<?php echo $edit->product2;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 12</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 6:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="icon6" name="icon6" value="<?php echo $edit->icon6;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">percentage 3:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="percent3" name="percent3" value="<?php echo $edit->percent3;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Product 3</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="product3" name="product3" value="<?php echo $edit->product3;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 13</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Icon 7:</label> 
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="icon7" name="icon7" value="<?php echo $edit->icon7;?>">
              </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">percentage 4:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="percent4" name="percent4" value="<?php echo $edit->percent4;?>">
              </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Product 4</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="product4" name="product4" value="<?php echo $edit->product4;?>">
              </div>
            
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES 14</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Title 5</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="title5" name="title5" value="<?php echo $edit->title5;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Description 5:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="description5" name="description5" value="<?php echo $edit->description5;?>">
              </div>
        </div>
    </fieldset>
    <!-- <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES Testimonial </legend>
    <div class="row pt-5">
  
   
    
        
       
    </fieldset> -->
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES Testimonial 1</legend>
    <div class="row pt-5">
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Testimonial Description</label> 
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="testimonialdescription1" name="testimonialdescription1" value="<?php echo $edit->testimonialdescription1;?>">
              </div>
        </div>
   
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Image 3</label>
                <input type="file" class="form-control"   placeholder="Enter sub-description" id="image3" name="image3" value="<?php echo $edit->image3;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Name 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="name1" name="name1" value="<?php echo $edit->name1;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Profession 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="profession1" name="profession1" value="<?php echo $edit->profession1;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Company 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="company1" name="company1" value="<?php echo $edit->company1;?>">
              </div>
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES Testimonial 2</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Testimonial Description</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="testimonialdescription2" name="testimonialdescription2" value="<?php echo $edit->testimonialdescription2;?>">
              </div>
        </div>
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Image 4</label>
                <input type="file" class="form-control"   placeholder="Enter sub-description" id="image4" name="image4" value="<?php echo $edit->image4;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Name 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="name2" name="name2" value="<?php echo $edit->name2;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Profession 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="profession2" name="profession2" value="<?php echo $edit->profession2;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Company 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="company2" name="company2" value="<?php echo $edit->company2;?>">
              </div>
        </div>
    </fieldset>
    <fieldset class="scheduler-border">
        <legend class="scheduler-border">PRICING PACKAGES Testimonial 3</legend>
    <div class="row pt-5">
  
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Testimonial Description</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="testimonialdescription3" name="testimonialdescription3" value="<?php echo $edit->testimonialdescription3;?>">
              </div>
        </div>
    <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Image 5</label>
                <input type="file" class="form-control"   placeholder="Enter sub-description" id="image5" name="image5" value="<?php echo $edit->image5;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Name 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="name3" name="name3" value="<?php echo $edit->name3;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Profession 2:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="profession3" name="profession3" value="<?php echo $edit->profession3;?>">
              </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subDescription1">Company 1:</label>
                <input type="text" class="form-control"   placeholder="Enter sub-description" id="company3" name="company3" value="<?php echo $edit->company3;?>">
              </div>
        </div>
    </fieldset>
</div>


  <!-- 2 start -->
  


  <!-- 3 start -->
   


  <!-- 4 start -->
  


  <!-- 5 start -->
   



  <!-- 6 start -->
  


  <!-- 7 start -->
  <div class="container">
     
    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
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
