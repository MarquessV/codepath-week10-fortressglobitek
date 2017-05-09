<?php
require_once('../../private/initialize.php');
require_login();
?>

<?php $page_title = 'Staff: Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="main-content">

  <h1>Menu</h1>
  <ul>
    <li>
      <a href="users/index.php">Users</a>
    </li>
    <li>
      <a href="salespeople/index.php">Salespeople</a>
    </li>
    <li>
      <a href="countries/index.php">Countries, States, &amp; Territories</a>
    </li>
  </ul>
  The secret is <?php echo print_r(db_fetch_assoc(db_query($db, "SELECT * FROM secrets"))) ?>;)
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
