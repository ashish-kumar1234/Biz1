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
<form method="post" enctype="multipart/form-data" action ="<?php echo base_url().'admin_controller/insert_header';?>">

    <!-- footer  -->

    <div class="container card">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Menu</legend>
            <div class="form-group">
                <label for="home">Home</label>
                <input type="text" class="form-control" id="home" placeholder="Home Url" name="url1">
              </div>
              <div class="form-group">
                <label for="features">Features</label>
                <input type="text" class="form-control" id="features" placeholder="Features Url" name="url2">
              </div>
              <div class="form-group">
                <label for="about">About</label>
                <input type="text" class="form-control" id="about" placeholder="About Url" name="url3">
              </div>
              <div class="form-group">
                <label for="screenshots">Screenshots</label>
                <input type="text" class="form-control" id="screenshots" placeholder="Screenshots Url" name="url4">
              </div>
              <div class="form-group">
                <label for="pricing">Pricing</label>
                <input type="text" class="form-control" id="pricing" placeholder="Pricing Url" name="url5">
              </div>
              <div class="form-group">
                <label for="blog">Blog</label>
                <input type="text" class="form-control" id="blog" placeholder="Blog Url" name="url6">
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Contact" name="url7">
              </div>
              <div class="form-group">
                <label for="subscribe">Subscribe</label>
                <input type="text" class="form-control" id="subscribe" placeholder="Subscribe Url" name="url8">
              </div>
              <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control-file" id="Logo" name="image">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </fieldset>
    </div>


</body>
</html>
<?php 
$this->load->view('admin/footer');
?>