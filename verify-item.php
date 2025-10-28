<?php include "includes/header.php"; ?>
<?php include "includes/loader.php"; ?>
<?php include "includes/navbar.php"; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background" style="background-image: url('assets/img/education/showcase-1.webp'); background-size: cover; background-position: center;">
    <div class="container position-relative text-white text-center py-5">
      <h1 class="display-5 fw-bold">Verify Your Item</h1>
      <p class="lead">Enter an item's unique identifier to confirm if it's registered or reported stolen.</p>
      <nav class="breadcrumbs d-flex justify-content-center mt-3">
        <ol class="breadcrumb bg-transparent">
          <li class="breadcrumb-item"><a href="index.php" class="text-white-50">Home</a></li>
          <li class="breadcrumb-item active text-white">Verify</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Verification Form Section -->
  <section class="verify-section position-relative py-5" style="background: linear-gradient(rgba(0,0,0,0.03), rgba(0,0,0,0.03));">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="card p-4 shadow-lg border-0 rounded-4 bg-white bg-opacity-75" style="backdrop-filter: blur(10px);">
            <h4 class="text-center mb-4 text-success">🔍 Check Item Authenticity</h4>
            <form method="post" action="">
              <div class="mb-3">
                <label for="itemId" class="form-label fw-semibold">IMEI / Serial / Chassis Number</label>
                <input type="text" name="item_id" id="itemId" class="form-control form-control-lg rounded-pill" placeholder="e.g. 356789012345678" required>
              </div>
              <div class="text-center mt-3">
                <button type="submit" name="verify" class="btn btn-success btn-lg rounded-pill px-5">
                  <i class="bi bi-search"></i> Verify Now
                </button>
              </div>
            </form>

<?php
if (isset($_POST['verify'])) {
  $item_id = trim($_POST['item_id']);

  if (strlen($item_id) < 5) {
    echo "<div class='alert alert-danger mt-3 text-center'>Please enter a valid identifier.</div>";
    return;
  }

  include "includes/db.php"; // Your DB connection file
  // e.g., $connection = new mysqli(...)

  // Table configuration: table_name => ID column
  $tables = [
    'phone' => 'phone_id',
    'vehicle' => 'vehicle_id',
    'other' => 'other_id'
  ];

  $found = false;

  foreach ($tables as $table => $id_column) {
    $stmt = $connection->prepare("SELECT * FROM `$table` WHERE `$id_column` = ?");
    if (!$stmt) {
      echo "<div class='alert alert-danger mt-3 text-center'>Database error in $table: " . $connection->error . "</div>";
      continue;
    }

    $stmt->bind_param("s", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $status = strtolower($row['status']);
      $owner = htmlspecialchars($row['owner_name'] ?? 'Unknown');
      $registered = date("F j, Y", strtotime($row['date_registered'] ?? 'now'));
      $item_type = strtoupper($table);

      $alertClass = ($status === 'stolen') ? 'danger' : 'success';
      $icon = ($status === 'stolen') ? '🚨 ALERT: Item Reported Stolen' : '✅ Item Verified';
      $note = ($status === 'stolen')
        ? "Please do not proceed with any transaction involving this item."
        : "This item is clean and not reported stolen.";

      echo "
        <div class='alert alert-$alertClass mt-4'>
          <h5>$icon ($item_type)</h5>
          <p><strong>Owner:</strong> $owner</p>
          <p><strong>Date Registered:</strong> $registered</p>
          <p class='mb-0'>$note</p>
        </div>";

      $found = true;
      break;
    }

    $stmt->close();
  }

  if (!$found) {
    echo "
      <div class='alert alert-warning mt-4'>
        <h5>❗ Item Not Found</h5>
        <p>No record exists for this identifier in any category.</p>
      </div>";
  }

  $connection->close();
}
?>


          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include "includes/footer.php"; ?>
