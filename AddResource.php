<!DOCTYPE html>
<html>
    <head>
        <title>YPA PROTOTYPE - ADD RESOURCE manually</title>
    </head>

    <header>
        <div id="AddResourceTitleContainer">
            <p id="AddResourceTitle">Add Resource [manually]</p>
        </div>
    </header>

    <body>
        <div id="AddResourceFormContainer">
            <form id="AddResourceForm" method="POST" action="" accept-charset="utf-8">
                <input type="text" placeholder="Enter title">
                <textarea rows="6" cols="60" placeholder="Enter short resource blurb/Describe resource contents. MAX CHARACTER LIMIT: tbd"></textarea>
                <input type="text" placeholder="Select organisation">
            </form>
        </div>
    </body>


</html>

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

    #AddResourceTitleContainer > p {
        font-size: 40px;
        margin: 5px 0 5px 20px;
    }

</style>