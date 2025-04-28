<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">Insert</a>
<div class="section">
        <div class="section-header">
            ORGANIZATIONAL CHART
        </div>
        <div class="modal-container"></div>


        <table>
            <thead>
                <tr>
                    <th width="50%">IMAGE</th>
                    <th width="30%">DESCRIPTION</th>
                    <th width="40%">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once '../classes/organizationalChart.class.php';

                $organizationalChartObj = new OrganizationalChart();
                $organizationalChart = $organizationalChartObj->fetchAll(); // Fetch all officials
                if (count($organizationalChart) > 0):
                    foreach ($organizationalChart as $organizationalCharts):
                ?>
                <tr>
                    <td class="image-cell">
                        <?php if (!empty($organizationalCharts['image'])): ?>
                            <img src="../images/<?= htmlspecialchars($organizationalCharts['image']) ?>" alt="" width="500px">
                        <?php else: ?>
                            <span>No image</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($organizationalCharts['description']) ?></td>
                    <td class="action-cell">
                    <a href="" class="btn btn-sm btn-outline-success me-1 edit-organizationalChart" data-id="<?= $organizationalCharts['id'] ?>">Edit</a>
                    <a href="" class="btn btn-sm btn-outline-danger me-1 delete-organizationalChart" data-id="<?= $organizationalCharts['id'] ?>">Delete</a>
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
            BOARD OF REGENTS
        </div>
        <table>
            <thead>
                <tr>
                    <th width="20%">IMAGE</th>
                    <th width="30%">NAME</th>
                    <th width="20%">TITLE</th>
                    <th width="10%">Rank</th>
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
                    <td class="name-cell"><?= htmlspecialchars($regent['honorific_short'] . ' ' . $regent['name']) ?></td>
                    <td><?= htmlspecialchars($regent['title_bor']) ?></td>
                    <td><?= htmlspecialchars($regent['rank']) ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-outline-success me-1 edit-member" data-id="<?= $regent['id'] ?>" data-type="<?= $regent['type'] ?>">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-danger me-1 delete-member" data-id="<?= $regent['id'] ?>" data-type="<?= $regent['type'] ?>">Delete</a>
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
        </div>
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="" class="table table-centered table-nowrap mb-0">
                            <thead>
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
                        'Managers' => 'Managers',
                        'HEAD/CHAIR OF THE GRADUATE SCHOOL' => 'GraduateSchoolHead',
                        'Coordinators' => 'Coordinators',
                        'Section Chiefs' => 'SectionChiefs',
                        'Other Services' => 'OtherServices'
                    ];

                    foreach ($officialClasses as $positionLabel => $className) {
                        require_once "../classes/{$className}.class.php";
                        $classObj = new $className();
                        $officials = $classObj->fetchAll();

                        if (count($officials) > 0):
                            foreach ($officials as $official):
                    ?>
                    <tr>
                        <td class="name-cell"><?= htmlspecialchars($official['honorific_short'] . ' ' . $official['name']) ?></td>
                        <td><?= htmlspecialchars($official['title'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($official['page_link'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($positionLabel) ?></td>
                        <td class="action-cell">
                            <a href="#" class="btn btn-sm btn-outline-success me-1 edit-<?= strtolower($className); ?>" data-id="<?= $official['id']; ?>">Edit</a>
                            <a href="#" class="btn btn-sm btn-outline-danger me-1 delete-<?= strtolower($className); ?>" data-id="<?= $official['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php 
                            endforeach;
                        endif;
                    }
                    ?>
                </tbody>
                        </table>
                    </div>
                </div>

                <div class="section">
        <div class="section-header">
            PRESIDENT'S SUBOFFICES
        </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Office</th>
                                    <th>Office Head</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../classes/presSubOffices.class.php';

                                $presSubOfficesObj = new PresSubOffices();
                                $presSubOffice = $presSubOfficesObj->fetchAll(); // Fetch all officials
                            
                                foreach ($presSubOffice as $presSubOffices) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($presSubOffices['honorific_short'] . ' ' . $presSubOffices['office']) ?></td>
                                        <td><?= htmlspecialchars($presSubOffices['office_head'] ?? 'N/A') ?></td>
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
                                    <th>Office</th>
                                    <th>Office Head</th>
                                    <th>Office OF VP in</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../classes/VicepresSubOffices.class.php';

                                $VicepresSubOfficesObj = new VicepresSubOffices();
                                $VicepresSubOffice = $VicepresSubOfficesObj->fetchAll(); // Fetch all officials
                            
                                foreach ($VicepresSubOffice as $VicepresSubOffices) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($VicepresSubOffices['honorific_short'] . ' ' . $VicepresSubOffices['office']) ?></td>
                                        <td><?= htmlspecialchars($VicepresSubOffices['office_head'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($VicepresSubOffices['office_of_vp_in'] ?? 'N/A') ?></td>
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
                                require_once '../classes/AcademicDean.class.php';

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
                                require_once '../classes/AssociateDean.class.php';

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
                                require_once '../classes/ExternalStudiesUnit.class.php';

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

    <div class="section">
        <div class="section-header">
            PAGE DESCRIPTION
        </div>
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Page</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../classes/pageDescription.class.php';

                                $pageDescriptionObj = new PageDescription();
                                $pageDescription = $pageDescriptionObj->fetchAll(); // Fetch all officials
                            
                                foreach ($pageDescription as $pageDescriptions) {
                                    
                                ?>
                                    <tr>
                                        <td><?= htmlspecialchars($pageDescriptions['page']) ?></td>
                                        <td><?= htmlspecialchars($pageDescriptions['description'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-pageDescription" data-id="<?= $pageDescriptions['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-pageDescription" data-id="<?= $pageDescriptions['id'] ?>">Delete</a>
                                            
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
