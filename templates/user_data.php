<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offset-lg-3 offset-md-3 content">
  <div class="action-holder">
    <a href="#" id="viewData">View data</a>
    <a href="#" id="edit">Edit</a>
  </div>
  <table class="table user-data-table">
    <tbody>
        <tr>
          <th>Id</th>
          <th><?php echo $this->user['id']; ?></th>
        </tr>
        <tr>
          <th>Name</th>
          <th><?php echo $this->user['name']; ?></th>
        </tr>
        <tr>
          <th>Email</th>
          <th><?php echo $this->user['email']; ?></th>
        </tr>
    </tbody>
  </table>
  <form action="/update" method="post" id="editForm" class="none">
    <div class="form-group">
      <label for="name">Name: </label>
      <input type="name" name="name" id="name" class=" form-control" value="<?php echo $this->user['name'] ?>" required>
    </div>
    <div class="form-group">
      <label for="email">Email: </label>
      <input type="email" name="email" id="email" class=" form-control" value="<?php echo $this->user['email'] ?>" required>
    </div>
    <div class="form-group">
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" class=" form-control" value="" required>
    </div>
    <input type="hidden" value="<?php echo $this->user['id']; ?>" name="userId">
    <input class="btn btn-primary" type="submit" name="updateBtn" id ="updateBtn" value="Update">
  </form>
</div>