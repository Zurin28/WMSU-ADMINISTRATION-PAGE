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
          <div class="d-flex justify-content-center align-items-center">
            <form class="d-flex me-2">
                <div class="input-group w-100">
                    <input type="text" class="form-control form-control-light" id="custom-search" placeholder="Search products...">
                    <span class="input-group-text bg-primary border-primary text-white brand-bg-color">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </form>
            <div class="d-flex align-items-center">
                <label for="category-filter" class="me-2">Category</label>
                <select id="category-filter" class="form-select">
                    <option value="">All</option>
                    <option value="President">President</option>
                    <option value="Vice President">Vice President</option>
                    <option value="Office of the President Staff">Office of the President Staff</option>
                    <option value="University and Board Secretary">University and Board Secretary</option>
                    <option value="Directors">Directors</option>
                    <option value="Campus Administrators">Campus Administrators</option>
                    <option value="Integrated Laboratory School Principals & Asst. Principals">Integrated Laboratory School Principals & Asst. Principals</option>
                    <option value="Assistant & Associate Directors | Assistant Chairpersons | Special Assistants">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</option>
                    <option value="Technical Assistants">Technical Assistants</option>
                    <option value="Chairpersons">Chairpersons</option>
                    <option value="Managers">Managers</option>
                    <option value="HEAD/CHAIR OF THE GRADUATE SCHOOL">HEAD/CHAIR OF THE GRADUATE SCHOOL</option>
                    <option value="Coordinator">Coordinator</option>
                    <option value="Section Chief">Section Chief</option>
                    <option value="Other Services">Other Services</option>
                </select>
            </div>
        </div>
          <div class="table-responsive">
          <table id="table-administration">
            <thead class="table-light">
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
            <a href="../crud-administration/add-officials/add-official-AssociateDean.php" class="insert-btn">Insert</a>
          </div>
          <div class="modal-container"></div>
          <table>
            <thead class="table-light">
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
