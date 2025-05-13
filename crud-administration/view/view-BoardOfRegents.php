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
                <th width="12%">IMAGE</th>
                <th width="18%">NAME</th>
                <th width="18%">TITLE</th>
                <th width="12%">REP. IMAGE</th>
                <th width="18%">REP. NAME</th>
                <th width="7%">RANK</th>
                <th width="15%">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            if (file_exists('../classes/bor.class.php')) {
                require_once '../classes/bor.class.php';
            } elseif (file_exists('../../classes/bor.class.php')) {
                require_once '../../classes/bor.class.php';
            } else {
                die('bor.class.php not found.');
            }
            $bor = new Board();
            $boardMembers = $bor->fetchAll();

            if (count($boardMembers) > 0):
                foreach ($boardMembers as $regent):
            ?>
            <tr>
                <!-- IMAGE -->
                <td>
                    <?php if (!empty($regent['image'])): ?>
                        <img src="../images/<?= htmlspecialchars($regent['image']) ?>" alt="<?= htmlspecialchars($regent['name']) ?>" width="100px">
                    <?php else: ?>
                        <span>No image</span>
                    <?php endif; ?>
                </td>

                <!-- NAME -->
                <td>
                    <?= htmlspecialchars($regent['honorific_short'] . ' ' . $regent['name']) ?>
                </td>

                <!-- TITLE -->
                <td><?= htmlspecialchars($regent['title_bor']) ?></td>

                <!-- REPRESENTED BY IMAGE -->
                <td>
                    <?php if (!empty($regent['representedby_image'])): ?>
                        <img src="../images/<?= htmlspecialchars($regent['representedby_image']) ?>" alt="<?= htmlspecialchars($regent['representedby_name']) ?>" width="80px">
                    <?php else: ?>
                        <span>—</span>
                    <?php endif; ?>
                </td>

                <!-- REPRESENTED BY NAME -->
                <td>
                    <?= htmlspecialchars(($regent['representedby_honorific_short'] ?? '') . ' ' . ($regent['representedby_name'] ?? '')) ?>
                </td>

                <!-- RANK -->
                <td><?= htmlspecialchars($regent['rank']) ?></td>

                <!-- ACTIONS -->
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
                <td colspan="7" class="empty-message">No data available</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>



</div>
        
        