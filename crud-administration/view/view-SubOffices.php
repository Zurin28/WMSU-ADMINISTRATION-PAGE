<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>


                <div class="section">
        <div class="section-header">
            PRESIDENT'S SUBOFFICES
        </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Office</th>
                                    <th>Office Head</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../../classes/presSubOffices.class.php';

                                $presSubOfficesObj = new PresSubOffices();
                                $presSubOffice = $presSubOfficesObj->fetchAll(); // Fetch all officials
                            
                                foreach ($presSubOffice as $presSubOffices) {
                                    
                                ?>
                                    <tr>
                                        <td><img src="../images/<?= htmlspecialchars($presSubOffices['image']) ?>" alt="" width="100px"></td>
                                        <td><?= htmlspecialchars( $presSubOffices['office']) ?></td>
                                        <td><?= htmlspecialchars($presSubOffices['honorific_short'] . ' ' .$presSubOffices['office_head'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($presSubOffices['description'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-presSubOffices" data-id="<?= $presSubOffices['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-presSubOffices" data-id="<?= $presSubOffices['id'] ?>">Delete</a>
                                            
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
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            VICE PRESIDENT'S SUBOFFICES
        </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Office</th>
                                    <th>Office Head</th>
                                    <th>Office OF VP in</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
require_once '../../classes/VicepresSubOffices.class.php';

$VicepresSubOfficesObj = new VicepresSubOffices();
$VicepresSubOffice = $VicepresSubOfficesObj->fetchAll(); // Fetch all officials

foreach ($VicepresSubOffice as $VicepresSubOffices) {
?>
    <tr>
        <td><img src="../images/<?= htmlspecialchars($VicepresSubOffices['image']) ?>" alt="" width="100px"></td>
        <td><?= htmlspecialchars($VicepresSubOffices['office']) ?></td>
        <td><?= htmlspecialchars($VicepresSubOffices['honorific_short'] . ' ' . $VicepresSubOffices['office_head'] ?? 'N/A') ?></td>
        <td><?= htmlspecialchars($VicepresSubOffices['designation_name'] ?? 'N/A') ?></td>
        <td><?= htmlspecialchars($VicepresSubOffices['description'] ?? 'N/A') ?></td>
        <td class="text-nowrap">
            <a href="" class="btn btn-sm btn-outline-success me-1 edit-VicepresSubOffices" data-id="<?= $VicepresSubOffices['id'] ?>">Edit</a>
            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-VicepresSubOffices" data-id="<?= $VicepresSubOffices['id'] ?>">Delete</a>
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
        </div>
    </div>

</div>
        
        