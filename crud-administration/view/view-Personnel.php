<div class="container-fluid">

    <a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
    <div class="modal-container"></div>

    <!-- PRESIDENT'S SUBOFFICE PERSONNEL TABLE -->
    <div class="section">
        <div class="section-header">
            PRESIDENT'S PERSONNEL
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <table id="table-president-personnel" class="table table-centered table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Office</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../../classes/personnel.class.php';

                    $personnelObj = new Personnel();
                    $personnelPresident = $personnelObj->fetchPersonnelPresident(); // Fetch personnel for president
                    ?>
                    <?php foreach ($personnelPresident as $person): ?>
                        <tr>
                            <td class="name-cell"><?= htmlspecialchars($person['honorific_short'] . ' ' . $person['PersonnelName']) ?></td>
                            <td><?= htmlspecialchars($person['office'] ?? 'N/A') ?></td>
                            <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-personnelPresident" data-id="<?= $person['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-personnelPresident" data-id="<?= $person['id'] ?>">Delete</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- VICE PRESIDENT'S SUBOFFICE PERSONNEL TABLE -->
    <div class="section mt-4">
        <div class="section-header">
            VICE PRESIDENT'S PERSONNEL
        </div>
        <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
            <table id="table-vp-personnel" class="table table-centered table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Office</th>
                        <th>Office Of VP In</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // No need to require personnel.class.php again
                    $personnelVicePresident = $personnelObj->fetchVicePresidentPersonnel(); // Fetch personnel for VP
                    ?>
                    <?php foreach ($personnelVicePresident as $person): ?>
                        <tr>
                            <td class="name-cell"><?= htmlspecialchars($person['honorific_short'] . ' ' . $person['PersonnelName']) ?></td>
                            <td><?= htmlspecialchars($person['office'] ?? 'N/A') ?></td>
                            <td><?= htmlspecialchars($person['office_of_vp_in'] ?? 'N/A') ?></td>
                            <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-personnelVicePresident" data-id="<?= $person['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-personnelVicePresident" data-id="<?= $person['id'] ?>">Delete</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
