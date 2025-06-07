<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/content.css">
</head>
<body>

    <nav class="navbar">
        <div class="logo">Office</div>
    </nav>
    <ul class="sidebar">
            <li><a href="home.php">Home</a></li>
            <li><a href="job.php">Jabatan</a></li>
            <li><a href="employee_detail.php">Detail Pekerja</a></li>
            <li><a href="admin.php">Administrator</a></li>
    </ul>

    <?php
    include '../../config/database.php';
    $sql = "SELECT * FROM `posisi/jabatan`;";
    $result = $conn->query($sql);
    ?>

    <div class="table-container">
        <h1>Department Data</h1>
        <a href="add.php" class="btn">Add New</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name Department</th>
                    <th>Location Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['PosisiID']) ?></td>
                            <td><?= htmlspecialchars($row['PosisiName']) ?></td>
                            <td><?= htmlspecialchars($row['PosisiDeskripsi']) ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['PosisiID'] ?>">Edit</a> | 
                                <a href="delete.php?id=<?= $row['PosisiID'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No records found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>