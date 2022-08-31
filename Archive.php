<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $conn = new mysqli($dbhost, $dbuser, $dbpass);
           
    if(! $conn ) {
        die('Could not connect: ' . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>YPA PROTOTYPE - ARCHIVE</title>
    </head>

    <header>
        <div id="ArchiveTitleContainer">
            <p id="ArchiveTitle">Archive</p>
        </div>
    </header>

    <body>
        <div id="ArchiveSearchContainer">
            <form id="ArchiveSearchForm" method="POST" action="" accept-charset="utf-8">
                <input type="text" name="archivesearchvalue" class="search" placeholder="Search Archive Contents">
                <input type="submit" value="Search">
            </form>
        </div>
        <div id="ArchiveTableContainer">
            
            <table>
                <tr>
                    <th id="IconHeader">ICON</th>
                    <th id="TitleHeader">TITLE</th>
                    <th id="DateHeader">DATE ADDED</th>
                    <th id="OrgHeader">ORGANISATION</th>
                    <th id="SerialNumHeader">SERIAL NUMBER</th>
                </tr>

                <?php
                    $sql = 'SELECT * FROM ypatbltst1';
                    mysqli_select_db($conn, 'ypadb1');
                    $retval = mysqli_query( $conn, $sql);
                    
                    if(! $retval ) {
                        die('Could not get data: ' . mysqli_error($conn));
                    }
                    
                ?>

                <?php while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {?>
                <tr>
                    <td><?php echo "{$row['SearchedFor']}";?></td>
                    <td>TITLE SHORT HERE</td>
                    <td>DD/MM/YYYY HERE</td>
                    <td>ACRONYM HERE</td>
                    <td>NUMBER HERE</td>
                </tr>
                <?php } ?>
                
            </table>
        </div>
    </body>

    <footer>

    </footer>
</html>

<?php
        
        $searchedFor =  $_POST['archivesearchvalue'];
            
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO ypatbltst1  VALUES ('$searchedFor')";
            
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
    
        } else{
            echo "ERROR. "
                . mysqli_error($conn);
        }
    
    ?>
    
    <?php
        // Close connection
        mysqli_close($conn);
    ?>

<style>
    *{margin:0;padding:0;}

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        padding: 5px 0;
    }

    td {
        padding: 5px 50px 5px 5px;
    }

    #ArchiveTitleContainer > p {
        font-size: 40px;
        margin: 5px 0 5px 20px;
    }

    #ArchiveSearchContainer {
        margin: 5px 0;
        display: flex;
        justify-content: center;
    }

    #ArchiveTableContainer {
        display: flex;
        justify-content: center;
    }

</style>