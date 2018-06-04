<?php include_once 'header.php'; ?>
  <div class="container content">
    <div class="text-center search-term">
      <h2>Search: <?php echo $this->search; ?></h2>
    </div>
    <table class="table">
      <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
      </thead>
      <tbody>
        <?php foreach($this->results as $result) { ?>
          <tr>
            <th><?php echo $result['id']; ?></th>
            <th><?php echo $result['name']; ?></th>
            <th><?php echo $result['email']; ?></th>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>  

<?php include_once 'footer.php'; ?>