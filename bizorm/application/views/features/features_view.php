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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="<?php echo base_url() ?>Assets/css/responsive.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="content-wrapper">
    <div class="container">
      <br>
      <br>
      <h2>View  Page</h2>
      <br>
      <br>
      
      <table id="exampl" class="display nowrap" style="width:100%">
        <thead class="text-center">
          <tr>
            <th>Sr.No</th>
            <th>Title</th>
            <th>Description</th>
            <th>SubTitle</th>
            <th>SubDescription</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
    <?php 
    $count = 0; // Initialize count variable
    foreach($rows as $row): ?>
        <tr>
            <td><?php echo ++$count; ?></td> <!-- Increment count -->
            <td><?php echo $row['title']; ?></td>
            <td><details><?php echo $row['description']; ?></details></td>
            <td><img src="<?php echo base_url('uploads/banners/'.$row['image']); ?>" height="100px" width="100px"/> </td>
            <td><details><?php echo $row['sub_title']; ?></details></td>
            <td><details><?php echo $row['sub_description']; ?></details></td>
            <td>
              <a href="<?php echo base_url('admin_controller/features_edit/'.$row['id']); ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                
        </tr>
    <?php endforeach; ?>
</tbody>

      </table>
      <!-- Pagination -->
<div class="pagination justify-content-right">
    <?php echo $this->pagination->create_links(); ?>
</div>

      
      
    </div>
  </div>
</body>
</html>
 <?php 
$this->load->view('admin/footer');
?>