<div class="container-fluid">
<div class="section">
        <div class="section-header">
            BOARD OF REGENTS
            <a href="../crud-administration/add-officials/add-official-bor.php" class="insert-btn">Insert</a>
        </div>
        <div class="modal-container"></div>
        <table>
            <thead>
                <tr>
                    <th width="20%">IMAGE</th>
                    <th width="30%">NAME</th>
                    <th width="30%">TITLE</th>
                    <th width="20%">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once '../classes/bor.class.php';

                $bor = new Board();
                $boardMembers = $bor->fetchAll(); // Fetch all board members
                if (count($boardMembers) > 0):
                    foreach ($boardMembers as $regent):
                ?>
                <tr>
                    <td class="image-cell">
                        <?php if (!empty($regent['image'])): ?>
                            <img src="../images/<?= htmlspecialchars($regent['image']) ?>" alt="<?= htmlspecialchars($regent['name']) ?>" width="100px">
                        <?php else: ?>
                            <span>No image</span>
                        <?php endif; ?>
                    </td>
                    <td class="name-cell"><?= htmlspecialchars($regent['name']) ?></td>
                    <td><?= htmlspecialchars($regent['title']) ?></td>
                    <td class="action-cell">
                        <a href="#" class="btn btn-sm btn-outline-primary me-1 action-btn edit-btn edit-member" data-id="<?= $regent['id'] ?>">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-danger me-1 action-btn delete-btn delete-member" data-id="<?= $regent['id'] ?>">Delete</a>
                    </td>
                </tr>
                <?php 
                    endforeach;
                else:
                ?>
                <tr>
                    <td colspan="4" class="empty-message">No data available</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


<div class="section">
        <div class="section-header">
            ADMINISTRATIVE OFFICIALS
            <a href="../crud-administration/add-administrativeOfficials.php" class="insert-btn">Insert</a>
        </div>
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead">
                    <tr>
                        <th width="20%">NAME</th>
                        <th width="25%">TITLE</th>
                        <th>Page Link</th>
                        <th>Position (Source Table)</th>
                        <th width="20%">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $officialClasses = [
                        'President' => 'Pres',
                        'Vice President' => 'Vicepres',
                        'Office of the President Staff' => 'opstaff',
                        'University and Board Secretary' => 'UniversityBoardSecretary',
                        'Directors' => 'Directors',
                        'Campus Administrators' => 'CampusAdministrators',
                        'Integrated Laboratory School Principals & Asst. Principals' => 'ILSPrincipals',
                        'Assistant & Associate Directors | Assistant Chairpersons | Special Assistants' => 'AssistantDirectors',
                        'Technical Assistants' => 'TechnicalAssistants',
                        'Chairpersons' => 'Chairpersons',
                    ];

                    foreach ($officialClasses as $positionLabel => $className) {
                        require_once "../classes/{$className}.class.php";
                        $classObj = new $className();
                        $officials = $classObj->fetchAll();

                        if (count($officials) > 0):
                            foreach ($officials as $official):
                    ?>
                    <tr>
                        <td class="name-cell"><?= htmlspecialchars($official['name']) ?></td>
                        <td><?= htmlspecialchars($official['title'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($official['page_link'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($positionLabel) ?></td>
                        <td class="action-cell">
                            <a href="#" class="btn btn-sm btn-outline-primary me-1 edit-<?= strtolower($className); ?>" data-id="<?= $official['id']; ?>">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger me-1 delete-<?= strtolower($className); ?>" data-id="<?= $official['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                            endforeach;
                        endif;
                    } ?>
                </tbody>
                        </table>
                    </div>
                </div>
            
<div class="section">
        <div class="section-header">
            ACADEMIC DEANS
            <a href="../crud-administration/add-officials/add-official-AcademicDean.php" class="insert-btn">Insert</a>
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
                                require_once '../classes/AcademicDean.class.php';

                                $academicDeanObj = new AcademicDean();
                                $academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($academicDean as $academicDeans) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($academicDeans['name']) ?></td>
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
            <a href="../crud-administration/add-officials/add-official-AcademicDean.php" class="insert-btn">Insert</a>
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
                                require_once '../classes/AssociateDean.class.php';

                                $associateDeanObj = new AssociateDean();
                                $associateDean = $associateDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($associateDean as $associateDeans) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($associateDeans['name']) ?></td>
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
            <a href="../crud-administration/add-officials/add-official-ExternalStudiesUnit.php" class="insert-btn">Insert</a>
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
                                require_once '../classes/ExternalStudiesUnit.class.php';

                                $externalStudiesUnitObj = new ExternalStudiesUnit();
                                $externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials
                            
                                foreach ($externalStudiesUnit as $externalStudiesUnits) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($externalStudiesUnits['name']) ?></td>
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
