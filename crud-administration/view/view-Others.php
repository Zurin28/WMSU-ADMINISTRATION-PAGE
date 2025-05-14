<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>


    <div class="section">
    <div class="section-header">
        HONORIFICS
    </div>
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
        <table id="table-honorifics" class="table table-centered table-nowrap mb-0">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Short Form</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../classes/honorifics.class.php';

                $honorificsObj = new Honorifics();
                $honorifics = $honorificsObj->fetchAll(); // Fetch all honorifics
                
                foreach ($honorifics as $honorific) {
                ?>
                    <tr>
                        <td><?= htmlspecialchars($honorific['name']) ?></td>
                        <td><?= htmlspecialchars($honorific['short'] ?? 'N/A') ?></td>
                        <td class="text-nowrap">
                            <a href="" class="btn btn-sm btn-outline-success me-1 edit-honorifics" data-id="<?= $honorific['id'] ?>">Edit</a>
                            <a href="" class="btn btn-sm btn-outline-danger me-1 delete-honorifics" data-id="<?= $honorific['id'] ?>">Delete</a>
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
                                require_once '../../classes/pageDescription.class.php';

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
        
        