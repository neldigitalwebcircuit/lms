<div class="page-header">
    <h3>Users List</h3>
</div>

<table class="table table-hover" id="tbl-user-list">
    <thead>
        <tr>
            <th class="text-left">#</th>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Employee Role</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach ($users as $user) {
    ?>
        <tr>
            <td class="text-left"><?= ++$i ?></td>
            <td><?= $user['employee_id'] ?></td>
            <td><?= $user['fullname'] ?></td>
            <td><?= $user['role_name'] ?></td>
            <td class="text-center">
                <button class="btn btn-primary btn-xs">Edit</button>
                <button class="btn btn-danger btn-xs">Remove</button>
            </td>        
        </tr>
    <?php } ?>
        
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function () {
        //your code here
        $('#tbl-user-list').DataTable();
    });
</script>