<div class="container-fluid">
<a href="../crud-administration/add-options/select-table.php" class="insert-btn">ADD</a>
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



</div>
