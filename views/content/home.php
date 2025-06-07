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
    $sql = "SELECT ID, employees.EmployeeName AS EmployeeName, jobs.JobName AS JobName FROM employee_jobs JOIN employees ON employee_jobs.EmployeeID = employees.EmployeeID JOIN jobs ON employee_jobs.JobID = jobs.JobID;";
    $result = $conn->query($sql);
    ?>
    
    <div class="table-container">
        <h1>Home</h1>
        <table>
            <thead>
                <tr>
                    <th>Name Pekerja</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['EmployeeName']) ?></td>
                            <td><?= htmlspecialchars($row['JobName']) ?></td>
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