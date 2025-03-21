<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Board of Regents</h4>
            </div>
        </div>
    </div>
    <div class="modal-container"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-bor.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>
                    

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/bor.class.php';

                                $bor = new Board();
                                $boardMembers = $bor->fetchAll(); // Fetch all board members
                                
                                foreach ($boardMembers as $member) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($member['name']) ?></td>
                                        <td><?= htmlspecialchars($member['title'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($member['image'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-member" data-id="<?= $member['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-member" data-id="<?= $member['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Administrative Officials</h4>
                <h4 class="page-title">President</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-pres.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Page Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/pres.class.php';

                                $pres = new Pres();
                                $PresOfficials = $pres->fetchAll(); // Fetch all officials
                            
                                foreach ($PresOfficials as $Presofficial) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($Presofficial['name']) ?></td>
                                        <td><?= htmlspecialchars($Presofficial['title'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($Presofficial['page_link'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-Presofficial" data-id="<?= $Presofficial['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-Presofficial" data-id="<?= $Presofficial['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Vice President</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-VicePres.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Page Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/Vicepres.class.php';

                                $vicePres = new VicePres();
                                $VicePresOfficials = $vicePres->fetchAll(); // Fetch all officials
                            
                                foreach ($VicePresOfficials as $VicePresofficial) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($VicePresofficial['name']) ?></td>
                                        <td><?= htmlspecialchars($VicePresofficial['title'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($VicePresofficial['page_link'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-VicePresofficial" data-id="<?= $VicePresofficial['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-VicePresofficial" data-id="<?= $VicePresofficial['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Office of the President Staff</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-opstaff.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Page Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/opstaff.class.php';
                            
                                $opstaffobj = new OpStaff();
                                $opstaff = $opstaffobj->fetchAll(); // Fetch all officials
                            
                                foreach ($opstaff as $opstaffs) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($opstaffs['name']) ?></td>
                                        <td><?= htmlspecialchars($opstaffs['title'] ?? 'N/A') ?></td>
                                        <td><?= htmlspecialchars($opstaffs['page_link'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-opstaffs" data-id="<?= $opstaffs['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-opstaffs" data-id="<?= $opstaffs['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">University and Board Secretary</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-uniBoardSecretary.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/UniversityBoardSecretary.class.php';

                                $uniBoardSecretaryObj = new UniversityBoardSecretary();
                                $uniBoardSecretary = $uniBoardSecretaryObj->fetchAll(); // Fetch all officials
                            
                                foreach ($uniBoardSecretary as $uniBoardSecretarys) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($uniBoardSecretarys['name']) ?></td>
                                        <td><?= htmlspecialchars($uniBoardSecretarys['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-uniBoardSecretarys" data-id="<?= $uniBoardSecretarys['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-uniBoardSecretarys" data-id="<?= $uniBoardSecretarys['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Directors</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-directors.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/Directors.class.php';

                                $directorsObj = new Directors();
                                $director = $directorsObj->fetchAll(); // Fetch all officials
                            
                                foreach ($director as $directors) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($directors['name']) ?></td>
                                        <td><?= htmlspecialchars($directors['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-directors" data-id="<?= $directors['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-directors" data-id="<?= $directors['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Campus Administrators</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-campus-administrator.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/CampusAdministrators.class.php';

                                $campusAdminObj = new CampusAdministrators();
                                $campusAdmin = $campusAdminObj->fetchAll(); // Fetch all officials
                            
                                foreach ($campusAdmin as $campusAdmins) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($campusAdmins['name']) ?></td>
                                        <td><?= htmlspecialchars($campusAdmins['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-campusAdmins" data-id="<?= $campusAdmins['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-campusAdmins" data-id="<?= $campusAdmins['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Integrated Laboratory School Principals & Asst. Principals</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-ILSPrincipals.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/ILSPrincipals.class.php';

                                $ILSPrincipalsObj = new ILSPrincipals();
                                $ILSPrincipal = $ILSPrincipalsObj->fetchAll(); // Fetch all officials
                            
                                foreach ($ILSPrincipal as $ILSPrincipals) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($ILSPrincipals['name']) ?></td>
                                        <td><?= htmlspecialchars($ILSPrincipals['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-ILSPrincipals" data-id="<?= $ILSPrincipals['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-ILSPrincipals" data-id="<?= $ILSPrincipals['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-AssistantDirectors.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/AssistantDirectors.class.php';

                                $assistantDirectorObj = new AssistantDirectors();
                                $assistantDirector = $assistantDirectorObj->fetchAll(); // Fetch all officials
                            
                                foreach ($assistantDirector as $assistantDirectors) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($assistantDirectors['name']) ?></td>
                                        <td><?= htmlspecialchars($assistantDirectors['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-assistantDirectors" data-id="<?= $assistantDirectors['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-assistantDirectors" data-id="<?= $assistantDirectors['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Technical Assistant | Technical Associates</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-TechnicalAssistants.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/TechnicalAssistants.class.php';

                                $techAssistObj = new TechnicalAssistants();
                                $techAssist = $techAssistObj->fetchAll(); // Fetch all officials
                            
                                foreach ($techAssist as $techAssists) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($techAssists['name']) ?></td>
                                        <td><?= htmlspecialchars($techAssists['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-techAssists" data-id="<?= $techAssists['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-techAssists" data-id="<?= $techAssists['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Chairpersons</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-Chairpersons.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/Chairpersons.class.php';

                                $chairpersonObj = new Chairpersons();
                                $chairperson = $chairpersonObj->fetchAll(); // Fetch all officials
                            
                                foreach ($chairperson as $chairpersons) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($chairpersons['name']) ?></td>
                                        <td><?= htmlspecialchars($chairpersons['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-chairpersons" data-id="<?= $chairpersons['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-chairpersons" data-id="<?= $chairpersons['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Managers</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-Managers.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/Managers.class.php';

                                $managerObj = new Managers();
                                $manager = $managerObj->fetchAll(); // Fetch all officials
                            
                                foreach ($manager as $managers) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($managers['name']) ?></td>
                                        <td><?= htmlspecialchars($managers['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-managers" data-id="<?= $managers['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-managers" data-id="<?= $managers['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">HEAD/CHAIR OF THE GRADUATE SCHOOL</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="./crud-administration/add-officials/add-official-GraduateScholHead.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/GraduateSchoolHead.class.php';

                                $graduateSchoolHeadObj = new GraduateSchoolHead();
                                $graduateSchoolHead = $graduateSchoolHeadObj->fetchAll(); // Fetch all officials
                            
                                foreach ($graduateSchoolHead as $graduateSchoolHeads) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($graduateSchoolHeads['name']) ?></td>
                                        <td><?= htmlspecialchars($graduateSchoolHeads['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-graduateSchoolHeads" data-id="<?= $graduateSchoolHeads['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-graduateSchoolHeads" data-id="<?= $graduateSchoolHeads['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Coordinators</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-Coordinators.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/Coordinators.class.php';

                                $coordinatorObj = new Coordinators();
                                $coordinator = $coordinatorObj->fetchAll(); // Fetch all officials
                            
                                foreach ($coordinator as $coordinators) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($coordinators['name']) ?></td>
                                        <td><?= htmlspecialchars($coordinators['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-coordinators" data-id="<?= $coordinators['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-coordinators" data-id="<?= $coordinators['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Section Chiefs</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-SectionChiefs.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/SectionChiefs.class.php';

                                $sectionChiefObj = new SectionChiefs();
                                $sectionChief = $sectionChiefObj->fetchAll(); // Fetch all officials
                            
                                foreach ($sectionChief as $sectionChiefs) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($sectionChiefs['name']) ?></td>
                                        <td><?= htmlspecialchars($sectionChiefs['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-sectionChiefs" data-id="<?= $sectionChiefs['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-sectionChiefs" data-id="<?= $sectionChiefs['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Other Services</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-OtherServices.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/OtherServices.class.php';

                                $otherServiceObj = new OtherServices();
                                $otherService = $otherServiceObj->fetchAll(); // Fetch all officials
                            
                                foreach ($otherService as $otherServices) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($otherServices['name']) ?></td>
                                        <td><?= htmlspecialchars($otherServices['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-otherServices" data-id="<?= $otherServices['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-otherServices" data-id="<?= $otherServices['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Academic Deans</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-AcademicDean.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/AcademicDean.class.php';

                                $academicDeanObj = new AcademicDean();
                                $academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($academicDean as $academicDeans) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($academicDeans['name']) ?></td>
                                        <td><?= htmlspecialchars($academicDeans['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-academicDeans" data-id="<?= $academicDeans['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-academicDeans" data-id="<?= $academicDeans['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Associate Deans</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-AssociateDean.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/AssociateDean.class.php';

                                $associateDeanObj = new AssociateDean();
                                $associateDean = $associateDeanObj->fetchAll(); // Fetch all officials
                            
                                foreach ($associateDean as $associateDeans) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($associateDeans['name']) ?></td>
                                        <td><?= htmlspecialchars($associateDeans['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-associateDeans" data-id="<?= $associateDeans['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-associateDeans" data-id="<?= $associateDeans['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">External Studies Unit</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="page-title-right d-flex align-items-center">
                            <a href="../crud-administration/add-officials/add-official-ExternalStudiesUnit.php" class="btn btn-primary brand-bg-color">Add Official</a>
                        </div>
                    </div>

                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table id="table-products" class="table table-centered table-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-start">No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                require_once '../classes/ExternalStudiesUnit.class.php';

                                $externalStudiesUnitObj = new ExternalStudiesUnit();
                                $externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials
                            
                                foreach ($externalStudiesUnit as $externalStudiesUnits) {
                                    
                                ?>
                                    <tr>
                                        <td class="text-start"><?= $i ?></td>
                                        <td><?= htmlspecialchars($externalStudiesUnits['name']) ?></td>
                                        <td><?= htmlspecialchars($externalStudiesUnits['title'] ?? 'N/A') ?></td>
                                        <td class="text-nowrap">
                                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Edit</a>
                                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-externalStudiesUnits" data-id="<?= $externalStudiesUnits['id'] ?>">Delete</a>
                                            
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
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
