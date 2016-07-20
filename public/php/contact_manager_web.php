<?php
require_once 'controller.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
            crossorigin="anonymous"
        >
        <link rel="stylesheet" type="text/css" href="../css/contact_manager.css">
        <title>Contacts manager</title>
    </head>
    <body>
        <div class="container">
            <section class="row">
                <div class="col-md-8">
                    <header class="page-header">
                        <h1 class="fancy-header">Death Row Records<span><h3>Client List<h3></span></h1>
                        <div class="image">
                        </div>
                    </header>
                </div>
                <div class="col-md-4" style="padding-top: 3.5em">
                    <form class="form-inline search" method="get">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                id="search-name"
                                name="search-name"
                                placeholder="John Doe">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search" aria-hidden="true">
                            </span>
                            Search
                        </button>
                            <form class="form-inline" method="get">
                            <a name="all" class="btn btn-default" href="?all=true">
                                View All
                            </a>
                            </form>
                    </form>
                </div>
            </section>
            <article class="row contacts">
                <section class="col-md-6">
                    <table class="table table-striped table-bordered table-hover list">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Your contacts should be here -->
                            <tr>
                                <?php if (isset($_GET['all']) || isset($_GET['search-name'])): ?>
                                <?php foreach ($contacts as $contact) { ?>
                                    <td><?= $contact['name'] ?></td>
                                    <td><?= formatNumber($contact['number']) ?></td>
                                <td>
                                    <!-- The query string for this one should contain the contact name -->
                                    <a class="btn btn-danger" name="delete" href="?name=<?= $contact['name'] ?>">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true">
                                        </span>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                                <?php } ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </section>
                <section class="col-md-6">
                    <form method="post" class="form-horizontal add">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">
                                Name
                            </label>
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label">
                                Number
                            </label>
                            <div class="col-sm-10">
                                <input
                                    type="number"
                                    class="form-control"
                                    name="number"
                                    id="number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
                                    </span>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
            </article>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>