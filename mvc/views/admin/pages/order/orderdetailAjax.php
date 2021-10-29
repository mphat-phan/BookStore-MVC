<thead>
    <tr>
        <th>OrderID</th>
        <th>BookID</th>
        <th>Price</th>
        <th>Quantity</th>

        <th>#</th>

    </tr>
</thead>
<tbody>
    <?php
                                    //print_r($data['Author']);
                                    foreach($data['OrderDetail'] as $row){
        
                                    ?>
    <tr>
        <td><?=$row['orderID']?></td>
        <td><?=$row['bookID']?></td>
        <td><?=$row['price']?></td>
        <td><?=$row['quantity']?></td>
        <td>
            <a onclick='openModalOrderDetail(<?php echo json_encode($row)?>)' href="#" class="btn btn-danger btn-sm"
                role="button" data-toggle="modal" data-target="#DeleteModal">Delete</a>
        </td>

    </tr>
    <?php
    }
    ?>
</tbody>
<script>
    
</script>