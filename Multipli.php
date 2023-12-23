<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <div class="main">
        
        <div>
            <?php
            $my_val = isset($_POST['my_val']) ? $_POST['my_val'] : ''; // แก้ไขตรวจสอบค่าจากฟอร์ม
            ?>

            <h1>ตารางสูตรคูณ </h1>
            <br>
            <form method="post">
                <label for="my_val">โปรดเลือกแม่ : </label>
                <select name="my_val" id="my_val">
                    <?php
                    // เพิ่มตัวเลือกแม่
                    for ($i = 1; $i <= 1000; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
                <button type="submit"> ตกลง</button>
            </form>
            <br>
            <div class="table_scroll">
                <table class="table_1">
                    <tbody>
                        <?php for  ($j = 1; $j <= 24; $j++) { ?>
                            <tr>
                                <td><?php echo $my_val ?></td>
                                <td> x </td>
                                <td><?php echo $j ?></td>
                                <td> = </td>
                                <td><?php echo $my_val * $j ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


        <style>
            *{
                
            }

            body {
                padding: 5%;
                background-image: url(picture.jpg);
                background-size: cover;
            }

            .main {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 5%;
                color: #fff;

                
                background: transparent;
                border: 2px solid #ccc;
                border-radius: 20px;
                backdrop-filter: blur(10px);

                
            }

            .table_1 {
                width: 40%; /* ปรับความกว้างตามต้องการ */
                
            }
            

            .table_scroll {
                height: 40vh; /* กำหนดความสูงของ .main */
                overflow-y: auto; /* เพิ่มการเลื่อนในแนวตั้ง */
               
            }


        </style>


    </div>
</body>
</html>
