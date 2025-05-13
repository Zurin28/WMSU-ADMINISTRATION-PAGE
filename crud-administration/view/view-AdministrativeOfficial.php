<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>

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
                        require_once "../../classes/{$className}.class.php";
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

</div>
        
        