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
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'admin_controller/insert_screenshort';?>">

        <br>
        <div class="text-right">
            <a href="<?php echo base_url().'homeview'; ?>" class="btn btn-secondary">View</a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="col-md-4">
                <label>Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <!-- <div class="col-md-4">
                <label> Multiple Image</label>
                <input type="file" class="form-control" name="image">
            </div> -->
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Title 1</label>
                <input type="text" class="form-control" name="title1">
            </div>
            <div class="col-md-4">
                <label>Image 1</label>
                <input type="file" class="form-control" name="image1">
            </div>
            <div class="col-md-4">
                <label>Image 2</label>
                <input type="file" class="form-control" name="image2">
            </div>
            <div class="col-md-4">
                <label>Image 3</label>
                <input type="file" class="form-control" name="image3">
            </div>
            <div class="col-md-4">
                <label>Image 4</label>
                <input type="file" class="form-control" name="image4">
            </div>
            <div class="col-md-4">
                <label>Image 5</label>
                <input type="file" class="form-control" name="image5">
            </div>
            <div class="col-md-4">
                <label>Image 6</label>
                <input type="file" class="form-control" name="image6">
            </div>
            <div class="col-md-4">
                <label>Image 7</label>
                <input type="file" class="form-control" name="image7">
            </div>
            <div class="col-md-4">
                <label>Image 8</label>
                <input type="file" class="form-control" name="image8">
            </div>
            <div class="col-md-4">
                <label>Image 9</label>
                <input type="file" class="form-control" name="image9">
            </div>
            <div class="col-md-4">
                <label>Image 10</label>
                <input type="file" class="form-control" name="image10">
            </div>
            <div class="col-md-4">
                <label>Image 11</label>
                <input type="file" class="form-control" name="image11">
            </div>
            <div class="col-md-4">
                <label>Image 12</label>
                <input type="file" class="form-control" name="image12">
            </div>
            <div class="col-md-4">
                <label>Image 13</label>
                <input type="file" class="form-control" name="image13">
            </div>
            <div class="col-md-4">
                <label>Image 14</label>
                <input type="file" class="form-control" name="image14">
            </div>
            <div class="col-md-4">
                <label>Image 15</label>
                <input type="file" class="form-control" name="image15">
            </div>
            <div class="col-md-4">
                <label>Image 16</label>
                <input type="file" class="form-control" name="image16">
            </div>
            <div class="col-md-4">
                <label>Video</label>
                <input type="text" class="form-control" name="video">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Title 2</label>
                <input type="text" class="form-control" name="title2">
            </div>
            <div class="col-md-4">
                <label>Description 1</label>
                <input type="text" class="form-control" name="description2">
            </div>
            <div class="col-md-4">
                <label>Title 3</label>
                <input type="text" class="form-control" name="title3">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title</label>
                <input type="text" class="form-control" name="sub_title">
            </div>
            <div class="col-md-8">
                <label>Sub Description</label>
                <input type="text" class="form-control" name="sub_description">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 1</label>
                <input type="text" class="form-control" name="sub_title1">
            </div>
            <div class="col-md-8">
                <label>Sub Description 1</label>
                <input type="text" class="form-control" name="sub_description1">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 2</label>
                <input type="text" class="form-control" name="sub_title2">
            </div>
            <div class="col-md-8">
                <label>Sub Description 2</label>
                <input type="text" class="form-control" name="sub_description2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Sub Title 3</label>
                <input type="text" class="form-control" name="sub_title3">
            </div>
            <div class="col-md-8">
                <label>Sub Description 3</label>
                <input type="text" class="form-control" name="sub_description3">
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
