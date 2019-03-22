<?php
    // $serverName = "dicodingacademy.database.windows.net"; // update me
    // $connectionOptions = array(
    //     "Database" => "your_database", // update me
    //     "Uid" => "your_username", // update me
    //     "PWD" => "your_password" // update me
    // );
    // //Establishes the connection
    // $conn = sqlsrv_connect($serverName, $connectionOptions);
    // $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
    //      FROM [SalesLT].[ProductCategory] pc
    //      JOIN [SalesLT].[Product] p
    //      ON pc.productcategoryid = p.productcategoryid";
    // $getResults= sqlsrv_query($conn, $tsql);
    // echo ("Reading data from table" . PHP_EOL);
    // if ($getResults == FALSE)
    //     echo (sqlsrv_errors());
    // while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    //  echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    // }
    // sqlsrv_free_stmt($getResults);
    
    // PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:dicodingacademy.database.windows.net,1433; Database = sampleDatabase", "dicoding", "UINdev2019");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        print("connection succes");
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }
    
    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "dicoding@dicodingacademy", "pwd" => "UINdev2019", "Database" => "sampleDatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:dicodingacademy.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
