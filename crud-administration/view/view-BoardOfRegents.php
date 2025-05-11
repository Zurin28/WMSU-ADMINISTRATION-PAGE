<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
<div class="modal-container"></div>


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
                require_once '../../classes/bor.class.php';

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

</div>
        
        