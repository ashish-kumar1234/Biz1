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
      <form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/update_screenshort/'.$edit->id;?>">
      <br>
        <div class="text-right">
            <a href="<?php echo base_url().'homeview'; ?>" class="btn btn-secondary">View</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $edit->title;?>">
            </div>
            <div class="col-md-4">
                <label>Description</label>
                <input type="text" class="form-control" name="description" value="<?php echo $edit->description;?>">
            </div>
            <div class="col-md-4">
                <label> Multiple Image</label>
                <input type="file" class="form-control" name="image" value="<?php echo $edit->image;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Title 1</label>
                <input type="text" class="form-control" name="title1" value="<?php echo $edit->title1;?>">
            </div>
            <div class="col-md-4">
                <label>Image 1</label>
                <input type="file" class="form-control" name="image1" value="<?php echo $edit->image1;?>">
            </div>
            <div class="col-md-4">
                <label>Image 2</label>
                <input type="file" class="form-control" name="image2" value="<?php echo $edit->image2;?>">
            </div>
            <div class="col-md-4">
                <label>Image 3</label>
                <input type="file" class="form-control" name="image3" value="<?php echo $edit->image3;?>">
            </div>
            <div class="col-md-4">
                <label>Image 4</label>
                <input type="file" class="form-control" name="image4" value="<?php echo $edit->image4;?>">
            </div>
            <div class="col-md-4">
                <label>Image 5</label>
                <input type="file" class="form-control" name="image5" value="<?php echo $edit->image5;?>">
            </div>
            <div class="col-md-4">
                <label>Image 6</label>
                <input type="file" class="form-control" name="image6" value="<?php echo $edit->image6;?>">
            </div>
            <div class="col-md-4">
                <label>Image 7</label>
                <input type="file" class="form-control" name="image7" value="<?php echo $edit->image7;?>">
            </div>
            <div class="col-md-4">
                <label>Image 8</label>
                <input type="file" class="form-control" name="image8" value="<?php echo $edit->image8;?>">
            </div>
            <div class="col-md-4">
                <label>Image 9</label>
                <input type="file" class="form-control" name="image9" value="<?php echo $edit->image9;?>">
            </div>
            <div class="col-md-4">
                <label>Image 10</label>
                <input type="file" class="form-control" name="image10" value="<?php echo $edit->image10;?>">
            </div>
            <div class="col-md-4">
                <label>Image 11</label>
                <input type="file" class="form-control" name="image11" value="<?php echo $edit->image11;?>">
            </div>
            <div class="col-md-4">
                <label>Image 12</label>
                <input type="file" class="form-control" name="image12" value="<?php echo $edit->image12;?>">
            </div>
            <div class="col-md-4">
                <label>Image 13</label>
                <input type="file" class="form-control" name="image13" value="<?php echo $edit->image13;?>">
            </div>
            <div class="col-md-4">
                <label>Image 14</label>
                <input type="file" class="form-control" name="image14" value="<?php echo $edit->image14;?>">
            </div>
            <div class="col-md-4">
                <label>Image 15</label>
                <input type="file" class="form-control" name="image15" value="<?php echo $edit->image15;?>">
            </div>
            <div class="col-md-4">
                <label>Image 16</label>
                <input type="file" class="form-control" name="image16" value="<?php echo $edit->image16;?>">
            </div>
            <div class="col-md-4">
                <label>Video</label>
                <input type="text" class="form-control" name="video" value="<?php echo $edit->video;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Title 2</label>
                <input type="text" class="form-control" name="title2" value="<?php echo $edit->title2;?>">
            </div>
            <div class="col-md-4">
                <label>Description 1</label>
                <input type="text" class="form-control" name="description2" value="<?php echo $edit->description2;?>">
            </div>
            <div class="col-md-4">
                <label>Title 3</label>
                <input type="text" class="form-control" name="title3" value="<?php echo $edit->title3;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title</label>
                <input type="text" class="form-control" name="sub_title" value="<?php echo $edit->sub_title;?>">
            </div>
            <div class="col-md-8">
                <label>Sub Description</label>
                <input type="text" class="form-control" name="sub_description" value="<?php echo $edit->sub_description;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 1</label>
                <input type="text" class="form-control" name="sub_title1" value="<?php echo $edit->sub_title1;?>">
            </div>
            <div class="col-md-8">
                <label>Sub Description 1</label>
                <input type="text" class="form-control" name="sub_description1" value="<?php echo $edit->sub_description1;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 2</label>
                <input type="text" class="form-control" name="sub_title2" value="<?php echo $edit->sub_title2;?>">
            </div>
            <div class="col-md-8">
                <label>Sub Description 2</label>
                <input type="text" class="form-control" name="sub_description2" value="<?php echo $edit->sub_description2;?>">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 3</label>
                <input type="text" class="form-control" name="sub_title3" value="<?php echo $edit->sub_title3;?>">
            </div>
            <div class="col-md-8">
                <label>Sub Description 3</label>
                <input type="text" class="form-control" name="sub_description3" value="<?php echo $edit->sub_description3;?>">
            </div>
        </div>
        
        <br>
        <div class="text-left">
            <button class="btn btn-primary" name="save">Save</button>
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
