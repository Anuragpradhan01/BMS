<?php $this->extend('layout/layout'); ?>

<?php $this->section('content'); ?>
<div class="col-md-6 offset-md-3 mt-4">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">

            <h3 class="profile-username text-center"><?= $details['name']?? 'N/A'; ?></h3>

            <!-- Display Account Status -->
            <p class="text-muted text-center">
                <strong>Account Status: </strong>
               <spa></span> <?= get_account_status($details['status']) ?? 'N/A'; ?> <!-- Utilizing the helper function -->
            </p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Subscription Plan</b> <span class="float-right"><?=  get_subscription_plan_status($details['SubscriptionPlan']) ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Login ID</b> <span class="float-right"><?= $details['email'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Last Paid On</b> <span class="float-right"><?= $details['LastPaidOn'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Expiration Date</b> <span class="float-right"><?= $details['ExpirationDate'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Fullname</b> <span class="float-right"><?= $details['name'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Company</b> <span class="float-right"><?= $details['CompanyName'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Web</b> <span class="float-right"><?= $details['Web'] ?? 'N/A'; ?></span>
                </li>
                <li class="list-group-item">
                    <b>Work eMail</b> <span class="float-right"><?= $details['WorkEmail'] ?? 'N/A'; ?></span>
                </li>
            </ul>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<?php $this->endSection(); ?>