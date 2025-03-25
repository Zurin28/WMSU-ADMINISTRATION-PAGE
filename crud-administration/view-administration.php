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
                    <?php echo '<img src="../images/' . htmlspecialchars($regent['image']) . '" alt="' . htmlspecialchars($regent['name']) . '" width="100px">'; ?>
                  <?php else: ?>
                    <span>No image</span>
                  <?php endif; ?>
                </td>
                <td class="name-cell"><?php echo $regent['name']; ?></td>
                <td><?php echo $regent['title']; ?></td>
                <td class="action-cell">
                <a href="" class="btn btn-sm btn-outline-primary me-1 action-btn edit-btn edit-member" data-id="<?= $regent['id'] ?>">Edit</a>
                <a href="" class="btn btn-sm btn-outline-danger me-1 action-btn delete-btn delete-member" data-id="<?= $regent['id'] ?>">Delete</a>
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
          Administrative Officials
            <a href="../crud-administration/add-administrativeOfficials.php" class="insert-btn">Insert</a>
          </div>
          <div class="modal-container"></div>
          <table>
            <thead>
              <tr>
                <th width="30%">NAME</th>
                <th width="30%">TITLE</th>
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
                        'Coordinator' => 'Coordinators',
                        'Section Chief' => 'SectionChiefs',
                        'Other Services' => 'OtherServices',
                    ];

                foreach ($officialClasses as $positionLabel => $className) {
                    require_once "../classes/{$className}.class.php";
                    $classObj = new $className();
                    $officials = $classObj->fetchAll();

                    if (count($officials) > 0):
                    foreach ($officials as $official):

                require_once '../classes/bor.class.php';
              ?>
              <tr>
                    <td class="name-cell"><?php echo htmlspecialchars($official['name']); ?></td>
                    <td><?php echo htmlspecialchars($official['title'] ?? 'N/A'); ?></td>
                    <td><?php echo htmlspecialchars($official['page_link'] ?? 'N/A'); ?></td>
                    <td><?php echo htmlspecialchars($positionLabel); ?></td>
                <td class="action-cell">
                <a href="#" class="btn btn-sm btn-outline-primary me-1 edit-<?php echo strtolower($className); ?>" data-id="<?php echo $official['id']; ?>">Edit</a>
                <a href="#" class="btn btn-sm btn-outline-danger me-1 delete-<?php echo strtolower($className); ?>" data-id="<?php echo $official['id']; ?>">Delete</a>
                </td>
              </tr>
              <?php 
                endforeach;
              else:
              ?>
              <tr>
                <td colspan="4" class="empty-message">No data available</td>
              </tr>
              <?php endif; }?>
            </tbody>
          </table>
        </div>


        <div class="section">
          <div class="section-header">
            ACADEMIC DEAN
            <a href="../crud-administration/add-officials/add-official-AcademicDean.php" class="insert-btn">Insert</a>
          </div>
          <div class="modal-container"></div>
          <table>
            <thead>
              <tr>
                <th width="30%">NAME</th>
                <th width="30%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 

                require_once '../classes/AcademicDean.class.php';

                $academicDeanObj = new AcademicDean();
                $academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
                if (count($academicDean) > 0):
                
                foreach ($academicDean as $academicDeans):
              ?>
              <tr>
                <td class="name-cell"><?php echo $academicDeans['name']; ?></td>
                <td><?php echo $academicDeans['title']; ?></td>
                <td class="action-cell">
                <a href="" class="btn btn-sm btn-outline-primary me-1 action-btn edit-btn edit-academicDeans" data-id="<?= $academicDeans['id'] ?>">Edit</a>
                <a href="" class="btn btn-sm btn-outline-danger me-1 action-btn delete-btn delete-academicDeans" data-id="<?= $academicDeans['id'] ?>">Delete</a>
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
            ASSOCIATE DEAN
            <a href="../crud-administration/add-officials/add-official-AssociateDean.php" class="insert-btn">Insert</a>
          </div>
          <div class="modal-container"></div>
          <table>
            <thead>
              <tr>
                <th width="30%">NAME</th>
                <th width="30%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 

                require_once '../classes/AssociateDean.class.php';

                $associateDeanObj = new AssociateDean();
                $associateDean = $associateDeanObj->fetchAll(); // Fetch all officials
                if (count($academicDean) > 0):
                
                foreach ($associateDean as $associateDeans):
              ?>
              <tr>
                <td class="name-cell"><?php echo $associateDeans['name']; ?></td>
                <td><?php echo $associateDeans['title']; ?></td>
                <td class="action-cell">
                <a href="" class="btn btn-sm btn-outline-primary me-1 action-btn edit-btn edit-associateDeans" data-id="<?= $associateDeans['id'] ?>">Edit</a>
                <a href="" class="btn btn-sm btn-outline-danger me-1 action-btn delete-btn delete-associateDeans" data-id="<?= $associateDeans['id'] ?>">Delete</a>
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
          External Studies Units
            <a href="../crud-administration/add-officials/add-official-ExternalStudiesUnit.php" class="insert-btn">Insert</a>
          </div>
          <div class="modal-container"></div>
          <table>
            <thead>
              <tr>
                <th width="30%">NAME</th>
                <th width="30%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 

                require_once '../classes/ExternalStudiesUnit.class.php';

                $externalStudiesUnitObj = new ExternalStudiesUnit();
                $externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials
                if (count($externalStudiesUnit) > 0):
                
                foreach ($externalStudiesUnit as $externalStudiesUnits):
              ?>
              <tr>
                <td class="name-cell"><?php echo $externalStudiesUnits['name']; ?></td>
                <td><?php echo $externalStudiesUnits['title']; ?></td>
                <td class="action-cell">
                <a href="" class="btn btn-sm btn-outline-primary me-1 action-btn edit-btn edit-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Edit</a>
                <a href="" class="btn btn-sm btn-outline-danger me-1 action-btn delete-btn delete-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Delete</a>
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

</div>
