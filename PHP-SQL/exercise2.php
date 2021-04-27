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
        include "./header2.php";
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
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Last name
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

                                                $sql = "SELECT first_name, last_name, email, gender FROM users WHERE gender = 'female'";
                                                foreach ($conn->query($sql) as $row) {
                                                    // echo "<div class='flex-shrink-0 h-10 w-10'>";
                                                    // echo ' <img class="h-10 w-10 rounded-full" src="'. $row["avatar_url"] .'" />';
                                                    // echo "</div";
                                                    echo "<div class='text-sm font-medium text-gray-900'>" . $row["first_name"] . " </div>";
                                                    echo "<div class='text-sm text-gray-500'>" .  $row["email"] . "</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <?php
                                        require_once './db.conn..php';

                                        $sql = "SELECT first_name, last_name, email, gender FROM users WHERE gender = 'female'";
                                        foreach ($conn->query($sql) as $row) {
                                            echo "<div class='text-sm text-gray-900'>" . $row["last_name"] . " </div>";
                                            echo '<div class="text-sm text-gray-500">' . $row["gender"] . "</div>";
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