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
             <th>Home</th>
             <th>Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
    <?php 
    $count = 0; // Initialize count variable
    foreach($home as $row): ?>
        <tr>
            <td><?php echo ++$count; ?></td> <!-- Increment count -->
             <td><?php echo  "home"?></td>
            <td>
            <a href="<?php echo base_url('home/edit/'.$row->id); ?>">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
 
                
        </tr>
    <?php endforeach; ?>
</tbody>
<tbody class="text-center">
    <?php 
    $count = 1; // Initialize count variable
    foreach($features as $row): ?>
        <tr>
            <td><?php echo ++$count; ?></td> <!-- Increment count -->
             <td><?php echo  "Features"?></td>
            <td>
            <a href="<?php echo base_url('features/edit/'.$row->id); ?>">
    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>

                
        </tr>
    <?php endforeach; ?>
</tbody>
<tbody class="text-center">
  
<?php $count = 2; ?>
        <?php foreach($abouts as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "About"?></td>
                <td>
                    <a href="<?php echo base_url('about/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        
</tbody>
<tbody class="text-center">
  
<?php $count = 3; ?>
        <?php foreach($screenshort as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "screenshort"?></td>
                <td>
                    <a href="<?php echo base_url('screenshort/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
<tbody class="text-center">
  
<?php $count = 4; ?>
        <?php foreach($blogs as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "Blog"?></td>
                <td>
                    <a href="<?php echo base_url('blog/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
<tbody class="text-center">
  
<?php $count = 5; ?>
        <?php foreach($pricing as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "Pricing"?></td>
                <td>
                    <a href="<?php echo base_url('pricing/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
<tbody class="text-center">
  
<?php $count = 6; ?>
        <?php foreach($header as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "Header"?></td>
                <td>
                    <a href="<?php echo base_url('header/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
<tbody class="text-center">
  
<?php $count = 7; ?>
        <?php foreach($footer as $row): ?>
            <tr>
                <td><?php echo ++$count; ?></td> <!-- Increment count -->
                <td><?php echo "Footer"?></td>
                <td>
                    <a href="<?php echo base_url('footer/edit/'.$row->id); ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
</tbody>
      </table>
      <!-- Pagination -->
 

      
      
    </div>
  </div>
</body>
</html>
 <?php 
$this->load->view('admin/footer');
?>