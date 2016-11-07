<div class="page-header">
    <h3>
        <i class="fa fa-wpforms" aria-hidden="true"></i> 
        Forms
    </h3>
</div>
<p class="text-left">
    <a href="<?=site_url('claims/form/create') ?>" class="btn btn-success">Create New</a>
</p>
<table class="table table-hover" id="tbl-list">
    <thead>
        <tr>
            <th>#</th>
            <th>Employee Name</th>
            <th>Claims Group ID</th>
            <th class="text-right">Amount</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        if(count($forms) > 0) {
            $i = 0; 
            foreach ($forms as $form) {
        ?>
                <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $form['fullname'] ?></td>
                    <td><?= $form['form_claims_group_id'] ?></td>
                    <td class="text-right"><?= number_format($form['amount_total'],2) ?> PHP</td>
                    <td><?= $form['status']==1 ? "Approved" : "Pending" ?></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                        <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times" aria-hidden="true"></i> Remove</button>
                    </td>
                </tr>
        <?php 
            }
        }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tbl-list').DataTable();
    });
</script>