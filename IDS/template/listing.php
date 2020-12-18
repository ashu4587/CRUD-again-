<?php
  include '../db/connection.php';
  $query = "SELECT * FROM `ids_records`";
  $result  = mysqli_query($con, $query);
  $response = mysqli_fetch_all($result,MYSQLI_ASSOC);
  include '../header/header.php';
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Qualification</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $response as $result ){ ?>
      <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['email']; ?></td>
        <td><?php echo $result['address']; ?></td>
        <td><?php echo $result['gender']; ?></td>
        <td><?php echo $result['qualification']; ?></td>
        <td><?php echo $result['phone']; ?></td>
        <td><?php echo $result['password']; ?></td>
        <td>
          <a href="update.php?id=<?php echo $result['id']; ?>">Edit</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php include '../header/footer.php'; ?>