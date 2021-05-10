<!DOCTYPE html>
<html>

<head>
    <title>Exercises SQL</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mx-auto">
        <br /><br />
        <?php
        include "./header8.php";
        ?>
        <br />
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Male
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Female
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <?php
                                                require_once './db.conn..php';

                                                $sql = "SELECT last_name, first_name, gender, 
                                                round(AVG(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y')) /365.25))) AS ord FROM users WHERE gender = 'male' ORDER BY ord ASC";

                                                foreach ($conn->query($sql) as $row) {
                                                    echo "<div class='text-sm font-medium text-gray-900'>" . $row["ord"] . " </div>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php
                                        require_once './db.conn..php';

                                        $sql = "SELECT last_name, first_name, gender, 
                                        round(AVG(ROUND(DATEDIFF(NOW(), STR_TO_DATE(birth_date, '%d/%m/%Y')) /365.25))) AS ord FROM users WHERE gender = 'female' GROUP BY gender ORDER BY ord ASC ";
                                        foreach ($conn->query($sql) as $row) {
                                            //echo "<div class='text-sm text-gray-500'>" .  $row["first_name"] . "</div>";
                                            echo "<div class='text-sm font-medium text-gray-900'>" . $row["ord"] . " </div>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>