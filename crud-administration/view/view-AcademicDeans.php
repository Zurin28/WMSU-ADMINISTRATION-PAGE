<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>


            
<div class="section">
        <div class="section-header">
            ACADEMIC DEANS
        </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../../classes/AcademicDean.class.php';

                                $academicDeanObj = new AcademicDean();
                                $academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($academicDean as $academicDeans) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($academicDeans['honorific_short'] . ' ' . $academicDeans['name']) ?></td>
                                        <td><?= htmlspecialchars($academicDeans['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-academicDeans" data-id="<?= $academicDeans['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-academicDeans" data-id="<?= $academicDeans['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>


        
                <div class="section">
        <div class="section-header">
            ASSOCIATE DEANS
        </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../../classes/AssociateDean.class.php';

                                $associateDeanObj = new AssociateDean();
                                $associateDean = $associateDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($associateDean as $associateDeans) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($associateDeans['honorific_short'] . ' ' . $associateDeans['name']) ?></td>
                                        <td><?= htmlspecialchars($associateDeans['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-associateDeans" data-id="<?= $associateDeans['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-associateDeans" data-id="<?= $associateDeans['id'] ?>">Delete</a>
                                            
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
            EXTERNAL STUDIES UNIT
        </div>
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../../classes/ExternalStudiesUnit.class.php';

                                $externalStudiesUnitObj = new ExternalStudiesUnit();
                                $externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials
                            
                                foreach ($externalStudiesUnit as $externalStudiesUnits) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($externalStudiesUnits['honorific_short'] . ' ' . $externalStudiesUnits['name']) ?></td>
                                        <td><?= htmlspecialchars($externalStudiesUnits['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Delete</a>
                                            
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
        
        