<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>


   

<!-- Board of Regents Designations -->
<div class="section">
    <div class="section-header">
        BOARD OF REGENTS DESIGNATIONS
    </div>
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
        <table id="table-bor-designations" class="table table-centered table-nowrap mb-0">
            <thead class="table-light">
                <tr>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../classes/designation_bor.class.php';

                $designationBorObj = new DesignationBor();
                $designations = $designationBorObj->fetchdesignation_bor();
                
                foreach ($designations as $designation) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($designation['designation']) ?></td>
                        <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-bor_designation" data-id="<?= $designation['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-bor_designation" data-id="<?= $designation['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Vice President Designations -->
<div class="section">
    <div class="section-header">
        VICE PRESIDENT DESIGNATIONS
    </div>
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
        <table id="table-vp-designations" class="table table-centered table-nowrap mb-0">
            <thead class="table-light">
                <tr>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../classes/designation_vp.class.php';

                $designationVpObj = new DesignationVp();
                $designations = $designationVpObj->fetchdesignation_vp();
                
                foreach ($designations as $designation) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($designation['designation']) ?></td>
                        <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-vp_designation" data-id="<?= $designation['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-vp_designation" data-id="<?= $designation['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Office of the President Staff Designations -->
<div class="section">
    <div class="section-header">
        OFFICE OF THE PRESIDENT STAFF DESIGNATIONS
    </div>
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
        <table id="table-opstaff-designations" class="table table-centered table-nowrap mb-0">
            <thead class="table-light">
                <tr>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../classes/designation_opstaff.class.php';

                $designationOpstaffObj = new DesignationOpstaff();
                $designations = $designationOpstaffObj->fetchdesignation_opstaff();
                
                foreach ($designations as $designation) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($designation['designation']) ?></td>
                        <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-opstaff_designation" data-id="<?= $designation['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-opstaff_designation" data-id="<?= $designation['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


</div>
        
        