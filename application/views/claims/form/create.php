<div class="page-header">
    <h3><i class="fa fa-wpforms" aria-hidden="true"></i>  New Form</h3>
</div>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Form Header</div>
    <table class="table">
        <tr>
            <td><strong>Form ID</strong></td>
            <td><?= $group_id ?></td>
            <td><strong>Month</strong></td>
            <td><?= date('M/Y') ?></td>
        </tr>
        <tr>
            <td><strong>Employee ID</strong></td>
            <td><?= $user_details['employee_id'] ?></td>
            <td><strong>Employee Name</strong></td>
            <td><?= $user_details['fullname'] ?></td>
        </tr>
    </table>
</div>

<form method="POST" id="submitForm"     action="<?=site_url('claims/form/save/'.$group_id) ?>">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
            <button class="btn btn-success" id="btn-add-form">Add</button>
        </div>
       
        <table class="table" id="tbl-claims">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Details</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <input 
                            type="text" 
                            required 
                            name="date[]" 
                            class="form-control claims-date" 
                            placeholder="MM/DD/YYYY" />
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" required name="description[]" class="form-control" />
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" required name="details[]" class="form-control" />
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" required name="amount[]" class="form-control txt-amount" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <tr>
                        <td colspan="3" class="bg-default text-right">
                            <strong>Total Amount</strong>
                        </td>
                        <td class="text-right">
                            PHP <dfn id="claims-total">0.00</dfn>
                            <input type="hidden" name="total" id="total" value="0.00">
                        </td>
                    </tr>
                </tr>
            </tbody>
        </table>
        <div class="panel-footer text-right">
            <button type="submit" class="btn btn-primary" id="btn-submit">
                <i class="fa fa-floppy-o" aria-hidden="true"></i> Submit
            </button>
        </div>
    </div>
</form>

<script type="text/javascript" src="<?= base_url('assets/js/app/claims/form/create.js') ?>"></script>

<!-- <div class="row">
    <div class="col-md-3 col-sm-6">
        <p class="text-left">
            <strong>Employee ID</strong>
        </p>
    </div>
    <div class="col-md-3 col-sm-6">
        <p class="text-left">
            
        </p>
    </div>
    <div class="col-md-3 col-sm-6">
        <p class="text-left">
            <strong>Month</strong>
        </p>
    </div>
    <div class="col-md-3 col-sm-6">
        <p class="text-left">
            
        </p>
    </div>
</div> -->