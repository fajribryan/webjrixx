<?php
            $start = 0;
             foreach ($datalist as $value)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $value->id;?></td>
            <td><?php echo $value->nama; ?></td>
            </tr>
                <?php
            }
            ?>